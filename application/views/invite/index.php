<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(<?=WEB_PATH?>/public/img/bg_jobs.jpg) no-repeat center bottom fixed;
    }

</style>
<script>
    $(function () {
        $("#nav li.nav5 > a").css("color", "#fff000").css("background", "#0b7d3a");
    });
</script>
</head>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 0));
?>

<div class="jobs_list">
    <div class="jobs_list_tab jobs_list_tab_1"><a id="inviteTag" href="hr_jobs2.html"><img
                src="<?=WEB_PATH?>/public/img/btn_jobs_listtab.png"
                width="200"
                height="73" alt=""/></a></div>
    <div class="search">
        <!--    	<div class="btn_jobsearh"><a href="#"><img src="img/btn_jobs_search.png" width="128" height="41" alt=""/></a></div>
                <select class="input_jobsearch">
                  <option>部门 </option>
                </select> &nbsp;
                <select class="input_jobsearch">
                  <option>工作地点 </option>
                </select> &nbsp;
        -->    </div>
    <div class="joblist_bg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="joblist_tb">
            <tr id="joblist_tl">
                <td>招聘职位</td>
                <td>招聘部门</td>
                <td>工作地点</td>
                <td>职位申请</td>
            </tr>
            <tr>
                <td>SAPFICO高级顾问</td>
                <td>人力资源部</td>
                <td>上海市普陀区市</td>
                <td><a href="<?= APP_URL ?>/invite/show">立即申请</a></td>
            </tr>
            <tr>
                <td>节能环保产业财务总监</td>
                <td>财务中心</td>
                <td>上海市金山区</td>
                <td><a href="<?= APP_URL ?>/invite/show">立即申请</a></td>
            </tr>
            <tr>
                <td>SAPFICO高级顾问</td>
                <td>人力资源部</td>
                <td>上海市普陀区市</td>
                <td><a href="<?= APP_URL ?>/invite/show">立即申请</a></td>
            </tr>

            <tr>
                <td>节能环保产业财务总监</td>
                <td>财务中心</td>
                <td>上海市金山区</td>
                <td><a href="<?= APP_URL ?>/invite/show">立即申请</a></td>
            </tr>
            <tr>
                <td>SAPFICO高级顾问</td>
                <td>人力资源部</td>
                <td>上海市普陀区市</td>
                <td><a href="<?= APP_URL ?>/invite/show">立即申请</a></td>
            </tr>

        </table>

    </div>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

<script>
    $('#inviteTag').click(function () {
        var jobTab1 = $('.jobs_list_tab_1');
        var jobTab2 = $('.jobs_list_tab_2');
        if (jobTab1[0]) {
            jobTab1.removeClass('jobs_list_tab_1');
            jobTab1.addClass('jobs_list_tab_2');
        }

        if (jobTab2[0]) {
            jobTab2.removeClass('jobs_list_tab_2');
            jobTab2.addClass('jobs_list_tab_1');
        }
        return false;
    })
</script>

</html>
