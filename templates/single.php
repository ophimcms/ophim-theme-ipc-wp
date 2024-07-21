<div class="content right">
    <div class="dt-breadcrumb breadcrumb_bottom">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" title="Trang chủ" href="/"><span itemprop="name">Trang chủ</span>
                </a>
                <span class="fas fa-angle-right" itemprop="position" content="1"></span>
            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                    <span itemprop="name"><?php the_title(); ?></span>
                </a>
                <span itemprop="position" content="2"></span>
            </li>
        </ol>
    </div>

    <div class="sheader">
        <div class="poster">
            <img itemprop="image" src="<?= op_get_thumb_url() ?>" alt="<?php the_title(); ?>"
                 title="<?php the_title(); ?>">
            <?php if (watchUrl()) { ?>
            <div class="imdbpost">
                <a class="button_play" href="<?= watchUrl() ?>"><i class="fa fa-play-circle"
                                                                  aria-hidden="true"></i> Xem Phim</a>
            </div>
            <?php } ?>
        </div>
        <div class="data">
            <h1><?php the_title(); ?></h1>
            <ul class="infomation-film">
                <li>
                    <h2 class="title-film-detail-3"><span class='tagline'><?= op_get_original_title() ?></span></h2>
                </li>
                <li>Năm phát hành: <a href="" rel="tag"><?= op_get_year() ?></a>
                </li>
                <li>
                    <div class="mepo1">
                        <p>Trạng thái <span class='quality1'><i class='fa fa-play-circle' aria-hidden='true'></i>
                                    <?= op_get_episode() ?> <?= op_get_lang() ?></span>
                        </p>
                    </div>
                </li>
                <li>Số tập:<span class='episode'> <?= op_get_total_episode() ?></span></li>
                <li>Quốc gia:
                    <?= op_get_regions(', ') ?>
                <li>Thể loại:
                    <?= op_get_genres(', ') ?>
                </li>
            </ul>
            <div class="starstruck-ptype" style="">
                <div>
                        <span class="hidden" itemprop="aggregateRating" itemscope
                              itemtype="http://schema.org/AggregateRating">
                            <meta itemprop="ratingValue" content="<?= op_get_rating(); ?>" />
                            <meta itemprop="ratingcount" content="<?= op_get_rating_count() ?>">
                            <meta itemprop="bestRating" content="10" />
                            <meta itemprop="worstRating" content="1" />
                        </span>

                    <div class="starstruck-wrap">
                        <div class="dt_rating_data">
                            <div class="starstruck starstruck-main">
                                <div id="star" data-score="<?= op_get_rating(); ?>"
                                     style="cursor: pointer;"></div>
                            </div>

                            <section class="nope starstruck-rating-wrap">Đánh giá của bạn:
                                <span class="rating-yours">0</span>
                            </section>

                            <div class="starstruck-rating">
                                    <span
                                            class="dt_rating_vgs"><?= op_get_rating(); ?></span><i
                                        class="fas fa-user-circle"></i>
                                <span class="rating-count"><?= op_get_rating_count() ?></span>
                                <span class="rating-text">đánh giá</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_tabs">
        <ul id="section" class="smenu idTabs">
            <li><a href="#info">Thông tin</a></li>
            <li><a href="#cast">Diễn viên</a></li>
            <?php if (op_get_trailer_url()) { ?>
            <li><a href="#trailer">Trailer</a></li>
            <?php } ?>
            <li id="report_li"><a href="#report">Bình luận</a></li>
        </ul>
    </div>
    <div id="cast" class="sbox fixidtab">
        <?php if (get_the_terms(get_the_ID(), "ophim_directors")) { ?>
        <h6>ĐẠO DIỄN</h6>
        <div class="persons">
            <?php foreach (get_the_terms(get_the_ID(), "ophim_directors") as $term) { ?>
                <div class="person">
                    <div class="img"><a href="<?php echo home_url('') . '/';
                        echo get_option('ophim_directors') ? get_option('ophim_directors') : 'directors' ?>/<?php echo "{$term->slug}" ?>/"><img
                                    alt="Đạo diễn "
                                    src="<?= get_template_directory_uri() ?>/assets/assets/img/no/cast.png" /></a>
                    </div>
                    <div class="data">
                        <div class="name"><a href="<?php echo home_url('') . '/';
                            echo get_option('ophim_directors') ? get_option('ophim_directors') : 'directors' ?>/<?php echo "{$term->slug}" ?>/"><?php echo "{$term->name}" ?></a>
                        </div>
                        <div class="caracter">Đạo Diễn</div>
                    </div>
                </div>

            <?php } ?>
        </div>
        <?php } ?>
        <?php if (get_the_terms(get_the_ID(), "ophim_actors")) { ?>
            <h6>DIỄN VIÊN</h6>
            <div class="persons">
                <?php foreach (get_the_terms(get_the_ID(), "ophim_actors") as $term) { ?>
                    <div class="person">
                        <div class="img"><a href="<?php echo home_url('') . '/';
                            echo get_option('ophim_actors') ? get_option('ophim_actors') : 'actors' ?>/<?php echo "{$term->slug}" ?>/"><img
                                        alt="Đạo diễn "
                                        src="<?= get_template_directory_uri() ?>/assets/assets/img/no/cast.png" /></a>
                        </div>
                        <div class="data">
                            <div class="name"><a href="<?php echo home_url('') . '/';
                                echo get_option('ophim_actors') ? get_option('ophim_actors') : 'actors' ?>/<?php echo "{$term->slug}" ?>/"><?php echo "{$term->name}" ?></a>
                            </div>
                            <div class="caracter">Điễn viên</div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div id="report" class="sbox">
        <div class="comment-warning"><strong>CẢNH BÁO:</strong> Không bấm vào các đường link lạ ở khu vực
            bình luận. Việc truy cập vào các liên kết lạ ngoài phim có thể khiến bạn bị hack tài khoản
            Facebook.
        </div>
        <div id="comments" class="extcom">
            <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
        </div>
    </div>

    <div id="info" class="sbox fixidtab">
        <div itemprop="description" class="wp-content">
            <h2 style="text-align: center;"><?php the_title(); ?>
                &#8211; <?= op_get_original_title() ?> <?= op_get_quality() ?> <?= op_get_lang() ?>
            </h2>

            <div class="content-film" style="">
                <p><?php the_content();?></p>
            </div>
        </div>
        <div class="the_tag_list">
            <?= op_get_tags(' ') ?>
        </div>
    </div>

    <?php if (op_get_trailer_url()) {

        parse_str( parse_url( op_get_trailer_url(), PHP_URL_QUERY ), $my_array_of_vars );
        $video_id = $my_array_of_vars['v'];
        ?>
    <div id="trailer" class="sbox fixidtab" style="display: block;">
        <h4>Trailer Phim <?php the_title(); ?> -
            <span class="tagline"><?= op_get_original_title() ?></span>
        </h4>
        <div class="videobox">
            <div class="embed">
                <iframe class="rptss lazyload" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                        data-src="https://www.youtube.com/embed/<?= $video_id ?>?autoplay=0&autohide=1"></iframe>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class='sbox'>
        <div class='dt_social_single'><span>Chia sẻ<b id='social_count'>0</b></span><a
                    data-id='<?php echo get_the_ID(); ?>' rel='nofollow' href='javascript: void(0);'
                    onclick='window.open("https://facebook.com/sharer.php?u=<?php the_permalink(); ?>","facebook","toolbar=0, status=0, width=650, height=450")'
                    class='facebook dt_social'><b>Facebook</b></a><a data-id='<?php echo get_the_ID(); ?>' rel='nofollow'
                                                                     href='javascript: void(0);'
                                                                     onclick='window.open("https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>","twitter","toolbar=0, status=0, width=650, height=450")'
                                                                     data-rurl='<?php the_permalink(); ?>' class='twitter dt_social'><b>Twitter</b></a><a
                    data-id='<?php echo get_the_ID(); ?>' rel='nofollow' href='javascript: void(0);'
                    onclick='window.open("https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?= op_get_poster_url() ?>&description=<?php the_title(); ?>","pinterest","toolbar=0, status=0, width=650, height=450")'
                    class='pinterest dt_social'><b>Pinterest</b></a><a data-id='<?php echo get_the_ID(); ?>' rel='nofollow'
                                                                       href='whatsapp://send?text=<?php the_title(); ?>%20-%20<?php the_permalink(); ?>'
                                                                       class='whatsapp dt_social'><b>WhatsApp</b></a>
        </div>
    </div>
    <header>
        <h2>Có thể bạn thích xem</h2>
        <div class="nav_items_module">
            <a class="btn prevf"><i class="fas fa-caret-left"></i></a>
            <a class="btn nextf"><i class="fas fa-caret-right"></i></a>
        </div>
    </header>
    <div id="featured-titles" class="items normal featured">
        <?php
        $postType = 'ophim';
        $taxonomyName = 'ophim_genres';
        $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
        if ($taxonomy) {
            $category_ids = array();
            foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
            $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
            $my_query = new wp_query($args);
            if ($my_query->have_posts()):
                while ($my_query->have_posts()):$my_query->the_post(); include THEMETEMPLADE.'/movie_card.php';
                endwhile;
            endif;
            wp_reset_query();
        }
        ?>
    </div>

</div>
<?php
add_action('wp_footer', function (){
    ?>
    <link href="<?= get_template_directory_uri() ?>/assets/libs/raty/jquery.raty.css" rel="stylesheet" />
    <script src="<?= get_template_directory_uri() ?>/assets/libs/raty/jquery.raty.js"></script>

    <script>
        var rated = false;
        jQuery(document).ready(function($) {
            $('#star').raty({
                number: 10,
                starHalf: '<?= get_template_directory_uri() ?>/assets/libs/raty/images/star-half.png',
                starOff: '<?= get_template_directory_uri() ?>/assets/libs/raty/images/star-off.png',
                starOn: '<?= get_template_directory_uri() ?>/assets/libs/raty/images/star-on.png',
                click: function(score, evt) {
                    if (!rated) {
                        $.ajax({
                            url: '<?php echo admin_url('admin-ajax.php')?>',
                            type: 'POST',
                            data:{
                                action: "ratemovie",
                                rating: score,
                                postid: '<?php echo get_the_ID(); ?>',
                            },
                        }).done(function (res) {
                            $('.rating-yours').html(score);
                            rated = true;
                        });
                    }
                }
            });
        })
    </script>
<?php }) ?>
