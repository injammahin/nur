/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 50,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#06df9e"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#fff"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.8,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 3,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#fff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#fff",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
$(document).ready(function() {
  $(".toggle-element").click(function() {
      $(this).next(".element-to-toggle").slideToggle();
  });

  $(".navbar-toggler").click(function() {
      $("#navbarNav").slideToggle();
  });

  $(window).resize(function() {
      if ($(window).width() >= 992) {
          $("#navbarNav").show();
      } else {
          $("#navbarNav").hide();
      }
  });

  $('.chat-toggle').on('click', function() {
      $('.chat-box').toggle();
  });

  $('.close-chat').on('click', function() {
      $('.chat-box').hide();
  });

  var options = {
      accessibility: true,
      prevNextButtons: true,
      pageDots: true,
      setGallerySize: false,
      autoPlay: 5000, // Auto slide every 5 seconds
      wrapAround: true, // Enables looping
      arrowShape: {
          x0: 10,
          x1: 60,
          y1: 50,
          x2: 60,
          y2: 45,
          x3: 15
      }
  };

  var $carousel = $('[data-carousel]').flickity(options);
  var $slideContent = $('.slide-content');
  var flkty = $carousel.data('flickity');
  var selectedSlide = flkty.selectedElement;

  flkty.on('settle', function(index) {
      selectedSlide = flkty.selectedElement;
  });

  flkty.on('change', function(index) {
      $slideContent.eq(index).removeClass('mask');

      setTimeout(function() {
          $slideContent.addClass('mask');
      }, 200);
  });

  flkty.on('dragStart', function(event) {
      var index = 0;
      selectedSlide = flkty.selectedElement;

      if (event.layerX > 0) { // direction right
          index = $(selectedSlide).index() + 1;
      } else { // direction left
          index = $(selectedSlide).index() - 1;
      }

      $slideContent.eq(index).removeClass('mask');
  });

  setTimeout(function() {
      $slideContent.addClass('mask');
  }, 500);

  var owl = $('.unique-testimonial-carousel');
  owl.owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      items: 1,
      center: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 1
          },
          1000: {
              items: 3
          }
      }
  });

  owl.on('changed.owl.carousel', function(event) {
      var item = event.item.index - 2;
      $('.owl-item').not('.cloned').eq(item).addClass('center').siblings().removeClass('center');
  });

  owl.trigger('changed.owl.carousel');

  var $owl = $('#clients');
  $owl.owlCarousel({
      loop: true,
      margin: 80,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000, // 3 seconds delay between transitions
      autoplayHoverPause: false,
      autoplaySpeed: 1000, // 1 second for the transition to complete
      smartSpeed: 1000, // smooth speed for the transition
      slideTransition: 'linear',
      responsive: {
          0: {
              items: 2
          },
          600: {
              items: 3
          },
          1000: {
              items: 5
          }
      }
  });

  $owl.on('translated.owl.carousel', function(event) {
      $owl.trigger('play.owl.autoplay', [3000]);
  });
});

// Update the current year dynamically
document.querySelector('.current-year').textContent = new Date().getFullYear();
