var number = document.querySelector('#number');
var increas = document.querySelectorAll('#increas');
var dicreas = document.querySelectorAll('#dicreas');




increas.forEach(function(value){
    value.onclick= function(){
        console.log(number.innerText);
        number.innerText = parseInt(number.innerText) + 1
    };
});
dicreas.forEach(function(value){
    value.onclick= function(){
        console.log(number.innerText);
        if(number.innerText > 1){
            number.innerText = parseInt(number.innerText) - 1
        }  
    };
});

var addAlert = document.getElementById("add");
var cancels = document.getElementById("cancel");
var alertAdd= document.querySelector(".alert-add");


addAlert.onclick =function(){
  alertAdd.classList.remove("d-none")
    
};
cancels.onclick =function(){
  alertAdd.classList.toggle("d-none")
}










var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


$(function () {
  $(window).scroll(function () {
    // console.log($(window).scrollTop());

    if (($(window).scrollTop() > 20)) {
      $("header").addClass("header-position");
    }
    else {
      $("header").removeClass("header-position");
    }
    // console.log(($(window).scrollTop() > ($("#cardtransform").offset().top)-200 && ($(window).scrollTop() < ($("#cardtransform").offset().top))));
    // if(($(window).scrollTop() > ($("#cardtransform").offset().top)-200 && ($(window).scrollTop() < ($("#cardtransform").offset().top)))){
    //   $("#cardtransform").css("margin","10rem")
    // }
  });
});






let full = document.querySelector('.full-cont')
let empty = document.querySelector('.empty-cont')
this.activated = false;
full.addEventListener('click',()=> {
  if(this.activated == false) {
    full.classList.add('active'); 
  } else {
    full.classList.add('enabled');
    empty.classList.add('unlike');
    setTimeout(() => {
      full.classList.remove('active');
      full.classList.remove('enabled');
      empty.classList.remove('unlike');
      this.activated = false;
    },500)
  }
  this.activated = true;
})
