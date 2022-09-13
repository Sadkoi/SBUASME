$(document).ready(function(){
    $(".joinButton").hover(function(){
        $(".joinButton").animate({color: "white",backgroundColor: "transparent"},{duration: 200, easing: "linear"});
        console.log("hello");
    },function(){
        $(".joinButton").animate({color: "#236DE2",backgroundColor: "white"},{duration: 200, easing: "linear"});
    });
});