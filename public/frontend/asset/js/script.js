$(document).ready(function () {
    $('#more-menu').on('click', function () {
        $('#mega-menu').slideToggle('500')
        $('#menu').slideToggle('500')

    });
    $("#more-menu").click(function(){
        $("#megaMenu").toggle();
   });

     // sidebar tap button
     $('#most_read_news_button').on('click',function(){
        $(this).addClass('active')
        $('#latest_news_button').removeClass('active')
        $('#most_read_news').show()
        $('#latest_news').hide()
    })

    $('#latest_news_button').on('click',function(){
        $(this).addClass('active')
        $('#most_read_news_button').removeClass('active')
        $('#latest_news').show()
        $('#most_read_news').hide()
    })

    $(window).scroll(function(){
        if($(this).scrollTop()>100){
            $('.scroll-top-wrapper').fadeIn();
        }else{
            $('.scroll-top-wrapper').fadeOut();
        }
    });

    $('.scroll-top-wrapper').click(function(){
        $('html,body ').animate({
            scrollTop:0
        },3000);
    });

    $(Window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll < 200){
            $(".header-sticky").removeClass("sticky");
        }else{
            $(".header-sticky").addClass("sticky");
        }
    });

});
