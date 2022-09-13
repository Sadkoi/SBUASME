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
        $("#BeAPart").css({"width": "80%", "left": "10%","font-size": "70px", "line-height":"85px","top": "120px"});
        $("#phone").css({"height": "500px", "left": "-10px", "top": "368px"});
        $("#SBUlogo").css({"visibility": "hidden"});
        $("#missionIcon1").css({"left" : "calc(50% - 127.52px)"});
        $("#secondHalf").css({"margin-top": "480px", "z-index" : "-1"});
        $("#section1").css({"margin-left": "0px","width": "calc(100vw - 50px)", "padding" : "20px", "margin-top" : "600px"});
        $("#section2").css({"margin-left": "0px","width": "calc(100vw - 50px)", "padding" : "20px", "margin-top" : "350px"});
        $("#missionIcon2").css({"right" : "calc(50% - 127.52px)", "top" : "1050px"});
        $("#missionIcon3").css({"left" : "calc(50% - 127.52px)", "top" : "1730px"});
        $("#section3").css({"margin-left": "0px","width": "calc(100vw - 50px)", "padding" : "20px", "margin-top" : "350px"});
        $(".description").css({"font-size": "min(4vw,18px)", "line-height" : "min(5vw,21px)", "text-align" : "center"});
        $("#readytoJoin").css({"display" : "inline-block", "width" : "calc(100% - 100px)", "font-size" : "min(7vw,40px)"});
        $("#action1").css({"margin-top" : "100px"});
        $("#miniEvents").css({"padding" : "30px"});
        $(".eventElement").css({"width" : "calc(100% - 120px)", "height" : "400px","text-align":"center"});
        $(".miniEventIcon").css({"width" : "150px" , "margin-right" : "calc(50% - 75px)", "display" : "block"})
        $(".infoBox").css({"display" : "block", "width" : "100%", "position" : "relative", "left" : "0px"});
        $("#visitEvents").css({"font-size" : "5vw"});
        $("#container2").css({"padding-left" : "20px" , "padding-right" : "20px", "margin-top" : "75px", "text-align" : "center"});
        $("#footer").css("display","none");
        $("#whiteHamburger").css("display","");
    }

    function computerResponse(){
        $(".navButton").css("visibility", "visible");
        $(".joinButton").css("visibility", "visible");
        $("#ASMElogo").css("width","120px");
        $("#BeAPart").css({"width": "672px", "left": "67px","font-size": "100px", "line-height":"120px","top": "272px"});
        $("#phone").css({"height": "720px", "left": "950px", "top": "80px"});
        $("#SBUlogo").css({"visibility": "visible"});
        $("#missionIcon1").css({"left" : "70px"});
        $("#secondHalf").css({"margin-top": "720px", "z-index" : "-1"});
        $("#section1").css({"margin-left": "max(360px,25vw)","width": "calc(75vw - 200px)", "padding" : "20px", 
        "margin-top" : "350px"});
        $("#missionIcon2").css({"right" : "10vw", "top" : "640px"});
        $("#section2").css({"margin-left": "120px","width": "calc(75vw - 200px)", "padding" : "", "margin-top" : "20px"});
        $("#missionIcon3").css({"left" : "70px", "top" : "960px"});
        $("#section3").css({"margin-left": "max(360px,25vw)","width": "calc(75vw - 200px)", "padding" : "20px", "margin-top" : "20px"});
        $(".description").css({"font-size": "18px", "line-height" : "21px", "text-align" : "left"});
        $("#readytoJoin").css({"display" : "inline"});
        $("#miniEvents").css({"padding" : "120px"});
        $(".eventElement").css({"width" : "calc(100vw - 240px)", "height" : "200px","text-align":"left"});
        $(".miniEventIcon").css({"width" : "120px" , "margin-right" : "20px", "display" : ""})
        $(".infoBox").css({"display" : "", "width" : "calc(100vw - 500px)", "position" : "absolute", "left" : "240px"});
        $("#visitEvents").css({"font-size" : "35px"});
        $("#container2").css({"padding-left" : "120px" , "padding-right" : "190px", "margin-top" : "75px", "text-align" : "right"});
        $("#footer").css("display","");
        $("#whiteHamburger").css("display","none");
    }
});