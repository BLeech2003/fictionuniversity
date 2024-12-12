<?php

//load css and js
function fictional_uni_files()
{
    //import js
    wp_enqueue_script("main-uni-js", get_theme_file_uri("/build/index.js"), array("jquery"), "1.0", true);
    //styles, fonts and icons
    wp_enqueue_style("mainstyles", get_theme_file_uri("/build/style-index.css"));
    wp_enqueue_style("extrastyles", get_theme_file_uri("/build/index.css"));
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("googlefonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");


}

add_action("wp_enqueue_scripts", "fictional_uni_files"); //first arg is instruction
//second arg is call back, func we want to run


//update the title
function uni_features()
{
    // register_nav_menu("headerMenuLocation", "Header Menu Location");
    // register_nav_menu("footerLocation1", "Footer location 1");
    // register_nav_menu("footerLocation2", "Footer location 2");

    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_image_size("professor_landscape", 400, 260, true);
    add_image_size("professor_portrait", 480, 650, true);
}

add_action("after_setup_theme", "uni_features");

function university_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive("event") and $query->is_main_query()) {
        $today = date("Ymd");
        $query->set("meta_key", "event-date");
        $query->set("orderby", "meta_value_num");
        $query->set("order", "ASC");
        $query->set("meta_query", array(
            array(
                "key" => "event-date",
                "compare" => ">=",
                "value" => $today,
                "type" => "numeric",
            )
        ), );
    }
    if (!is_admin() and is_post_type_archive("program") and $query->is_main_query()) {
        $query->set("orderby", "title");
        $query->set("order", "ASC");
        $query->set("posts_per_page", -1);

    }
}

add_action("pre_get_posts", "university_adjust_queries");
?>