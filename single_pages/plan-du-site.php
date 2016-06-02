<h1>Plan du site</h1>

<?php
$plan_de_site = BlockType::getByHandle('autonav');
$plan_de_site->controller->orderBy = 'display_asc';
$plan_de_site->controller->displayPages = 'top';
$plan_de_site->controller->displaySubPages = 'all';
$plan_de_site->controller->displaySubPageLevels = 'all';
$plan_de_site->render('templates/plan_de_site');
?>
