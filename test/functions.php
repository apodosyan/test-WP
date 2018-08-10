<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
'primary' => esc_html__( 'Primary Menu', 'custom' ),
) );
function custom_widgets_init() {
register_sidebar( array(
'name'          => esc_html__( 'Sidebar', 'custom' ),
'id'            => 'sidebar-1',
'description'   => '',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget'  => '',
'before_title'  => '<div class="widget-title">',
'after_title'   => '</div>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Phone Number', 'custom' ),
'id'            => 'phone_number',
'description'   => '',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<div class="widget-title_phone">',
'after_title'   => '</div>',
) );
register_sidebar( array(
'name'          => esc_html__( 'Search', 'custom' ),
'id'            => 'search',
'description'   => '',
'before_widget' => '',
'after_widget'  => ''
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider 1 text', 'custom' ),
'id'            => 'slider_1_text',
'description'   => '',
'before_widget' => '<div class="custom_text_sld">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider 1 date', 'custom' ),
'id'            => 'slider_1_date',
'description'   => '',
'before_widget' => '<div class="slddate">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider 1 button', 'custom' ),
'id'            => 'slider_1_button',
'description'   => '',
'before_widget' => '<div class="banner_news_button">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider 1 img', 'custom' ),
'id'            => 'slider_1_img',
'description'   => ''
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider2 text', 'custom' ),
'id'            => 'slider_2_text',
'description'   => '',
'before_widget' => '<div class="custom_text_sld">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider2 img', 'custom' ),
'id'            => 'slider_2_img',
'description'   => ''
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider 2 date', 'custom' ),
'id'            => 'slider_2_date',
'description'   => '',
'before_widget' => '<div class="slddate">',
'after_widget'  => '</div>'
) );

register_sidebar( array(
'name'          => esc_html__( 'Slider 2 button', 'custom' ),
'id'            => 'slider_2_button',
'description'   => '',
'before_widget' => '<div class="banner_news_button">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider3 text', 'custom' ),
'id'            => 'slider3_text',
'description'   => '',
'before_widget' => '<div class="custom_text_sld">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Slider3 img', 'custom' ),
'id'            => 'slider3_img',
'description'   => ''
) );register_sidebar( array(
'name'          => esc_html__( 'Slider 3 date', 'custom' ),
'id'            => 'slider_3_date',
'description'   => '',
'before_widget' => '<div class="slddate">',
'after_widget'  => '</div>'
) );

register_sidebar( array(
'name'          => esc_html__( 'Slider 3 button', 'custom' ),
'id'            => 'slider_3_button',
'description'   => '',
'before_widget' => '<div class="banner_news_button">',
'after_widget'  => '</div>'
) );
register_sidebar( array(
'name'          => esc_html__( 'About us text', 'custom' ),
'id'            => 'aboutus',
'description'   => '',
'before_title'  => '<h2 class="content_title">',
'after_title'   => '</h2>'
) );
register_sidebar( array(
'name'          => esc_html__( 'Footer text', 'custom' ),
'id'            => 'footer1',

) );register_sidebar( array(
'name'          => esc_html__( 'Footer social icons', 'custom' ),
'id'            => 'footer2',
'description'   => '',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<div class="widget-title_aboutus">',
'after_title'   => '</div>',
) );
}
add_action( 'widgets_init', 'custom_widgets_init' );
function custom_scripts() {
wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap-style' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
wp_enqueue_script( 'custom-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

class wpb_widget extends WP_Widget {


function __construct() {
parent::__construct('wpb_widget', 


__('Task ', 'wpb_widget_domain'), 


array( 'description' => __( 'Task widget', 'wpb_widget_domain' ), ) 
);
}



public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );


echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];


echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
		


public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}

?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}


public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
}

function html5_search_form( $form ) { 
     $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Поиск" />
     <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'domain') .'" />
     </form></section>';
     return $form;
}

 add_filter( 'get_search_form', 'html5_search_form' );