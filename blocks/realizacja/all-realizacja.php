<?php
if (get_locale() == 'pl_PL') { $label  = 'Wczytaj więcej'; } else { $label  = 'Load more'; }
 if (get_locale() == 'pl_PL') { $labelW  = 'Czytaj więcej'; } else { $labelW  = 'Read more'; }
    $id = 'tytul-' . $block['id'];

    $className = 'ra-realizacje ';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    
    $realizacje = new WP_Query( array(
        'post_type' => 'realizacje',
        'posts_per_page' => 4,
        'post__not_in' => array(3144),
        'order' => 'DESC',
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div id="ajax-realizacje" class="ra-realizacje-wraper">
        <?php while ( $realizacje->have_posts() ) : $realizacje->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content-realizacje'); ?>

        <?php endwhile; wp_reset_query(); ?>
    </div>

    <?php if (  $realizacje->post_count > 1) { ?>
    <div class="more-realizacje">
        <div class="btn btn-main btn-big" id="more_realizacje"><?php echo $label; ?></div>
        <div id="loading" class="preloader-wrap">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/loading-buffering.gif" alt="loading">
        </div>
    </div>
    <?php } ?>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var ppp = 4; // Post per page
var pageNumber = 1;
var idd = <?php echo json_encode($term->slug); ?>;
var ex = <?php echo json_encode($ex->slug); ?>;
var ajaxpagination = {
    "ajaxurl": "http:\/\/localhost\/roial\/wp-admin\/admin-ajax.php"
};

function load_posts() {
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&idd=' + idd + '&action=realizacje_post';
    $.ajax({
        type: "POST",
        dataType: "html",
        url: ajaxpagination.ajaxurl,
        data: str,
        beforeSend: function() {

            $("#loading").show(); // change the button text, you can also add a preloader image
            $("#more_realizacje").hide();

        },
        success: function(data) {
            var $data = $(data);
            if ($data.length) {
                $("#ajax-realizacje").append($data);
                $("#more_realizacje").attr("disabled", false);
                $("#more_realizacje").show();
                $("#loading").hide();
            } else {
                $("#more_realizacje").remove();
                $("#loading").hide();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }
    });
    return false;
}
jQuery("#more_realizacje").on("click", function() { // When btn is pressed.
    jQuery("#more_realizacje").attr("disabled", true); // Disable the button, temp.
    load_posts();
    // jQuery(this).append('.more-realizacje'); // Move the 'Load More' button to the end of the the newly added posts.
});
</script>