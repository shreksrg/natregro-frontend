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
        // var a=GetQueryString("page");
        var a =<?=$tag?>;
        if (a == 3) {
            $(".menu_list a.list1").addClass("cur");
            $("#list1box").addClass("show");
        } else if (a == 1) {
            $(".menu_list a.list2").addClass("cur");
            $("#list2box").addClass("show");
        } else if (a == 2) {
            $(".menu_list a.list3").addClass("cur");
            $("#list3box").addClass("show");
        } else {
            $(".menu_list a.list1").addClass("cur");
            $("#list1box").addClass("show");
        }

        $("#nav li.nav2 > a").css("color", "#fff000").css("background", "#0b7d3a");
        $(".menu_list a").click(function () {
            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box").css("display", "none")
            $("#" + $(this).attr("class").substring(0, 5) + "box").css("display", "block")
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_" + $(this).attr("class").substring(0, 5) + "box.jpg) no-repeat right center fixed")
        });
    });
</script>
<style>
    <?php
        $imgBg=array(1=>2,2=>3,3=>1);
    ?>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_list<?=$imgBg[$tag]?>box.jpg) no-repeat right center fixed;
    }
</style>
<body>
<div class="menu_list">
    <a class="list1" href="#">海亮集团</a>
    <a class="list2" href="#">健康食品</a>
    <a class="list3" href="#">生态农业</a>
    <a class="list4" href="#">社会责任</a>
</div>


<div id="list1box" class="menu_cont_box">
    <?php
    if (isset($news[17])) {
        echo $news[17]['content'];
    }
    ?>
</div>
<div id="list2box" class="menu_cont_box">
    <?php
    if (isset($news[15])) {
        echo $news[15]['content'];
    }
    ?>

</div>
<div id="list3box" class="menu_cont_box" style="">
    <?php
    if (isset($news[16])) {
        echo $news[16]['content'];
    }
    ?>


</div>
<div id="list4box" class="menu_cont_box">
    <?php
    if (isset($news[30])) {
        echo $news[30]['content'];
    }
    ?>

</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


</body>
</html>
