<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>


    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Customer</h1>

            <div class="card mb-4">
            <div class="customers index content">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('dob') ?></th>
                            <th><?= $this->Paginator->sort('address') ?></th>
                            <th><?= $this->Paginator->sort('contact_num') ?></th>
                            <th><?= $this->Paginator->sort('type') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('dob') ?></th>
                            <th><?= $this->Paginator->sort('address') ?></th>
                            <th><?= $this->Paginator->sort('contact_num') ?></th>
                            <th><?= $this->Paginator->sort('type') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($customers as $customer): ?>
                            <tr>
                                <td><?= $this->Number->format($customer->id) ?></td>
                                <td><?= h($customer->name) ?></td>
                                <td><?= h($customer->dob) ?></td>
                                <td><?= h($customer->address) ?></td>
                                <td><?= $this->Number->format($customer->contact_num) ?></td>
                                <td><?= h($customer->type) ?></td>
                                <td><?= h($customer->email) ?></td>


                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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





