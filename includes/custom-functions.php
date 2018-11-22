<?php
function get_lang_links(){
	$languages = icl_get_languages('skip_missing=1');
  if(1 < count($languages)){
		$index = 0;
		foreach($languages as $i => $l):
			if ($index>0) {
				echo ' / ';
			}
			echo '<!-- '. $index . '-->';
			?>	
			<!-- lang 1 -->
				<a class="nav-lang__link <?php echo ($l['active']) ? 'active' : ''  ?>" href="<?php echo $l['url'] ?>"><?php echo $l['language_code'] ?></a>
			<?php
			$index++;
		endforeach;
  }

}
function print_custom_menu($menu_name) {
	
	$menu_classes = 'menu';
	$item_classes = 'menu__item';
	$link_classes = 'menu__link';
	$item_active = 'active';
	$link_active = 'active';

	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])): 
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		global $post;
		$post_id = $post->ID;

		?>
			<nav class="main-nav" id="mainNavigation"><a class="menu__btn" id="menuOpen" href="#">
				<div class="menu__icon"><span class="menu__icon-span"></span><span class="menu__icon-span"></span><span class="menu__icon-span"></span></div><span class="menu__text"><?php echo _e( 'Menu', 'sky-tulum' );?></span></a>

				<ul class="<?php echo $menu_classes; ?>" id="mainMenu" >
					<div class="nav-lang--mobile">
						<?php get_lang_links(); ?>
					</div>
					<a class="menu__btn--close" id="menuClose" href="#">
						<div class="menu__icon--close">
							<span class="menu__icon--close-span"></span>
							<span class="menu__icon--close-span"></span>
						</div>
					</a>
					<?php
					foreach ((array) $menu_items as $key => $menu_item) :
						$title = $menu_item->title;
						$url = $menu_item->url;	

						?><li  class="<?php 
						if (is_page($menu_item->object_id)) {echo $item_classes .' '. $item_active;} else{ echo $item_classes;}
						?>"><a class="<?php 
						if (is_page($menu_item->object_id)) {echo $link_classes .' '. $link_active;} else{echo $link_classes;}
						?>"  href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
						<?php
					endforeach;
					?></ul>
					<div class="nav-lang">
						<?php get_lang_links(); ?>
					</div>
					<a class="cta-btn" id="ctaBtn" data-jsonsrc="<?php get_asset('assets/particlesjs-config.1.json')?>" href="#"><span class="cta-btn__text"><?php echo _e( 'Solicita <br> Info', 'sky-tulum' ); ?></span></a>
      </nav>
		<?php
	else:
		?>
			<nav class="main-nav" id="mainNavigation"><a class="menu__btn" id="menuOpen" href="#">
				<div class="menu__icon"><span class="menu__icon-span"></span><span class="menu__icon-span"></span><span class="menu__icon-span"></span></div><span class="menu__text"><?php echo _e( 'Menu', 'sky-tulum' );?></span></a>
				<ul class="menu" id="mainMenu"><a class="menu__btn--close" id="menuClose" href="#">
						<div class="menu__icon--close"><span class="menu__icon--close-span"></span><span class="menu__icon--close-span"></span></div></a>
					<li class="menu__item active"><a class="menu__link" href="./"><?php echo _e( 'No Nav Selected', 'sky-tulum' );?></a>
					</li>
				</ul><a class="cta-btn" id="ctaBtn" data-jsonsrc="<?php get_asset('assets/particlesjs-config-cta.json')?>" href="#"><span class="cta-btn__text"><?php echo _e( 'Solicita <br> Info', 'sky-tulum' ); ?></span></a>
			</nav>
		<?php
	endif;
}


function get_asset($path) {
	echo get_stylesheet_directory_uri() . '/dist/'. $path;
}
function sky_asset($path) {
	return get_stylesheet_directory_uri() . '/dist/'. $path;
}