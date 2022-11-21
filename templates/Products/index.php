<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
// echo $this->Html->css(['restaurant','style','helpers','slick']);
?>


<div class="products index content">


<style>

        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #f8a830;
            color: white;
        }
    </style>


<!--navigation bar-->
<div class="topnav">
    <a class="active" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Home</a>
    <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index']) ?>>Products</a>
    <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'about']) ?>>About</a>
</div>
&nbsp;&nbsp;&nbsp;

    <h3><?= __('Products') ?></h3>


&nbsp;&nbsp;&nbsp;

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
                <h5>$<?= $this->Number->format($product->price) ?></h5>

                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>

        </div><?php endforeach; ?>
     </div>




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
