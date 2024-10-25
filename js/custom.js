function popupUpOverlay() {
    let popupClosebtn = document.querySelectorAll('.btn-close');
    let bodyContainer = document.querySelector('body');
    let bgOverlayPopup = document.createElement('div');
  
    document.querySelectorAll('.open_popup, .dynamicPopupButton').forEach(function (e) {
      e.addEventListener('click', function () {
        bodyContainer.style.overflow = 'hidden';
        bodyContainer.style.paddingRight = '21px';
        bodyContainer.classList.add('modal-open');
        bgOverlayPopup.classList.add('modal-backdrop', 'fade', 'show');
        bodyContainer.append(bgOverlayPopup);
      });
    });
  
    popupClosebtn.forEach(function (e) {
      e.addEventListener('click', function () {
        bodyContainer.removeAttribute('style');
        bodyContainer.classList.remove('modal-open');
        bgOverlayPopup.remove();
      });
    })
  } popupUpOverlay();
  
  
  window.addEventListener('DOMContentLoaded', () => {
    if (window.location.href.includes('publishers/')) {
      let originalElement = document.querySelector('#company_2.dataBox .dataHeading h2');
      if (originalElement) {
        let originalString = originalElement.innerText;
        let modifiedString = originalString.replace("Times", "Times ");
        originalElement.innerText = modifiedString;
  
        if (originalElement.innerText === "Times Ghostwriters") {
          let listItems = document.querySelectorAll('#company_2.dataBox ul li');
          listItems.forEach(item => {
            if (item.innerText.includes('Address')) {
              item.remove();
            }
          });
        }
      }
    }
  })
  
  

  document.getElementById("dropIconToggle1").onclick = function() {
    document.querySelector(".dropdown-menu-single1").classList.toggle("show");
};
document.getElementById("dropIconToggle7").onclick = function() {
    document.querySelector(".dropdown-menu-single7").classList.toggle("show");
};




  // Dropdown Header Menu Js Start
  $(document).ready(function () {
    $('#dropIconToggle').click(function () {
      $('.dropdown-menu-big').slideToggle(500);
    });
  }),
  
    $(document).ready(function () {
      $('#dropIconToggle2').click(function () {
        $('.dropdown-menu-single2').slideToggle(500);
      });
    }),
    $(document).ready(function () {
      $('#dropIconToggle1').click(function () {
        $('.dropdown-menu-single1').slideToggle(500);
      });
    }),
    $(document).ready(function () {
      $('#dropIconToggle7').click(function () {
        $('.dropdown-menu-single7').slideToggle(500);
      });
    }),
    $(document).ready(function () {
      $('#dropIconToggle3').click(function () {
        $('.dropdown-menu-single3').slideToggle(500);
      });
    }),
    $(document).ready(function () {
      $('#dropIconToggle4').click(function () {
        $('.dropdown-menu-single4').slideToggle(500);
      });
    }),
    $(document).ready(function () {
      $('#dropIconToggle5').click(function () {
        $('.dropdown-menu-single5').slideToggle(500);
      });
    });
  // Dropdown Header Menu Js end
  
  $('.clickbutton').click(function () {
    $('.floatbutton').toggleClass('active'),
      $('.crossplus').toggleClass('rotate');
  }),
    $(window).on('scroll', function () {
      if ($('.stricked-menu').length) {
        var o = $('.stricked-menu');
        130 < $(window).scrollTop()
          ? o.addClass('stricky-fixed')
          : $(this).scrollTop() <= 130 && o.removeClass('stricky-fixed');
      }
      if ($('.scroll-to-top').length) {
        100 < $(window).scrollTop()
          ? $('.scroll-to-top').fadeIn(500)
          : $(this).scrollTop() <= 100 && $('.scroll-to-top').fadeOut(500);
      }
    });
  
  $('.open_popup').click(function () {
    $('#staticBackdrop').css('display', 'block').addClass('show');
  }),
    $('.btn-close').click(function () {
      $('#staticBackdrop').css('display', 'none').removeClass('show');
    });
  
  $('.dynamicPopupButton').click(function () {
    $('#dynamicPopup').css('display', 'block').addClass('show');
  }),
    $('.btn-close').click(function () {
      $('#dynamicPopup').css('display', 'none').removeClass('show');
    });
  
  jQuery(document).ready(function ($) {
    $('.dynamicPopupButton').on('click', function () {
      var $dataBox = $(this).closest('.dataBox');
  
      var headingText = $dataBox.find('.dataHeading h2').text();
  
      $('#dynamic_heading').text(headingText);
  
      $('#modal-body').modal('show');
    });
  });
  
  AOS.init();
  
  $(document).ready(function () {
    // When the button is clicked
    $('#openPopupButton').click(function () {
      // Show the popup using Bootstrap's modal method
      $('#staticBackdrop').modal('show');
    });
  
    // Optional: If you want to close the popup when the close button is clicked
    $('.btn-close').click(function () {
      // Hide the popup using Bootstrap's modal method
      $('#staticBackdrop').modal('hide');
    });
  });
  
  $(document).ready(function () {
    $('.new-ser-slider').slick({
      dots: !1,
      infinite: !1,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      padding: 20,
      arrows: !0,
      nextArrow: '.next-slide',
      prevArrow: '.prev-slide',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }),
    // new testi slider Js start here//
    $(document).ready(function () {
      $('.new-testi-slider').slick({
        dots: !1,
        infinite: !1,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        arrows: !1,
        autoplaySpeed: 1000,
        autoplaySpeed: 1e3,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: !0,
              dots: !0,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    });
  
  var clock,
    currentDate = new Date(),
    futureDate = new Date('2024-01-5'),
    diff = futureDate.getTime() / 1e3 - currentDate.getTime() / 1e3;
  clock = $('#clock1').FlipClock(diff, {
    clockFace: 'DailyCounter',
    countdown: !0,
    showSeconds: !0,
  });
  
  jQuery(document).ready(function () {
    $('#dp-next').click(function () {
      var total = $('.dp_item').length;
      $('#dp-slider .dp_item:first-child').hide().appendTo('#dp-slider').fadeIn();
      $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
      });
      detect_active();
    });
  
    $('#dp-prev').click(function () {
      var total = $('.dp_item').length;
      $('#dp-slider .dp_item:last-child').hide().prependTo('#dp-slider').fadeIn();
      $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
      });
  
      detect_active();
    });
  
    $('body').on('click', '#dp-slider .dp_item:not(:first-child)', function () {
      var get_slide = $(this).attr('data-class');
      console.log(get_slide);
      $('#dp-slider .dp_item[data-class=' + get_slide + ']')
        .hide()
        .prependTo('#dp-slider')
        .fadeIn();
      $.each($('.dp_item'), function (index, dp_item) {
        $(dp_item).attr('data-position', index + 1);
      });
  
      detect_active();
    });
  });
  
  function toggleDropdown() {
    var dropdown = document.getElementById('myDropdown');
    dropdown.style.display =
      dropdown.style.display === 'block' ? 'none' : 'block';
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function (event) {
    if (!event.target.matches('.dropdown-button')) {
      var dropdowns = document.getElementsByClassName('dropdown-content');
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.style.display === 'block') {
          openDropdown.style.display = 'none';
        }
      }
    }
  };
  
  function changeCardImage(card, newSrc) {
    const image = card.querySelector('.card-icon img');
    image.setAttribute('src', newSrc);
  }
  
  var swiper = new Swiper('.mySwiper', {
    effect: 'cards',
    grabCursor: true,
    autoplay: {
      delay: 3000, // Set the delay (in milliseconds) between slides
      disableOnInteraction: false, // Allow manual interaction (e.g., clicking) to stop autoplay
    },
  });
  