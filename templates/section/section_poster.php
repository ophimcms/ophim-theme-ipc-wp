<header>
    <h2><?= $title; ?></h2><span><a title="<?= $title; ?>" href="<?= $slug; ?>" class="xemtatca">Xem Thêm</a></span>
</header>
<div class="items normal">
    <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++;
    include THEMETEMPLADE.'/movie_card.php';
    endwhile; ?>
</div>