<div class="wxmenu">
    <h2>所有职位</h2>
    <a href="<?= APP_URL ?>/invite" target="_self">所有职位</a>
    <a href="<?= APP_URL ?>/news/active">员工活动</a>
    <a href="<?= APP_URL ?>/invite/train?r=list">员工发展与培养</a>
    <a href="<?= APP_URL ?>/invite/contact">联系我们</a>


</div>

<script>
    var selIndex = <?=$selIndex?>;
    $('.wxmenu a').removeClass('cur');
    $('.wxmenu a').eq(selIndex).addClass('cur')
</script>