<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme Palace
 */

get_header(); ?>
<div class="page-section container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // End of the loop.
		
        if(sizeof(get_post_custom_values('tutorial_next_article_link')) > 0 
        || sizeof(get_post_custom_values('tutorial_prev_article_link')) > 0 ){
            echo '<nav class="navigation post-navigation" role="navigation">';
            echo '<h2 class="screen-reader-text">Post navigation</h2>';
            echo '<div class="nav-links">';
            if(sizeof(get_post_custom_values('tutorial_prev_article_link')) > 0){
                echo '   <div class="nav-previous">';
                echo '       <a href="'.get_post_custom_values('tutorial_prev_article_link')[0].'" rel="prev">'.
                        get_post_custom_values('tutorial_prev_article_title')[0].'</a>';
                echo '    </div>';
            }
            if(sizeof(get_post_custom_values('tutorial_next_article_link')) > 0){
                echo '    <div class="nav-next">';
                echo '        <a href="'.get_post_custom_values('tutorial_next_article_link')[0].'" rel="next">'.
                        get_post_custom_values('tutorial_next_article_title')[0].'</a>';
                echo '    </div>';
            }
            echo '</div>';
            echo '</nav>';
        }else{
		the_post_navigation( array( 
			'prev_text' => esc_html__( '%title', 'daily-insight'), 
			'next_text' => esc_html__( '%title', 'daily-insight')
			)
		);
}
		/**
		* Custom Author Box in support.
		*/
	    if( class_exists('Wp_Author_Profile_Box_Lite_Front') || class_exists('Wp_Author_Profile_Box_Front') ):
	        $author = '';
	        $author = apply_filters( 'custom_author', $author);
	        echo $author;

	    else:
	    	/**
			 * Hook daily_insight_author_profile
			 *  
			 * @hooked daily_insight_get_author_profile 
			 */
			 do_action( 'daily_insight_author_profile' );
	    endif;

		/**
		* Custom author box end!!!!
		*/

		/**
		* Hook daily_insight_related_posts
		*  
		* @hooked daily_insight_get_related_posts 
		*/
		do_action( 'daily_insight_related_posts' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
if ( daily_insight_is_sidebar_enable() ) {
	get_sidebar();
}
?>
</div><!-- .page-section -->
<?php
get_footer();
