<!-- function firstFunc()
{
    echo 2 + 2;
    echo "<p> Test par </p>";
}

firstFunc();

function varTest($name, $colour){
    echo "This is $name, she likes $colour";
}

varTest("Susan", "Red"); -->

<!-- <h1><?php bloginfo("name")?></h1> -->

<?php get_header();

while(have_posts()){
    the_post();?>
    <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
    <?php the_content(); ?>
</hr>
<?php
}
 get_footer();
 ?>