<?php
$this->assign('title', 'Students');
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">List Students</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?= $this->DataTables->render('Users') ?>
    </div>
</div>