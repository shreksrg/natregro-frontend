<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>

<style>
    ::-webkit-scrollbar/*整体部分*/
{
        width: 10px;
        height:10px;
    }

    ::-webkit-scrollbar-track/*滑动轨道*/
{
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        border-radius: 0px;
        background: rgba(0,0,0,0.8);
        opacity:0.2;
    }

    ::-webkit-scrollbar-thumb/*滑块*/
{
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        background: #ffed29;
    }

    ::-webkit-scrollbar-thumb:hover/*滑块效果*/
{
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        background: rgba(0,0,0,0.4);
    }
</style>

<body>
<div id="heath_travel_wrapper">
	<div id="heath_travel_page">
		<div class="page1">
		</div>
		<div class="page2">
        </div>
		<div class="page3">
        </div>
		<div class="page4">
        </div>
		<div class="page5"></div>
	</div>
</div>
<div class="stepbar">
    <a id="tabar1" class="step_icon1 cur"></a>
    <a id="tabar2" class="step_icon2"></a>
    <a id="tabar3" class="step_icon3"></a>
    <a id="tabar4" class="step_icon4"></a>
    <a id="tabar5" class="step_icon5"></a>
</div>

<div class="toprev fadeout"></div>
<div class="tonext"></div>
<a class="more_story" href="<?=APP_URL?>/product">更多品牌故事</a>

<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


<script language="javascript" type="text/javascript">
			var LocString=String(window.document.location.href);
			function GetQueryString(str){
			var rs=new RegExp("(^|)"+str+"=([^\&]*)(\&|$)","gi").exec(LocString),tmp;
			if(tmp=rs)return tmp[2];
			return "没有这个参数";
			}
			//获取参数
			var a=GetQueryString("page");
			$("#heath_travel_page div.page1").css("background","url(<?=WEB_PATH?>/public/img/brand_story_"+a+"_bg1.jpg) no-repeat").css("background-size","100% 100%")
			$("#heath_travel_page div.page2").css("background","url(<?=WEB_PATH?>/public/img/brand_story_"+a+"_bg2.jpg) no-repeat").css("background-size","100% 100%")
			$("#heath_travel_page div.page3").css("background","url(<?=WEB_PATH?>/public/img/brand_story_"+a+"_bg3.jpg) no-repeat").css("background-size","100% 100%")
			$("#heath_travel_page div.page4").css("background","url(<?=WEB_PATH?>/public/img/brand_story_"+a+"_bg4.jpg) no-repeat").css("background-size","100% 100%")
			$("#heath_travel_page div.page5").css("background","url(<?=WEB_PATH?>/public/img/brand_story_"+a+"_bg5.jpg) no-repeat").css("background-size","100% 100%")

            var tabarText;
            if(a == "zl"){
                tabarText = "概述-品种-专家-养殖-质控"
            }else if(a == "ji"){
                tabarText = "概述-育种-安全-饲养-质保"
            }else if(a == "sc"){
                tabarText = "概述-专家-农场-安全-生长"
            }else if(a == "yu"){
                tabarText = "概述-专家-饲养-优势-渔场"
            }else if(a == "dy"){
                tabarText = "概述-安全-生长-质控-展示"
            }else if(a == "df"){
                tabarText = "概述-安全-原料-工艺-展示"
            }else if(a == "xe"){
                tabarText = "概述-简介-专家-苗种-展示"
            }else if(a == "ss"){
                tabarText = "概述-简介-制作-工艺-展示"
            }else if(a == "hb"){
                tabarText = "概述-简介-专家-原料-安全"
            }else if(a == "wc"){
                tabarText = "概述-选品-牛肉-鳕鱼-蜂蜜"
            }
            $("#tabar1").append(tabarText.substring(0,2))
            $("#tabar2").append(tabarText.substring(3,5))
            $("#tabar3").append(tabarText.substring(6,8))
            $("#tabar4").append(tabarText.substring(9,11))
            $("#tabar5").append(tabarText.substring(12,14))


var apDiv1 = document.getElementById("heath_travel_wrapper");
var perWidth = apDiv1.clientWidth / 2;

var mouse_wheel = function(e){
	var evt = window.event || e;
	if(evt.detail > 0 || evt.wheelDelta < 0)
		apDiv1.scrollLeft += perWidth;
	else
		apDiv1.scrollLeft -= perWidth;
}

if(window.addEventListener){
	apDiv1.addEventListener("DOMMouseScroll", mouse_wheel, false);
}else
	apDiv1.onmousewheel = mouse_wheel;
			
	var curScrollLeft;
	$(function(){
		
		$(".toprev").click(function(){
			curScrollLeft = $("#heath_travel_wrapper").scrollLeft();
			if(curScrollLeft > apDiv1.clientWidth * 0&&curScrollLeft <= apDiv1.clientWidth * 1){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 0},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *1&&curScrollLeft <= apDiv1.clientWidth *2){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 1},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *2&&curScrollLeft <= apDiv1.clientWidth *3){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 2},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *3&&curScrollLeft <= apDiv1.clientWidth *4){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 3},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *4&&curScrollLeft <= apDiv1.clientWidth *5){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 4},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *5&&curScrollLeft <= apDiv1.clientWidth *6){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 5},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *6&&curScrollLeft <= apDiv1.clientWidth *7){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 6},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *7&&curScrollLeft <= apDiv1.clientWidth *8){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 7},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *8&&curScrollLeft <= apDiv1.clientWidth *9){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 8},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *8&&curScrollLeft <= apDiv1.clientWidth *9){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 9},'slow');
			}
			
			
		});
		
		$(".tonext").click(function(){
			curScrollLeft = $("#heath_travel_wrapper").scrollLeft()
			if(curScrollLeft >= 0&&curScrollLeft < apDiv1.clientWidth *1){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 1},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *1&&curScrollLeft < apDiv1.clientWidth *2){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 2},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *2&&curScrollLeft < apDiv1.clientWidth *3){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 3},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *3&&curScrollLeft < apDiv1.clientWidth *4){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 4},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *4&&curScrollLeft < apDiv1.clientWidth *5){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 5},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *5&&curScrollLeft < apDiv1.clientWidth *6){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 6},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *6&&curScrollLeft < apDiv1.clientWidth *7){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 7},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *7&&curScrollLeft < apDiv1.clientWidth *8){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 8},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *8&&curScrollLeft < apDiv1.clientWidth *9){
				$("#heath_travel_wrapper").animate({scrollLeft:apDiv1.clientWidth * 9},'slow');
			}
		});
		
		apDiv1.onscroll=function(){
			curScrollLeft = $("#heath_travel_wrapper").scrollLeft()	
			if(curScrollLeft <= 0){
				$(".toprev").addClass("fadeout")
			}else{
				$(".toprev").removeClass("fadeout")
			}
			if(curScrollLeft >= apDiv1.clientWidth * 4){
				$(".tonext").addClass("fadeout")
				$(".more_story").addClass("show")
			}else{
				$(".tonext").removeClass("fadeout")
				$(".more_story").removeClass("show")
			}
    	}
		
	});	
</script>

<script>
	
</script>

</body>
</html>
