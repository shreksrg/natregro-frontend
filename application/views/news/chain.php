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
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list6box.jpg) no-repeat right center fixed")
            $(".menu_cont_map").css("display", "block");
        } else if (a == 7) {
            $(".menu_list a.list7").addClass("cur");
            $("#list7box").addClass("show");
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list7box.jpg) no-repeat right center fixed")
        } else if (a == 8) {
            $(".menu_list a.list8").addClass("cur");
            $("#list8box").addClass("show");
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list8box.jpg) no-repeat right center fixed")
        } else if (a == 9) {
            $(".menu_list a.list9").addClass("cur");
            $("#list9box").addClass("show");
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list9box.jpg) no-repeat right center fixed")
        } else if (a == 10) {
            $(".menu_list a.list10").addClass("cur");
            $("#list10box").addClass("show");
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list10box.jpg) no-repeat right center fixed")
            $(".menu_cont_state").css("display", "block");

        } else {
            $(".menu_list a.list6").addClass("cur");
            $("#list6box").addClass("show");
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list6box.jpg) no-repeat right center fixed")
        }

        $("#nav li.nav3 > a").css("color", "#fff000").css("background", "#0b7d3a");
        $(".menu_list a").click(function () {
            if ($(this).attr("class") == "list11") return false;
            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box,.menu_cont_box_silder").css("display", "none")
            $("#" + $(this).attr("class").substring(0, 5) + "box").css("display", "block")
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_" + $(this).attr("class").substring(0, 5) + "box.jpg) no-repeat right center fixed")
            $(".menu_cont_map,.menu_cont_state").css("display", "none");
        });
        $(".menu_list a.list10").click(function () {

            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box").css("display", "none")
            $("#list10box").css("display", "block")
            $("body").css("background", "url(<?=WEB_PATH?>/public/img/bg_list10box.jpg) no-repeat right center fixed")
            $(".menu_cont_state").css("display", "block");
        });
        $(".menu_list a.list6").click(function () {
            $(".menu_cont_map").css("display", "block");
        });
    });
</script>
<style>
    <?php
       $imgBg=array(5=>5,6=>6,7=>7,8=>8,9=>9,10=>10);
   ?>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_list<?=$imgBg[$tag]?>box.jpg) no-repeat right center fixed;
    }
</style>
<body>
<div class="menu_cont_map">
    <div class="cbox">
        <a class="sh" href="#"></a>
        <a class="hz" href="#"></a>
    </div>
</div>

<div class="menu_cont_state">
    <!--    <img src="<? /*= WEB_PATH */ ?>/public/img/map_st.png" width="735" height="917" alt=""/>
-->
    <ul>
        <h2>江苏<p><span>J</span>iangSu</p></h2>
        <li><span>长江北 - 无锡市新区</span>无锡市新区长江北路280-286号哥伦布广场B1层</li>
        <li><span>延陵(吾悦) - 常州市钟楼区</span>常州市延陵西路123号吾悦国际广场 B1层</li>
        <li><span>工农南 - 南通市崇川区</span>南通市崇川区疏港路与工农路西北侧星耀城B1层</li>
        <li><span>江阴澄江中 - 无锡市江阴市澄江街道</span>江阴市澄江中路87-89号新一城B1层</li>
        <li><span>前进西 - 苏州昆山市玉山镇</span>昆山市前进西路祖冲之南路东北角</li>
    </ul>
    <ul>
        <h2>上海<p><span>S</span>hangHai</p></h2>
        <li><span>田林东 - 上海市徐汇区</span>上海市田林东路55号汇阳广场B1层</li>
        <li><span>国盛 - 上海市普陀区</span>上海市普陀区中江路大渡河路588号国盛中心1层</li>
    </ul>
    <ul>
        <h2>江苏<p><span>Z</span>heJiang</p></h2>
        <li><span>下城凤起项目 - 杭州市下城区</span>凤起路442号浙江外经贸广场综合楼 B1层</li>
        <li><span>上虞市民大道 - 绍兴市上虞区</span>上虞市市民大道621号金科时代潮城2层</li>
        <li><span>海盐勤俭 - 嘉兴市海盐市</span>嘉兴市海盐县勤俭南路165号2层</li>
        <li><span>古墩2 - 杭州市西湖区</span>杭州市西湖区古墩路87号浙商财富中心B1层</li>
        <li><span>南街 - 湖州市湖兴区</span>湖州市吴兴区南街558-590号银泰百货B1层</li>
        <li><span>庆丰中 - 嘉兴市桐乡市</span>桐乡市庆丰中路8-16号太平洋百货2层</li>
        <li><span>店口 - 绍兴诸暨市店口镇</span>诸暨中央路（海亮商务酒店）近胜利路</li>
    </ul>
</div>

<div class="menu_list">
    <a class="list5" href="#">产业概述</a>
    <a class="list6" href="#">农业基地</a>
    <a class="list7" href="#">食品加工</a>
    <a class="list8" href="#">质量检测</a>
    <a class="list9" href="#">物流配送</a>
    <a class="list10" href="#">实体门店</a>
    <a class="list11" href="###">追溯</a>
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
