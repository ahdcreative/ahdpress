</main>
<?php do_action('ahdpress_content_end'); ?>
</div>
<?php do_action('ahdpress_content_after'); ?>
<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
    <?php do_action('ahdpress_footer'); ?>
    <div class="container mx-auto text-center text-hibiscus-600">
        &copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
