<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizbir
 * @since 1.0.0
 * @author Copyright 2019 CodeManas. All Rights Reserved.
 */

$archive_column = Bizbir_Theme_Options::get_option( 'field-blog-archive-column' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
	
	<?php if ( 12 != $archive_column && ! is_singular() ) { ?>
		<div class="entry-content-wrapper box-shadow-block">
	<?php } ?>

	    <div class="bizbir-post-content-wrap">
	        <?php bizbir_main_content(); ?>
	    </div>

    <?php if ( 12 != $archive_column && ! is_singular() ) { ?>
		</div><!-- .entry-content-wrapper -->
    <?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
