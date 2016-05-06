<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">
<head>
    <?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : ''));?>
    <?php echo $html->css($view->getStyleSheet('application.less')); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="canonical" href="<?php echo $url = $c->getCollectionLink(); ?>" />

</head>
<body id="top" class="<?php echo $c->getPageWrapperClass() ?>" itemscope itemtype="http://schema.org/WebPage">
<div id="document">
