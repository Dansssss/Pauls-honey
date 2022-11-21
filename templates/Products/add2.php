<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
<main>
        <div class="container-fluid">
            <h1 class="mt-4">Upload Products</h1>

            <div class="card mb-4">

                <div class="card-body">
                    <div class="column-responsive column-80">
                        <div class="products form content">
                            <?= $this->Form->create($product,['type' =>'file']) ?>
                            <fieldset>
                                <legend><?= __('Add Product') ?></legend>
                                <?php
                                    echo $this->Form->control('title');
                                    echo $this->Form->control('description');
                                    echo $this->Form->control('image_file',['type' =>'file']);
                                    echo $this->Form->control('supplier_id', ['options' => $suppliers]);
                                    echo $this->Form->control('price');
                                ?>
                            </fieldset>
                            <?= $this->Form->button(__('Submit')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            <div>
        <div>
<main>
<div>
