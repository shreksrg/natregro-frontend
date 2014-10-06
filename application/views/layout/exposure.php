<ul class="mtab">
    <li><a href="<?= APP_URL ?>/feedback">反馈投诉</a></li>
    <li><a href="<?= APP_URL ?>/news/exposure?c=line">行业新闻</a></li>
    <li><a href="<?= APP_URL ?>/news/exposure?c=self">诚信台</a></li>
</ul>

<script>
    var selIndex = <?=$selIndex?>;
    $('.mtab li').removeAttr('id');
    $('.mtab li').eq(selIndex).attr('id', 'mtab_current');
</script>