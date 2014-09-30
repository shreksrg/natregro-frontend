<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_contactus.jpg) no-repeat center bottom fixed;
    }

</style>

</head>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 3));
?>
<div class="jobs_list">
    <?php

    if ($contact) {
        echo $contact[0]['content'];
    }
    ?>


</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

</html>
