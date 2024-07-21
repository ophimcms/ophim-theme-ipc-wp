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

    <header>
        <h1><?php single_tag_title(); ?></h1>
    </header>
    <div id="archive-content" class="animation-2 items normal">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <?php include THEMETEMPLADE . '/movie_card.php' ?>
            <?php }
            wp_reset_postdata();
        } ?>

        <?php if (!have_posts()) { ?>
            <p>Không có dữ liệu liên quan</p>
        <?php } ?>
    </div>
    <?php ophim_pagination(); ?>
</div>
<?php
get_footer();
?>
