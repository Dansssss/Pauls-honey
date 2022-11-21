<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>

<head>

    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">

</head>

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
<div class="row" >

    <div class="column-responsive column-80" >
        <div class="orders view content" >
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $order->has('customer') ? $this->Html->link($order->customer->name, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sale Price') ?></th>
                    <td><?= $this->Number->format($order->sale_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($order->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($order->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($order->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Image') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->products as $products) : ?>
                        <tr>
                            <td><?= h($products->title) ?></td>
                            <td><?= @$this->Html->image($products->image) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
