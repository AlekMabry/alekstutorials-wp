<footer class="footer-text"<?php if (is_front_page()) { echo ' style="position: fixed; bottom: 0;"'; } ?>>
    Copyright &copy; <?php echo date('Y'); ?> <?php echo get_theme_mod('pdn_home_footer_settings'); ?>
</footer>

<div class="background"></div>
<?php wp_footer(); ?>
</body>
</html>