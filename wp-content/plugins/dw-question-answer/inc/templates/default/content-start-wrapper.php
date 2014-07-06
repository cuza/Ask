<?php  

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$template = get_option('template');

switch( $template ) {
    case 'twentyeleven' :
        echo '<div id="primary"><div role="main">';
        break;
    case 'twentytwelve' :
        echo '<div id="primary" class="site-content"><div role="main">';
        break;
    case 'twentythirteen' :
        echo '<div id="primary" class="site-content"><div role="main" class="entry-content twentythirteen">';
        break;
    case 'twentyfourteen':
        echo '<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main"><div class="entry-content">';
        break;
    case 'Circles':
        get_template_part('inc/header-image');
        echo "<div class='wrapper'><div class='container main'>";
        ts_get_single_post_sidebar('left');
        ts_get_single_post_sidebar('left2');
        echo "<div class='post-area  grid_".ts_check_if_any_sidebar(12,9,6)."'><div>";
        break;
    default:
        echo '<div id="container"><div id="content" role="main">';
        break;
}
?>
    <?php if( is_page() ) { ?>
    <header class="dwqa-page-header">
        <h1 class="dwqa-page-title"><?php the_title(); ?></h1>
    </header>
    <?php } ?>