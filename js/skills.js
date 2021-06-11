$(function(){
    let current = -1;
    let box = $('.service ul');
    let max = $('.service li').length - 1;

    let current2 = -1;
    let box1 = $('.singledepoimento');
    let maxbox1 = $('.singledepoimento').length -1;

    let timer;
    let delay = 1;

    executeAnimation();


    function executeAnimation(){
        box.hide();
        box1.hide();
        timer = setInterval(initAnimation,delay*1000);
        timer = setInterval(initAnimation2,delay*1000);
    }

    function initAnimation(){
        current++;
        if(current > max){
            clearInterval(timer);
            return false;
        }
        box.eq(current).fadeIn();
    }

    

    function initAnimation2(){
        current2++;
        if(current2 > maxbox1){
            clearInterval(timer);
            return false;
        }
        box1.eq(current2).fadeIn();
    }
})