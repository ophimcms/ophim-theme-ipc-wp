<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<div id="footer">
    <div class="container">
        <div class="content">
            <div class="views-row">
                <div class="copy-right">
                    <a title="Giới thiệu" href="">Giới thiệu</a> |
                    <a title="Bản quyền" href="">Bản quyền</a> |
                    <a title="Liên hệ" href="">Liên hệ</a> <br><a title="phim mới" href="">Phim mới</a> |
                    <a title="Phim lẻ" href="">Phim lẻ</a> |
                    <a title="Phim bộ" href="">Phim bộ</a> |
                    <a title="Phim chiếu rạp" href="">Phim chiếu rạp</a> |
                    <a title="Motphim" href="" target="_blank">Motphim</a><br>
                    Website xem phim của chúng tôi được tổng hợp và sưu tầm trên Internet. Chúng tôi không chịu trách nhiệm đối với bất kỳ nội dung nào được đăng tải trên trang web này.<br>
                    Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.<br>
                </div>
            </div>
        </div>
    </div>
</div>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);