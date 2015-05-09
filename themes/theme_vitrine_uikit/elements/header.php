<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
    <?php echo $html->css($view->getStyleSheet('application.less')); ?>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle)); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="canonical" href="<?php echo $url = $c->getCollectionLink(); ?>" />



</head>
<body>
<div class="<?php echo $c->getPageWrapperClass() ?>">
