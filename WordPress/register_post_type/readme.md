## register_post_type

<!--![](../../img/)-->


##### create_blog

```php

function create_blog()
{
	register_post_type('blog', array(
		'labels' => array(
			'name'				=> __('Blog', 'blog-admin'),
			'singular_name'   	=> __('blog', 'blog-admin'),
			'add_new'		 	=> __('Add post blog', 'blog-admin'),
			'add_new_item'		=> __('Add post blog', 'blog-admin'),
			'edit'				=> __('Edit post blog', 'blog-admin'),
			'edit_item'	   		=> __('Edit post blog', 'blog-admin'),
			'new_item'			=> __('New post blog', 'blog-admin'),
			'all_items'	   		=> __('All post blog', 'blog-admin'),
			'view'				=> __('View post blog', 'blog-admin'),
			'view_item'	   		=> __('View post blog', 'blog-admin'),
			'search_items'		=> __('Search post blog', 'blog-admin'),
			'not_found'	   		=> __('Webinars not found', 'blog-admin'),
		),
		'public' => true, // show in admin panel?
		'menu_position' => 22,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
		'taxonomies' => array('category_blog'),
		'has_archive' => false,
		'capability_type' => 'post',
		'menu_icon'   => 'dashicons-portfolio',
		'rewrite' => array('slug' => 'blog'),
	));
}
add_action('init', 'create_blog');



```

##### // Registering Custom Post Type Themes

```php

// Registering Custom Post Type Themes
add_action( 'init', 'register_themepost', 20 );
function register_themepost() {
    $labels = array(
        'name' => _x( 'our-news', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New NewsPost', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit NewsPost', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New NewsPost', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View NewsPost', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search NewsPosts', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No NewsPosts found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No NewsPosts found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent NewsPost:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Our News Posts', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Theme Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'post_tag','our-news_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-text-page',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'our-news' ),
        'public' => true,
        'has_archive' => 'our-news',
        'capability_type' => 'post'
    );
    register_post_type( 'our-news', $args ); // max 20 character cannot contain capital letters and spaces
}

```

##### 


```html
    
single-{post-type}.php
The single post template used when a visitor requests a single post from a custom post type. For example, single-acme_product.php would be used for displaying single posts from a custom post type named acme_product.
archive-{post-type}.php
The archive post type template is used when visitors request a custom post type archive. For example, archive-acme_product.php would be used for displaying an archive of posts from the custom post type named acme_product. The archive.php template file is used if the archive-{post-type}.php is not present.
search.php
The search results template is used to display a visitor’s search results. To include search results from your custom post type, refer to the code sample below.
index.php
The index.php is used if a specific query template (single-{post-type}.php, single.php, archive-{post-type}.php, archive.php, search.php) for the custom post type is not present.


```



add_image_size() [Links](https://wp-kama.ru/function/add_image_size/)