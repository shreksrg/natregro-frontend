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
