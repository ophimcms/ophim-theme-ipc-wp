<?php
get_header();
?>

<div class="content right normal">
    <?php
    while ( have_posts() ) : the_post();
    ?>

    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <div id="archive-content" class="animation-2 items normal">
        <?php  the_content(); ?>
    </div>
    <?php
    endwhile;
    ?>

</div>
<?php
get_footer();
?>
