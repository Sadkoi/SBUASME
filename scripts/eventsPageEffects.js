$(document).ready(function(){
    $(".joinButton").hover(function(){
        $(".joinButton").animate({color: "#236DE2",backgroundColor: "white"},{duration: 200, easing: "linear"});
        console.log("hello");
    },function(){
        $(".joinButton").animate({color: "#white",backgroundColor: "#236DE2"},{duration: 200, easing: "linear"});
    });

    const observer4 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#possibleEvents1")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer4.observe(document.querySelector("#possibleEvents1"));

    const observer5 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#possibleEvents2")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer5.observe(document.querySelector("#possibleEvents2"));

    const observer6 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#possibleEvents3")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer6.observe(document.querySelector("#possibleEvents3"));

    
});