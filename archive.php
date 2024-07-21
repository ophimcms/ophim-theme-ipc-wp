<?php
get_header();
?>

<div class="content right normal">
    <div class="dt-breadcrumb breadcrumb_bottom">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" title="Trang chủ" href="/"><span itemprop="name">Trang chủ</span>
                </a>
                <span class="fas fa-angle-right" itemprop="position" content="1"></span>
            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" title="Danh Sách Phim"
                   href="/">
                    <span itemprop="name"><?php single_term_title() ?></span>
                </a>
                <span itemprop="position" content="2"></span>
            </li>
        </ol>
    </div>
    <div id="archive-content" class="animation-2 items normal">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <article id="post" class="item tvshows">
                <div class="poster"><img class="lazyload" data-src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                        <div class="see"></div>
                    </a>
                </div>
                <div class="data">
                    <h3>
                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <span>
            <span class='tagline'>  <?php the_excerpt(); ?></span>
        </span>
                </div>
            </article>

        <?php }
        wp_reset_postdata();
    } ?>
    <?php ophim_pagination(); ?>
</div>
</div>
<?php
get_footer();
?>

