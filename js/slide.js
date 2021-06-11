$(function(){
    let firstSlide = 0;
    let maxSlide = $('.img-banner').length - 1;
    let img = $('.img-banner');
    let delay = 3;

    initSlider();
	changeSlide();

    function initSlider() {
        img.hide();
        img.eq(0).show();
    }

    function changeSlide(){
        setInterval(function(){
            img.eq(firstSlide).fadeOut(2000);
            firstSlide++;
            if(firstSlide > maxSlide){
                firstSlide = 0;
            }
            img.eq(firstSlide).fadeIn(2000)
        },delay * 1000);
    }
    
})