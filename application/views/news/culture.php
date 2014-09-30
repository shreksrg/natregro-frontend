<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: #fafafa url(<?=WEB_PATH?>/public/img/bg_culture.jpg) no-repeat center bottom fixed;
    }

</style>


<body>
<div class="culture">
    <div class="title">企业文化</div>
    <div class="_culture_content">
        <?php

        if ($news) {
            echo $news[0]['content'];
        }
        ?>
    </div>


</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>


</body>

</html>
