<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>


<div class="container">
<div class="products index content">




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
                <h5>$<?= $this->Number->format($product->price) ?></h5>

                <div class="card-footer">
                    <input type="text" name="quantity" class="form-control" value="1"/>
                    <input type="" name="hidden_price"  value="<?php echo $row["price"];?>"/>
                    
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
</div>
