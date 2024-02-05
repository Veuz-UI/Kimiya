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
         <!-------------------- inner banner section -------------------->
         <div class="inner-banner-boom">
         </div>
             <!-------------------- Our Products section -------------------->
    <section data-aos="fade-up">
        <div class="container">
            <h2 class="heading-products">Find your next favourite from Boom product</h2>
            <div class="service-under-margin">
                <div id="product-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/7.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Boom Dishwash Liquid</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/8.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Boom Toilet Cleaner</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/9.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Bawn Detergent Powder</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/10.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Boom Pine disinfectant</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
             <!--------------------section -------------------->
    <section>
        <div class="container-small">
            <div class="row d-flex align-items-center gx-3">
                <div class="col-lg-6"data-aos="fade-right">
                    <img src="img/boom1.jpg" alt="" class="img-fluid home-about-img2 space-remove">
                </div>
                <div class="col-lg-6"data-aos="fade-left">
                    <h2 class="heading"><span>Boom</span><br>Dishwash Liquid</h2>
                    <h3 class="sub-text">And we love it</h3>
                    <p class="mt-4">Kimiya International is a Global manufacturing company established in the UAE, offers a diverse range of personal care, house hold, laundry and auto care products its distribution and much more services.</p>
                </div>
            </div>
        </div>
    </section>

                 <!--------------------section -------------------->
                 <section>
        <div class="container-small">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 order-2 order-md-1"data-aos="fade-right">
                    <h2 class="heading"><span>Bawn</span><br>Floor Cleaner</h2>
                    <h3 class="sub-text">And we love it</h3>
                    <p class="mt-4">Kimiya International is a Global manufacturing company established in the UAE, offers a diverse range of personal care, house hold, laundry and auto care products its distribution and much more services.</p>
                </div>
                <div class="col-lg-6 order-1 order-md-2"data-aos="fade-left">
                    <img src="img/bawn2.jpg" alt="" class="img-fluid home-about-img space-remove2">
                </div>
            </div>
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
        $('#product-slider').owlCarousel({
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
                    items: 2
                },
                1000: {
                    items: 4
                }
            }

        })

    </script>
</body>
</html>