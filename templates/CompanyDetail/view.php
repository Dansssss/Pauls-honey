<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyDetail $companyDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company Detail'), ['action' => 'edit', $companyDetail->name], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company Detail'), ['action' => 'delete', $companyDetail->name], ['confirm' => __('Are you sure you want to delete # {0}?', $companyDetail->name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Company Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companyDetail view content">
            <h3><?= h($companyDetail->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($companyDetail->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($companyDetail->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Scope') ?></th>
                    <td><?= h($companyDetail->business_scope) ?></td>
                </tr>
                <tr>
                    <th><?= __('Established Time') ?></th>
                    <td><?= h($companyDetail->established_time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
