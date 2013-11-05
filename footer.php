
		<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="container" id="contact">
          <?php get_sidebar( 'footer' ); ?>
      </div>
      <div style="clear:both"></div>

      <div class="site-info">
        <?php do_action( 'caddisfly_credits' ); ?>
        <a rel="license" href="http://creativecommons.org/licenses/by/2.5/in/">
          <img alt="Creative Commons License" style="border-width:0;width:80px;height:15px;" src="http://i.creativecommons.org/l/by/2.5/in/80x15.png"/>
        </a>
        <br/>
        This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/2.5/in/">Creative Commons Attribution 2.5 India License</a>.
        <br/>
        A Project of Ternup Research Labs
      </div>
    </footer>
<script>
  var val = Math.floor((Math.random() * jQuery('.item').length));
  jQuery('.item').removeClass('active').eq(val).addClass("active");
  jQuery('.itembtn').removeClass('active').eq(val).addClass("active");

  setTimeout(function(){
    jQuery('.carousel').carousel({
      interval: 5000,
      pause: ""
    })
  },4000);

</script>

<?php wp_footer(); ?>
</body>
</html>