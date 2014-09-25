<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>

<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/indexbg.jpg) no-repeat center 0;
    }
</style>
<body>

<div class="index_wrapper">
    <div class="indextitle"><a href="heath_travel.html">搜索明康全产业链 ></a></div>
    <div class="side">
        <a href="#"><img src="<?=WEB_PATH?>/public/img/index_side1.png" alt=""/></a>
        <a href="#"><img src="<?=WEB_PATH?>/public/img/index_side2.png" alt=""/></a>
        <a href="#"><img src="<?=WEB_PATH?>/public/img/index_side3.png" alt=""/></a>
        <a href="#"><img src="<?=WEB_PATH?>/public/img/index_side4.png" alt=""/></a>
    </div>
</div>

<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


</body>
</html>
