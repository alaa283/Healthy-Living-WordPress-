<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
              while ( have_posts() ) :
                the_post();
				  ?>

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
                  <a href="<?php echo get_permalink(); ?>" class="post-thumb">
                  <?php echo the_post_thumbnail( 'thumbnail' );  ?>
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo get_the_title(); ?>
                    </a></h5>
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
		          endif;
		        ?>

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <!-- <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul> -->

                <?php wpbeginner_numeric_posts_nav(); ?>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <?php
          get_sidebar();
        ?>
      </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

<?php
get_footer();
