$(document).ready(function () {
    
    //SLICK SLIDER
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    //ХЗ ЧТО ЭТО
    $('#rec47158496').find('.js-form-proccess').on('tildaform:aftererror', function (e) {
        e.preventDefault();
        t698_fixcontentheight('47158496');
    });
    $('.t698').bind('displayChanged', function () {
        t698_fixcontentheight('47158496');
    });
    //ХЗ ЧТО ЭТО
    t142_checkSize('47154552');

    //ХЗ ЧТО ЭТо
    $("[href='#rec47158496']").click(function () {
        yaCounter50540983.reachGoal('ClickOnForm');
    });

    setTimeout(function () {
        t552_init('47153601', '0.75');
    }, 500);

    $('.t552').bind('displayChanged', function () {
        t552_init('47153601', '0.75');
    });

    t456_createMobileMenu('49492190');

    t456_setBg('49492190');

    t456_highlight();
    t456_checkAnchorLinks('49492190');

    /* нужно заменить на код блока выполняющего роль меню */
    var blockMenuID = "#rec49492190";
    $(blockMenuID).addClass("floating");
    $(window).scroll(function () {
        var top = $(document).scrollTop();
        if (top >= 10) {
            $(blockMenuID).addClass("fixed");
        } else {
            $(blockMenuID).removeClass("fixed");
        }
    });


    // Работа меню на мобилке
    var menu = $('.menu');
    var showDrop = menu.children('li').find('ul');
    var parent = showDrop.parent();
    
    var windowWSize = $(window).width();
    if(windowWSize < 800){ 
        $(this).click(function(e){
            $(e.target).next().toggleClass('showDrop');
        })

    }else{
        parent.hover(function(){
            $(this).children('ul').addClass('showDrop');
        }, function(){
            $(this).children('ul').removeClass('showDrop');
        });
    }
        
    
    if ($(window).width() <= '800'){
        $(".click-p, .click-k").click(function() {
            $("#nav49492190").hide();
            $(".t456__mobile").removeClass("t456_opened");
        });
    }

    $(window).on('load', function () {
        var $preloader = $('.mask-logo'),
            $svg_anm = $preloader.find('.svg_anm');
        $svg_anm.fadeOut();
        $preloader.delay(200).fadeOut('fast');
    });

    
});
   