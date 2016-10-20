<header>
  <?php if($container->showtitle()): ?>
    <h1 class="accent"><?= $container->title() ?></h1>
    <?php if($container->subline()->isNotEmpty()): ?>
      <p class="subline"><?= $container->subline()->kirbytext() ?></p>
    <?php endif ?>
  <?php endif ?>
  
  <?php if($image = $container->image($container->img())): ?>
    <div class="bildlinks">
      <figure>
        <img src="<?php echo $image->url() ?>" width="100%" height="auto" alt="<?php echo $image->alt() ?>" />
        <figcaption><?php echo $image->caption()->kirbytext() ?></figcaption>
      </figure>
    </div>
  <?php endif ?>
</header>
