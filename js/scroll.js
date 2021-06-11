$(function(){
    if($('target').length > 0){
        let el = '#'+$('target').attr('target');
        let  scroll = $(el).offset().top;
         $('html,body').animate({scrollTop:scroll},1500);
    }
})