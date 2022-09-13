$(document).ready(function(){
    var menuShowing = false;
    $('body').on('click','#whiteHamburger',function(){
        if(!menuShowing){ //if menu isnt showing, show menu
            $("#whiteHamburger").css("content","url(images/menuIconBlue.png)");
            $("body").css("overflow-y","hidden");
            $("#blurFilter").css("display","block");
            $("#mobileMenu2").animate({width: "60%"},{duration: 200, easing: "swing"});
            $({blurRadius: 0}).animate({blurRadius: 20},{
                duration: 200,
                easing: 'swing',
                step: function(){
                    $("#blurFilter").css({"backdrop-filter": "blur(" + this.blurRadius + "px)"});
                }
            });

            menuShowing = true;
        }else{ //if menu is showing, hide menu
            $("#whiteHamburger").css("content","url(images/menuIconWhite.png)");
            $("#mobileMenu2").animate({width: "0%"},{duration: 200, easing: "swing"});
            $({blurRadius: 20}).animate({blurRadius: 0},{
                duration: 200,
                easing: 'swing',
                step: function(){
                    $("#blurFilter").css({"backdrop-filter": "blur(" + this.blurRadius + "px)"});
                }
            });
            setTimeout(() => {
                $("#blurFilter").css("display","none");
            }, 200)
            $("body").css("overflow-y","visible");
            menuShowing = false;
        }
    });
});