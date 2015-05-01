<!DOCTYPE html>
<html>
<head>
  <?php Loader::element('header_required')?>
  <?php echo $html->css($view->getStyleSheet('application.less')); ?>
</head>
<body>
  <div class="<?php echo $c->getPageWrapperClass()?>">
