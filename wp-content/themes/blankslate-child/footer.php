</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="footer">
<?php
    wp_nav_menu(array(
        'theme_location' => 'footer_menu',
        'menu_class' => 'footer',
    ));
?></footer>
</div>
<?php wp_footer(); ?>
</body>
</html>