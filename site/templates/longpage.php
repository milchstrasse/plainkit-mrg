<?php snippet('header'); ?>

<!-- Falls ein Hintergrundild hinterlegt ist, hier jetzt das Bild als eigenes div einbauen. Hintergrundbilder können bei Einstellungen oder einzeln bei jeder Longpage gemacht werden
-->
<?php $image = $site->image($site->bgimg()) ?>

<?php if(!empty($image)): ?>
  <div class="lphero" style="background-image: url(<?=$image->url() ?>)"></div>
<?php endif ?>

<?php snippet('banner') ?>




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

