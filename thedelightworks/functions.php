<?php

function ej_num_posts($myarg) {
	if ($myarg) {
		$numposts = $myarg->post_count;
		return $numposts;
	} else {
		return "no wp_query";
	}
}

function ej_cur_post($myarg) {
	if ($myarg) {
		$curpost = $myarg->current_post;
		$curpost++;
		return $curpost;
	} else {
		return "no wp_query";
	}
}

if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Left Sidebar',
	'before-widget'=>'',
	'after-widget'=>'<div class="widgetdivider">&nbsp;</div>',
	'before-title'=>'<hr width="75%"><h2 class="sidebartitle">',
	'after-title'=>'</h2>'));

if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Right Sidebar',
	'before-widget'=>'',
	'after-widget'=>'<div class="widgetdivider">&nbsp;</div>',
	'before-title'=>'<hr width="75%"><h2 class="sidebartitle">',
	'after-title'=>'</h2>'));

// Twitter Link Shortcode
// Adds a link to a Twitter user. Takes the syntax [t un="Username" lt="Link text"]

function twitterlink($atts, $content = null) {
        extract(shortcode_atts(array(
	                "un" => '',
	                "lt" => ''
	        ), $atts));
        if ($lt == '') {
	                $lt = "@" . ucwords($un);
	        }
        $twitterstring = "<a href=\"http://www.twitter.com/" . $un . "\" target=\"_blank\">" . $lt . "</a>";
	        return $twitterstring;
}

// Normal link Shortcode
// Your basic link, but it automatically adds a blank target unless you tell it not to.

function basiclink($atts, $content = null) {
        extract(shortcode_atts(array(
	                "h" => '#',
	                "l" => '',
	                "t" => '_blank'
	        ), $atts));
        if ($t == "_blank") {
	                $ts = " target=\"_blank\"";
	        } else {
                $ts = "";
        }
	        if ($l == "") {
                $l = $h;
        }
	        $linkstring = "<a href=\"" . $h . "\"" . $t . ">" . $l . "</a>";
        return $linkstring;
	}

	// Wowhead Shortcode
	// Adds a link to Wowhead
	// i = item, s = spell, n = NPC, is = itemset, o = object, q = quest, a = achievement


add_shortcode('t','twitterlink');
add_shortcode('a','basiclink');


?>
<?php remove_filter('the_content', 'wptexturize'); ?>
<?php remove_filter('the_title', 'wptexturize'); ?>