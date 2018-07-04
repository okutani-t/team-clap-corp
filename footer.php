<?php
    /**
     * Version    : 1.0.1
     * Author     : inc2734
     * Author URI : http://2inc.org
     * Created    : April 17, 2015
     * Modified   : August 24, 2015
     * License    : GPLv2 or later
     * License URI: license.txt
     */
?>
<?php do_action( 'habakiri_after_contents_content' ); ?>
<!-- end #contents --></div>
<footer id="footer" class="footer">
  <div class="footer-inner">
    <nav class="footer-nav">
	  <ul>
        <li><a href="/">TOP</a></li>
	    <li><a href="/profile">会社概要</a></li>
	    <li><a href="/contact">お問い合わせ</a></li>
	  </ul>
    </nav>
    <nav class="footer-sns">
	  <ul>
	    <!-- <li><a href="https://twitter.com/teamclap_pr" target="_blank"><i class="sns-icon fab fa-twitter"></i></a></li> -->
	    <!-- <li><a href="#"><i class="sns-icon fab fa-facebook-f"></i></a></li> -->
	    <!-- <li><a href="#"><i class="sns-icon fab fa-instagram"></i></a></li> -->
	  </ul>
    </nav>
  </div>
  <?php do_action( 'habakiri_before_footer_content' ); ?>

  <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
	<div class="footer-widget-area">
	  <div class="container">
		<div class="row">
		  <?php dynamic_sidebar( 'footer-widget-area' ); ?>
		  <!-- end .row --></div>
		<!-- end .container --></div>
		<!-- end .footer-widget-area --></div>
  <?php endif; ?>

  <?php if ( has_nav_menu( 'social-nav' ) ) : ?>
	<div class="social-nav">
	  <div class="container">
		<?php
			wp_nav_menu( array(
			  'theme_location' => 'social-nav',
			  'fallback_cb'    => '',
			  'depth'          => 1
			) );
		?>
		<!-- end .container --></div>
	  <!-- end .social-nav --></div>
  <?php endif; ?>

  <p class="copyright">
	© 2018 teamclap
	<!-- end .copyright --></p>
  <?php do_action( 'habakiri_after_footer_content' ); ?>
  <!-- end #footer --></footer>
<!-- end #container --></div>
  <a id="backTop" href="#"><i class="fas fa-angle-up"></i></a>
  <?php wp_footer(); ?>
</body>
</html>
