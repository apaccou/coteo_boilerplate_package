<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="fr-FR" dir="ltr" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle)); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="canonical" href="<?php echo $url = $c->getCollectionLink(); ?>" />

    <?php echo $html->css($view->getStyleSheet('application.less')); ?>
</head>
<body>
<div class="<?php echo $c->getPageWrapperClass() ?>">
