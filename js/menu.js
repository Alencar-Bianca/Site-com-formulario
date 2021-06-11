$(function(){
    $('.main-header .menu-mobile').click(function(){
        let menu = $('.menu-mobile .ul');
        if(menu.is(':hidden') == true){
            let icone = $('.logo-menu').find('i');
            icone.removeClass('fa-align-justify');
            icone.addClass('fa-times');
            menu.slideToggle();
        }else{
            let icone = $('.logo-menu').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-align-justify');
            menu.slideToggle();
        }
    }) 
});
