<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <link rel="icon" type="image/gif" href="<?= WEB_PATH ?>/public/img/favicon.ico">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= WEB_PATH ?>/public/css/main.css">
    <?php
    if (isset($page_styles) && $page_styles) {
        foreach ($page_styles as $style) {
            echo '<link rel="stylesheet" type="text/css" href="' . $style . '">';
        }
    }
    ?>
    <script src="<?= WEB_PATH ?>/public/js/jquery.min.js"></script>
    <?php
    if (isset($page_scripts) && $page_scripts) {
        foreach ($page_scripts as $script) {
            echo '<link rel="stylesheet" type="text/css" href="' . $script . '">';
        }
    }
    ?>

</head>