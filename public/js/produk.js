function sum() {
    var priceButton = document.getElementById('number').value;
    var result = priceButton*2000000;

    if (result > 0) {
        document.getElementById('price').innerHTML = "Subtotal IDR "+result;
      }else{
        document.getElementById('price').innerHTML = "Subtotal IDR 0";
      }
}

function showAlert() {
    alert("Barang Yang Dipesan Sudah Tersimpan Di Keranjang");
  }