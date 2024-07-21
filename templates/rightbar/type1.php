<aside id="dtw_content" class="widget doothemes_widget">
    <h2 class="widget-title"><?php echo $title; ?></h2>
    <div class="dtw_content">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <article class="w_item_b">
            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                <div class="image"><img
                            class="lazyload"
                            data-src="<?= op_get_thumb_url() ?>"
                            alt="<?php the_title(); ?>" /></div>
                <div class="data">
                    <h3><?php the_title(); ?></h3><span class="wdate"><?= op_get_original_title() ?></span><span
                            class="wextra"><b><i class="icon-star2"></i> <?= op_get_rating(); ?></b><span class="year"><?= op_get_year() ?></span>
                                        <span class='year'> <?= op_get_episode() ?></span></span>
                </div>
            </a>
        </article>
        <?php endwhile; ?>
    </div>
</aside>