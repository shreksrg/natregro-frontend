<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_jobs.jpg) no-repeat right bottom fixed;
    }

</style>
<script>
    $(function () {
        $("#nav li.nav5 > a").css("color", "#fff000").css("background", "#0b7d3a");
    });
</script>
</head>

<script>
    $(function () {
        $("#nav li.nav5 > a").css("color", "#fff000").css("background", "#0b7d3a");
        $("#open_pop").click(function () {
            $(".pop_box").css("display", "block")
        });
        $(".pop_box ul li a").click(function () {
            $(".pop_box").css("display", "none")
        });
    });
</script>

<body>
<?php
$btnReturn = '<div id="menu_back"><a href="#">< 返回列表</a></div>';
CView::show('layout/invite', array('selIndex' => 0, 'data' => $btnReturn));
$jobLang = CLang::load('job');
?>

<div class="jobs_list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="5" id="jobdetail_tb_tl"><?= $job['position'] ?></td>
            <td id="jobdetail_tb_btn"><a id="open_pop" href="#">立即投递简历</a></td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="jobdetail_tb">
        <tr>
            <td>工作地点</td>
            <td><?= $job['location'] ?></td>
            <td>部门</td>
            <td><?= $job['department'] ?></td>
            <td>发布日期</td>
            <td style="width:179px;"><?= date('Y-m-d', $job['create_time']) ?></td>
        </tr>
        <tr>
            <td>工作年限</td>
            <td><?= $job['years'] ?></td>
            <td>学历</td>
            <td><?= $jobLang[$job['edu']] ?></td>
            <td>招聘人数</td>
            <td><?= $job['num'] ?>人</td>
        </tr>
    </table>
    <div class="joblist_bg">
        <?= $job['desc'] ?>
    </div>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>
</div>

<div class="pop_box">
    <ul>
        <li><a href="#"></a></li>
        <span>很高兴有适合您的职位，赶快递上您的简历加入我们！</span>

        <div class="file-box">
            <form action="<?= APP_URL ?>/invite/resume" method="post" enctype="multipart/form-data">
                <input type="hidden" name="job_id" value="<?= $job['id'] ?>"/>
                <input type='text' name='textfield' id='textfield' class='txt'/>
                <input type='button' class='btn' value='浏览...'/>
                <input type="file" name="attachment" class="file" id="fileField" size="28"
                       onchange="document.getElementById('textfield').value=this.value"/>
                <input type="submit" name="submit" class="btn" value="上传"/>
            </form>
        </div>
    </ul>
</div>
</body>

</html>
