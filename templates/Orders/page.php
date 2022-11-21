<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Order</h1>

            <div class="card mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('date') ?></th>
                                <th><?= $this->Paginator->sort('sale_price') ?></th>
                                <th><?= $this->Paginator->sort('quantity') ?></th>
                                <th><?= $this->Paginator->sort('customer_id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('date') ?></th>
                                <th><?= $this->Paginator->sort('sale_price') ?></th>
                                <th><?= $this->Paginator->sort('quantity') ?></th>
                                <th><?= $this->Paginator->sort('customer_id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td><?= $this->Number->format($order->id) ?></td>
                                    <td><?= h($order->date) ?></td>
                                    <td><?= $this->Number->format($order->sale_price) ?></td>
                                    <td><?= $this->Number->format($order->quantity) ?></td>
                                    <td><?= $order->has('customer') ? $this->Html->link($order->customer->name, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
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
    </main>
<div>





