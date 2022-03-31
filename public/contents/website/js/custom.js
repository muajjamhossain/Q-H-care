$(function(){
        /*--------------------------
	 Global Variable
	---------------------------- */
    var patsala = $(window);
    var page = $('html, body');

          /*--------------------------
    scroll to top active
    ---------------------------- */
    $(".scrolltop").on('click', function(){
        $("html,body").animate({
            scrollTop:0
        }, 1000)
    });

    /*--------------------------
     Menu Scroll Fix Function
    ---------------------------- */
    patsala.on('scroll',function(){
        if (patsala.scrollTop() > 100) {
             $('.header_part').addClass('animated slideInDown fix')
          } else {
              $('.header_part').removeClass('animated slideInDown fix ')
          }
    })
    
    patsala.on('scroll',function(){
        if (patsala.scrollTop() > 100) {
             $('.menu_part').addClass('none_menu')
          } else {
              $('.menu_part').removeClass('none_menu')
          }
    });
    
    
       $('.our_news_slide').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        smartSpeed:1000,
        autoplay:true,
        mouseDrag:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
             992:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    
     $('.our_product_top').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        navText: ['<i class="fas fa-angle-left arrow_lf1"></i>','<i class="fas fa-angle-right arrow_rt1"></i>'],
        dots:false,
        smartSpeed:1000,
        autoplay:true,
        mouseDrag:true,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
             992:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    
    
     $('.counter_ad').counterUp({
        delay: 10,
        time: 8000
    });
    
     $('.venobox').venobox(); 
    
    $('#ce-toggle').click(function(event) {
       $('.plan-toggle-wrap').toggleClass('active');
    });

    $('#ce-toggle').change(function(){
          if ($(this).is(':checked')) {
            $('.tab-content #yearly').hide();
            $('.tab-content #monthly').show();
          }
          else{
            $('.tab-content #yearly').show();
            $('.tab-content #monthly').hide();
          }

        });
   
    
});