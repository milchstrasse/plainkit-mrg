<?php foreach($el->images() as $image): ?>
  <figure>
    <a href="<?php echo $image->url() ?>">
      <img src="<?php echo $image->url() ?>" 
           alt="<?php echo $image->alt() ?>"
           width="100%"
           height="auto"
      >
    </a>
    <figcation>
      <?= $image->caption() ?>
    </figcation>
  </figure>
<?php endforeach ?>