
window.addEventListener('scroll', function() {
    // Get the total document height and the current scroll position
    var documentHeight = document.documentElement.scrollHeight - window.innerHeight;
    var scrollPosition = window.scrollY;
    
    // Calculate the scroll percentage (between 0 and 100)
    var scrollPercentage = (scrollPosition / documentHeight) * 100;
    
    // Update the progress bar's translateX value based on the scroll percentage
    const progressBar = document.querySelector('#progressContainer div');
    progressBar.style.transform = 'translateY(-2.5px) translateX(' + (scrollPercentage - 100) + '%)';
});