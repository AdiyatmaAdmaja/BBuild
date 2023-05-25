<?php
use App\Http\Controllers\userController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//PUBLIK
Route::get('/', [homeController::class,'index']);

Route::get('/produk/{produk:slug}', [produkController::class,'show']);
Route::get('/kategori/{kategori:slug}', [produkController::class,'index_kategori']);
Route::get('/ruangan/{ruangan:slug}', [produkController::class,'index_ruangan']);
Route::get('/jenis/{jenis:slug}', [produkController::class,'index_jenis']);



//LOGIN/REGISTER
Route::get('/login', [loginController::class,'index_login'])->name('login');
Route::post('/login', [loginController::class,'authenticate']);
Route::post('/logout', [loginController::class,'index_logout']);

Route::get('/register', [registerController::class,'index_register']);
Route::post('/register', [registerController::class,'store']);



//USER ONLY
Route::get('/profile', [userController::class,'index_profile'])->middleware('auth');

Route::get('/cart', function () {
    return view('cart', [
        "title" => "Keranjang",
    ]);
})->middleware('auth');

Route::get('/pengiriman/pembayaran', function () {
    return view('pembayaran', [
        "title" => "Pembayaran",
    ]);
})->middleware('auth');

Route::get('/cart/pengiriman', function () {
    return view('pengiriman', [
        "title" => "Pengiriman",
    ]);
})->middleware('auth');

Route::get('/pemesanan', function () {
    return view('spemesanan', [
        "title" => "Pesanan",
    ]);
})->middleware('auth');



//ADMIN
Route::get('/admin', [adminController::class,'index_admin'])->middleware('auth');

Route::get('/admin/Produk', [adminController::class,'admin_produk']);
Route::post('/admin/Produk', [adminController::class,'store_produk']);
Route::delete('/admin/Produk/{id}', [adminController::class,'delete_produk']);
Route::get('/{produks:slug}/edit', [adminController::class,'edit_produk']);
Route::put('/admin/Produk/{produks:slug}', [adminController::class,'update_produk']);

Route::get('/admin/User', [adminController::class,'admin_user']);

Route::get('/admin/Tipe', [adminController::class,'admin_tipe']);
Route::delete('/admin/Tipe/{slug}', [adminController::class,'delete_tipe']);

Route::get('/admin/kategori', [adminController::class,'create_kategori']);
Route::post('/admin/kategori', [adminController::class,'store_kategori']);

Route::get('/admin/jenis', [adminController::class,'create_jenis']);
Route::post('/admin/jenis', [adminController::class,'store_jenis']);

Route::get('/admin/ruangan', [adminController::class,'create_ruangan']);
Route::post('/admin/ruangan', [adminController::class,'store_ruangan']);
