<!--hier werden die inline-Styles definert-->
  <style>
    body, a, a:visited{
      font-family: <?php echo $site->ffp() ?> ;
      color: <?php echo $site->color_p() ?>;
    }
    h1,h2,h3,h4,h5{
      font-family: <?php echo $site->ffh() ?>;
      color: <?php echo $site->color_h() ?>; 
    }
    .accent{
      color: <?php echo $site->coloracc() ?>;
    }
  </style>