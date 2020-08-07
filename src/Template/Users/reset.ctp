<?php $cakeDescription = 'UR-Delivery'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <?= $this->Html->component('bootstrap/dist/css/bootstrap.min', 'css') ?>
        <!-- Font Awesome -->
        <?= $this->Html->component('font-awesome/dist/css/font-awesome.min', 'css') ?>
        <!-- Ionicons -->
        <?= $this->Html->component('Ionicons/dist/css/ionicons.min', 'css') ?>
        <!-- Theme style -->
        <?= $this->Html->css('AdminLTE.min') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') ?>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <?= $this->Html->image('logo.png', ['class' => 'img-fluid', 'height' => '100']) ?>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Change Your Password</p>
                <?= $this->Flash->render() ?>
                <!-- Forgot Password form start here -->
                <?= $this->Form->create($userDetails, ['class' => 'user']) ?>
                <!-- Enter Password -->
                <?= $this->Form->control('password', ['label' => false, 'placeholder' => 'Password', 'required' => true]) ?>
                <!-- Enter Confirmed Password -->
                <?= $this->Form->control('confirm_password', ['label' => false, 'type' => 'password', 'required' => true, 'placeholder' => 'Confirm Password', 'required' => true]) ?>
                <!-- Trigger to Send Password -->
                <?= $this->Form->button('Change Password', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                <!-- End Form Element -->
                <?= $this->Form->end() ?>
                <hr>
                <?= $this->Html->link('login', ['controller' => 'users', 'action' => 'login']) ?>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <?= $this->Html->component('jquery/dist/jquery.min', 'script') ?>
        <!-- Bootstrap 3.3.7 -->
        <?= $this->Html->component('bootstrap/dist/js/bootstrap.min', 'script') ?>
    </body>
</html>