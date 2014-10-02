<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>

<body>
<div class="news_menu">
    <?php

    $catId = $news['catid'];
    $headerArr = array(
        2 => array('title' => '新闻 / 公告', 'desc' => '传播价值理念、传扬优秀文化、瞻注商海动态'),
        9 => array('title' => '曝光台', 'desc' => '我们拒绝一切不诚信的行为，并且敢于将这些行为公开曝光！'),
        10 => array('title' => '行业曝光', 'desc' => '我们拒绝一切不诚信的行为，并且敢于将这些行为公开曝光！'),
        12 => array('title' => '员工活动', 'desc' => ''),
    );
    ?>
    <div class="left_title">
        <h2><?= $headerArr[$catId]['title'] ?></h2>

        <p><?= $headerArr[$catId]['desc'] ?></p>
    </div>
    <a class="prev" href="<?= APP_URL ?>/news/show">上一篇</a>
    <a class="next" href="<?= APP_URL ?>/news/show">下一篇</a>
    <a class="goback" href="<?= APP_URL ?>/news/?r=<?= $route ?>&c=<?= $tag ?>">返回</a>

</div>
<div class="news_cont">

    <h2><?= $news['title'] ?><span><?= date('Y-m-d', $news['inputtime']) ?></span></h2>

    <div class="news_text">
        <?= $news['content'] ?>

    </div>
</div>

<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


<script>
    $('.prev,.next').click(function () {
        var _this = $(this);
        $.get('<?=APP_URL?>/news/turns?t=<?=$type?>&do=' + _this.attr('class'), {id:<?=$news['id']?>}, function (r) {
            if (r.code == 0) {
                var id = r.data;
                if (id > 0)
                    location.href = _this.attr('href') + '?r=<?=$route?>&t=<?=$type?>&c=<?=$tag?>&id=' + r.data;
            }
        }, 'json')
        return false;
    })
</script>
</body>
</html>
