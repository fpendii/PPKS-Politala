var btnRegistrasi = document.getElementById('btnRegistrasi');
var formRegistrasi = document.getElementById('form-registrasi');

// Event listener untukbutton
btnRegistrasi.addEventListener('click',function(){
    // Periksa apakah form ditampilkan atau pun disembunyikan
    if(formRegistrasi.style.display === 'none' || formRegistrasi.style.display === ''){
        formRegistrasi.style.display = 'block';
    } else {
        formRegistrasi.style.display = 'none';
    }
});
