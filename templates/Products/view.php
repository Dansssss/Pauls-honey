<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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

<?php include '../templates/Customers/NavBar.php'; ?>


</div>

<div class="row">
<!--    <aside class="column">-->
<!--        <div class="side-nav">-->
<!--            <h4 class="heading">--><?//= __('Actions') ?><!--</h4>-->
<!--            --><!--<?//= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>-->
<!--            --><!--<?//= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>-->
<!--            --><!--<?//= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>-->
<!--            --><!--<?//= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>-->
<!--        </div>-->
<!--    </aside>-->
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('image') ?></th>
                    <td><?= @$this->Html->image($product->image) ?></td>
                </tr>

                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($product->description) ?></td>
                </tr>

                <tr>
                    <th><?= __('Price ($AUD)') ?></th>
                    <td><?= $this->Number->format($product->price) ?></td>
                </tr>



            </table>
        </div>





    </div>

