<?php

$header_layout = cstheme_option('header_layout');
?>
	
		<header>
			<div class="header_wrap">
				<div class="container">
				
					<?php if ( $header_layout == 'type1' ) { ?>
						
						<?php cstheme_logo(); ?>
						<div class="menu-primary-menu-container-wrap heading_font <?php if( cstheme_option( 'search_icon_enabled') ) { echo 'pull-left'; } else { echo 'pull-right'; } ?>">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
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
						
					<?php } elseif ( $header_layout == 'type2' ) { ?>
						
						<?php cstheme_logo(); ?>
						<div class="menu-primary-menu-container-wrap heading_font">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
						</div>
						<div class="header_bottom_wrap clearfix">
							<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
								<div class="sidebar_btn pull-right">
									<span></span><span></span><span></span>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
								<div class="social_links_wrap pull-right">
									<?php echo cstheme_social_links(); ?>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
								<div class="header_search pull-left">
									<?php get_search_form(true) ?>
								</div>
							<?php } ?>
						</div>
						
					<?php } elseif ( $header_layout == 'type3' ) { ?>
						
						<div class="menu-primary-menu-container-wrap heading_font">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
						</div>
						<div class="header_top_wrap clearfix">
							<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
								<div class="sidebar_btn pull-right">
									<span></span><span></span><span></span>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
								<div class="social_links_wrap pull-left">
									<?php echo cstheme_social_links(); ?>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
								<div class="header_search pull-right">
									<?php get_search_form(true) ?>
								</div>
							<?php } ?>
						</div>
						<?php cstheme_logo(); ?>
						
					<?php } elseif ( $header_layout == 'type4' ) { ?>
						
						<?php cstheme_logo(); ?>
						<div class="menu-primary-menu-container-wrap heading_font clearfix">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
							<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
								<div class="header_search pull-left">
									<?php get_search_form(true) ?>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
								<div class="sidebar_btn pull-left">
									<span></span><span></span><span></span>
								</div>
							<?php } ?>
						</div>
						<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
							<div class="social_links_wrap pull-left">
								<?php echo cstheme_social_links(); ?>
							</div>
						<?php } ?>
						
					<?php } elseif ( $header_layout == 'type5' ) { ?>
						
						<?php cstheme_logo(); ?>
						<div class="menu-primary-menu-container-wrap heading_font text-center">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
							<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
								<div class="header_search">
									<?php get_search_form(true) ?>
								</div>
							<?php } ?>
							<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
								<div class="sidebar_btn">
									<span></span><span></span><span></span>
								</div>
							<?php } ?>
						</div>
						<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
							<div class="social_links_wrap text-center">
								<?php echo cstheme_social_links(); ?>
							</div>
						<?php } ?>
						
					<?php } elseif ( $header_layout == 'type6' ) { ?>
						
						<div class="header_top_wrap clearfix">
							<div class="menu-primary-menu-container-wrap heading_font pull-left">
								<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
								<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
								<?php if( cstheme_option( 'search_icon_enabled') ) { ?>
									<div class="header_search pull-left">
										<?php get_search_form(true) ?>
									</div>
								<?php } ?>
								<?php if( cstheme_option( 'fixed_sidebar_enable') ) { ?>
									<div class="sidebar_btn pull-left">
										<span></span><span></span><span></span>
									</div>
								<?php } ?>
							</div>
							<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
								<div class="social_links_wrap pull-right">
									<?php echo cstheme_social_links(); ?>
								</div>
							<?php } ?>
						</div>
						<?php cstheme_logo(); ?>
						
					<?php } elseif ( $header_layout == 'type7' ) { ?>
						
						<div class="row">
							<div class="col-md-2 logo_wrap_col">
								<?php cstheme_logo(); ?>
							</div>
							<div class="col-md-8 text-center">
								<div class="menu-primary-menu-container-wrap heading_font clearfix">
									<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
									<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
									<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
										<div class="social_links_wrap">
											<?php echo cstheme_social_links(); ?>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-2">
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
						</div>
						
					<?php } elseif ( $header_layout == 'type8' ) { ?>
						
						<div class="logo_wrap clearfix">
							<div class="pull-left"><?php cstheme_logo(); ?></div>
							<div class="pull-right">
								<div class="header_ads">
									<?php $header_ads_url = cstheme_option('header_ads_url'); ?>
									<?php $header_ads_img = cstheme_option('header_ads_img'); ?>
									<a href="<?php echo esc_url( $header_ads_url ); ?>">
										<img src="<?php echo esc_url( $header_ads_img ); ?>" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="menu_wrap row">
							<div class="col-md-10">
								<div class="menu-primary-menu-container-wrap heading_font pull-left">
									<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
									<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
								</div>
								<?php if( cstheme_option( 'social_icons_enabled') ) { ?>
									<div class="social_links_wrap pull-left">
										<?php echo cstheme_social_links(); ?>
									</div>
								<?php } ?>
							</div>
							<div class="col-md-2">
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
						</div>
						
					<?php } else { ?>
					
						<?php cstheme_logo(); ?>
						<div class="menu-primary-menu-container-wrap heading_font pull-left">
							<a class="mobile_menu_btn" href="javascript:void(0)"><?php echo esc_html__( 'Menu', 'voyager') ?></a>
							<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'theme_location' => 'primary', 'depth' => 3, 'container' => false, 'walker' => new cstheme_MegaMenu_Walker ) ); ?>
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
					
					<?php } ?>
					
				</div>
				<div class="header_wrap_bg"></div>
			</div>
		</header>