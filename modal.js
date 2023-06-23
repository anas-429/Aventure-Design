var dialog = document.querySelector('.dialog');

if(document.querySelector('.open-modal')) {

    var openModal = document.querySelector('.open-modal');
    openModal.addEventListener("click", function() {
        dialog.style.display = "flex";
        dialog.style.justifyContent = "center"; 
        dialog.style.alignItems = "center";
    })

}

if(document.querySelector('.exit-modal')) {

var closeModal = document.querySelector('.exit-modal');
closeModal.addEventListener("click", function() {
    dialog.style.display = "none";
})

}