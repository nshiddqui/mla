<?php

foreach ($results as $result) {
    $this->DataTables->prepareData([
        h($result->title),
        h($subjects[$result->subject]),
        $this->Html->link(__('<i class="fa fa-video-camera"></i>'), ['action' => 'play', $result->id], ['class' => 'btn btn-info', 'escape' => false, 'target' => '_blank',]) . '&nbsp;' .
        (($authUser['role'] === 1) ?
                $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', $result->id], ['class' => 'btn btn-info', 'escape' => false]) . '&nbsp;' .
                $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->title), 'class' => 'btn btn-info', 'escape' => false]) : '')
    ]);
}
echo $this->DataTables->response();
