<?php
/*
    Template Name:General Template
*/


?>
<?php get_header();?>

<div ida="content" class="site-cotent">
    <div id="primary" class="site-main">
        <main id="main" class="site-main">
            <?php
                if(have_posts()):
                    while(have_posts()): the_post();
            ?>  
            <article>
                <h1>
                    <?php the title(); ?>
                </h1>
                <?php the _content(); ?>
            </article>
            <?php endwhile;
            else: ?>
                <p>Nothing yet to be displayed!</p>
            <?php endif;?>
        </main> 
    </div>
</div>

<?php get_footer();?>