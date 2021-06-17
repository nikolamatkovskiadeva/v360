

(function ($) {

    var current_scroll_position = document.documentElement.scrollTop;
    var blazy;

    
      

    $(document).ready(function () {
        
        //Init the default web functionalities
       
        initAll();
        scrollToTop();
        bLazyMasterInit();
        LaxCall();

        checkInView();
        $(window).on('load unload', checkInView);
        $(document).on('scroll', checkInView);

        /*
        $(document).on('load unload scroll', function () {
            animateIgNumbers();
        }); */

    });

    
    
    /***** FUNCTIONS *****/
    function initAll() {
        $(document).on('init load scroll', function () {
            
            
        });




    }


    function bLazyInit(){
        blazy = new Blazy({
            offset: 150,
            loadInvisible: true
        });
    }

    function bLazyMasterInit(){
        bLazyInit();
        $(window).on('load unload', bLazyInit);
        setTimeout(function() { bLazyInit(); blazy.revalidate(); }, 600);
    }

    function scrollToTop(){
        $('#scrollToTop').on('click', function(e){
            e.preventDefault();
            $("html, body").animate({ scrollTop: "0" }, 1500);
        });
    }

    function checkInView() {
        var key_position = $(window).scrollTop() + $(window).height();
        $('.animate').each(function () {
            if (key_position > $(this).offset().top ) {
                $(this).addClass('loaded');
            }
        });
    }


    /* $('.slider').on('init', function(event, slick){
        $('.slick-active').prev().addClass('prev');
        $('.slick-active').next().addClass('next');
    });

    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('prev next');
    })

    $('.slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-active').prev().addClass('prev');
        $('.slick-active').next().addClass('next');
        
    }); */

    $('.slider').slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
      });
      



})(jQuery);

function LaxCall(){

    window.onload = function () {
        lax.init()

        // Add a driver that we use to control our animations
        lax.addDriver('scrollY', function () {
            return window.scrollY
        })

        lax.addElements('.selector', {
            scrollY: {
            translateX: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    
                    //550:[-20, '0', 0],
                    550:[-200, '0', 0],
                    551:[-200, '0', 200]
                }
            ],
            
            }
        })

        lax.addElements('.left-image ', {
            scrollY: {
            translateY: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[300, 0, 0],
                    550:[0, 0, 0],
                    551:[600, '0', -600],
                }
            ]
            }
        })

        lax.addElements('.right-image ', {
            scrollY: {
            translateY: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[-300, 0, 0],
                    550:[0, 0, 0],
                    551:[-600, '0', 600],
                }
            ]
            }
        })

        lax.addElements('.timing-time', {
            scrollY: {
            translateX: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    550:[0, 0, 0],
                    551:[500, '0', 0],
                }
                
            ]
            }
        })

        lax.addElements('.timing-image-wrap', {
            scrollY: {
            translateX: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[-300, 0, 0],
                    550:[0, 0, 0],
                    551:[-500, '0', 0],
                }
            ]
            }
        })

        lax.addElements('.timing-text-wrap', {
            scrollY: {
            translateY: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[-300, 0, 0],
                    550:[0, 0, 0],
                    551:[-500, '0', 0],
                }
            ]
            }
        })

        lax.addElements('.timing-time-button', {
            scrollY: {
            translateY: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[-300, 0, 0],
                    550:[0, 0, 0],
                    551:[70, '0', 0],
                }
                
            ]
            }
        })

        lax.addElements('.cost-section-text', {
            scrollY: {
                translateX: [
                ["elInY", "elCenterY", "elOutY"],
                {
                    //550:[-300, 0, 0],
                    550:[-200, 0, 0],
                    551:[0, '0', 0],
                }
            ]
            }
        })

        lax.addElements('.steps-box-title,.steps-box-text,.cost-section-text-gold', {
            scrollY: {
            opacity: [
                ["elInY", "elCenterY", "elOutY"],
                [0, '1', 1],
            ]
            }
        })

        lax.addElements('.white-box', {
            scrollY: {
            scale   : [
                ["elInY", "elCenterY", "elOutY"],
                [0, '1', 1],
            ]
            }
        })

        lax.addElements('.steps-section h2', {
            scrollY: {
                translateY : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[-100, 0, 0],
                    }
                    
                ],
            }
        })

        lax.addElements('.steps-subtitle', {
            scrollY: {
                translateY : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[100, 0, 0],
                    }
                    
                ],
            }
        })

        lax.addElements('.steps-box .img-box img', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[0, -20, -20],
                    }
                    
                ],
                translateY : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[0, 20, 20],
                    }
                    
                ],
            }
        })

        lax.addElements('.paralax-eff', {
            scrollY: {
                translateY : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[-500, 0, 200],
                    }
                    
                ],
            }
        })


        lax.addElements('.wpcf7-radio span.wpcf7-list-item.first', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[-200, 0, 0],
                    }
                    
                ]
            }
        })
        
        lax.addElements('.wpcf7-radio span.wpcf7-list-item.last', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[200, 0, 0],
                    }
                ]
            }
        })
        
        lax.addElements('span.wpcf7-form-control-wrap.gender_select:first-child', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[-200, 0, 0],
                    }
                ]
            }
        })
        
        lax.addElements('span.wpcf7-form-control-wrap.gender_select:last-child', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[200, 0, 0],
                    }
                    
                ]
            }
        })
        
        lax.addElements('.form-title', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[-2000, 0, 0],
                    }
                    
                ]
            }
        })
        
        lax.addElements('.form-subtitle', {
            scrollY: {
                translateX : [
                    ["elInY", "elCenterY", "elOutY"],
                    {
                        //550:[-300, 0, 0],
                        550:[0, 0, 0],
                        551:[2000, 0, 0],
                    }
                    
                ]
            }
        })

    }
}