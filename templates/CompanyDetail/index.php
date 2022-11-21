<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyDetail[]|\Cake\Collection\CollectionInterface $companyDetail
 */
?>
<div class="companyDetail index content">
    <?= $this->Html->link(__('New Company Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Company Detail') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('established_time') ?></th>
                    <th><?= $this->Paginator->sort('business_scope') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($companyDetail as $companyDetail): ?>
                <tr>
                    <td><?= h($companyDetail->name) ?></td>
                    <td><?= h($companyDetail->address) ?></td>
                    <td><?= h($companyDetail->established_time) ?></td>
                    <td><?= h($companyDetail->business_scope) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $companyDetail->name]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companyDetail->name]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companyDetail->name], ['confirm' => __('Are you sure you want to delete # {0}?', $companyDetail->name)]) ?>
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
