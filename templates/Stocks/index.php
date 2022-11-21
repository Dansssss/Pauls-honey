<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock[]|\Cake\Collection\CollectionInterface $stocks
 */
?>
<div class="stocks index content">
    <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stocks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_name') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('old_quantity') ?></th>
                    <th><?= $this->Paginator->sort('new_quantity') ?></th>
                    <th><?= $this->Paginator->sort('cost_price') ?></th>
                    <th><?= $this->Paginator->sort('selling_price') ?></th>
                    <th><?= $this->Paginator->sort('date_of_manufacture') ?></th>
                    <th><?= $this->Paginator->sort('expiration_date') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stocks as $stock): ?>
                <tr>
                    <td><?= $this->Number->format($stock->id) ?></td>
                    <td><?= h($stock->product_name) ?></td>
                    <td><?= h($stock->date) ?></td>
                    <td><?= $this->Number->format($stock->old_quantity) ?></td>
                    <td><?= $this->Number->format($stock->new_quantity) ?></td>
                    <td><?= $this->Number->format($stock->cost_price) ?></td>
                    <td><?= $this->Number->format($stock->selling_price) ?></td>
                    <td><?= h($stock->date_of_manufacture) ?></td>
                    <td><?= h($stock->expiration_date) ?></td>
                    <td><?= $stock->has('product') ? $this->Html->link($stock->product->name, ['controller' => 'Products', 'action' => 'view', $stock->product->id]) : '' ?></td>
                    <td><?= $stock->has('order') ? $this->Html->link($stock->order->id, ['controller' => 'Orders', 'action' => 'view', $stock->order->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
