<?php
get_header();
pageBanner(array(
    "title" => "Past Events",
    "subtitle" => "See what is going on in our world"
));
?>


<div class="container container--narrow page-section">
    <?php
    $today = date("Ymd");
    $pastEvents = new WP_Query(array(
        "paged" => get_query_var("paged", 1),
        "post_type" => "event",
        "meta_key" => "event-date",
        "orderby" => "meta_value_num",
        "order" => "ASC",
        "meta_query" => array(
            array(
                "key" => "event-date",
                "compare" => "<=",
                "value" => $today,
                "type" => "numeric",

            )
        ),
    ));

    while ($pastEvents->have_posts()) {
        $pastEvents->the_post();
        $today = date("Ymd");
        get_template_part("template_parts/events", "");
    }

    echo paginate_links(array(
        "total" => $pastEvents->max_num_pages
    )); ?>

</div>

<?php
get_footer(); ?>