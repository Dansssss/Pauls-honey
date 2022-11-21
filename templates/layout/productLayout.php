<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

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

    <?php include '../templates/Customers/NavBar.php'; ?>

</div>

<div class="products index content ">
    <h3><?= __('Products') ?></h3>

    <!--code for search bar-->

    <?= $this->Form->create(null,['type'=>'get'])?>
    <?= $this->Form->control('key',['label'=>'Search','value'=>$this->request->getQuery('key')])?>
    <?= $this->Form->submit()?>
    <?= $this->Form->end()?>

    &nbsp;&nbsp;
    <div>
        <h5>
            <th>Sort:&nbsp;&nbsp;&nbsp;&nbsp;<?= $this->Paginator->sort('title') ?></th>&nbsp;&nbsp;&nbsp;&nbsp;
            <th><?= $this->Paginator->sort('price') ?></th>
        </h5>
    </div>

    <div class="col-lg-4_col-md-6_mb-4" >

        <?php foreach ($products as $product): ?>
            <div class="card_h-100" style="display: inline-block">
            <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'view',$product->id]) ?>><?= @$this->Html->image($product->image) ?></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'view',$product->id]) ?>><?= h($product->title) ?></a>
                </h4>
                <h5>$<?= $this->Number->format($product->price) ?> ($AUD)</h5>
                <button type="button" class="btn btn-warning">

                    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'test',$product->id]) ?>>BUY NOW</a>
                </button>


                <!--<div class="card-footer">-->
                <!--<input type="text" name="quantity" class="form-control" value="2"/>-->

                <!--<input type="hidden" name="hidden_price"  value="$<?= $this->Number->format($product->price) ?> ($AUD)"/>-->
                <!--<input type="hidden" name="hidden_name"  value="<?= h($product->title) ?>"/>-->


                <!--</div>-->



            </div>


            </div><?php endforeach; ?>

    </div>


    <script
        src="https://www.paypal.com/sdk/js?client-id=AXcyU9du1QzR4MxJknNF-hV4XZBQSDV6GGW47oIrIat_FC_BflUo2sNujfmQ3LUtYB1LSu4SxcW6r9LU&currency=AUD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
    </script>
    <script>
        var cartTotal = 1
        paypal.Buttons({
            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency_code: "AUD",
                            value: cartTotal
                        }
                    }]
                });
            },

        }).render('#paypal-button-container');
    </script>



    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>


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
