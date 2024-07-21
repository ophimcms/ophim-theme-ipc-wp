<?php
get_header();
?>
<div class="content right normal">
    <?php if ( is_active_sidebar('widget-slider-poster') ) {
        dynamic_sidebar( 'widget-slider-poster' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
    <?php if ( is_active_sidebar('widget-area') ) {
        dynamic_sidebar( 'widget-area' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
</div>
<?php
get_footer();
?>
