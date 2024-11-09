let imageIndex = 0;
let carouselImages, navBtn;
window.addEventListener("DOMContentLoaded", (event) => {
    carouselImages = document.querySelectorAll('div.project__image')
    navBtn = document.querySelectorAll('div.project__carousel_nav_btn')
})
const onCarouselClick = (count) => {
    if(imageIndex >= count -1 ) {
        imageIndex = 0
        carouselImages[count -1 ].classList.toggle('project__image_show')
        navBtn[count -1].classList.toggle('btn_active')
    } else {
        imageIndex += 1
        carouselImages[imageIndex - 1].classList.toggle('project__image_show')
        navBtn[imageIndex -1].classList.toggle('btn_active')
    }
    carouselImages[imageIndex].classList.toggle('project__image_show')
    navBtn[imageIndex].classList.toggle('btn_active')
}