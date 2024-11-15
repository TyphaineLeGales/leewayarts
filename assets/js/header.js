
const menuToggle = () => {
    const navContainer = document.querySelector('.nav_container');
    const overlay = document.getElementById('menu_overlay')
    if(navContainer.classList.contains('open')) {
        navContainer.classList.remove('open') 
        overlay.style.display =' none'

    }
    else {
        navContainer.classList.add('open') 
        overlay.style.display = 'block'
    }
}
document.addEventListener('click', (e) => {
    if(e.target.id === "menu_overlay") {
        menuToggle()
    }
})