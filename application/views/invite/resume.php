<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投递简历</title>
</head>
<body>
<form action="<?= APP_URL ?>/invite/resume" method="post" enctype="multipart/form-data">
    <input type="hidden" name="job_id" value="8"/>
    <label for="上传简历"></label> <input type="file" name="attachment" value=""/>
    <input type="submit" value="提交"/>
</form>

</body>
</html>