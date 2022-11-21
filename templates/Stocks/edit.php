<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete Product'),
                ['action' => 'delete', $stock->id],
                ['confirm' => __('Are you sure you want to delete this product?', $stock->id), 'class' => 'side-nav-item']
            ) ?>
            <a href=<?= $this->Url->build(['controller'=> 'Stocks','action' => 'inventory']) ?>>Back to Dashboard</a>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks form content">
            <?= $this->Form->create($stock) ?>
            <fieldset>
                <legend><?= __('Edit Stock') ?></legend>
                <?php
                    echo $this->Form->control('product_name');
                    echo $this->Form->control('old_quantity');
                    echo $this->Form->control('new_quantity');
                    echo $this->Form->control('cost_price');
                    echo $this->Form->control('selling_price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
