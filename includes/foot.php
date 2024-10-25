<script>
   // Check screen width
function isScreenWidthLessThan1024() {
    return window.innerWidth < 1024;
}

// Handle image removal
function handleImageRemoval() {
    const imageElement = document.querySelector('#removeimg');
    if (imageElement) {
        imageElement.style.display = isScreenWidthLessThan1024() ? 'none' : 'block';
    }
}

// Reveal content
function revealContent() {
    const section = document.getElementById('loadingsection');
    if (section) {
        section.style.display = 'block';
        window.removeEventListener('mousemove', revealContent);
        window.removeEventListener('load', revealContent);
        window.removeEventListener('scroll', revealContent);
        window.removeEventListener('touchstart', revealContent);
    } else {
        console.warn("Element with ID 'loadingsection' not found");
    }
}

// Call the functions on page load
window.addEventListener('load', () => {
    handleImageRemoval();
    revealContent();
});

// Handle resize
window.addEventListener('resize', handleImageRemoval);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ppREiXs/tV1jDdZZfmsz9ZBJJceo5OZj1tWy8F3zUDQaUpEM3+k3DMFtj94BuBRz"
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="js/lazyestload.js"></script>
<script src="js/custom.js"></script>
<script>
    if (window.innerWidth < 767) {
        $('.ttff').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }
</script>


<!-- <script type="text/javascript">
    zE(function () {
        zE.activate();
    });
</script> -->
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Native Book Authors",
  "url": "https://www.authorpublications.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script> -->
<!-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Native Book Authors",
  "alternateName": "Authorpublications",
  "url": "https://www.authorpublications.com/",
  "logo": "https://www.authorpublications.com/images/logo.png",
  "sameAs": [
    "https://www.facebook.com/people/Author-Publications/61565238534351/",
    "https://www.instagram.com/authorpublications2/",
    "https://www.authorpublications.com/"
  ]
}
</script> -->