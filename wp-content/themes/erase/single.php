<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package erase
 */

get_header();
?>

<?php if ( have_posts() ) : 
              while ( have_posts() ) :
                the_post();
				  ?>

<div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <!-- <img src="../assets/img/blog/blog_1.jpg" alt=""> -->
			  <?php echo the_post_thumbnail( );  ?>
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#"><?php the_author(); ?></a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#"><?php echo get_the_date().' at '.get_the_time()  ?> </a>
              </div>
              <span class="divider">|</span>
              <!-- <div>
                <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>  
              </div> -->
              <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#"><?php echo get_comments_number(); ?> Comments</a>
              </div>
            </div>
            <h2 class="post-title h1"><?php echo get_the_title(); ?></h2>
            <div class="post-content">
              <p>
			  <?php echo get_the_content(); ?>
			  </p>
            </div>
            <div class="post-tags">
			<?php
                $posttags =get_the_tags();
                if ($posttags) {
                    foreach($posttags as $tag) {
                    echo ' <a class="tag-link" href=" '. get_tag_link($tag->term_id) . '">'. $tag->name . ' </a>'                ; 
                    }
                }
            ?>
            </div>
          </article> <!-- .blog-details -->

		 	<?php
				endwhile;
				endif;
			?>

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
        
		<?php get_sidebar(); ?>
</div> <!-- .row -->


</div> <!-- .container -->
</div> <!-- .page-section -->


	
<?php
get_footer();
