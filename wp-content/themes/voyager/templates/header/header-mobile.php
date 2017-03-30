		<div id="header_mobile_wrap">
			<header>
				<div class="container">
					<?php cstheme_logo(); ?>
					<div class="menu-primary-menu-container-wrap heading_font <?php if( cstheme_option( 'search_icon_enabled') ) { echo 'pull-left'; } else { echo 'pull-right'; } ?>">
						<a class="mobile_menu_btn heading_font" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
						<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary' ) ); ?>
					</div>
					<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
						<div class="social_links_wrap pull-left">
							<?php echo cstheme_social_links(); ?>
						</div>
					<?php } ?>
					<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
						<div class="sidebar_btn pull-right">
							<span></span><span></span><span></span>
						</div>
					<?php } ?>
					<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
						<div class="header_search pull-right">
							<?php get_search_form(true) ?>
						</div>
					<?php } ?>
				</div>
			</header>
		</div>