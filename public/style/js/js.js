$(function () {
  
  var mainswiper = new Swiper(".mainswiper", {
    spaceBetween: 30,
    effect: "fade",
    autoplay: {
      delay: 2400,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".mainswiper-pagination",
      clickable: true,
    },
  });

  $(window).scroll(function () {
    console.log($(window).scrollTop());

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


  $(window).scroll(function () {

    if (($(window).scrollTop() > 500)) {
      $("#b-item").removeClass("mg-left");
    }
    else {
      $("#b-item").addClass("mg-left");
    }
  });
  $(window).scroll(function () {

    if (($(window).scrollTop() > 800)) {
      $("#b-item-two").removeClass("mg-right");
    }
    else {
      $("#b-item-two").addClass("mg-right");
    }
  });
  $(window).scroll(function () {

    if (($(window).scrollTop() > 800)) {
      $("#b-item-three").removeClass("mg-left");
    }
    else {
      $("#b-item-three").addClass("mg-left");
    }
  });




  $(window).scroll(function () {

    if (($(window).scrollTop() > 3500)) {
      $("#info-bl").removeClass("info-box-tl");
    }
    else {
      $("#info-bl").addClass("info-box-tl");
    }
  
  });
  $(window).scroll(function () {

    if (($(window).scrollTop() > 3500)) {
      $("#info-bs").removeClass("info-box-s");
    }
    else {
      $("#info-bs").addClass("info-box-s");
    }
  
  });
  $(window).scroll(function () {

    if (($(window).scrollTop() > 3500)) {
      $("#info-br").removeClass("info-box-tr");
    }
    else {
      $("#info-br").addClass("info-box-tr");
    }
  
  });











  // $("#cardtransform").offset().top;
  
  console.log($("#cardtransform").offset().top);
  console.log("j");


});


var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
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


var swiper3 = new Swiper(".mySwiper3", {
  grabCursor: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
});



