<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>

<head>

    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">

</head>

<div class="probootstrap-loader"></div>

<!-- END loader -->
<style>
    .topnav {
        background-color: #ffffff;
        overflow: hidden;
        height: 80px;
    }
    .topnav a {
        color: #000000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        line-height: 80px;

    }
    .products index content{
        margin: 15px;
    }



</style>
<!--navigation bar-->

<div class="topnav" style="text-align: center;">

    <?php include '../templates/Customers/NavBar.php'; ?>
</div>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Edit Profile') ?></h4>
            <?= $this->Form->postLink(
                __('Delete Account'),
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete your account?'), 'class' => 'side-nav-item']
            ) ?>
            <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'view',$this->Identity->get('id')]) ?>>Cancel </a>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit Profile') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('dob');
                    echo $this->Form->control('address');
                    echo $this->Form->control('contact_num');
                    echo $this->Form->control('type');
                    echo $this->Form->control('password');
                    echo $this->Form->control('email');
                    ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
