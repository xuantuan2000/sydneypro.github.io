
// // nav scroll
window.addEventListener("scroll", function () {
  var header = document.getElementById("nav");
  header.classList.toggle("sticky", window.scrollY > 780);
});

// play video.
var modal = document.getElementById("myModal");
var btn_video = document.getElementById("sec1__video");
btn_video.onclick = function () {
  modal.style.display = "block";
};
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var video = document.getElementById("videoMusic");
// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
  video.pause();
};
// Our work categories
var js__all__work = document.querySelector('.btn__all__work');
var js__web__degign = document.querySelector('.btn__web__design');
var js__branding = document.querySelector('.btn__branding');
var js__graphic__design = document.querySelector('.btn__graphic__design');

var allWork = document.querySelector('.all--work');
var webDegign = document.querySelector('.web--design');
var branding = document.querySelector('.branding');
var graphicDesign = document.querySelector('.graphic--design');

function Function1(){
  webDegign.classList.remove("js-work-close");
  branding.classList.add("js-work-close");
  graphicDesign.classList.add("js-work-close");
}
function Function2(){
  branding.classList.remove("js-work-close");
  webDegign.classList.add("js-work-close");
  graphicDesign.classList.add("js-work-close");
}
function Function3(){
  graphicDesign.classList.remove("js-work-close");
  webDegign.classList.add("js-work-close");
  branding.classList.add("js-work-close");
}
function Function4(){
  webDegign.classList.remove("js-work-close");
  branding.classList.remove("js-work-close");
  graphicDesign.classList.remove("js-work-close");
}
js__web__degign.addEventListener("click", Function1);
js__branding.addEventListener("click", Function2);
js__graphic__design.addEventListener("click", Function3);
js__all__work.addEventListener("click", Function4);

// slide show Status news
$(".active-recent-status-carusel").owlCarousel({
  items: 1,
  loop: true,
  margin: 30,
  dots: true,
  autoplayHoverPause: true,
  smartSpeed: 500,
  autoplay: true,
  responsive: {
    0: {
      items: 1
    },
    480: {
      items: 1
    },
    768: {
      items: 1
    },
    961: {
      items: 1
    }
  }
});
//Slide show latest new
$(".active-recent-news-carusel").owlCarousel({
  items: 3,
  loop: true,
  margin: 30,
  dots: true,
  autoplayHoverPause: true,
  smartSpeed: 500,
  autoplay: true,
  responsive: {
    0: {
      items: 1
    },
    480: {
      items: 1
    },
    768: {
      items: 1
    },
    961: {
      items: 3
    }
  }
});

$(".skills").addClass("active")
$(".skills .skill .skill-bar span").each(function() {
   $(this).animate({
      "width": $(this).parent().attr("data-bar") + "%"
   }, 1000);
   $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
});
setTimeout(function() {
   $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
}, 2000);

// click nav bar

var top__nav = document.querySelector('.top__nav')
var nav__bar = document.querySelector('.nav__bar')
var open__bar = document.querySelector('.btn__open__bar')
var close__bar = document.querySelector('.btn__close__bar')

function openBar(){
  top__nav.classList.remove("close__mobile__nav")
  nav__bar.classList.remove("close__mobile__nav")
  nav__bar.classList.add("flex__mobile__nav")
  open__bar.classList.add("close__mobile__nav")
  close__bar.classList.remove("close__mobile__nav")
}
function closeBar(){
  top__nav.classList.add("close__mobile__nav")
  nav__bar.classList.add("close__mobile__nav")
  nav__bar.classList.remove("flex__mobile__nav")
  open__bar.classList.remove("close__mobile__nav")
  close__bar.classList.add("close__mobile__nav")
}

open__bar.addEventListener("click", openBar)
close__bar.addEventListener("click", closeBar)