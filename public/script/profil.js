const showPopupButton = document.getElementById("showPopup");
const popup = document.getElementById("popup");
const closePopupButton = document.getElementById("closePopup");

showPopupButton.addEventListener("click", function() {
    popup.style.display = "block";
});

closePopupButton.addEventListener("click", function() {
    popup.style.display = "none";
});
