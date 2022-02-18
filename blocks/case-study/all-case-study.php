<?php
if (get_locale() == 'pl_PL') { $label  = 'Wczytaj więcej'; } else { $label  = 'Load more'; }
 if (get_locale() == 'pl_PL') { $labelW  = 'Czytaj więcej'; } else { $labelW  = 'Read more'; }
    $id = 'tytul-' . $block['id'];

    $className = 'ra-case-study ';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    
    $cases = new WP_Query( array(
        'post_type' => 'case-study',
        'posts_per_page' => 4,
        'order' => 'DESC',
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div id="ajax-ref" class="ra-case-study-wraper">
        <?php while ( $cases->have_posts() ) : $cases->the_post(); ?>

        <?php get_template_part( 'template-parts/content/content-case-study'); ?>

        <?php endwhile; wp_reset_query(); ?>
    </div>

    <?php if (  $cases->post_count > 1) { ?>
    <div class="more-aj">
        <div class="btn btn-main btn-big" id="more_posts"><?php echo $label; ?></div>
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
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&idd=' + idd + '&action=more_post_ajax';
    $.ajax({
        type: "POST",
        dataType: "html",
        url: ajaxpagination.ajaxurl,
        data: str,
        beforeSend: function() {

            $("#loading").show(); // change the button text, you can also add a preloader image
            $("#more_posts").hide();

        },
        success: function(data) {
            var $data = $(data);
            if ($data.length) {
                $("#ajax-ref").append($data);
                $("#more_posts").attr("disabled", false);
                $("#more_posts").show();
                $("#loading").hide();
            } else {
                $("#more_posts").remove();
                $("#loading").hide();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }
    });
    return false;
}
jQuery("#more_posts").on("click", function() { // When btn is pressed.
    jQuery("#more_posts").attr("disabled", true); // Disable the button, temp.
    load_posts();
    // jQuery(this).append('.more-aj'); // Move the 'Load More' button to the end of the the newly added posts.
});
</script>