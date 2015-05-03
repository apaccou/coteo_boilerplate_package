<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>  
  <?php echo $html->css($view->getStyleSheet('application.less')); ?>
</head>
<body>
  <div class="<?php echo $c->getPageWrapperClass()?>">
