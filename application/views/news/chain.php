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
            $("body").css("background", "url(/public/img/bg_" + $(this).attr("class").substring(0, 5) + "box.jpg) no-repeat right center fixed")
        });
        $(".menu_list a.list10").click(function () {
            $(".menu_list a").removeClass("cur");
            $(this).addClass("cur");
            $(".menu_cont_box").css("display", "none")
            $("#list10box").css("display", "block")
            $("body").css("background", "url(/public/img/bg_list10box.jpg) no-repeat right center fixed")
        });
    });
</script>
<style>
    body {
        background: url(/public/img/bg_list1box.jpg) no-repeat right center fixed;
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
    <div class="map"></div>
</div>

<div id="list6box" class="menu_cont_box">
    <h5>我们自己的</h5>

    <h1>农业基地</h1>

    <h3>优选基地——良田方能出良品生活</h3>

    <div class="dec">
        <div class="pic"><img src="/public/img/menu_cont_box_pic61.jpg" alt=""/></div>
        <b>“望、闻、问、切”法，按照有机的高标准挑选适宜的生产基地。</b><br/>
        <table width="100%" border="0" cellspacing="8" cellpadding="0">
            <tr>
                <td valign="top" class="td_b">望：</td>
                <td>观察周边环境，选择远离城区，无工业污染源、生活垃圾场，生态优美、交通便利的基地</td>
            </tr>
            <tr>
                <td valign="top" class="td_b">闻：</td>
                <td>听周围环境是否有虫鸟叫声，选择生态系统平衡，生物具有多样性的基地</td>
            </tr>
            <tr>
                <td valign="top" class="td_b">问：</td>
                <td>通过询问当地农民，深入了解当地耕种历史模式与风土民情</td>
            </tr>
            <tr>
                <td valign="top" class="td_b">切：</td>
                <td>采水、土样品进行检测，摒弃产地土地中重金属、农残与灌溉水、大气中有害物质超标的基地</td>
            </tr>
        </table>
    </div>
    <h3>全国布局</h3>

    <div class="dec">
        明康汇规划布局，是迄今全国综合规模最大、投入最大的健康食品产业布局：<br/><br/>
        <ul class="">
            <li>◆ 以东北、西北为粮食、饲料的主要种植基地</li>
            <li>◆ 以华东地区为禽畜养殖基地</li>
            <li>◆ 在全国特色农产品产地建立大批包括蔬菜、水果在内的优质农产品基地</li>
        </ul>
    </div>

</div>

<div id="list7box" class="menu_cont_box">
    <h5>我们自己的</h5>

    <h1>食品加工中心</h1>

    <h3>长三角食品加工基地 —— 金山基地</h3>

    <div class="dec">
        <p>2013 年11 月1 日，海亮长三角有机食品加工基地（以下简称“金山基地”）开工奠基典礼在上海金山廊下镇隆重举行。截止2014 年6 月，项目工期已顺利过半，力保2014 年12 月1
            日正式建成投产。明康汇加工基地拥有肉制品、果蔬、豆制品、烘焙等初、深加工产品区域，特设透明的中央厨房，是国内规模最大癿安全健康食品加工中心。</p>

        <p>上海地处中国漫长海岸线的中心，世界第三大河、亚洲第一大河——长江入海口以及长三角城市群龙头核心。金山区廊下镇农业资源丰富，被定位为上海市市级现代农业园区，区域面积为51 平方公里，实行镇与园区合一管理体制。</p>

        <div class="pic"><img src="/public/img/menu_cont_box_pic_71.jpg" alt=""/></div>
        <p>海亮长三角有机食品加工基地选择落户上海金山廊下镇。目前，上海海亮有机食品供应链有限公司承担海亮健康食品集团“生产加工”职能，注册资本1 亿，总投资约16 亿，在上海金山廊下镇占地500
            亩，按照“一次规划、分期建设”，分3 期建设成集研发、检测、办公、生产加工、仓储、配送等一体的综合产业园。</p>

        <p>金山基地1期建设分为A、B、C三区，占地面积超10万平方米，总建筑面积超14万平方米。
            基地A区主要为集团检测中心及职工宿舍等，占地面积超1.4万平方米，总建筑面积近1.9万平方米，于6月12日主体结构封顶，预计10月30日完工交付使用。 </p>

        <p>金山基地B区位于桑叶港河东侧、荣春路南侧，主要为包装及配送中心，占地面积超4万平方米，总建筑面积超4.7万平方米，将于8月4日主体结构封顶，10月30日完工交付使用。
            金山基地C区位于桑叶港河东侧、荣春路北侧，主要为加工车间及仓储等，占地面积超4.7万平方米，总建筑面积超7.5万平方米，将于7月15日主体结构封顶，10月30日完工交付使用。 </p>
    </div>
</div>

<div id="list8box" class="menu_cont_box"
     style="background:#fff url(/public/img/menu_cont_box_pic_bg81.jpg) center bottom no-repeat;">
    <h5>我们自己的</h5>

    <h1>质量检测中心</h1>

    <h3>全产品链质量管理体系</h3>

    <div class="dec">
        <p>明康汇，建立从农场到餐桌的全产品链质量管理体系，全方位保障食品安全与品质。
            明康汇金山基地总投资1.5亿，将建立面积约5000平米的国家级检测中心，引入先进的检测设备，为产品的质量安全提供强大的支撑。通过高于国家标准的苛刻的质量标准体系对原料、种植、生产、加工、运输、销售等环节都进行严格的检测控制。</p>

        <p style="font-weight:bold;">明康汇的质量方针：安全安心、健康美味、服务极致、顾客满意！</p>
    </div>
    <h3>明康汇的质量管理基本准则</h3>

    <div class="dec">
        <p>
            食品安全是明康汇产品的基本要求，也是质量管理的基本准则。明康汇通过从农场到餐桌整个产业链全面、有效、可溯的监控和管理，确保争创世界一流的质量管理体系，为顾客提供安全的产品。在此前提下，通过一系列市场推广活动让顾客感受到海亮产品的高品质，安心购买海亮产品。</p>

        <p>顾客的满意是海亮追求的终极目标，也是海亮持续发展的动力源泉，全公司员工必须孜孜不倦、精益求精的实现顾客满意。 </p>
    </div>
</div>

<div id="list9box" class="menu_cont_box">
    <h5>我们自己的</h5>

    <h1>物流配送团队</h1>

    <h3>全程冷链</h3>

    <div class="dec">
        <p>集团将建设具备国际先进水准的全程低温冷链设备，根据食物不同的存储条件，建设三大类型储藏仓库，包括：低温库-20℃～-18℃、冷鲜库0℃～5℃，7℃～12℃、常温库，保障食品的新鲜安全。</p>
    </div>
    <h3>严格分级</h3>

    <div class="dec">
        <p>运输过程严格分级，有机产品不能与常规产品混装，专车专用，全程冷链，让食品与门店实现无缝对接。</p>
    </div>
    <h3>新鲜直达</h3>

    <div class="dec">
        <p>配备温度记录设施，可以实时监控到配送的时间和温度的状态，确保冷藏设施的运转正常。通过城际配送、宅配等快捷运输方式，满足长三角乃至全国市场的供给需求。</p>

        <div class="pic"><img src="/public/img/menu_cont_box_pic_91.jpg" alt=""/></div>
    </div>
</div>

<div id="list10box" class="menu_cont_box">
    <h5>我们自己的</h5>

    <h1>实体门店</h1>

    <h3>门店布局</h3>

    <div class="dec">
        <p>明康汇在全国自建、自营以自产生鲜为核心的中高端全国连锁超市，初期聚焦长三角，然后进军京津地区，再逐步扩张至珠三角及环渤海湾地区。
            依托物流中心及高速路网发展, 拓展一二三线城市,下沉四线城市 门店覆盖主城区及下属经济发达人口成熟的县、镇区域。</p>

        <div class="pic"><img src="/public/img/menu_cont_box_pic_101.jpg" alt=""/></div>
    </div>
    <h3 style="margin-top:-20px;">门店类型</h3>

    <div class="dec">
        <span style="font-weight:bold;">&nbsp; 全国布局，中高端连锁超市，三大类型门店规划</span>
        <table width="100%" border="0" cellspacing="8" cellpadding="0">
            <tr>
                <td valign="top" class="td_b">旗舰店：</td>
                <td>全面的产品展示，优越的品牌体验。净营业面积3500㎡，10000种商品规划</td>
            </tr>
            <tr>
                <td valign="top" class="td_b">标准店：</td>
                <td>因地制宜，土洋结合。净营业面积2500㎡，7000种商品规划</td>
            </tr>
            <tr>
                <td valign="top" class="td_b">社区店、卫星店：</td>
                <td>快捷便利，新鲜到家。净营业面积500-1000㎡，2000-2500商品规划</td>
            </tr>
        </table>
    </div>
    <h3>店内布局</h3>

    <div class="dec">
        <p>明康汇生鲜•食品专营店，聘请全球知名空间设计公司Foodtech，以美国最大的天然食品超市Whole Foods(全食)为标杆进行门店规划设计。
            门店风格生态环保、亲切自然，给消费者提供愉悦的购物体验。</p>

    </div>
</div>



<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>
</html>
