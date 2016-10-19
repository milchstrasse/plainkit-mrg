<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('scss') ?> 
  <meta charset="utf-8" />
  <?php echo $site->fonts() ?>
  <?php echo $site->icons() ?>
  <style>
    body{font-family: <?php echo $site->ffp() ?> color: <?php echo $site->color_p() ?>}
    h1,h2,h3,h4,h5{font-family: <?php echo $site->ffh() ?> color: <?php echo $site->color_h() ?> }
    .accent{color: <?php echo $site->coloracc() ?>}
  </style>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
  <?php echo css('assets/css/default.css', 'screen') ?>

</head>
<body>