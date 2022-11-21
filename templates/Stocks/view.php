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
            <?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks view content">
            <h3><?= h($stock->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($stock->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $stock->has('product') ? $this->Html->link($stock->product->name, ['controller' => 'Products', 'action' => 'view', $stock->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $stock->has('order') ? $this->Html->link($stock->order->id, ['controller' => 'Orders', 'action' => 'view', $stock->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Old Quantity') ?></th>
                    <td><?= $this->Number->format($stock->old_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('New Quantity') ?></th>
                    <td><?= $this->Number->format($stock->new_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost Price') ?></th>
                    <td><?= $this->Number->format($stock->cost_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Selling Price') ?></th>
                    <td><?= $this->Number->format($stock->selling_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($stock->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Manufacture') ?></th>
                    <td><?= h($stock->date_of_manufacture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiration Date') ?></th>
                    <td><?= h($stock->expiration_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
