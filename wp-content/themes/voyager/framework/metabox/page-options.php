<?php

add_action('admin_init', 'cs_postoptions_init');
function cs_postoptions_init(){

    global $cs_custom_layout_settings, $cs_page_settings, $cs_comingsoon_settings;
	
	$years = array('2013'=>'2013','2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017','2018'=>'2018','2019'=>'2019','2020'=>'2020');
    $months = array('01'=>esc_html__('January','voyager'),'02'=>esc_html__('February','voyager'),'03'=>esc_html__('March','voyager'),
        '04'=>esc_html__('April','voyager'),'05'=>esc_html__('May','voyager'),'06'=>esc_html__('June','voyager'),
        '07'=>esc_html__('July','voyager'),'08'=>esc_html__('August','voyager'),'09'=>esc_html__('Septempber','voyager'),
        '10'=>esc_html__('October','voyager'),'11'=>esc_html__('November','voyager'),'12'=>esc_html__('December','voyager'));
    $days = array(
        '01' => '1','02' => '2','03' => '3','04' => '4','05' => '5',
        '06' => '6','07' => '7','08' => '8','09' => '9','10' => '10',
        '11' => '11','12' => '12','13' => '13','14' => '14','15' => '15',
        '16' => '16','17' => '17','18' => '18','19' => '19','20' => '20',
        '21' => '21','22' => '22','23' => '23','24' => '24','25' => '25',
        '26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31',
    );
    $hours = array(
        '00' => '0','01' => '1','02' => '2','03' => '3','04' => '4',
        '05' => '5','06' => '6','07' => '7','08' => '8','09' => '9',
        '10' => '10','11' => '11','12' => '12','13' => '13','14' => '14',
        '15' => '15','16' => '16','17' => '17','18' => '18','19' => '19',
        '20' => '20','21' => '21','22' => '22','23' => '23'
    );
	$coming_img = get_stylesheet_directory_uri() . '/images/coming_soon_img.png';
	
	$category = get_terms('category');
	$category_array[0] = esc_html__('All categories','voyager');
	if(isset($category)) {
		foreach($category as $categories) {
			$category_array[$categories->term_id] = $categories->name;
		}
	}
	
	$sidebar_layout_default = cstheme_option( 'sidebar_layout' );
	$prefooter_area_enable = cstheme_option( 'prefooter_area_enable' );
	

    //	Page options
    $cs_custom_layout_settings = Array(
		Array(
			'name' 		=> esc_html__('Sidebar layout:', 'voyager'),
			'desc' 		=> esc_html__('only boxed layout style','voyager'),
			'id'   		=> 'sidebar_layout',
			'std' 		=> $sidebar_layout_default,
			'options' 	=> array(
								'no-sidebar' => 'Without sidebar',
								'left-sidebar' => 'Left sidebar',
								'right-sidebar' => 'Right sidebar'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Instagram Type:', 'voyager'),
			'desc' 		=> esc_html__('select the type of Instagram Block for this page.','voyager'),
			'id'   		=> 'instagram_type',
			'std' 		=> 'type1',
			'options' 	=> array(
								'type1' => 'Type 1',
								'type2' => 'Type 2',
								'type3' => 'Type 3'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Prefooter Area', 'voyager'),
			'desc' 		=> 'enable only for this page',
			'id'   		=> 'prefooter_area_enable',
			'std' 		=> $prefooter_area_enable,
			'options' 	=> array(
								'disabled' => 'Disabled',
								'enabled' => 'Enabled'
							),
			'type' 		=> 'select'
		),
	);
	
	//	Page options
    $cs_page_settings = Array(
		Array(
			'name' 		=> esc_html__('Top Slider:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'top_slider',
			'std' 		=> 'enabled',
			'options' 	=> array(
								'disabled' => 'Disabled',
								'enabled' => 'Enabled'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Top Slider Style:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'top_slider_style',
			'std' 		=> 'type1',
			'options' 	=> array(
								'type1' => 'Type 1',
								'type2' => 'Type 2',
								'type3' => 'Type 3',
								'type4' => 'Type 4',
								'type5' => 'Type 5'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Top Slider Categories:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'top_slider_category',
			'options' 	=> $category_array,
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Slider Posts Count:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'top_slider_count',
			'std' 		=> '4',
			'type' 		=> 'number'
		),
		
		Array(
			'name' 		=> esc_html__('Categories List', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'categories_list',
			'std' 		=> 'disabled',
			'options' 	=> array(
								'disabled' => 'Disabled',
								'enabled' => 'Enabled'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Categories List Position', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'categories_list_position',
			'std' 		=> 'top',
			'options' 	=> array(
								'top' => 'Top',
								'bottom' => 'Bottom'
							),
			'type' 		=> 'select'
		),
		
		Array(
			'name' 		=> esc_html__('Posts Carousel', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel',
			'std' 		=> 'disabled',
			'options' 	=> array(
								'disabled' => 'Disabled',
								'enabled' => 'Enabled'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts Carousel Position', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel_position',
			'std' 		=> 'bottom',
			'options' 	=> array(
								'top' => 'Top',
								'bottom' => 'Bottom'
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts Carousel Title', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel_title',
			'std' 		=> 'Best Stories',
			'type' 		=> 'text'
		),
		Array(
			'name' 		=> esc_html__('Posts Carousel Categories:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel_cat',
			'options' 	=> $category_array,
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts Carousel Count:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel_count',
			'std' 		=> '6',
			'type' 		=> 'number'
		),
		Array(
			'name' 		=> esc_html__('Posts carousel Orderby:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_carousel_orderby',
			'std' 		=> 'date',
			'options' 	=> array("rand" => "Random","date" => "Date"),
			'type' 		=> 'select'
		),
		
		Array(
			'name' 		=> esc_html__('Posts Layout:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'blog_list_layout',
			'options' 	=> array(
								'wide' => 'Wide',
								'container' => 'Boxed'
							),
			'std' 		=> 'wide',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts Style:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'blog_list_style',
			'options' 	=> array(
								'left-image' 		=> esc_html__('Left Image', 'voyager'),
								'top_image' 		=> esc_html__('Top Image', 'voyager'),
								'masonry_top_image' => esc_html__('Masonry Top Image', 'voyager'),
								'chess' 			=> esc_html__('Chess', 'voyager'),
								'grid-bg' 			=> esc_html__('Grid Background', 'voyager'),
								'masonry-bg' 		=> esc_html__('Masonry Background', 'voyager'),
								'line_bg' 			=> esc_html__('Line Background', 'voyager'),
								'line_thumb'		=> esc_html__('Line with Thumbnail', 'voyager')
							),
			'std' 		=> 'left-image',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts Categories:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'blog_list_category',
			'options' 	=> $category_array,
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Posts per Page:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_per_page',
			'std' 		=> '6',
			'type' 		=> 'number'
		),
		Array(
			'name' 		=> esc_html__('Posts in Row:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_in_a_row',
			'options' 	=> array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'),
			'std' 		=> '3',
			'type' 		=> 'select'
		),
		Array(
            'name' 		=> esc_html__('Padding for Post:', 'voyager'),
            'desc' 		=> esc_html__('specify the amount of padding around the edges of the post (only > 0)','voyager'),
            'id' 		=> 'post_padding',
			'std'  		=> '25',
            'type' 		=> 'number'
		),
		Array(
			'name' 		=> esc_html__('Display Pagination?', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'posts_pagin_style',
			'options' 	=> array('simple'=>'Simple pagination', 'infinite'=>'Infinite scroll'),
			'std' 		=> 'simple',
			'type' 		=> 'select'
		),
	);
	
	//	Page Portfolio options
	global $cs_page_portfolio_settings, $cs_portfolio_single, $cs_portfolio_single_gallery, $cs_portfolio_single_video, $cs_portfolio_single_audio;
	
	$portfolio_cat = '';
	if(class_exists('evatheme_cpt')) {
		$portfolio_cat 		= array(''=> 'Select category');  
		$portfolio_categories_obj 	= get_terms('portfolio_category', 'hide_empty=0');
		foreach ($portfolio_categories_obj as $of_cat) {
			$portfolio_cat[$of_cat->slug] = $of_cat->name;
		}
	}

	$cs_page_portfolio_settings = Array(
		Array(
			'name' 		=> esc_html__('Portfolio Layout:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_layout',
			'options' 	=> array(
								'wide' 		=> 'Wide',
								'container'	=> 'Boxed'
							),
			'std' 		=> 'container',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Portfolio Style:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_style',
			'options' 	=> array(
								'masonry' 		=> esc_html__('Masonry', 'voyager'),
								'grid' 			=> esc_html__('Grid', 'voyager')
							),
			'std' 		=> 'masonry',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Portfolio Filter:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_filter',
			'options' 	=> array(
								'show' 		=> esc_html__('show', 'voyager'),
								'hide'		=> esc_html__('hide', 'voyager')
							),
			'std' 		=> 'show',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Portfolio Categories:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_category',
			'options' 	=> $portfolio_cat,
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Items per Page:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_per_page',
			'std' 		=> '6',
			'type' 		=> 'number'
		),
		Array(
			'name' 		=> esc_html__('Items in Row:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_in_a_row',
			'options' 	=> array('2' => '2', '3' => '3', '4' => '4', '5' => '5'),
			'std' 		=> '3',
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Display Pagination?', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_pagin_style',
			'options' 	=> array(
								'simple' 	=> esc_html__( 'Simple pagination', 'voyager' ),
								'infinite'	=> esc_html__( 'Infinite scroll', 'voyager' ),
							),
			'std' 		=> 'simple',
			'type' 		=> 'select'
		),
	);

	$cs_portfolio_single = Array(
		Array(
			'name' 		=> esc_html__('Single Layout:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'portfolio_single_layout',
			'std'  		=> 'full',
			'options' 	=> array(
								'full'		=> esc_html__( 'Layout Full', 'voyager' ),
								'half'		=> esc_html__( 'Layout Half', 'voyager' )
							),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Client:', 'voyager'),
			'desc' 		=> '',
			'id' 		=> 'portfolio_single_client',
			'type' 		=> 'text'
		),
		Array(
			'name' 		=> esc_html__('Project URL:', 'voyager'),
			'desc' 		=> '',
			'id' 		=> 'portfolio_single_url',
			'type' 		=> 'text'
		),
	);
	
	$cs_portfolio_single_gallery = array(
		array( 
			"name" 		=> esc_html__('Upload images', 'voyager'),
			"desc" 		=> esc_html__('Select the images that should be upload to this gallery', 'voyager'),
			"id" 		=> "gallery_image_ids",
			"type" 		=> 'gallery'
		),
		array( 
			"name" 		=> esc_html__('Carousel Gallery', 'voyager'),
			"desc" 		=> esc_html__('Enable this to show images in carousel', 'voyager'),
			"id" 		=> 'portfolio_single_carousel_enable',
			"type" 		=> 'checkbox'
		),
	);
	
	$cs_portfolio_single_video = array(
		array(
			"name" 		=> esc_html__('Embeded Code','voyager'),
			"desc" 		=> esc_html__('If you\'re not using self hosted video then you can include embeded code here.','voyager'),
			"id" 		=> "portfolio_single_video",
			"type" 		=> "textarea",
			'std' 		=> ''
		),
	);
	
	$cs_portfolio_single_audio = array(
		array(
			"name" 		=> esc_html__('Embeded Code','voyager'),
			"desc" 		=> esc_html__('If you\'re not using self hosted video then you can include embeded code here.','voyager'),
			"id" 		=> "portfolio_single_audio",
			"type" 		=> "textarea",
			'std' 		=> ''
		),
	);
	
	
	//	Coming Soon Settings
	$cs_comingsoon_settings = Array(
        Array(
            'name' 		=> esc_html__('Years:', 'voyager'),
			'desc' 		=> '',
            'id'   		=> 'coming_years',
            'std'  		=> '2016',
            'options' 	=> $years,
            'type' 		=> 'select'
        ),
        Array(
            'name' 		=> esc_html__('Months:', 'voyager'),
			'desc' 		=> '',
            'id'   		=> 'coming_months',
            'std'  		=> '01',
            'options' 	=> $months,
            'type' 		=> 'select'
        ),
        Array(
            'name' 		=> esc_html__('Days:', 'voyager'),
			'desc' 		=> '',
            'id'   		=> 'coming_days',
            'std'  		=> '01',
            'options' 	=> $days,
            'type' 		=> 'select'
        ),
        Array(
            'name' 		=> esc_html__('Hours:', 'voyager'),
			'desc' 		=> '',
            'id'   		=> 'coming_hours',
            'std'  		=> '00',
            'options' 	=> $hours,
            'type' 		=> 'select'
        ),
		Array(
            'name' 		=> esc_html__('Upload image:', 'voyager'),
			'desc' 		=> '',
            'id' 		=> 'coming_img',
			'std' 		=> $coming_img,
            'type' 		=> 'file'
		),
		Array(
            'name' 		=> esc_html__('Choose Background Color:', 'voyager'),
			'desc' 		=> '',
            'id' 		=> 'coming_color_bg',
			'std' 		=> '#0d415f',
            'type' 		=> 'color'
		),
		Array(
			'name' 		=> esc_html__('Subscribe to Newsletter:', 'voyager'),
			'desc' 		=> '',
			'id'   		=> 'comingsoon_subscribe_form',
			'std'  		=> 'show',
			'options' 	=> array('hide' => 'Hide', 'show' => 'Show'),
			'type' 		=> 'select'
		),
		Array(
			'name' 		=> esc_html__('Social Links:', 'voyager'),
			'desc' 		=> esc_html__('Links to social services will be taken from the Theme Options', 'voyager'),
			'id'   		=> 'comingsoon_social_links',
			'std'  		=> 'show',
			'options' 	=> array('hide' => 'Hide', 'show' => 'Show'),
			'type' 		=> 'select'
		),
    );
    
    
	add_meta_box('page_custom_layout_settings',esc_html__( 'Custom Layout', 'voyager' ),'metabox_render','page','side','low',$cs_custom_layout_settings);
	add_meta_box('page_meta_settings',esc_html__( 'Page Settings', 'voyager' ),'metabox_render','page','normal','default',$cs_page_settings);
	
	add_meta_box('page_portfolio_meta_settings',esc_html__( 'Portfolio Page Settings', 'voyager' ),'metabox_render','page','normal','default',$cs_page_portfolio_settings);
	add_meta_box('portfolio_meta_settings',__( 'Portfolio Settings', 'voyager'),'metabox_render','portfolio','normal','high',$cs_portfolio_single);
	add_meta_box('cs-format-gallery',__( 'Portfolio Gallery', 'voyager'),'metabox_render','portfolio','normal','high',$cs_portfolio_single_gallery);
	add_meta_box('cs-format-video',__( 'Portfolio Video', 'voyager'),'metabox_render','portfolio','normal','high',$cs_portfolio_single_video);
	add_meta_box('cs-format-audio',__( 'Portfolio Audio', 'voyager'),'metabox_render','portfolio','normal','high',$cs_portfolio_single_audio);
	
	add_meta_box('comingsoon_meta_settings',esc_html__( 'Coming Soon Page Settings', 'voyager' ),'metabox_render','page','normal','high',$cs_comingsoon_settings);
}