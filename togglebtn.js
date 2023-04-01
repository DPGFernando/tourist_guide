const togglebtn = document.getElementsByClassName('toggle-btn')[0];
const navigationbar = document.getElementsByClassName('navigation-bar')[0];

togglebtn.addEventListener('click', () =>{
    navigationbar.classList.toggle('active');
})