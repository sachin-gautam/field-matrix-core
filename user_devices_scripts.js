const popup = document.getElementById("popup");
const popupForm = document.getElementById("popupForm");

function togglePopup(){
    popup.classList.toggle("show");
}

popup.addEventListener("click", (e)=>{
    if(e.target == popup){
        popup.classList.toggle("show");
    }
})