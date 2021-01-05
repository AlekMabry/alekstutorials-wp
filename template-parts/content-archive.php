
<div class="tutorial-item">
    <div class="tutorial-item-top-container"></div>
    <div class="tutorial-item-bottom-container"></div>
    <div class="tutorial-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="tutorial-description">
        <div class="tutorial-description-text">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <?php the_excerpt(); ?>
        </div>
        <div class="tutorial-tags"><?php the_tags('', ' '); ?></div>
    </div>
</div>