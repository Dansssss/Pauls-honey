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
            <h4 class="heading"><?= __('My Account') ?></h4>
            <?php if ($this->Identity->get('user_role')==1){?>
                <?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete your account?'), 'class' => 'side-nav-item']) ?>
                <a href=<?= $this->Url->build(['controller'=> 'Customers','action' => 'check']) ?>>Back to Dashboard</a>


            <?php }elseif ($this->Identity->get('user_role')==0){ ?>

            <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete your account?'), 'class' => 'side-nav-item']) ?>
            <a href=<?= $this->Url->build(['controller'=> 'Customers','action' => 'logout']) ?>>Logout</a>

            <?php }?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3>My Account</h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($customer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($customer->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($customer->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($customer->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Num') ?></th>
                    <td><?= h($customer->contact_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dob') ?></th>
                    <td><?= h($customer->dob) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($customer->orders)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Date') ?></th>
                                <th><?= __('Sale Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Customer Id') ?></th>
                                <th><?= __('Status') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($customer->orders as $orders) : ?>
                                <tr>
                                    <td><?= h($orders->id) ?></td>
                                    <td><?= h($orders->date) ?></td>
                                    <td><?= h($orders->sale_price) ?></td>
                                    <td><?= h($orders->quantity) ?></td>
                                    <td><?= h($orders->customer_id) ?></td>
                                    <td><?= h($orders->status) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
