navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}
document.addEventListener("DOMContentLoaded", function() {
   setTimeout(function() {
       var loaderWrapper = document.getElementById('loader-wrapper');
       var content = document.getElementById('content');
       loaderWrapper.style.display = 'none'; 
       content.style.display = 'block'; 
   }, 3000); 
});
window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

function fadeOut(){
   setInterval(loader, 2000);
}

window.onload = fadeOut;

document.querySelectorAll('input[type="number"]').forEach(numberInput => {
   numberInput.oninput = () =>{
      if(numberInput.value.length > numberInput.maxLength) numberInput.value = numberInput.value.slice(0, numberInput.maxLength);
   };
});