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
<div id="brand_story_wrapper">
	<div id="brand_story_page">
		<ul class="pic1"><a href="<?=APP_URL?>/product/show?page=zl" target="_self"></a></ul>
		<ul class="pic2"><a href="<?=APP_URL?>/product/show?page=ji" target="_self"></a></ul>
		<ul class="pic3"><a href="<?=APP_URL?>/product/show?page=sc" target="_self"></a></ul>
		<ul class="pic4"><a href="<?=APP_URL?>/product/show?page=yu" target="_self"></a></ul>
		<ul class="pic5"><a href="<?=APP_URL?>/product/show?page=dy" target="_self"></a></ul>
		<ul class="pic6"><a href="<?=APP_URL?>/product/show?page=df" target="_self"></a></ul>
		<ul class="pic7"><a href="<?=APP_URL?>/product/show?page=xe" target="_self"></a></ul>
		<ul class="pic8"><a href="<?=APP_URL?>/product/show?page=ss" target="_self"></a></ul>
		<ul class="pic9"><a href="<?=APP_URL?>/product/show?page=hb" target="_self"></a></ul>
		<ul class="pic10"><a href="<?=APP_URL?>/product/show?page=wc" target="_self"></a></ul>
	</div>
</div>
<div class="toprev fadeout"></div>
<div class="tonext"></div>

<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


<script language="javascript" type="text/javascript">
var apDiv1 = document.getElementById("brand_story_wrapper");
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
			curScrollLeft = $("#brand_story_wrapper").scrollLeft();
			if(curScrollLeft > apDiv1.clientWidth * 0&&curScrollLeft <= apDiv1.clientWidth * 1){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 0},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *1&&curScrollLeft <= apDiv1.clientWidth *2){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 1},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *2&&curScrollLeft <= apDiv1.clientWidth *3){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 2},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *3&&curScrollLeft <= apDiv1.clientWidth *4){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 3},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *4&&curScrollLeft <= apDiv1.clientWidth *5){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 4},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *5&&curScrollLeft <= apDiv1.clientWidth *6){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 5},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *6&&curScrollLeft <= apDiv1.clientWidth *7){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 6},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *7&&curScrollLeft <= apDiv1.clientWidth *8){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 7},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *8&&curScrollLeft <= apDiv1.clientWidth *9){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 8},'slow');
			}else if(curScrollLeft > apDiv1.clientWidth *8&&curScrollLeft <= apDiv1.clientWidth *9){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 9},'slow');
			}
			
			
		});
		
		$(".tonext").click(function(){
			curScrollLeft = $("#brand_story_wrapper").scrollLeft()
			if(curScrollLeft >= 0&&curScrollLeft < apDiv1.clientWidth *1){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 1},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *1&&curScrollLeft < apDiv1.clientWidth *2){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 2},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *2&&curScrollLeft < apDiv1.clientWidth *3){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 3},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *3&&curScrollLeft < apDiv1.clientWidth *4){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 4},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *4&&curScrollLeft < apDiv1.clientWidth *5){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 5},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *5&&curScrollLeft < apDiv1.clientWidth *6){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 6},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *6&&curScrollLeft < apDiv1.clientWidth *7){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 7},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *7&&curScrollLeft < apDiv1.clientWidth *8){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 8},'slow');
			}else if(curScrollLeft >= apDiv1.clientWidth *8&&curScrollLeft < apDiv1.clientWidth *9){
				$("#brand_story_wrapper").animate({scrollLeft:apDiv1.clientWidth * 9},'slow');
			}
		});
		
		apDiv1.onscroll=function(){
			curScrollLeft = $("#brand_story_wrapper").scrollLeft()	
			if(curScrollLeft <= 0){
				$(".toprev").addClass("fadeout")
			}else{
				$(".toprev").removeClass("fadeout")
			}
			if(curScrollLeft >= apDiv1.clientWidth * 1.5){
				$(".tonext").addClass("fadeout")
			}else{
				$(".tonext").removeClass("fadeout")
			}
    	}

		
	});	
</script>

<script>
	
</script>

</body>
</html>