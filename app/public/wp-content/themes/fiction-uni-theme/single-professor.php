<?php get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image"
            style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>"></div>

        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title() ?></h1>
            <div class="page-banner__intro">
                <p>Learn how the school of your dreams got started.</p>
            </div>
        </div>
    </div>
    <div class="container container--narrow page-section">

        <div class="generic-content">
            <div class="row group">
                <div class="one-third">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="two-thirds">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
        $relatedPrograms = get_field("related_programs");
        if ($relatedPrograms) {
            echo "<hr class='section-break'>";
            echo "<h2 class='headline headline--medium'> Subjects taught</h2>";
            echo '<ul class="link-list min-list">';

            foreach ($relatedPrograms as $rp) {
                ?>
                <li><a href="<?php echo get_the_permalink($rp); ?>"> <?php echo get_the_title($rp); ?></a></li>
                <?php
            }
            echo "</ul>";
        }
        ?>
    </div>
    <?php
}
get_footer();
?>