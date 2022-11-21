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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $companyDetail->name],
                ['confirm' => __('Are you sure you want to delete # {0}?', $companyDetail->name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Company Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companyDetail form content">
            <?= $this->Form->create($companyDetail) ?>
            <fieldset>
                <legend><?= __('Edit Company Detail') ?></legend>
                <?php
                    echo $this->Form->control('address');
                    echo $this->Form->control('established_time');
                    echo $this->Form->control('business_scope');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
