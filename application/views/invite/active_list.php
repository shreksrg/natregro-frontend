<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
body{background:url(<?=WEB_PATH?>/public/img/bg_tb.jpg) no-repeat center bottom fixed;}

</style>
<script>
	$(function(){
		$("#nav li.nav5 > a").css( "color","#fff000").css("background","#0b7d3a");});
</script>
</head>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 1));
?>
<div class="jobs_list">
	<ul class="tblist">
    <li><img src="<?=WEB_PATH?>/public/img/tmp1.jpg" width="240" height="156" alt=""/> <p><a href="#">市场中心组织澳洲肉类培训活动</a></p><a href="#">市场中心邀请澳洲肉类畜牧协会资深顾问龚振华先生于海亮大厦进行“澳洲肉类培训”活动，包括采购中心、门店管理中心、食品加工中心、电商中心等40多名员工参加。</a><br />
<span class="tb_date">2014年5月30日</span></li>
	<li><img src="<?=WEB_PATH?>/public/img/tmp1.jpg" width="240" height="156" alt=""/> <p><a href="#">市场中心组织澳洲肉类培训活动</a></p><a href="#">市场中心邀请澳洲肉类畜牧协会资深顾问龚振华先生于海亮大厦进行“澳洲肉类培训”活动，包括采购中心、门店管理中心、食品加工中心、电商中心等40多名员工参加。</a><br />
<span class="tb_date">2014年5月30日</span></li>
    </ul>    
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

</html>
