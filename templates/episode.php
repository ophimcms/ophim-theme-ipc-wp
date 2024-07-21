<div id="single" class="dtsingle">
    <div class="content right">
        <div class='dooplay_player'>
            <div id='playcontainer' class='play'>
                <div id='dooplay_player_response'></div>
            </div>
            <h3>CHỌN NGUỒN PHÁT</h3>
            <div id='playeroptions' class='options'>
                <ul id='playeroptionsul' class='ajax_mode'>
                    <a data-id="<?= episodeName() ?>" data-link="<?= m3u8EpisodeUrl() ?>" data-type="m3u8"
                       onclick="chooseStreamingServer(this)" class="streaming-server">
                        <li class="dooplay_player_option">
                            <i class='fas fa-play-circle'></i>
                            <span class='title'>VIP #1</span>
                            <span class='loader'></span>
                        </li>
                    </a>
                    <a data-id="<?= episodeName() ?>" data-link="<?= embedEpisodeUrl() ?>" data-type="embed"
                       onclick="chooseStreamingServer(this)" class="streaming-server">
                        <li class="dooplay_player_option">
                            <i class='fas fa-play-circle'></i>
                            <span class='title'>VIP #2</span>
                            <span class='loader'></span>
                        </li>
                    </a>
                </ul>
                <div class='thongbaoserver'>Nếu không xem được vui lòng đổi nguồn phát hoặc tải lại trang!</div>
            </div>
        </div>
        <div class="sbox">
            <div class="khungepih1">
                <h1 class="epih1"><?php the_title(); ?> (<?= op_get_original_title() ?>) &#8211; Tập
                    <?= episodeName() ?></h1>
            </div>
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

            <?php foreach (episodeList() as $key => $server) { ?>
            <div id='serie_contenido' style='padding-top: 5px'>
                <div id='seasons'>
                    <div class='se-c'>
                        <span class="se-t se-o"><span class="server_name"> DANH SÁCH TẬP: <?= $server['server_name'] ?></span></span>
                        <div class='se-a' style='display:block'>
                            <ul class='episodios'>
                                <?php foreach ($server['server_data'] as $list) {
                                    $current = '';
                                    if (slugify($list['name']) == episodeName()&& episodeSV() == $key) {
                                        $current = 'active';
                                    }
                                    echo '<li class="' . $current . '" >
                                            <div class="episodiotitle"><a  href="' . hrefEpisode($list["name"],$key) . '"
                                             >
                                                ' . $list['name'] . '
                                            </a></div>
                                        </li>';
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="khunginfo">
            <div itemprop="description" class="wp-content"></div>
        </div>
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

        <div class="khung">
            <div id="comments" class="extcom">
                <div class="fb-comments" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                     data-colorscheme="dark" data-numposts="5" data-order-by="reverse_time" data-lazy="true"></div>
            </div>
        </div>

        <div style="padding: 5px">
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
                    <span class="fas fa-angle-right" itemprop="position" content="2"></span>
                </li>

                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                            itemprop="name">Tập <?= episodeName() ?></span><span itemprop="position"
                                                                                 content="3"></span></li>
            </ol>

        </div>
    </div>
</div>

<?php add_action('wp_footer', function (){?>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-core.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-hlsjs.min.js"></script>

    <script src="<?= get_template_directory_uri() ?>/assets/js/jwplayer-8.9.3.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/hls.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/jwplayer.hlsjs.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery('html, body').animate({
                scrollTop: jQuery('#dooplay_player_response').offset().top - 40
            }, 'slow');
        });
    </script>

    <script>
        var episode_id = '<?= episodeName() ?>';
        const wrapper = document.getElementById('dooplay_player_response');
        const vastAds = "<?= get_option('ophim_jwplayer_advertising_file') ?>";

        function chooseStreamingServer(el) {
            const type = el.dataset.type;
            const link = el.dataset.link.replace(/^http:\/\//i, 'https://');
            const id = el.dataset.id;

            const newUrl =
                location.protocol +
                "//" +
                location.host +
                location.pathname.replace(`-${episode_id}`, `-${id}`);


            episode_id = id;


            Array.from(document.getElementsByClassName('streaming-server')).forEach(server => {
                server.getElementsByClassName('dooplay_player_option')[0].classList.remove('on');
                server.getElementsByClassName('dooplay_player_option')[0].getElementsByClassName('loader')[0].style
                    .display = 'none';
            })
            el.getElementsByClassName('dooplay_player_option')[0].classList.add('on');
            el.getElementsByClassName('dooplay_player_option')[0].getElementsByClassName('loader')[0].style.display =
                'inline-block';

            renderPlayer(type, link, id);
        }

        function renderPlayer(type, link, id) {
            if (type == 'embed') {
                if (vastAds) {
                    wrapper.innerHTML = `<div id="fake_jwplayer"></div>`;
                    const fake_player = jwplayer("fake_jwplayer");
                    const objSetupFake = {
                        key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                        aspectratio: "16:9",
                        width: "100%",
                        file: "<?= get_template_directory_uri() ?>/assets/player/1s_blank.mp4",
                        volume: 100,
                        mute: false,
                        autostart: true,
                        advertising: {
                            tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                            client: "vast",
                            vpaidmode: "insecure",
                            skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                            skipmessage: "Bỏ qua sau xx giây",
                            skiptext: "Bỏ qua"
                        }
                    };
                    fake_player.setup(objSetupFake);
                    fake_player.on('complete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adSkipped', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adComplete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });
                } else {
                    if (wrapper) {
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                    }
                }
                return;
            }

            if (type == 'm3u8' || type == 'mp4') {
                wrapper.innerHTML = `<div id="jwplayer"></div>`;
                const player = jwplayer("jwplayer");
                const objSetup = {
                    key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                    aspectratio: "16:9",
                    width: "100%",
                    image: "<?= op_get_poster_url() ?>",
                    file: link,
                    playbackRateControls: true,
                    playbackRates: [0.25, 0.75, 1, 1.25],
                    sharing: {
                        sites: [
                            "reddit",
                            "facebook",
                            "twitter",
                            "googleplus",
                            "email",
                            "linkedin",
                        ],
                    },
                    volume: 100,
                    mute: false,
                    autostart: true,
                    logo: {
                        file: "<?= get_option('ophim_jwplayer_logo_file') ?>",
                        link: "<?= get_option('ophim_jwplayer_logo_link') ?>",
                        position: "<?= get_option('ophim_jwplayer_logo_position') ?>",
                    },
                    advertising: {
                        tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                        client: "vast",
                        vpaidmode: "insecure",
                        skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                        skipmessage: "Bỏ qua sau xx giây",
                        skiptext: "Bỏ qua"
                    }
                };

                if (type == 'm3u8') {
                    const segments_in_queue = 50;

                    var engine_config = {
                        debug: !1,
                        segments: {
                            forwardSegmentCount: 50,
                        },
                        loader: {
                            cachedSegmentExpiration: 864e5,
                            cachedSegmentsCount: 1e3,
                            requiredSegmentsPriority: segments_in_queue,
                            httpDownloadMaxPriority: 9,
                            httpDownloadProbability: 0.06,
                            httpDownloadProbabilityInterval: 1e3,
                            httpDownloadProbabilitySkipIfNoPeers: !0,
                            p2pDownloadMaxPriority: 50,
                            httpFailedSegmentTimeout: 500,
                            simultaneousP2PDownloads: 20,
                            simultaneousHttpDownloads: 2,
                            // httpDownloadInitialTimeout: 12e4,
                            // httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpDownloadInitialTimeout: 0,
                            httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpUseRanges: !0,
                            maxBufferLength: 300,
                            // useP2P: false,
                        },
                    };
                    if (Hls.isSupported() && p2pml.hlsjs.Engine.isSupported()) {
                        var engine = new p2pml.hlsjs.Engine(engine_config);
                        player.setup(objSetup);
                        jwplayer_hls_provider.attach();
                        p2pml.hlsjs.initJwPlayer(player, {
                            liveSyncDurationCount: segments_in_queue, // To have at least 7 segments in queue
                            maxBufferLength: 300,
                            loader: engine.createLoaderClass(),
                        });
                    } else {
                        player.setup(objSetup);
                    }
                } else {
                    player.setup(objSetup);
                }


                const resumeData = 'OPCMS-PlayerPosition-' + id;
                player.on('ready', function() {
                    if (typeof(Storage) !== 'undefined') {
                        if (localStorage[resumeData] == '' || localStorage[resumeData] == 'undefined') {
                            console.log("No cookie for position found");
                            var currentPosition = 0;
                        } else {
                            if (localStorage[resumeData] == "null") {
                                localStorage[resumeData] = 0;
                            } else {
                                var currentPosition = localStorage[resumeData];
                            }
                            console.log("Position cookie found: " + localStorage[resumeData]);
                        }
                        player.once('play', function() {
                            console.log('Checking position cookie!');
                            console.log(Math.abs(player.getDuration() - currentPosition));
                            if (currentPosition > 180 && Math.abs(player.getDuration() - currentPosition) >
                                5) {
                                player.seek(currentPosition);
                            }
                        });
                        window.onunload = function() {
                            localStorage[resumeData] = player.getPosition();
                        }
                    } else {
                        console.log('Your browser is too old!');
                    }
                });

                player.on('complete', function() {
                    <?php if(nextEpisodeUrl()){ ?>
                    window.location.href = "<?= nextEpisodeUrl() ?>";
                    <?php }?>
                    if (typeof(Storage) !== 'undefined') {
                        localStorage.removeItem(resumeData);
                    } else {
                        console.log('Your browser is too old!');
                    }
                })

                function formatSeconds(seconds) {
                    var date = new Date(1970, 0, 1);
                    date.setSeconds(seconds);
                    return date.toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const episode = '<?= episodeName() ?>';
            let playing = document.querySelector(`[data-id="${episode}"]`);
            if (playing) {
                playing.click();
                return;
            }

            const servers = document.getElementsByClassName('streaming-server');
            if (servers[0]) {
                servers[0].click();
            }
        });
    </script>

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