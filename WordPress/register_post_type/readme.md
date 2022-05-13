## register_post_type

<!--![](../../img/)-->


##### only

```php

 function register_post_types(){
	register_post_type( 'qi_talk', [
		'labels' => [
			'name'               => 'Qi Talk posts', 
			'singular_name'      => 'Qi Talk post', 
			'add_new'            => 'Add Qi Talk post', 
			'add_new_item'       => 'Add Qi Talk post', 
			'edit_item'          => 'Edit Qi Talk post', 
			'new_item'           => 'New Qi Talk post', 
			'view_item'          => 'View Qi Talk post', 
			'search_items'       => 'Search Qi Talk post', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'menu_name'          => 'Qi Talk', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-chat',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','author','thumbnail', 'excerpt', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		//'taxonomies'          => ['companies', 'personalities'],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}
add_action( 'init', 'register_post_types' );

```





##### create_blog

```php

function create_doctors(){
	register_post_type('doctors', array(
		'labels' => array(
			'name'				=> __('Doctors', 'doctors-admin'),
			'singular_name'   	=> __('doctors', 'doctors-admin'),
			'add_new'		 	=> __('Add post doctors', 'doctors-admin'),
			'add_new_item'		=> __('Add post doctors', 'doctors-admin'),
			'edit'				=> __('Edit post doctors', 'doctors-admin'),
			'edit_item'	   		=> __('Edit post doctors', 'doctors-admin'),
			'new_item'			=> __('New post doctors', 'doctors-admin'),
			'all_items'	   		=> __('All post doctors', 'doctors-admin'),
			'view'				=> __('View post doctors', 'doctors-admin'),
			'view_item'	   		=> __('View post doctors', 'doctors-admin'),
			'search_items'		=> __('Search post doctors', 'doctors-admin'),
			'not_found'	   		=> __('Doctors not found', 'doctors-admin'),
		),
		'public' => true, // show in admin panel?
		'menu_position' => 22,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
//		'taxonomies' => array('category_doctors'),
		'has_archive' => true,
		'capability_type' => 'post',
		'menu_icon'   => 'dashicons-businessperson',
		'rewrite' => array('slug' => 'doctors', 'with_front' => false ),
	));
}
add_action('init', 'create_doctors');



```




```php

//   http://news.com/news/post1

// fix category 'news'  http://news.com/post1


function news()
{
	register_post_type('news', array(
		'labels' => array(
			'name'				=> __('Новости', 'news-admin'),
			'singular_name'   	=> __('Новости', 'news-admin'),
			'add_new'		 	=> __('Add post news', 'news-admin'),
			'add_new_item'		=> __('Add post news', 'news-admin'),
			'edit'				=> __('Edit post news', 'news-admin'),
			'edit_item'	   		=> __('Edit post news', 'news-admin'),
			'new_item'			=> __('New post news', 'news-admin'),
			'all_items'	   		=> __('All post news', 'news-admin'),
			'view'				=> __('View post news', 'news-admin'),
			'view_item'	   		=> __('View post news', 'news-admin'),
			'search_items'		=> __('Search post news', 'news-admin'),
			'not_found'	   		=> __('News not found', 'news-admin'),
		),
		'public' => true, // show in admin panel?
		'menu_position' => 29,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
//		'taxonomies' => array('category_news'),
		'has_archive' => true,
		'capability_type' => 'page',
		'menu_icon'   => 'dashicons-admin-page',
		'rewrite' => array('slug' => '/', 'with_front' => false ),
	));
}
add_action('init', 'news');



function sh_parse_request_tricksy( $query ) {

    // Only loop the main query
    if ( ! $query->is_main_query() ) {
        return;
    }

   //  Only loop our very specific rewrite rule match
    if ( 2 != count( $query->query )
        || ! isset( $query->query['page'] ) );
        return;
  
    if ( 3 != count( $query->query )
        || ! isset( $query->query['post'] ) );
        return;

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'news' ) );
    }
}
add_action( 'pre_get_posts', 'sh_parse_request_tricksy' );

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