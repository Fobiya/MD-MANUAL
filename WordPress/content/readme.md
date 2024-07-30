# Contact 

<!--![](../../img/all-category.png)-->


### 



```php
  

add_theme_support( 'title-tag' );

function add_schema_fix_script() {
 $site_title = get_bloginfo('name');
 ?>
   <script type="text/javascript">


     // Function to get reviewCount and ratingValue from JSON-LD script
     function getAggregateRating(scriptTags) {
      
       for (const scriptTag of scriptTags) {


         try {


           // Parse the JSON-LD content
           const jsonData = JSON.parse(scriptTag.textContent)
          
           // Check if jsonData is an array or a single object
           const items = Array.isArray(jsonData) ? jsonData : [jsonData]
          
           // Iterate through the JSON-LD items to find the SoftwareApplication object
           for (const item of items) {
             if (item['@type'] === 'SoftwareApplication' && item.aggregateRating) {
              
               const reviewCount = item.aggregateRating.reviewCount
               const ratingValue = item.aggregateRating.ratingValue
              
               return {
                 reviewCount,
                 ratingValue
               }


             }
           }
         }
        
         catch (e){
           console.error('Error parsing JSON-LD data:', e)
         }


       }
      
       // Return default values if there are no scriptTags
       return {
         reviewCount: 3,
         ratingValue: 5
       }


     }


     document.addEventListener('DOMContentLoaded', function() {


       // Find all script tags with type application/ld+json
       const scriptTags = document.querySelectorAll('script[type="application/ld+json"]')


       // Get exist reviewCount and ratingValue from the JSON-LD script
       const { reviewCount, ratingValue } = getAggregateRating(scriptTags)


       scriptTags.forEach(function(script) {
         try {


           var schema = JSON.parse(script.innerHTML)


           // Define the missing fields
           var itemReviewed = {
             "@type": "SoftwareApplication",
             "name": "<?= $site_title; ?>",
             "applicationCategory": "Game",
             "aggregateRating": {
               "@type": "AggregateRating",
               "reviewCount": reviewCount,
               "ratingValue": ratingValue
             },
             "operatingSystem": "Windows, macOS, Linux, Android, iOS",
             "offers": {
               "@type": "Offer",
               "price": "0.00",
               "priceCurrency": "USD"
             }
           }


           // Define the general missing fields for SoftwareApplication
           var aggregateRating = {
             "@type": "AggregateRating",
             "ratingValue": `${reviewCount}`,
             "reviewCount": `${ratingValue}`
           }


           var offers = {
             "@type": "Offer",
             "price": "0.00",
             "priceCurrency": "USD"
           }


           var applicationCategory = "GameApplication"
           var operatingSystem = "ALL"


           // Check if schema is an array
           if (Array.isArray(schema)) {
             schema.forEach(function(entry) {


               // Add itemReviewed to reviews
               if (entry['@type'] === 'SoftwareApplication') {
                 if (entry.review) {
                   entry.review.forEach(function(review) {
                     review.itemReviewed = itemReviewed
                   })
                 }
                 // Add missing fields to SoftwareApplication
                 if (!entry.name) {
                   entry.name = "<?= $site_title; ?>"
                 }
                 if (!entry.aggregateRating) {
                   entry.aggregateRating = aggregateRating
                 }
                 if (!entry.offers) {
                   entry.offers = offers
                 }
                 if (!entry.operatingSystem) {
                   entry.operatingSystem = operatingSystem
                 }
                 entry.applicationCategory = applicationCategory
               }
             })


             // Update the script tag content
             script.innerHTML = JSON.stringify(schema)
            
           }
         }
        
         catch (e){
           console.error('Error parsing schema JSON:', e)
         }
          
       })
     })


   </script>
 <?php
}


add_action('wp_footer', 'add_schema_fix_script', 100);




function allow_custom_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['ico'] = 'image/vnd.microsoft.icon';
    return $mimes;
}
add_filter('upload_mimes', 'allow_custom_mime_types');



// Disable all WordPress feed links
function disable_all_feeds() {
    wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}
add_action('do_feed', 'disable_all_feeds', 1);
add_action('do_feed_rdf', 'disable_all_feeds', 1);
add_action('do_feed_rss', 'disable_all_feeds', 1);
add_action('do_feed_rss2', 'disable_all_feeds', 1);
add_action('do_feed_atom', 'disable_all_feeds', 1);
add_action('do_feed_rss2_comments', 'disable_all_feeds', 1);
add_action('do_feed_atom_comments', 'disable_all_feeds', 1);

// Remove feed links from wp_head
function remove_feed_links() {
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('wp_head', 'remove_feed_links', 1);



// DO_SHORTCODE
add_filter('wpcf7_form_elements', 'do_shortcode');
// add_filter('acf/format_value/type=wysiwyg', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=email', 'do_shortcode');
add_filter('acf/format_value/type=url', 'do_shortcode');
add_filter('acf/format_value/type=number', 'do_shortcode');
add_filter('acf/format_value/type=image', 'do_shortcode');
//add_filter('acf/format_value/type=link', 'do_shortcode');
// END DO_SHORTCODE

/* plz no comment */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page( array(
		'page_title'    => __('Theme settings'),
		'menu_title'    => __('Theme settings'),
		'menu_slug'     => 'general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

}







if(get_field('slug_brand', 'options')){
  
    // Function for creating robots.txt file
    function create_robots_txt_file() {
        // Get the path to the robots.txt file in the current theme folder
        $robots_txt_path = get_stylesheet_directory() . '../../../../robots.txt';

        // Contents of the robots.txt file
        //  $robots_txt_content = "User-agent: *\nDisallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php";

        $robots_txt_content = "User-agent: *\n"; // We indicate that the rules apply to all robots
        $robots_txt_content .= "Disallow: /" . get_field('brand', 'options') ."/\n"; // We prohibit indexing of the spinanga folder
      
      
    

    if(get_field('sitemap', 'options') == 'sitemap'){
      
            $robots_txt_content .= "Sitemap: " . site_url() . "/sitemap.xml\n"; // Provide a link to the sitemap
      
    }elseif(get_field('sitemap', 'options') == 'sitemap_index'){
      
            $robots_txt_content .= "Sitemap: " . site_url() . "/sitemap_index.xml\n"; // Provide a link to the sitemap_index
      
    }elseif(get_field('sitemap', 'options') == 'none'){
      
          $active_plugins = get_option('active_plugins');

          // Checking the activity of the Yoast SEO plugin
          if (in_array('wordpress-seo/wp-seo.php', $active_plugins)) {
            //  echo 'Плагин Yoast SEO активен.';

              $robots_txt_content .= "Sitemap: " . site_url() . "/sitemap.xml\n"; // Provide a link to the sitemap

          }

          // Checking the activity of the Rank Math SEO plugin
          if (in_array('seo-by-rank-math/rank-math.php', $active_plugins)) {
            //  echo 'Rank Math SEO plugin is active.';

              $robots_txt_content .= "Sitemap: " . site_url() . "/sitemap_index.xml\n"; // Provide a link to the sitemap_index

          }

          // Checking the activity of the All in One SEO plugin
          if (in_array('all-in-one-seo-pack/all_in_one_seo_pack.php', $active_plugins)) {
            //  echo 'All in One SEO plugin is active.';

              $robots_txt_content .= "Sitemap: " . site_url() . "/sitemap.xml\n"; // Provide a link to the sitemap

          }

    }



        // Writing content to robots.txt file
        $result = file_put_contents($robots_txt_path, $robots_txt_content);

        // Checking the success of the operation
        if ($result !== false) {
          //  echo "The robots.txt file has been successfully created!";
        } else {
          //  echo "Failed to create robots.txt file";
        }
    }

    // Calling a function to create a robots.txt file
    create_robots_txt_file();
  
}





function the_contentdel($content) {
 $content = preg_replace_callback('/<(h[1-6])(.*?)>(.*?)<\/\1>/si', function($matches) {
   return '<' . $matches[1] . $matches[2] . '>' . strip_tags($matches[3]) . '</' . $matches[1] . '>';
 }, $content);
 return $content;
}
add_filter('the_content', 'the_contentdel');
add_filter('acf/format_value/type=wysiwyg', 'the_contentdel');


// year
function current_year_shortcode() {
    $current_year = date('Y');
    return $current_year;
}
add_shortcode('year', 'current_year_shortcode');








function add_nofollow($content) {
    // Look for links with the given classes and add the rel="nofollow" attribute
    $content = preg_replace('/<a\s(.*?class="wp-block-button__link".*?)>/i', '<a $1 rel="nofollow">', $content);
    // Ensure there are no extra spaces in the rel attribute
    $content = str_replace('rel=" nofollow"', 'rel="nofollow"', $content);
    return $content;
}
add_filter('the_content', 'add_nofollow');


```
