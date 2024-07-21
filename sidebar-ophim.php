<div class="sidebar right scrolling">
    <div class="fixed-sidebar-blank">
        <?php
        if ( is_active_sidebar('left-sidebar') ) {
            dynamic_sidebar( 'left-sidebar' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
    </div>
</div>
