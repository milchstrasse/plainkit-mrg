<?php snippet('header'); ?>
<?php snippet('banner') ?>

<!-- Falls ein Hintergrundild hinterlegt ist, hier jetzt das Bild als eigenes div einbauen
-->
<?php if($page->imagetoggle()->isTrue() and $image = $page->image($page->bgimg())): ?>
  <div class="lphero" style="background-image: url(<?=$image->url() ?>)"></div>
<?php endif ?>

<div class='wrapper'> 
  <main id='main' class='longpage'>

    <?php 
      if ($aside = $page->children()->findBy('intendedTemplate','aside')){
        snippet('aside', array('data' => $aside));
      }
    ?>
    
    <?php ecco($page->showtitle()->isTrue(), "<h1>".$page->title()."</h1>") ?>
    <?php
      // get the open item on the first level
      if($root = $pages->findOpen()) {
        // get visible children for the root item
        $items = $root->children()->visible();
      }

      // eine Longpage enthält nur Container
      foreach($items as $container) {
        //snippet('container');
        snippet('container', array('container' => $container));
      }
    ?>    
    
  </main><!-- Ende Main -->
</div><!-- Ende Wrapper -->
<?php snippet('footer') ?>

