<div class="areas">
    <nav role="navigation">
      <ul class="menu cf">
          <?php foreach($pages->visible() as $p): ?>
              <li>
                  <a <?php e($p->isOpen(), ' class="active"') ?> 
                     href="<?php echo $p->url() ?>">
                      <?php echo $p->title()->html() ?>
                  </a>
<!--                Subnavi Longpage-->
                <?php if ($p->intendedTemplate()=="longpage"): ?>
                  <?php if ($p->subnavi()->isTrue()): ?>
                    <ul class="submenu cf">
                      <?php foreach($p->children()->visible() as $sp): ?>
                        <?php if ($sp->showinnavi()->isTrue()): ?>
                            <li>
                              <a <?php e($sp->isOpen(), ' class="active"') ?> 
                                 href="<?php echo $p->url()."#".$sp->uid() ?>">
                                  <?php echo $sp->title()->html() ?>
                              </a>
                            </li>
                        <?php endif;  ?>
                      <?php endforeach ?>
                    </ul>
                  <?php endif;  ?>
                <?php endif;  ?>
              </li>
          <?php endforeach ?>
      </ul>
    </nav>  
    <address>
      <?php echo $site->address()->kirbytext(); ?>
      <?php echo $site->phone()->kirbytext(); ?>
      <a <?php echo attr(array(
        'href' => 'mailto:'.$site->mail(),
        'title'=> 'eMail senden'
          )) ?>
        >
      </a>
      <?php echo $site->mail(); ?>
    </address>
    <div class="mail">
      <a class="button stark"<?php echo attr(array(
        'href' => 'mailto:'.$site->mail(),
        'title'=> 'eMail senden'
          )) ?>
        >
        eMail senden
      </a>
    </div>
  </div>