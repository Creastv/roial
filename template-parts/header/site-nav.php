<nav class="header-nav js">
    <?php 
	$temp_menu = wp_nav_menu(array(
		'theme_location'  => 'primary_menu', 
		'menu_id' 	      => 'header-nav-list', 
		'menu_class' 	  => 'header-nav-list', 
		'container' 	  => false, 
		'echo' 			  => false,
		'items_wrap' 	  => '<ul id="%1$s" class="%2$s" itemscope itemtype="http://www.schema.org/SiteNavigationElement">%3$s</ul>',
	));
	$temp_menu = str_replace("<a", "<a itemprop='url' ", $temp_menu); // We set an attribute for menu items through replacement

	preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matchesz); // Find all the "a" tags through the regular expression to search for the "span" tag
	foreach($matchesz[0] as $value){
		
		// We are looking for a nested tag "span" in the current tag "a"
		if(strpos($value, "<span") === false){  // If the current "a" tag doesn't have a "span" nested tag, use a regular expression to wrap the content of the "a" tag in a "span" and set the markup attribute to it
			$temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);

			$temp_menu = str_replace($value, $temp_value, $temp_menu);
		}else{ // If the "span" tag is found, replace it with a markup attribute
			$temp_value = str_replace("<span", "<span itemprop='name'", $value);

			$temp_menu = str_replace($value, $temp_value, $temp_menu);
		}
	}
	echo $temp_menu; ?>
</nav>