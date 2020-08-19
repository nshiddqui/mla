<?php
$this->assign('title', 'Videos');
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">List Videos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?= $this->DataTables->render('Videos') ?>
    </div>
</div>
