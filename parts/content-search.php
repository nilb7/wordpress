<article id="post-<?Php the_ID();?>"<?php post_class();?>>
    <header>
        <h2><a href="<?Php the_permalink();?>"><?php the_title();?></a></h2>
        <?php if("post"==get_post_type()):?>
            <div class="meta-info">
                <p>Posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
                <?php if(has_category()): ?>
                <p>Cateories: <?php the_category('');?></p>
                <?php endif;?>
                <?php if(has_tag()):?>
                    <p>Tags: <?php the_tags('',',');?></p>
                    <?php endif:?>
            </div>
    </header>
    <div class="content">
            <?php the_excerpt();?>
    </div>

</article>