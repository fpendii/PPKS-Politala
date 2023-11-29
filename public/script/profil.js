// const showPopupButton = document.getElementById("showPopup");
// const popup = document.getElementById("popup");
// const closePopupButton = document.getElementById("closePopup");

// showPopupButton.addEventListener("click", function() {
//     popup.style.display = "block";
// });

// closePopupButton.addEventListener("click", function() {
//     popup.style.display = "none";
// });

// Menangkap element
var tugas = document.getElementById('displayMisi');
var textArea = document.getElementById('floatingTextarea2');

document.getElementById('btnTugas').addEventListener('click', function(){
    tampilkanData(displayMisi);
})

function tampilkanData(display){
    textArea.value = display.textContent;
}



// Function button menampilkan tugas, visi, misi
// document.getElementById('btnTugas').addEventListener('click', function(){
//     tampilkanData(displayTugas);
// })

// function tampilkanData(data){
//     var elemen = document.getElementById(data);
//     if(elemen.style.display === 'none'){
//         elemen.style.display = 'block';
//     } else {
//         elemen.style.display = 'none';
//     }
// }
