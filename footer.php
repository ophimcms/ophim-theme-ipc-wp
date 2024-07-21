
<?php get_sidebar('ophim'); ?>
</div>
</div>
</div>

<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        $("#featured-titles").owlCarousel({
            autoPlay: !1,
            items: 5,
            stopOnHover: !0,
            pagination: !1,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [980, 4],
            itemsTablet: [768, 3],
            itemsTabletSmall: !1,
            itemsMobile: [479, 3]
        });
        $(".nextf").click(function() {
            $("#featured-titles").trigger("owl.next")
        });
        $(".prevf").click(function() {
            $("#featured-titles").trigger("owl.prev")
        });
        $("#dt-episodes").owlCarousel({
            autoPlay: !1,
            pagination: !1,
            items: 3,
            stopOnHover: !0,
            itemsDesktop: [900, 3],
            itemsDesktopSmall: [750, 3],
            itemsTablet: [500, 2],
            itemsMobile: [320, 1]
        });
        $(".next").click(function() {
            $("#dt-episodes").trigger("owl.next")
        });
        $(".prev").click(function() {
            $("#dt-episodes").trigger("owl.prev")
        });
        $("#dt-seasons").owlCarousel({
            autoPlay: !1,
            items: 5,
            stopOnHover: !0,
            pagination: !1,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [980, 5],
            itemsTablet: [768, 4],
            itemsTabletSmall: !1,
            itemsMobile: [479, 3]
        });
        $(".next2").click(function() {
            $("#dt-seasons").trigger("owl.next")
        });
        $(".prev2").click(function() {
            $("#dt-seasons").trigger("owl.prev")
        });
        $("#slider-movies").owlCarousel({
            autoPlay: !1,
            items: 2,
            stopOnHover: !0,
            pagination: !0,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: [479, 1]
        });
        $("#slider-tvshows").owlCarousel({
            autoPlay: !1,
            items: 2,
            stopOnHover: !0,
            pagination: !0,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: [479, 1]
        });
        $("#slider-movies-tvshows").owlCarousel({
            autoPlay: !1,
            items: 2,
            stopOnHover: !0,
            pagination: !0,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: [479, 1]
        });
        $(".reset").click(function(event) {
            if (!confirm(dtGonza.reset_all)) {
                event.preventDefault()
            }
        });
        $(".addcontent").click(function(event) {
            if (!confirm(dtGonza.manually_content)) {
                event.preventDefault()
            }
        })
    });
</script>
<script>
    var dtAjax = {
        "url": "",
        "player_api": "",
        "play_ajaxmd": "1",
        "play_method": "wp_json",
        "googlercptc": null,
        "classitem": "5",
        "loading": "Loading..",
        "afavorites": "Add to favorites",
        "rfavorites": "Remove of favorites",
        "views": "l\u01b0\u1ee3t xem",
        "remove": "Remove",
        "isawit": "I saw it",
        "send": "Data send..",
        "updating": "Updating data..",
        "error": "Error",
        "pending": "Pending review",
        "ltipe": "Download",
        "sending": "Sending data",
        "enabled": "Enable",
        "disabled": "Disable",
        "trash": "Delete",
        "lshared": "Links Shared",
        "ladmin": "Manage pending links",
        "sendingrep": "Please wait, sending data..",
        "ready": "Ready",
        "deletelin": "Do you really want to delete this link?"
    }
</script>
<script>
    jQuery(document).ready(function(a) {
        a(".scrolling").mCustomScrollbar({
            theme: "minimal-dark",
            scrollInertia: 200,
            scrollButtons: {
                enable: !0
            },
            callbacks: {
                onTotalScrollOffset: 100,
                alwaysTriggerOffsets: !1
            }
        })
    })
</script>
<script>
    var dtGonza = {
        "api": "",
        "glossary": "",
        "nonce": "3e09b1c43c",
        "area": ".live-search",
        "button": ".search-button",
        "more": "Xem t\u1ea5t c\u1ea3 k\u1ebft qu\u1ea3",
        "mobile": "false",
        "reset_all": "Really you want to restart all data?",
        "manually_content": "They sure have added content manually?",
        "loading": "Loading..",
        "loadingplayer": "Loading player..",
        "selectaplayer": "Select a video player",
        "playeradstime": null,
        "autoplayer": "1",
        "livesearchactive": "1"
    }
</script>
<script src="<?= get_template_directory_uri() ?>/assets/js/main.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>
</html>