<?php wp_footer(); ?>
<!-- <h6>This is coming from footer.php</h6> -->
<?php $FooterText = get_theme_mod('footer_text_setting'); ?>
<?php if(strlen($FooterText) > 0): ?>
    <footer>
        <p class="footer-text text-center pt-3"><?php echo get_theme_mod('footer_text_setting'); ?></p>
    </footer>
<?php endif; ?>



</body>
</html>
