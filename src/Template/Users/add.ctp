<?php
$this->assign('title', 'Students');
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('Add Student') ?></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <?= $this->Form->create($user) ?>
    <div class="box-body">
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('email');
        echo $this->Form->control('date_of_birth', ['type' => 'text', 'datepicker' => true]);
        echo $this->Form->control('course', ['options' => $courses]);
        echo $this->Form->control('address');
        echo $this->Form->control('password');
        ?>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <?= $this->Form->button(__('Add')) ?>
    </div>
    <?= $this->Form->end() ?>
    <!-- /.box-footer-->
</div>
<!-- /.box -->