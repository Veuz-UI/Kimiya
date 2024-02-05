<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimiya</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
        <!-------------------- navabr section -------------------->
        <?php include 'header.php';?>

                <!--------------------section -------------------->

                <div id="banner-carousal" class="owl-carousel owl-theme" data-aos="fade-up">
                    <div class="item">
                        <div class="banner-box">
                            <img src="img/shop-now/1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <img src="img/shop-now/2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <img src="img/shop-now/3.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-withlogo"data-aos="fade-up">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ultricies sem. Phasellus sit amet dui ut orci<br> mattis tristique in facilisis ex. Ut finibus vulputate nisl, at sodales nulla laoreet eu.</p>
                    <img src="img/shop-now/5.png" alt="">
                </div>
             <!--------------------section -------------------->
            <section>
<div class="box-image-show"data-aos="fade-up">
    <img src="img/shop-now/2.png" alt="">
</div>
<div class="text-withlogo"data-aos="fade-up">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ultricies sem. Phasellus sit amet dui ut orci<br> mattis tristique in facilisis ex. Ut finibus vulputate nisl, at sodales nulla laoreet eu.</p>
    <img src="img/shop-now/6.png" alt="">
</div>
</section>

             <!--------------------section -------------------->
             <section>
                <div class="box-image-show"data-aos="fade-up">
                    <img src="img/shop-now/3.png" alt="">
                </div>
                <div class="text-withlogo"data-aos="fade-up">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ultricies sem. Phasellus sit amet dui ut orci<br> mattis tristique in facilisis ex. Ut finibus vulputate nisl, at sodales nulla laoreet eu.</p>
                    <img src="img/shop-now/7.png" alt="">
                </div>
                </section>

                             <!--------------------section -------------------->
            <section>
                <div class="box-image-show"data-aos="fade-up">
                    <img src="img/shop-now/4.png" alt="">
                </div>
                <div class="text-withlogo"data-aos="fade-up">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ultricies sem. Phasellus sit amet dui ut orci<br> mattis tristique in facilisis ex. Ut finibus vulputate nisl, at sodales nulla laoreet eu.</p>
                    <img src="img/shop-now/8.png" alt="">
                </div>
                </section>
            <!-------------------- footer -------------------->
    <?php include 'footer.php';?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<script src="js/jaquery.js"></script>
<script src="https://kit.fontawesome.com/49ccdaea81.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('#banner-carousal').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>
</html>