<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <?= $this->Html->image('user.png', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
        </div>
        <div class="pull-left info">
            <p>User</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> <span>Dashboard</span>', ['controller' => 'dashboard', 'action' => 'index'], ['escape' => false]) ?>
        </li>
        <?php if ($authUser['role'] === 1) { ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Student Managements</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> New Student', ['controller' => 'users', 'action' => 'add'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> List Students', ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-video-camera"></i>
                    <span>Video Managements</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> New Video', ['controller' => 'videos', 'action' => 'add'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> List Videos', ['controller' => 'videos', 'action' => 'index'], ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</section>