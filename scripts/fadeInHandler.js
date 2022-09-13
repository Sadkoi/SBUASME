$(document).ready(function(){
    
    const observer1 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#event1")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer1.observe(document.querySelector("#event1"));

    const observer2 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#event2")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer2.observe(document.querySelector("#event2"));

    const observer3 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#event3")[0].classList.add("fadeInBottom");
            }
        })
    })
    observer3.observe(document.querySelector("#event3"));
    
});