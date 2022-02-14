<nav class="footer-nav">
    <?php wp_nav_menu(
	array(
		'theme_location'  => 'footer_menu',
		'menu_class'      => 'menu-wrapper',
		'container_class' => 'footer-nav',
		'items_wrap'      => '<ul id="footer-nav-list">%3$s</ul>',
		'container' 	  => false, 
		// 'fallback_cb'     => false,
	)
); ?>
</nav>