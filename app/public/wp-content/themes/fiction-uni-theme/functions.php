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
add_theme_support("title-tag");
}

add_action("after_setup_theme", "uni_features");
?>