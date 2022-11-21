<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Paul's Healthy Honey</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400, 600, 700" rel="stylesheet">

    <?php echo $this->Html->css(['forms', 'tables', 'menu']);?>
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
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="home">PAUL'S HEALTHY HONEY</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'about']) ?>>About</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index2']) ?>>Products</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'view', $this->Identity->get('id')]) ?>>My Account</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<section class="pb_cover_v1 cover-bg-black cover-bg-opacity-6 text-center" style="background-image: url(../images/restaurant/1900x1200/img_1.jpg)" id="section-home">



    <?= $this->fetch('content');?>
</section>
<!-- END section -->
<footer class="pb_footer bg-" role="contentinfo">
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

