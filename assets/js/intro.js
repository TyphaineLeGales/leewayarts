
const fadeOutIntro = (video, intro) => {
    video.classList.add('opacity_out');
    intro.classList.add('translate_out');
    intro.classList.add('opacity_out');
    setTimeout(() => stopVideo(video), 3000)
}

const stopVideo = (video) => {
    video.pause();
    video.currentTime = 0;

}

window.addEventListener('load', (e) => {
    const intro = document.getElementById('introAnim');
    const video = intro.querySelector('video');
    if (sessionStorage.getItem('introPlayed')) {
        intro.style.display = 'none';
        video.pause();
        return;
    }
    video.classList.add('intro_in')
    setTimeout(() => fadeOutIntro(video, intro), 3500);
    sessionStorage.setItem('introPlayed', 'true');
})