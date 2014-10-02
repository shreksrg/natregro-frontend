<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_tb.jpg) no-repeat center bottom fixed;
    }

</style>
<script>
    $(function () {
        $("#nav li.nav5 > a").css("color", "#fff000").css("background", "#0b7d3a");
    });
</script>
</head>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 1));
?>

<div class="jobs_list">
    <ul class="tblist">
        <?php
        if ($actives) {
            foreach ($actives as $active) {
                $img = $active['thumb'];
                ?>
                <li>
                    <a href="/news/show?r=active&t=news&id=<?=$active['id']?>">
                    <img src="<?= $img ?>" width="240" height="156" alt=""/></a>

                    <p><a href="/news/show?r=active&t=news&id=<?=$active['id']?>"><?= $active['title'] ?></a> </p>
                    <?= $active['description'] ?>
                </li>
            <?php
            }
        } ?>
    </ul>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

</html>
