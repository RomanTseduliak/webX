let front = {

    init: function () {
        this.events();
    },


    events: function () {

        $(document).scroll(function(){
            if($(this).scrollTop() > 0)
            {
                $('.header').addClass('fix-header');
            } else {
                $('.header').removeClass('fix-header');
            }
        });

        $('#main-carousel').flickity({
            prevNextButtons: false,
            pageDots: false,
            contain: true
        });

      $(".scroll-up").on('click', function () {
        $('html, body').animate({
          scrollTop: $('.main').offset().top - 30
        }, 1000);
      });
      $(".main-arrow").on('click', function () {
        $('html, body').animate({
          scrollTop: $('.how-works').offset().top - 30
        }, 1000);
      });

        $(".hamb").on('click', function () {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
                $('.nav').css('right', '-15px');
            } else {
                $(this).removeClass('active');
                $('.nav').css('right', '-120%');
            }
        });

    }

};

$(function () {
    front.init();
});

