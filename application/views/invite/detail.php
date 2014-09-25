<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url(/public/img/bg_jobs.jpg) no-repeat right bottom fixed;
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
$btnReturn = '<div id="menu_back"><a href="#">< 返回列表</a></div>';
CView::show('layout/invite', array('selIndex' => 0, 'data' => $btnReturn));
?>

<div class="jobs_list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="5" id="jobdetail_tb_tl">SAPFICO高级顾问</td>
            <td id="jobdetail_tb_btn"><a href="#">立即投递简历</a></td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="jobdetail_tb">
        <tr>
            <td>工作地点</td>
            <td>上海市普陀区</td>
            <td>部门</td>
            <td>人力资源部</td>
            <td>发布日期</td>
            <td style="width:179px;">2013-10-11</td>
        </tr>
        <tr>
            <td>工作年限</td>
            <td>3年到5年</td>
            <td>学历</td>
            <td>本科</td>
            <td>招聘人数</td>
            <td>1人</td>
        </tr>
    </table>
    <div class="joblist_bg">
        <p><span>职位描述：</span><br/>
            1. 参与ERP系统财务模块的流程讨论及系统程序搭建，并编写相应的开发文档；<br/>
            2. ERP项目实施管理过程中，沟通业务部门或组织，确保项目顺利进行；<br/>
            3. 主动、积极地指出项目中存在的潜在风险，做好事前防御；<br/>
            4. 参与公司ERP项目方面推动宣导工作；<br/>
            5. 负责对业务部门进行系统培训和操作培训；<br/>
            6. 负责完成上级领导安排的工作事项。</p>

        <p><span>岗位要求：</span><br/>
            1. 计算机、财务等相关专业本科及以上学历，5年及以上工作经历；<br/>
            2. 至少参加二个完整的SAP FICO实施项目经验或3年SAP实施经验;<br/>
            3. 熟悉ERP理论和企业信息化建设流程，具备电力行业应用项目经验，熟悉集团化项目实施者优先；<br/>
            4. 具有SAP模块的独立实施能力，熟悉前后台设置，能独立配置相关解决方案；</p>

        <p></p>
    </div>
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>
</div>
</body>

</html>
