<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Instant &mdash; Free Restaurant Bootstrap 4 Template by uicookies.com</title>
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
<style>
    .topnav {
        background-color: #ffffff;
        overflow: hidden;
        height: 100px;
    }
    .topnav a {
        color: #000000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        line-height: 100px;

    }
    .products index content{
        margin: 15px;
    }



</style>
<!--navigation bar-->

    <div class="topnav" style="text-align: center;">

        <a class="active" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Home</a>
        <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index']) ?>>Products</a>
        <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'about']) ?>>About</a>

    </div>



<div class="products index content ">
<h3><?= h($customer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($customer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($customer->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($customer->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($customer->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Num') ?></th>
                    <td><?= $this->Number->format($customer->contact_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dob') ?></th>
                    <td><?= h($customer->dob) ?></td>
                </tr>
            </table>

            <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($customer->orders)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Date') ?></th>
                                <th><?= __('Sale Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Customer Id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($customer->orders as $orders) : ?>
                                <tr>
                                    <td><?= h($orders->id) ?></td>
                                    <td><?= h($orders->date) ?></td>
                                    <td><?= h($orders->sale_price) ?></td>
                                    <td><?= h($orders->quantity) ?></td>
                                    <td><?= h($orders->customer_id) ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>


</div>

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
