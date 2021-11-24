<?php
function cptui_register_my_cpts()
{

    /**
     * Post Type: Testimonials.
     */

    $labels = [
        "name" => __("Testimonials", "custom_theme"),
        "singular_name" => __("Testimonial", "custom_theme"),
        "menu_name" => __("Testimonials", "custom_theme"),
        "all_items" => __("All Testimonials", "custom_theme"),
        "add_new" => __("Add new", "custom_theme"),
        "add_new_item" => __("Add new Testimonia", "custom_theme"),
        "edit_item" => __("Edit Testimonia", "custom_theme"),
        "new_item" => __("New Testimonia", "custom_theme"),
        "view_item" => __("View Testimonia", "custom_theme"),
        "view_items" => __("View Testimonials", "custom_theme"),
        "search_items" => __("Search Testimonials", "custom_theme"),
        "not_found" => __("No Testimonials found", "custom_theme"),
        "not_found_in_trash" => __("No Testimonials found in trash", "custom_theme"),
        "parent" => __("Parent Testimonia:", "custom_theme"),
        "featured_image" => __("Featured image for this Testimonia", "custom_theme"),
        "set_featured_image" => __("Set featured image for this Testimonia", "custom_theme"),
        "remove_featured_image" => __("Remove featured image for this Testimonia", "custom_theme"),
        "use_featured_image" => __("Use as featured image for this Testimonia", "custom_theme"),
        "archives" => __("Testimonia archives", "custom_theme"),
        "insert_into_item" => __("Insert into Testimonia", "custom_theme"),
        "uploaded_to_this_item" => __("Upload to this Testimonia", "custom_theme"),
        "filter_items_list" => __("Filter Testimonials list", "custom_theme"),
        "items_list_navigation" => __("Testimonials list navigation", "custom_theme"),
        "items_list" => __("Testimonials list", "custom_theme"),
        "attributes" => __("Testimonials attributes", "custom_theme"),
        "name_admin_bar" => __("Testimonia", "custom_theme"),
        "item_published" => __("Testimonia published", "custom_theme"),
        "item_published_privately" => __("Testimonia published privately.", "custom_theme"),
        "item_reverted_to_draft" => __("Testimonia reverted to draft.", "custom_theme"),
        "item_scheduled" => __("Testimonia scheduled", "custom_theme"),
        "item_updated" => __("Testimonia updated.", "custom_theme"),
        "parent_item_colon" => __("Parent Testimonia:", "custom_theme"),
    ];

    $args = [
        "label" => __("Testimonials", "custom_theme"),
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => false,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "testimonials", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title" ],
        "show_in_graphql" => false,
    ];

    register_post_type("testimonials", $args);
}

add_action('init', 'cptui_register_my_cpts');
