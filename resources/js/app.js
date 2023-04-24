import './bootstrap';


// particlesJS.load('particles-js', 'assets/particles.json', function() {
//     console.log('callback - particles.js config loaded');
// });

const nav = document.querySelector(".sidebar");
// const header = document.querySelector("header");
// const body = document.querySelector("body");

if (nav) {
    console.log('nav find' + nav)
    const toggle = document.querySelector("#toggler");

    if(toggle){
        console.log('toggle find' + toggle);
        toggle.addEventListener("click", () => {
            if (nav.classList.contains("active")) {
                nav.classList.remove("active");
                // header.classList.remove("togled-header");
                // body.style.overflow = "auto";
            } else {
                nav.classList.add("active");
                header.classList.add("togled-header");
                // body.style.overflow = "hidden";

            }
        });

        nav.addEventListener("blur", () => {
            nav.classList.remove("active");
            // header.classList.remove("togled-header");
            // body.style.overflow = "auto";
        });
    }
}

var shine = function(){
    var bonus = $(".bonus5000");
    var shineClass = "shine";

    if(bonus.hasClass(shineClass))
        bonus.removeClass(shineClass);

        setTimeout(function(){
            bonus.addClass(shineClass);
        }, 50);
}

window.setInterval(function(){
    shine();
}, 5000);

if($(window).width() <= 650)
    $('video').remove();
