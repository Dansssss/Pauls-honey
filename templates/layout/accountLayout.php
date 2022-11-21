<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Instant &mdash; Free Restaurant Bootstrap 4 Template by uicookies.com</title>
    <meta name="description" content="free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400, 600, 700" rel="stylesheet">

<!--    --><?php //echo $this->Html->css(['bootstrap/bootstrap','magnific-popup', 'slick', 'helpers', 'style', 'restaurant']);?>
<!---->
<!--    --><?php //echo $this->Html->css(['ionicons.min','font-awesome.min']); ?>

    <link rel="icon" type="image/ico" href="../webroot/favicon.ico">

</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">


<div class="probootstrap-loader"></div>

<!-- END loader -->
<style>
    .topnav {
        background-color: #ffffff;
        overflow: hidden;
        height: 80px;
    }
    .topnav a {
        color: #000000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        line-height: 80px;

    }
    .products index content{
        margin: 15px;
    }



</style>
<!--navigation bar-->

<div class="topnav" style="text-align: center;">

    <a class="active" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Home</a>
    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index2']) ?>>Products</a>
    <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'about']) ?>>About</a>
    <a href=<?=$this->Url->build(['controller' => 'Customers', 'action' => 'view', $this->Identity->get('id')]) ?>>My Account</a>

</div>

<div>
<section class="" style="background-image: url(../images/restaurant/1900x1200/img_1.jpg)" id="section-home">

    <?= $this->fetch('content');?>
</section>
</div>

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

<?php echo $this->Html->script(['jquery.min', 'popper.min', 'bootstrap.min', 'slick.min', 'jquery.mb.YTPlayer.min', 'jquery.waypoints.min', 'jquery.easing.1.3', 'jquery.magnific-popup.min', 'magnific-popup-options', 'main']); ?>


</body>
</html>
