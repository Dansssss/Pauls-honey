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
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks form content">
            <?= $this->Form->create($stock) ?>
            <fieldset>
                <legend><?= __('Add Stock') ?></legend>
                <?php
                    echo $this->Form->control('product_name');
                    echo $this->Form->control('date');
                    echo $this->Form->control('old_quantity');
                    echo $this->Form->control('new_quantity');
                    echo $this->Form->control('cost_price');
                    echo $this->Form->control('selling_price');
                    echo $this->Form->control('date_of_manufacture');
                    echo $this->Form->control('expiration_date');
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('order_id', ['options' => $orders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
