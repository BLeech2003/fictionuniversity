<?php get_header();
pageBanner(array(
));

while (have_posts()) {
    the_post(); ?>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link("program") ?>"><i
                        class="fa fa-home" aria-hidden="true"></i>All programs</a> <span class="metabox__main">
                    <?php the_title(); ?>
                </span>
            </p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>
        <?php
        $relatedProfessors = new WP_Query(array(
            "posts_per_page" => -1,
            "post_type" => "professor",
            "orderby" => "title",
            "order" => "ASC",
            "meta_query" => array(
                array(
                    "key" => "related_programs",
                    "compare" => "LIKE",
                    "value" => '"' . get_the_ID() . '"',
                )
            ),
        ));

        if ($relatedProfessors->have_posts()) {
            echo "<hr class='section-break'>";
            echo "<h2 class='headline headline--medium'>" . get_the_title() . " Professors</h2>";
            echo "<ul class='professor-cards'>";
            while ($relatedProfessors->have_posts()) {
                $relatedProfessors->the_post(); ?>
                <li class="professor-card__list-item"> <a class="professor-card" href="<?php the_permalink(); ?>">
                        <img class="professor-card__image" src="<?php the_post_thumbnail_url("professor_landscape"); ?>">
                        <span class="professor-card__name"><?php the_title(); ?></span>
                    </a>
                </li>
            <?php }
            echo "</ul>";
        }
        wp_reset_postdata(); ?>
        <?php
        $today = date("Ymd");
        $home_events = new WP_Query(array(
            "posts_per_page" => 2,
            "post_type" => "event",
            "meta_key" => "event-date",
            "orderby" => "meta_value_num",
            "order" => "ASC",
            "meta_query" => array(
                array(
                    "key" => "event-date",
                    "compare" => ">=",
                    "value" => $today,
                    "type" => "numeric",

                ),
                array(
                    "key" => "related_programs",
                    "compare" => "LIKE",
                    "value" => '"' . get_the_ID() . '"',
                )
            ),
        ));

        if ($home_events->have_posts()) {
            echo "<hr class='section-break'>";
            echo "<h2 class='headline headline--medium'>Upcoming " . get_the_title() . " Events</h2>";
            while ($home_events->have_posts()) {
                $home_events->the_post();
                get_template_part("template_parts/events", "");
            }
        }
        wp_reset_postdata();
        ?>

    </div>
    <?php
}
get_footer();
?>