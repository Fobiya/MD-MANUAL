## Shortcode

<!--![](../../img/)-->

```php
  
  [code var=link_site title='demo' link1='www.com' link2='lol.ca']
  
// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
  
		case "link_site":

            $link_url = __($atts['link1'], 'code');
            $link_title = __($atts['title'], 'code');

            return '<a href="' . $link_url . '">' . $link_title . '</a>';
			break;
			
	}
}
  add_shortcode('code', 'code_config');
// END code LINKS	
			
		
//  in echo wp-json
$mypost = $postid['content']['rendered'];

echo do_shortcode($mypost);	
          
  	case "link_site":

            $link_url = $atts['eu'];
            $link_title = $atts['title'];

//            $link_title = str_replace(["'",'"'],'',$link_title);
//            return '<a href="' .  . '">' . $link_title . '</a>';
            return "<a href={$link_url}>{$link_title}</a>";
        
			break;        		
          						
		[code var=link_site title="DEMOTEXT DEMOTEXT DEMOTEXT" link1=https:// link2=https://]				
			

// code LINKS
function code_config($atts)
{
	switch ($atts['var']) {
// address
		case "time_work":
		    add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('time_work', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// address
		case "address":
		    add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_address', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
// email
		case "email":
		add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			return get_field('code_email', 'options');
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;
		case "email_link":
// email_link
			add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$registration_page = get_field('registration_page', 'options');
			if (!empty($atts['title'])) {
				$email_tittle = __($atts['title'], 'code');
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . $email_tittle . '</a>';
			} else {
				return '<a class="email" href="mailto:' . get_field('code_email', 'options') . '">' . get_field('code_email', 'options') . '</a>';
			}
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

// tel
		case "tel":
		add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			$code_phone = get_field('code_phone', 'options');
			$title_phone = get_field('title_phone', 'options');
			if (!empty($atts['title'])) {
				$phone_tittle = __($atts['title'], 'code');
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $phone_tittle . '</a>';
			} else {
				return '<a class="tel" href="tel:' . get_field('code_phone', 'options') . '">' . $title_phone . '</a>';
			}
			remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
			break;

	}
}
 
 
  add_shortcode('code', 'code_config');
// END code LINKS

// DO_SHORTCODE
add_filter('wpcf7_form_elements', 'do_shortcode');
add_filter('acf/format_value/type=wysiwyg', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=email', 'do_shortcode');
add_filter('acf/format_value/type=url', 'do_shortcode');
add_filter('acf/format_value/type=number', 'do_shortcode');
add_filter('acf/format_value/type=image', 'do_shortcode');
add_filter('acf/format_value/type=link', 'do_shortcode');
// END DO_SHORTCODE




```


<!--vue-and-the-wordpress-rest-api [Links](http://bionicteaching.com/vue-and-the-wordpress-rest-api/)-->