
const menuToggle = () => {
    const navContainer = document.querySelector('.nav-container');
    if(navContainer.classList.contains('open')) navContainer.classList.remove('open') 
    else {
        navContainer.classList.add('open') 
    }
}