<footer>
    <?php 
        $args= array('theme_location'=> 'header-menu', 'container' => 'nav', 'after'=> '<span class="seperator">'|'</span>'
        );
        wp_nav_menu($args);
    ?>
    <div class="copyright">
        All Right reserved <?php echo date("Y"); ?>
    </div>
</footer>
<?php
wp_footer();
?>
</body>
</html>