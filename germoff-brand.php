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
</head>
<body>
        <!-------------------- navabr section -------------------->
        <?php include 'header.php';?>
         <!-------------------- inner banner section -------------------->
         <div class="inner-banner-germof">
         </div>
             <!-------------------- Our Products section -------------------->
    <section>
        <div class="container">
            <h2 class="heading-products">Find your next favourite from Germ product  </h2>
            <div class="service-under-margin">
                <div id="product-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/1.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Liquid Detergent</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/2.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Floor Cleaner</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/3.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Surface Disinfectant</h3>
                    </div>
                    <div class="item">
                        <div class="product-bg">
                            <img src="img/products/4.png" alt="">
                            <a href="#"><button class="button-green mt-4 w-100 btn-show">Add to Cart</button></a>
                        </div>
                        <h3 class="product-text">Xtream Liquid Bleach</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
             <!--------------------section -------------------->
    <section>
        <div class="container-small">
            <div class="row d-flex align-items-center gx-3">
                <div class="col-lg-6">
                    <img src="img/germoff-1.jpg" alt="" class="img-fluid home-about-img2">
                </div>
                <div class="col-lg-6">
                    <h2 class="heading"><span>Germoff</span><br>Liquid Detergent</h2>
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
                <div class="col-lg-6">
                    <h2 class="heading"><span>Disinfectant</span><br>Floor Cleaner</h2>
                    <h3 class="sub-text">And we love it</h3>
                    <p class="mt-4">Kimiya International is a Global manufacturing company established in the UAE, offers a diverse range of personal care, house hold, laundry and auto care products its distribution and much more services.</p>
                </div>
                <div class="col-lg-6">
                    <img src="img/germoff-2.jpg" alt="" class="img-fluid home-about-img">
                </div>
            </div>
        </div>
    </section>


            <!-------------------- footer -------------------->
    <?php include 'footer.php';?>
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