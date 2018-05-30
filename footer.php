<!-- Site Footer -->
<?php if(get_theme_mod('vt_copyright_display') == 'Yes') {?>
<div id="site-copyright">
  <?php bloginfo('name'); ?> &copy; <span><?php echo get_theme_mod('vt_copyright_default')?></span>
</div>
<?php } ?>
<!-- End Site Footer -->

<!-- Get All Footer Files sent by the plugins -->
<?php wp_footer(); ?>
</body>
</html>
