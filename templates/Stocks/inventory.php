<?php
/**
 * @var AppView $this
 * @var Stock[]|CollectionInterface $stocks
 */

use App\Model\Entity\Stock;
use App\View\AppView;
use Cake\Collection\CollectionInterface;

?>


            <div class="container-fluid">
                <h1 class="mt-4">Inventory</h1>

                <div class="card mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>

                                    <th><?= $this->Paginator->sort('product_name') ?></th>
                                    <th><?= $this->Paginator->sort('old_quantity') ?></th>
                                    <th><?= $this->Paginator->sort('new_quantity') ?></th>
                                    <th><?= $this->Paginator->sort('cost_price') ?></th>
                                    <th><?= $this->Paginator->sort('selling_price') ?></th>




                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>

                                    <th><?= $this->Paginator->sort('product_name') ?></th>

                                    <th><?= $this->Paginator->sort('old_quantity') ?></th>
                                    <th><?= $this->Paginator->sort('new_quantity') ?></th>
                                    <th><?= $this->Paginator->sort('cost_price') ?></th>
                                    <th><?= $this->Paginator->sort('selling_price') ?></th>




                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($stocks as $stock): ?>
                                    <tr>

                                        <td><?= h($stock->product_name) ?></td>

                                        <td><?= $this->Number->format($stock->old_quantity) ?></td>
                                        <td><?= $this->Number->format($stock->new_quantity) ?></td>
                                        <td><?= $this->Number->format($stock->cost_price) ?></td>
                                        <td><?= $this->Number->format($stock->selling_price) ?></td>



                                        <td class="actions">
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete this product?', $stock->id)]) ?>
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
                </div>
            </div>



