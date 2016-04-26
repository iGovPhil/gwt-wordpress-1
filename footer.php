<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package gwt_wp
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
// TODO: dynamic class setup
$footer_class = ' large-12';
$footer_class_2 = '';
$footer_class_3 = '';
$footer_class_4 = '';
if(is_active_sidebar('footer-2')){
  $footer_class = ' large-6';
  $footer_class_2 = ' large-6';
  $footer_class_3 = ' large-3';
  $footer_class_4 = ' large-3';
  if(is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class = ' large-3';
    $footer_class_2 = ' large-3';
  }
  elseif(!is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-3';
    $footer_class_3 = '';
    $footer_class_4 = '';
    $footer_class_4 = ' large-3';
  }
  elseif(is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-3';
    $footer_class_3 = ' large-3';
    $footer_class_4 = '';
  }
  elseif(!is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-6';
    $footer_class_3 = '';
    $footer_class_4 = '';
  }
}
else{
  $footer_class = ' large-6';
  $footer_class_2 = '';
  $footer_class_3 = ' large-3';
  $footer_class_4 = ' large-3';
  if(!is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class_3 = ' large-6';
    $footer_class_4 = '';
  }
  elseif(is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_3 = '';
    $footer_class_4 = ' large-6';
  }
  elseif(!is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class = ' large-12';
    $footer_class_3 = '';
    $footer_class_4 = '';
  }
}
?>

<!-- agency footer -->
<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ||
is_active_sidebar('footer-4')): ?>
<div id="footer" name="agencyfooter">
  <div id="supplementary" class="row">
    <?php if(is_active_sidebar('footer-1')): ?>
    <div class="columns widget-area<?php echo $footer_class ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-1' ) ?>
    </div>
    <?php endif; // if active footer-1 ?>

    <?php if(is_active_sidebar('footer-2')): ?>
    <div class="columns widget-area<?php echo $footer_class_2 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-2' ) ?>
    </div>
    <?php endif; // if active footer-2 ?>

    <?php if(is_active_sidebar('footer-3')): ?>
    <div class="columns widget-area<?php echo $footer_class_3 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-3' ) ?>
    </div>
    <?php endif; // if active footer-3 ?>

    <?php if(is_active_sidebar('footer-4')): ?>
    <div class="columns widget-area<?php echo $footer_class_4 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-4' ) ?>
    </div>
    <?php endif; // if active footer-4 ?>

    <?php if(is_active_sidebar('tot-1')): ?>
    <div class="columns widget-area tot-1" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'tot-1' ) ?>
    </div>
    <?php endif; // if active tot-1 ?>
  </div>
</div>
<?php endif; ?>
<div id="darklight"></div>

<!-- standard footer -->
<div id="gwt-standard-footer"></div>
<script type="text/javascript">
(function(d, s, id) {
  var js, gjs = d.getElementById('gwt-standard-footer');

  js = d.createElement(s); js.id = id;
  js.src = "//gwhs.i.gov.ph/gwt-footer/footer.js";
  gjs.parentNode.insertBefore(js, gjs);
}(document, 'script', 'gwt-footer-jsdk'));
</script>
<!-- end standard footer -->
<?php wp_footer(); ?>
<script type="text/javascript">
(function($) {
	jQuery(document).foundation();
})(jQuery);
</script>
<div><a href="#page" id="back-to-top" style="display: inline;">Back to Top</a></div>
</body>
</html>