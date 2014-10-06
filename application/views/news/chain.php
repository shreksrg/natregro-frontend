<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<script>
    $(function () {
        var LocString = String(window.document.location.href);

        function GetQueryString(str) {
            var rs = new RegExp("(^|)" + str + "=([^\&]*)(\&|$)", "gi").exec(LocString), tmp;
            if (tmp = rs)return tmp[2];
            return "没有这个参数";
        }

        //获取参数
        // var a = GetQueryString("page");
        var a =<?=$tag?>;
        if (a == 5) {
            $(".menu_list a.list5").addClass("cur");
            $("#list5box").addClass("show");
        } else if (a == 6) {
            $(".menu_list a.list6").addClass("cur");
            $("#list6box").addClass("show");
        } else if (a == 7) {
            $(".menu_list a.list7").addClass("cur");
            $("#list7box").addClass("show");
        } else if (a == 8) {
            $(".menu_list a.list8").addClass("cur");
            $("#list8box").addClass("show");
        } else if (a == 9) {
            $(".menu_list a.list9").addClass("cur");
            $("#list9box").addClass("show");
        } else if (a == 10) {
            $(".menu_list a.list10").addClass("cur");
            $("#list10box").addClass("show");
        } else {
            $(".menu_list a.list6").addClass("cur");
            $("#list6box").addClass("show");
        }

        $("#nav li.nav3 > a").css("color", "#fff000").css("background", "#0b7d3a");
        $(".menu_list a").click(function () {
            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box,.menu_cont_box_silder").css("display", "none")
            $("#" + $(this).attr("class").substring(0, 5) + "box").css("display", "block")
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_" + $(this).attr("class").substring(0, 5) + "box.jpg) no-repeat right center fixed")
        });
        $(".menu_list a.list10").click(function () {
            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box").css("display", "none")
            $("#list10box").css("display", "block")
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list10box.jpg) no-repeat right center fixed")
        });
    });
</script>
<style>
    <?php
       $imgBg=array(6=>6,7=>7,8=>8,9=>9,10=>10);
   ?>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_list<?=$imgBg[$tag]?>box.jpg) no-repeat right center fixed;
    }
</style>
<body>
<div class="menu_list">
    <a class="list5" href="#">产业概述</a>
    <a class="list6" href="#">农业基地</a>
    <a class="list7" href="#">食品加工</a>
    <a class="list8" href="#">质量检测</a>
    <a class="list9" href="#">物流配送</a>
    <a class="list10" href="#">实体门店</a>
</div>
<div id="list5box" class="menu_cont_box_silder">
    <?php
    if (isset($news[24])) {
        echo $news[24]['content'];
    }
    ?>
</div>

<div id="list6box" class="menu_cont_box">
    <?php
    if (isset($news[25])) {
        echo $news[25]['content'];
    }
    ?>

</div>

<div id="list7box" class="menu_cont_box">

    <?php
    if (isset($news[26])) {
        echo $news[26]['content'];
    }
    ?>

</div>

<div id="list8box" class="menu_cont_box"
     style="background:#fff url(<?= WEB_PATH ?>/public/img/menu_cont_box_pic_bg81.jpg) center bottom no-repeat;">

    <?php
    if (isset($news[27])) {
        echo $news[27]['content'];
    }
    ?>

</div>

<div id="list9box" class="menu_cont_box">
    <?php
    if (isset($news[28])) {
        echo $news[28]['content'];
    }
    ?>

</div>

<div id="list10box" class="menu_cont_box">
    <?php
    if (isset($news[29])) {
        echo $news[29]['content'];
    }
    ?>

</div>



<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>
</html>
