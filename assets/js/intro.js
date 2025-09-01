console.log("intro js is reaf")

const fadeOutIntro = (video, intro) => {
    console.log("goes into fadeOutIntro")
    
    video.classList.add('opacity_out');
    intro.classList.add('translate_out');
    intro.classList.add('opacity_out');
}


window.addEventListener('load', (e) => {
    const intro = document.getElementById('introAnim');
    const video = intro.querySelector('video');
    video.classList.add('intro_in')
    setTimeout(() => fadeOutIntro(video, intro), 4000);
})