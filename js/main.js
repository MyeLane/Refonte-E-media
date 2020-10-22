/*actualites*/
$(document).ready(function() {
     
    $("#owl-actualites-general").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

    $("#owl-actualites-technologie").owlCarousel({
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

    $("#owl-actualites-business").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

    $("#owl-actualites-science").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

    $("#owl-actualites-sante").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

    $("#owl-actualites-sport").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 1
            },
            376: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            900: {
                items: 4
            }
        }
    });

});

let btngeneral = document.querySelector('.actualite_general');
let btntechnology = document.querySelector('.actualite_technologie');
let btnbusiness = document.querySelector('.actualite_business');
let btnscience = document.querySelector('.actualite_science');
let btnsante = document.querySelector('.actualite_sante');
let btnsport = document.querySelector('.actualite_sport');
let general = document.querySelector('#owl-actualites-general');
let technology = document.querySelector('#owl-actualites-technologie');
let business = document.querySelector('#owl-actualites-business');
let science = document.querySelector('#owl-actualites-science');
let sante = document.querySelector('#owl-actualites-sante');
let sport = document.querySelector('#owl-actualites-sport');

/*btngeneral.addEventListener("click", function(){
    general.style.display = "block";
    technology.style.display = "none"; 
    business.style.display = "none";
    science.style.display = "none";
    sante.style.display = "none";
    sport.style.display = "none";
});*/

btntechnology.addEventListener("click", function(){
    general.style.display = "none";
    technology.style.display = "block";
    technology.style.transform = "scale(1)"; 
    business.style.display = "none";
    science.style.display = "none";
    sante.style.display = "none";
    sport.style.display = "none";
});

btnbusiness.addEventListener("click", function(){
    general.style.display = "none";
    technology.style.display = "none"; 
    business.style.display = "block";
    business.style.transform = "scale(1)";
    science.style.display = "none";
    sante.style.display = "none";
    sport.style.display = "none";
});

btnscience.addEventListener("click", function(){
    general.style.display = "none";
    technology.style.display = "none"; 
    business.style.display = "none";
    science.style.display = "block";
    science.style.transform = "scale(1)";
    sante.style.display = "none";
    sport.style.display = "none";
});

btnsante.addEventListener("click", function(){
    general.style.display = "none";
    technology.style.display = "none"; 
    business.style.display = "none";
    science.style.display = "none";
    sante.style.display = "block";
    sante.style.transform = "scale(1)";
    sport.style.display = "none";

});

btnsport.addEventListener("click", function(){
    general.style.display = "none";
    technology.style.display = "none"; 
    business.style.display = "none";
    science.style.display = "none";
    sante.style.display = "none";
    sport.style.display = "block";
    sport.style.transform = "scale(1)";
});

/*active button*/
let header = document.getElementById("list_actualite");
let btns = header.getElementsByClassName("btn-actu");
for (const i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  let current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

/*aos*/
AOS.init({
    easing: 'ease-out-back',
    duration: 1000,
});


