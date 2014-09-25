<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
body{background:url(<?=WEB_PATH?>/public/img/bg_contactus.jpg) no-repeat center bottom fixed;}

</style>

</head>

<body>
<?php
CView::show('layout/invite', array('selIndex' => 3));
?>
<div class="jobs_list">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:50px;">
  <tr>
    <td width="43%" class="contactus_td"><p>明康汇健康食品有限公司</p>座机：86-21-62650662<br />
      传真：86-021-62650661<br />
      地址：上海普陀区中江路118弄22号海亮大厦20层<br />
      邮编：200062</td>
    <td width="14%">&nbsp;</td>
    <td width="43%" class="contactus_td"><p>海亮集团诸暨总部</p>
      座机：86-0575-87063555<br />
      传真：86-0575-87062008 <br />
      地址：浙江诸暨市店口镇解放路386号<br />
      邮编：311814</td>
  </tr>
  <tr>
    <td colspan="3" height="40">&nbsp;</td>
    </tr>
  <tr>
    <td width="40%" class="contactus_td"><p>海亮生态农业集团</p>
      座机：86-0575—87628940<br />
      传真：86-0575-80723025<br />
      地址：浙江省诸暨市店口镇中央大道华东汽配水暖城海亮商务酒店二楼海亮生态农业集团总部<br />
      邮编：311814</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

    
</div>
<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

</body>

</html>
