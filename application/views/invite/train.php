<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>

<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_tb.jpg) no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>
<script>
    $(function () {
        $("#nav li.nav5 > a").css("color", "#fff000").css("background", "#0b7d3a");
    });
</script>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 2));
?>
<div class="jobs_list">
    <ul class="hrdev">
        <?= $train['content'] ?>
    </ul>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

</html>
