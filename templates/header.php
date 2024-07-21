<style>
    #result a{
        color: #FFF!important;
    }
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 100%;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        margin-top: 15px;
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #2a2626;
    }
</style>
<header id="header" class="main">
    <div class="hbox">
        <div class="fix-hidden">
            <div class="logo">
                <a href="<?= get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <?php op_the_logo() ?>
                </a>
            </div>
            <div class="head-main-nav">
                <div class="menu-xem-phim-online-container">
                    <ul id="main_header" class="main-header">
                        <?php
                        $menu_items = wp_get_menu_array('primary-menu');
                        foreach ($menu_items as $key => $item) : ?>
                            <?php if (empty($item['children'])) { ?>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                    <a href="<?= $item['url'] ?>"
                                       title="<?= $item['title'] ?>"><?= $item['title'] ?></a>
                                </li>
                            <?php } else { ?>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a><?= $item['title'] ?></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($item['children'] as $k => $child): ?>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="<?= $child['url'] ?>"
                                                   title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="headitems ">
                <div id="advc-menu" class="search">
                    <form method="get" id="searchform" action="/">
                        <input type="text" placeholder="Tìm kiếm phim..." name="s" id="search"  onkeyup="fetch()"
                               value="<?php echo "$s"; ?>" autocomplete="off">
                        <button class="search-button" form="searchform" type="submit"><span
                                    class="fas fa-search"></span></button>
                    </form>
                </div>
            </div>

            <div class="" id="result"></div>

        </div>
        <div class="live-search ltr"></div>
    </div>
</header>

<div class="fixheadresp">
    <header class="responsive">
        <div class="nav"><a class="aresp nav-resp"></a></div>
        <div class="search"><a class="aresp search-resp"></a></div>
        <div class="logo">
            <a href="<?= get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                <?php if (has_custom_logo()): ?>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $custom_logo_url = $custom_logo_data[0];
                    ?>
                    <img style="width: 50px" src="<?php echo esc_url($custom_logo_url); ?>"
                         alt="<?php echo esc_attr(get_bloginfo('name')); ?>"/>
                <?php else: ?>
                    <h2><?php bloginfo('name'); ?></h2>
                <?php endif; ?>
            </a>
        </div>
    </header>
    <div class="search_responsive">
        <form method="get" id="form-search-resp" class="form-resp-ab" action="/"><input type="text"
                                                                                        placeholder="Tìm kiếm phim..."
                                                                                        name="s"
                                                                                        value="<?php echo "$s"; ?>"
                                                                                        autocomplete="off">
            <button type="submit" form="form-search-resp" class="search-button"><span
                        class="fas fa-search"></span></button>
        </form>
        <div class="live-search"></div>
    </div>
    <div id="arch-menu" class="menuresp">
        <div class="menu">
            <div class="menu-xem-phim-online-container">
                <ul id="main_header" class="resp">
                    <?php
                    $menu_items = wp_get_menu_array('primary-menu');
                    foreach ($menu_items as $key => $item) : ?>
                        <?php if (empty($item['children'])) { ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="<?= $item['url'] ?>"
                                   title="<?= $item['title'] ?>"><?= $item['title'] ?></a>
                            </li>
                        <?php } else { ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                <a><?= $item['title'] ?></a>
                                <ul class="sub-menu">
                                    <?php foreach ($item['children'] as $k => $child): ?>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                            <a href="<?= $child['url'] ?>"
                                               title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php } ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

