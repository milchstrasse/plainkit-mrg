<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('scss') ?> 
  <meta charset="utf-8" />
  <?php echo $site->fonts() ?>
  <?php echo $site->icons() ?>
  
  <?php snippet("head_styles") ?>

  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
  <?php echo css('assets/css/default.css', 'screen') ?>

</head>
<body id="top">