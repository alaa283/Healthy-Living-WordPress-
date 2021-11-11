<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package erase
 */

get_header();
?>

<div class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">

					<?php if ( have_posts() ) : 

						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

							<a href="<?php echo esc_url( post_permalink() ); ?>">

							<div class="col-sm-6 py-3">
								<div class="card-blog">
									<div class="header">
									<div class="post-category">
										<?php
												$posttags =get_the_tags();
												if ($posttags) {
												foreach($posttags as $tag) {
												echo ' <a href=" '. get_tag_link($tag->term_id) . '">'. $tag->name . ' </a>'                ; 
												}
												}
										?>
									</div>
									<a href="<?php the_permalink(); ?>" class="post-thumb">
									<?php echo get_the_post_thumbnail( $post_id, 'thumbnail' );  ?>
									</a>
									</div>
									<div class="body">
									<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<div class="site-info">
										<div class="avatar mr-2">
										<div class="avatar-img">
											<img src="<?php echo get_template_directory_uri(); ?>/img/person/alaa.jpg" alt="">
										</div>
										<span><?php the_author(); ?></span>
										</div>
										<span class="mai-time"></span> 1 week ago
									</div>
									</div>
								</div>
							</div>
							<?php

						endwhile;

					else :
					echo ' <div style="height:210px" >
								<h4 class="pt-5 mx-auto">Sorry, but nothing matched your search terms. Please try again with some different keywords</h3>
							</div>';
					endif;
					?>
		    	</div>
			</div>
		</div>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
