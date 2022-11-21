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
<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>

        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <h5><a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Back to Home Page </a></h5>

    <?= $this->Form->end() ?>
    <h5><?= $this->Html->link("Sign Up", ['controller'=> 'Customers','action' => 'add']) ?></h5>


</div>

