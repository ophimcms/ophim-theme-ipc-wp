<article id="post-<?= $key ?? 0 ?>" class="item tvshows">
    <div class="poster"><img class="lazyload" data-src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>">
        <span class='ribbon'>
            <i class='fa fa-play-circle' aria-hidden='true'></i><?= op_get_episode() ?>
        </span>
        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
            <div class="see"></div>
        </a>
    </div>
    <div class="data">
        <h3>
            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <span>
            <span class='tagline'><?= op_get_original_title() ?></span>
        </span>
    </div>
</article>
