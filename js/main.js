AOS.init({
    offset: 200,
    duration: 100
  });

  $('#project_slider').ready(function(){
    $('.owl-carousel').owlCarousel({
      center: true,
      item:3,
      loop:true,
      margin:10,
      autoplay:true,
      // responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          768:{
              items:2          
          },
          1170:{
              items:3              
          }
      }
    });
  });
//   jQuery(document).ready(function($){
//     "use strict";
//     $('#project_slider').owlCarousel({
//         loop:true,
//         center:true,
//         items:3,
//         margin:200,
//         autoplay:true,
//         dots:true,
//         autoplayTimeout:8500,
//         smartSpeed:450,
//         responsive:{
//             0:{
//                 items:1
//             },
//             768:{
//                 items:2
//             },
//             1170:{
//                 items:3
//             }
//         }

//     })
// })
