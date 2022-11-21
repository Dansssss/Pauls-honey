<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pauls Healthy Honey</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400, 600, 700" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="../css/slick.css">

    <link rel="stylesheet" href="../css/helpers.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/restaurant.css">
    <link rel="icon" type="image/ico" href="../webroot/favicon.ico">

</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">


<div class="probootstrap-loader"></div>
<!-- END loader -->
<nav class="navbar navbar-expand-lg navbar-light pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="../images/restaurant/logo1" alt="Instant Logo" class="light">
            <img src="../images/restaurant/logo1" alt="Instant Logo" class="dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav">
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <a class="nav-link text-uppercase pb_letter-spacing-2 " href="#section-home">
                        <img src="../images/restaurant/logo7.png"  class="light">
                        <img src="../images/restaurant/logo7.png"  class="dark">
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="home">Home</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 text-secondary" href="#section-products">Products</a></li>

                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-gallery">Gallery</a></li>

                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'login']) ?>>Login</a></li>

            </ul>
        </div>
    </div>
</nav>


<!-- END nav -->

<section class="pb_cover_v1 cover-bg-black cover-bg-opacity-6 text-center" style="background-image: url(../images/restaurant/1900x1200/img_3.jpg)" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9  order-md-1">
                <a href="https://www.youtube.com/watch?v=WbMV9qYIXqM" class="play popup-vimeo"><i class="ion-ios-play"></i></a>
                <h2 class="heading mb-3">Welcome to Paul's Healthy Honey</h2>
                <div class="sub-heading"><p class="mb-5">Our honey is 100% Australian, organic and chemical residue free, is of the highest standard and quality harvested just for you.</p></div>
                <p><a href="#section-products" role="button" class="btn smoothscroll pb_outline-light rounded-0 btn-xl pb_font-13 pb_letter-spacing-2 p-3">SHOP NOW</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="pb_section" id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row">
                    <div class="col">
                        <p><img src="../images/restaurant/800x975/img_3.jpg" alt="Instant Image" class="img-fluid"></p>
                    </div>
                    <div class="col">
                        <p><img src="../images/restaurant/800x975/img_4.jpg" alt="Instant Image" class="img-fluid"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-lg-5 pl-lg-0">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-4">ABOUT US</h2>
                <p>At Paul’s Healthy Honey, we pride ourselves on sourcing the best chemical free and organic honey from hives across Australia. We DO NOT use any heat treatment, artificial additives or syrups in any of our products. They are free from pesticides; are of premium quality; raw and chemical residue free.</p>

                <p>Learn about us more below !</p>
                <p><a href="about" class="smoothscroll text-danger text-uppercase">See more <i class="ion-arrow-right-c"></i></a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="pb_section" id="section-products">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="food" role="tabpanel">
                        <div class="row">
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Manuka Honey 260 +</h3>
                                                <p>
                                                    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index']) ?>><img src="../images/restaurant/800x975/img_5.jpg" alt="Instant Image" class="img-fluid"></a>
                                                </p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>69.95</span></div>
                                        </div>
                                    </li>

                            </div>
                            <div class="col-md">
                                <ul class="list-unstyled pb_food-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h3 class="pb_font-18 font-weight-bold">Organic Original</h3>
                                                <p>
                                                    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index']) ?>><img src="../images/restaurant/800x975/img_6.jpg" alt="Instant Image" class="img-fluid"></a>
                                                </p>
                                                </p>
                                            </div>
                                            <div class="col-lg-2"><span class="price"><sup>$</sup>20.00</span></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p><a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index']) ?> class="smoothscroll text-danger text-uppercase">View All <i class="ion-arrow-right-c"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="pb_md_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(../images/restaurant/1900x1200/img_4.jpg)" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9  order-md-1">
                <h2 class="heading mb-3">Delicious &amp; Nutritious</h2>
                <p class="sub-heading"> <a class="nav-link pb_letter-spacing-3">"If you have no Honey in your pot, have some in your mouth !  " Benjamin Franklin </p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="pb_section" id="section-gallery">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_11.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_11.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                <div class="card-columns">
            
                   

                    <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_7.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_7.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_8.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_8.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    
                    <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_9.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_9.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_11.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_11.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                   
                    <div class="card border-0 mb-4">
                        <a href="../images/restaurant/800x975/img_10.jpg" class="pb_hover-zoom image-popup">
                            <img class="img-fluid" src="../images/restaurant/800x975/img_10.jpg" alt="Image caption here">
                            <i class="ion-ios-search-strong icon"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="pb_section cover-bg-cyan cover-bg-opacity-3" id="section-reviews">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">What People Says...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">"I'm a cancer survivor and I take Paul's 260+ everyday and my immune system has improved dramatically and it also tastes great."</blockquote>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="../images/persons/person_10.jpg" alt="Generic placeholder image">
                        <h3 class="heading">Margaret</h3>
                        <p class="subheading">Berwick, Melbourne</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">"I gave the 260+ to my 7 year old son who had been diagnosed with coronavirus and within two days his sore throat and temperature subsided and he was tested negative after 4 days."</blockquote>
                        <img class="d-flex text-center mx-auto mb- rounded-circle" src="../images/persons/person_8.jpg" alt="Generic placeholder image">
                        <h3 class="heading">Jason</h3>
                        <p class="subheading">Hong Kong</p>

                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="media d-block text-center testimonial_v1 pb_quote_v1">

                    <div class="media-body">
                        <div class="quote pb_text-black">&ldquo;</div>
                        <blockquote class="mb-5 pb_font-20">"I love the 40+ honey and take it everyday and give it to my family and it tastes great and the price is excellent."</blockquote>
                        <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="../images/persons/person_9.jpg" alt="Generic placeholder image">
                        <h3 class="heading">Ming</h3>
                        <p class="subheading">Box Hill, Melbourne</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<footer class="pb_footer bg-light" role="contentinfo">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/PaulsHealthyHoney/" class="p-2"><i class="fa fa-facebook fa-2x me-2"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCkAJRCv4n8txNXAWaUgFssA" class="p-2"><i class="fa fa-youtube fa-2x"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/paulshealthyhoney/?hl=en" class="p-2"><i class="fa fa-instagram fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>&copy; 2017 <a href="https://uicookies.com/wrapbootstrap/instant">Instant</a>. All Rights Reserved. Designed by <a href="https://uicookies.com/">uiCookies</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>


<script src="../js/jquery.min.js"></script>

<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/jquery.mb.YTPlayer.min.js"></script>

<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>

<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>




<script src="../js/main.js"></script>

</body>
</html>
