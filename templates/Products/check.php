<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
// echo $this->Html->css(['restaurant','style','helpers','slick']);
?>


<div class="products index content">



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
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>

                
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
