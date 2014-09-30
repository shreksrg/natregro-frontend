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
    <div class="indextitle"><!--<a href="heath_travel.html">搜索明康全产业链 ></a>--></div>
    <div class="side">
        <a class="side1" href="<?=APP_URL?>/invite"></a>
        <a class="side2" href="<?=APP_URL?>/news/chain?tag=5"></a>
        <a class="side3" href="<?=APP_URL?>/news/announce"></a>
        <div class="close"></div>
    </div>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>
<script>
    $(function(){
        $(".index_wrapper .side .close").click(function(){
            $(this).toggleClass("open");
            $(".index_wrapper .side").toggleClass("moveleft");
        });
    });
</script>
</body>
</html>


