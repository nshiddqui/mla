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
    <!-- search form -->
    <!--                    <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>-->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> <span>Dashboard</span>', ['controller' => 'dashboard', 'action' => 'index'], ['escape' => false]) ?>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Order Managements</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> New Order', ['controller' => 'orders', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> Upload Orders', ['controller' => 'orders', 'action' => 'upload'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> List Orders', ['controller' => 'orders', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>
        <?php if ($authUser['role'] === 1) { ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Client Managements</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> New Client', ['controller' => 'users', 'action' => 'add'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> List Clients', ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</section>