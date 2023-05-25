function previewImage() {
    const preview = document.getElementById('preview');
    const file = document.getElementById('image').files[0];
    const reader = new FileReader();
  
    reader.addEventListener("load", function () {
      
      preview.src = reader.result;
    }, false);
  
    if (file) {
      reader.readAsDataURL(file);
    }
  }

function showAlert(){
    alert("Profil Berhasil diubah")
}

var input1 = document.getElementById("nama");
var input2 = document.getElementById("email");
var input3 = document.getElementById("nomor");
var tombol = document.getElementById("button-1");

input1.addEventListener("input", cekInput);
input2.addEventListener("input", cekInput);
input3.addEventListener("input", cekInput);

function cekInput() {
    if (input1.value !== "" && input2.value !== "" && input3.value !== "") {
        tombol.disabled = false;
    } else {
        tombol.disabled = true;
    }
}