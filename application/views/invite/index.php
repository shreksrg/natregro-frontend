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
    <div class="jobs_list_tab jobs_list_tab_1"><a id="inviteTag" href="hr_jobs2.html"></a></div>
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
            <thead>
            <tr id="joblist_tl">
                <td>招聘职位</td>
                <td>招聘部门</td>
                <td>工作地点</td>
                <td>职位申请</td>
            </tr>
            </thead>
            <tbody>
            <!-- <tr>
                <td>SAPFICO高级顾问</td>
                <td>人力资源部</td>
                <td>上海市普陀区市</td>
                <td><a href="<? /*= APP_URL */ ?>/invite/show">立即申请</a></td>
            </tr>-->
            </tbody>
        </table>

    </div>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

<script>
    var tbJobs = $('.joblist_tb tbody');

    function loadJobs(tag) {
        $.get('<?=APP_URL?>/invite/jobs?t=' + tag, null, function (resp) {
            console.log(resp);
            if (resp.code == 0) {
                tbJobs.empty().append(resp.data);
            }
        }, 'json')
    }

    loadJobs('public');
</script>

<script>
    $('#inviteTag').click(function () {
        var jobTab1 = $('.jobs_list_tab_1');
        var jobTab2 = $('.jobs_list_tab_2');

        var tag;

        if (jobTab1[0]) {
            tag = 'campus';
            jobTab1.removeClass('jobs_list_tab_1');
            jobTab1.addClass('jobs_list_tab_2');
        }

        if (jobTab2[0]) {
            tag = 'public';
            jobTab2.removeClass('jobs_list_tab_2');
            jobTab2.addClass('jobs_list_tab_1');
        }

        loadJobs(tag);
        return false;
    })

</script>


</html>
