<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/wxbg.jpg) no-repeat center 0;
    }
</style>
</head>

<body>

<?php
$title = '';
$text = array('wx' => '微信', 'app' => '手机客户端');
if (isset($text[$route])) $title = $text[$route];

?>

<div class="wxmenu">
    <h2><?= $title ?></h2>
    <a href="<?= APP_URL ?>/news/sns?r=wx">微信</a>
    <a href="#">微博</a>
    <a href="<?= APP_URL ?>/news/sns?r=app" target="_self">手机客户端</a>
    <a href="http://www.hailiang.com/">集团官网</a>
</div>
<script>
    var selIndex = <?=$selIndex?>;
    $('.wxmenu a').removeClass('cur');
    $('.wxmenu a').eq(selIndex).addClass('cur')
</script>

<?php
if ($route == 'wx') {
    ?>
    <div class="wxcont">
        <div class="code"><img src="<?=WEB_PATH?>/public/img/wxcode.jpg" alt=""/><span>请使用手机扫一扫二维码</span></div>
        <div class="desc"><h2>明康汇 - 微信</h2>

            <p>超过三亿人使用的手机应用<br/>支持购物、分享为一体<br/>可以轻轻松松买到你想要的健康食品。<br/>超过三亿人使用的手机应用支持购物、分享<br/>为一体可以轻轻松松买到你想要的健康食品。</p>
        </div>
    </div>
<?php } ?>
<?php
if ($route == 'app') {
    ?>

    <div class="appcont">
    </div>
<?php } ?>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>
</html>
