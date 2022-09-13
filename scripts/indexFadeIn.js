$(document).ready(function(){
    
    const observer4 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#section1")[0].classList.add("fadeInRight");
            }
        })
    })
    observer4.observe(document.querySelector("#section1"));

    const observer5 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#section2")[0].classList.add("fadeInLeft");
            }
        })
    })
    observer5.observe(document.querySelector("#section2"));

    const observer6 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                document.querySelectorAll("#section3")[0].classList.add("fadeInRight");
            }
        })
    })
    observer6.observe(document.querySelector("#section3"));
    
});