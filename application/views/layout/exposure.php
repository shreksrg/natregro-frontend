<ul class="mtab">
    <li><a href="<?= APP_URL ?>/news/exposure?r=feed">反馈投诉</a></li>
    <li><a href="<?= APP_URL ?>/news/exposure?r=line">行业曝光</a></li>
    <li><a href="<?= APP_URL ?>/news/exposure?r=self">明康汇自曝</a></li>
</ul>

<script>
    var selIndex = <?=$selIndex?>;
    $('.mtab li').removeAttr('id');
    $('.mtab li').eq(selIndex).attr('id', 'mtab_current');
</script>