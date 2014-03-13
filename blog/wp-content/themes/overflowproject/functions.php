<?php
if ( function_exists('register_sidebar') )
    register_sidebars((3),array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
            'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
  function content($num,$more_link_text = '(more...)') {
    $theContent = get_the_content();
    $output = preg_replace('|\[(.+?)\](.+?\[/\\1\])?|s','',$theContent);
    $output = preg_replace('/<img[^>]+./','', $output);   
    $limit=$num+1;
    $content = explode(' ', $output, $limit);
    array_pop($content);
    $content = implode (" ",$content)." ... ";
    echo $content;
    echo "<a href='";

    the_permalink();

    echo "'>".$more_link_text."</a>";
  }

 register_nav_menu( 'primary', 'Primary Menu' );

function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function init_scripts() { return true; }
add_filter('gform_init_scripts_footer', 'init_scripts');
?>
