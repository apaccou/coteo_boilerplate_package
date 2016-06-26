<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');
?>

<nav id="breadcrumb" class="" aria-label="Vous êtes ici : " role="navigation">
  <div class="uk-container uk-container-center">
    <span class="">Vous êtes ici : </span>
    <?php $this->inc('elements/breadcrumb.php'); ?>
  </div>
</nav>


<div id="tools" class="">
    <a class="uk-visible-large" href="javascript:window.print()"><i class="uk-icon-print"></i><span class=""> Imprimer</span></a>
</div>


<main id="content" class="" role="main">
  <div class="main">
    <h1><?php echo $c->getCollectionName(); ?></h1>
    <p>Main</p>
  </div><!-- .main -->
</main><!-- #content -->


    <!-- <div class="uk-container uk-container-center">
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

        <?php
        // $a = new Area('Main');
        // $a->enableGridContainer();
        // $a->display($c);
        //
        // $a = new Area('Sidebar');
        // $a->setAreaGridMaximumColumns(12);
        // $a->display($c);
        ?>

    </div> -->

<?php

$view->inc('elements/footer.php');
