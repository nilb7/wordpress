<footer class="site-footer">
    <div class="conatiner">
        <div class="copyright">
            <p> <?php get_theme_mod('set_copyright','Copyright X-All Rights Reserved');?></p>
        </div>
        <nav div="footer-menu">
            <?php wp_nav_menu(array('theme_location'=>'wp_devs_footer_menu','depth'=>1));?>
        </nav>
    </div>
    <?php wp_footer();?>
</footer>




</body>
</html>