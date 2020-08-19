<?php
$this->assign('title', ' ');
echo $this->Html->script('https://unpkg.com/artplayer/dist/artplayer.js')
?>
<div class="artplayer-app"></div>
<script>
    $(document).ready(function () {
        $('.artplayer-app').css('height', window.innerHeight - 140);
        var art = new Artplayer({
            container: '.artplayer-app',
            url: '/videos/<?= $video->video ?>',
            autoplay: true,
            autoSize: true,
            fullscreen: true,
            title: '<?= $video->title ?>'
        });
    });
</script>
