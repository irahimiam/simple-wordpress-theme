<footer class="footer content-region-3 pt30 pb40">
    <div class="container">
        <?php
        if (is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
        }
        ?>

        <?php
        if (is_active_sidebar('footer-2')) {
            dynamic_sidebar('footer-2');
        }
        ?>

        <?php
        if (is_active_sidebar('footer-3')) {
            dynamic_sidebar('footer-3');
        }
        ?>
</footer>

</body>

<?php wp_footer(); ?>

</html>