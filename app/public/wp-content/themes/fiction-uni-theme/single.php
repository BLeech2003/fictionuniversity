<?php get_header();

while(have_posts()){
    the_post();?>
    <h2> <?php the_title();
 the_content(); ?>
<hr>
<?php
}
get_footer();
?>