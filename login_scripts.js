const registerBtn = document.getElementById('register');
const Container  = document.getElementById('container');
const loginBtn  = document.getElementById('login');

registerBtn.addEventListener('click', ()=>{
    Container.classList.add("active");
});

loginBtn.addEventListener('click', ()=>{
    Container.classList.remove("active");
});