<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

echo '<h1>Test</h1>';

$a = new Area('Main');
//$a->enableGridContainer();
$a->display($c);

$view->inc('elements/footer.php');
