$(document).ready(function(){

    flexBoxHandler();    
    window.onresize = responsiveDisp;

    function responsiveDisp(){
        flexBoxHandler();
    }

    function flexBoxHandler(){
        if (window.innerWidth >= 1260){
            $(".teamSlot").css("width","33%");
            $(".navButton").css("visibility", "visible");
            $(".joinButton").css("visibility","visible");
            $("#footer").css("display","");
            $("#blueHamburger").css("display","none");
            PCObserver();
        }else{
            if(window.innerWidth >= 850){
                $(".teamSlot").css("width","50%");
                $(".navButton").css("visibility", "visible");
                $(".joinButton").css("visibility","visible");
                $("#footer").css("display","");
                $("#blueHamburger").css("display","none");
                PCObserver();
            }else{
                $(".teamSlot").css("width","100%");
                $(".navButton").css("visibility", "hidden");
                $(".joinButton").css("visibility","hidden");
                $("#footer").css("display","none");
                $("#blueHamburger").css("display","");
                mobileObserver();
            }
        }
    }

    $(".joinButton").hover(function(){
        $(".joinButton").animate({color: "#236DE2",backgroundColor: "white"},{duration: 200, easing: "linear"});
        console.log("hello");
    },function(){
        $(".joinButton").animate({color: "#white",backgroundColor: "#236DE2"},{duration: 200, easing: "linear"});
    });
    function mobileObserver(){
        const observer4 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team1")[0].classList.add("fadeInBottom");
                }
            })
        })
        observer4.observe(document.querySelector("#team1"));
    
        const observer5 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team2")[0].classList.add("fadeInBottom");
                }
            })
        })
        observer5.observe(document.querySelector("#team2"));
    
        const observer6 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team3")[0].classList.add("fadeInBottom");
                }
            })
        })
        observer6.observe(document.querySelector("#team3"));
    
        const observer7 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team4")[0].classList.add("fadeInBottom");
                }
            })
        })
        observer7.observe(document.querySelector("#team4"));
    }

    function PCObserver(){
        const observer4 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team1")[0].classList.add("fadeInLeft");
                }
            })
        })
        observer4.observe(document.querySelector("#team1"));
    
        const observer5 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team2")[0].classList.add("fadeInBottom");
                }
            })
        })
        observer5.observe(document.querySelector("#team2"));
    
        const observer6 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team3")[0].classList.add("fadeInRight");
                }
            })
        })
        observer6.observe(document.querySelector("#team3"));
    
        const observer7 = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    document.querySelectorAll("#team4")[0].classList.add("fadeInLeft");
                }
            })
        })
        observer7.observe(document.querySelector("#team4"));
    }



    


});