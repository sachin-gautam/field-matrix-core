const registerBtn = document.getElementById('register');
const Container  = document.getElementById('container');
const loginBtn  = document.getElementById('login');

// registerBtn.addEventListener('click', ()=>{
//      window.location.href = login.php;
//  });

loginBtn.addEventListener('click', ()=>{
    Container.classList.remove("active");
});