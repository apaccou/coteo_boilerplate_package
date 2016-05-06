<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php
$breadcrumbs = BlockType::getByHandle('autonav');
$breadcrumbs->controller->displayPages = 'top';
$breadcrumbs->controller->orderBy = 'display_asc';
$breadcrumbs->controller->displaySubPages = 'relevant_breadcrumb';
$breadcrumbs->controller->displaySubPageLevels = 'all';
$breadcrumbs->render('templates/uikit_breadcrumb');
?>
