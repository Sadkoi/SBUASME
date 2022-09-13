$(document).ready(function(){
    //check page dimensions
    window.onresize = responsiveDisp;

    if(window.innerWidth <= 850){
        cellResponse();
    }else{
        computerResponse();
    }

    //when screen size changes, change attributes from pc to mobile
    function responsiveDisp(){
        if (window.innerWidth <= 850) {
            cellResponse();
        }else{
            computerResponse();
        }
    }

    function cellResponse(){
        $(".navButton").css("visibility", "hidden");
        $(".joinButton").css("visibility", "hidden");
        $("#ASMElogo").css("width","25%");
        $("#secondHalf").css({"margin-top": "480px", "z-index" : "-1"});
        $("#LargeFoldFont").css({"width": "80%", "left": "10%","font-size": "50px", "line-height":"60px","top": "120px"});
        $("#miniFoldFont").css({"width": "80%", "left": "10%","font-size": "20px", "line-height":"27px","top": "280px"});
        $("#miniFoldFont2").css({"width": "80%", "left": "10%","font-size": "20px", "line-height":"27px","top": "250px"});
        $("#wolfie").css({"left": "10px","height":"250px","top":"559px"});
        $("#footer").css("display","none");
        $(".formHolder").css({"width":"calc(100% - 40px)"});
        $("#whiteHamburger").css("display","");
        $("#gradHolder").css("width","100%");
        $("#spacer").css("display","none");
        $("#gradBox").css("width","calc(90% - 40px)");
    }

    function computerResponse(){
        $(".navButton").css("visibility", "visible");
        $(".joinButton").css("visibility", "visible");
        $("#ASMElogo").css("width","120px");
        $("#secondHalf").css({"margin-top": "720px", "z-index" : "-1"});
        $("#LargeFoldFont").css({"width": "672px", "left": "67px","font-size": "80px", "line-height":"100px","top": "262px"});
        $("#miniFoldFont").css({"width": "672", "left": "67px","font-size": "25px", "line-height":"32px","top": "400px"});
        $("#miniFoldFont2").css({"width": "672", "left": "67px","font-size": "25px", "line-height":"32px","top": "350px"});
        $("#wolfie").css({"left": "725px","height":"600px","top":"138px"});
        $("#footer").css("display","");
        $(".formHolder").css({"width":"calc(55% - 40px)"});
        $("#whiteHamburger").css("display","none");
        $("#gradHolder").css("width","50%");
        $("#spacer").css("display","");
        $("#gradBox").css("width","calc(80% - 40px)");
    }


});