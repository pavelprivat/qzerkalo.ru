import './bootstrap';

const nav = document.querySelector(".sidebar");
const mask = document.querySelector(".mask");

const body = document.querySelector("body");

if (nav) {
    console.log('nav find' + nav)
    const toggle = document.querySelector("#toggler");

    if(toggle){
        console.log('toggle find' + toggle);
        toggle.addEventListener("click", () => {
            if (nav.classList.contains("active")) {
                nav.classList.remove("active");
                mask.classList.remove("active");
                body.style.overflow = "auto";
            } else {
                nav.classList.add("active");
                mask.classList.add("active");
                body.style.overflow = "hidden";

            }
        });

        nav.addEventListener("blur", () => {
            nav.classList.remove("active");
            body.style.overflow = "auto";
            mask.classList.remove("active");
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
