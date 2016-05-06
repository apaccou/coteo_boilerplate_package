<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

echo '<h1>'. $c->getCollectionName() .'</h1>';
?>



    <div class="uk-container uk-container-center">
        <div class="uk-block">
            <h3>Block</h3>
        </div>
        <p>Lorem ipsum <a href="#">dolor</a> sit amet. Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit.</p>
        <ul>
            <li><a href="#">Lien 1</a></li>
            <li><a href="#">Lien 2</a></li>
            <li><a href="#">Lien 3</a></li>
        </ul>
        <h2>Test h2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi dolor ea, error explicabo id iusto minima nobis officiis pariatur quam quas sed voluptate!</p>

        <h3>Test h3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio impedit nisi sequi.</p>

        <h4>Test h4</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ducimus fugit in, minus quaerat suscipit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consectetur distinctio et exercitationem illum maxime odit qui repellat vitae voluptatibus?</p>
        <hr>
    </div>

<?php

$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);

$a = new Area('Sidebar');
$a->setAreaGridMaximumColumns(12);
$a->display($c);

$view->inc('elements/footer.php');
