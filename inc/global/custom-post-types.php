<?php 

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

/****

add_action('init','create_post_type');
function create_post_type(){
    
    // Build array of custom post types
    $types = array(
        array(
            'post_type'     =>'prefix_example',
            'name'          =>'Example',
            'slug'          =>'example',
            'attr'          =>'',
            'cfield'        =>'',
            'title'         =>'title',
            'excerpt'       =>'',
            'editor'        =>'editor',
            'author'        =>'author',
            'comments'      =>'comments',
            'thumbnail'     =>'thumbnail',
            'hierarchical'  =>'',
            'has_archive'   =>'',
            'thumb'         =>'',
            'menu_icon'     =>'dashicons-*',
            'add_new'       =>'Add New',
            'add_new_item'  =>'Add new item',
            'singular_name' => 'Example',
            'taxonomies'    => array(
                'post_tag',
                'category'
            )
        ),
        array(
            'post_type'     =>'prefix_example_2',
            'name'          =>'Example 2',
            'slug'          =>'example-2',
            'attr'          =>'',
            'cfield'        =>'',
            'title'         =>'title',
            'excerpt'       =>'',
            'editor'        =>'editor',
            'author'        =>'author',
            'comments'      =>'comments',
            'thumbnail'     =>'thumbnail',
            'hierarchical'  =>'',
            'has_archive'   =>'',
            'thumb'         =>'',
            'menu_icon'     =>'dashicons-*',
            'add_new'       =>'Add New',
            'add_new_item'  =>'Add new item',
            'singular_name' => 'Example',
            'taxonomies'    => array(
                'post_tag',
                'category'
            )
        )
    );  
    
    // Loop through array
    foreach ($types as $type){
        
        // Retrieve variables from array
        $name           = $type['name'];
        $post_type      = $type['post_type'];
        $slug           = $type['slug'];
        $page_attr      = $type['attr'];
        $c_field        = $type['cfield'];
        $title          = $type['title'];
        $excerpt        = $type['excerpt'];
        $editor         = $type['editor'];
        $author         = $type['author'];
        $comments       = $type['comments'];
        $thumbnail      = $type['thumbnail'];
        $hierarchical   = $type['hierarchical'];
        $has_archive    = $type['has_archive'];
        $thumb          = $type['thumb'];
        $menu_icon      = $type['menu_icon'];
        $add_new        = $type['add_new'];
        $add_new_item   = $type['add_new_item'];
        $singular       = $type['singular_name'];
        $taxonomies     = $type['taxonomies'];
    
        // Set custom post type arguments
        $args = array(
            'hierarchical'      => $hierarchical,
            'has_archive'       => $has_archive,
            'labels'            => array(
                'add_new'           => $add_new,
                'add_new_item'      => $add_new_item,
                'all_items'         => $name,
                'edit_item'         => __('Edit Post'),
                'name'              => $name,
                'menu_name'         => $name,
                'new_item'          => __('New Post'),
                'not_found'         => __('No posts found'),
                'not_found_in_trash'=> __('No posts found in Trash'),
                'search_items'      => __('Search Posts'),
                'singular_name'     => $singular,
                'view_item'         => __('View Post'),
            ),
            'menu_icon'         => $menu_icon,
            'menu_position'     => 5,
            'public'            => true,
            'query_var'         => true,
            'show_in_admin_bar' => true,
            'show_ui'           => true,
            'rewrite'           => array(
                'slug'              => $slug,
                'with_front'        => false
            ),
            'show_in_nav_menus' => true,
            'show_in_menu'      => true,
            'can_export'        => true, // Allows export in Tools > Export
            'taxonomies'        => $taxonomies,
            'supports'          => array($title, $editor, $author, $comments, $thumb, $excerpt, $page_attr, $c_field, $thumbnail),
        
        );
        
        // Build custom post types
        register_post_type($post_type,$args);
    }
    if (isset($_GET['flush'])) {
        flush_rewrite_rules();
        exit('Flushed!');
    }
}

****/

?>