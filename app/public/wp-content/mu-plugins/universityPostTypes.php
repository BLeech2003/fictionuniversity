<?php
//add a new post type
function university_post_types()
{
    //event post type
    register_post_type("event", array(
        "rewrite" => array(
            "slug" => "events"
        ),
        "supports" => array("title", "editor", "excerpt"),
        "has_archive" => true,
        "public" => true,
        "menu_icon" => "dashicons-calendar",
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add new Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        )
    ));
    //program post type
    register_post_type("program", array(
        "rewrite" => array(
            "slug" => "programs"
        ),
        "supports" => array("title", "editor"),
        "has_archive" => true,
        "public" => true,
        "menu_icon" => "dashicons-awards",
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Programs",
            "add_new_item" => "Add new Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
            "singular_name" => "Program"
        )
    ));

    register_post_type("professor", array(
        "supports" => array("title", "editor", "thumbnail"),
        "public" => true,
        "menu_icon" => "dashicons-welcome-learn-more",
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Professors",
            "add_new_item" => "Add new Professor",
            "edit_item" => "Edit Professor",
            "all_items" => "All Professors",
            "singular_name" => "Professor"
        )
    ));
}

add_action("init", "university_post_types");


?>