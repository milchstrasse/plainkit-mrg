<footer class="footer cf" role="contentinfo">
  <div class="copyright">
    <?php echo $site->copyright()->kirbytext() ?>
  </div>

  <div class="colophon">
    <p>
      <a href="http://getkirby.com/made-with-kirby-and-love">Made with <b>♥</b> and Kirby </a>
    </p>
  </div>
</footer>
<a href="#top" class="to-top" style="display: block;">nach oben &uarr;
</a>
</body>


<!--Scripts erst zum Schluss laden (Page Speed)-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
</script>

<?php echo js('assets/js/site.js') ?>

</html>