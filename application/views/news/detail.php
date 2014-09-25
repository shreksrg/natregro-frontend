<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>

<body>
<div class="news_menu">
    <div class="left_title">
        <h2>新闻 / 公告</h2>

        <p>传播价值理念、传扬优秀文化、瞻注商海动态</p>
    </div>
    <a class="prev" href="<?= APP_URL ?>/news/show">上一篇</a>
    <a class="next" href="<?= APP_URL ?>/news/show">下一篇</a>
    <a class="goback" href="news.html">返回</a>

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
                    location.href = _this.attr('href') + '?t=<?=$type?>&id=' + r.data;
            }
        }, 'json')
        return false;
    })
</script>
</body>
</html>
