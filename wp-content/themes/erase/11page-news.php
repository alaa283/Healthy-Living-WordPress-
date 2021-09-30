<?php
/* Template Name: News Template */

get_header();

while(have_posts())
{ 
    the_post();
?>

<div class="page-banner overlay-dark bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <h1 class="font-weight-normal"><?php the_title(); ?></h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<?php } ?>

<!-- <?php  //echo get_template_directory_uri(); ?>/img/blog/blog_1.jpg -->
<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
          <?php 
            // Define our WP Query Parameters
            $the_query = new WP_Query( );
          ?>

            <?php 
              // Start our WP Query
              while ($the_query -> have_posts()) : $the_query -> the_post(); 
              // Display the Post Title with Hyperlink
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
                  <a href="<?php the_permalink(); ?>" class="post-thumb">

                  <?php //the_post_thumbnail(); ?>
                  <?php //echo the_post_thumbnail('single-post-thumbnail'); ?>
                  <?php echo get_the_post_thumbnail( $post_id, 'thumbnail' );  ?>
                    <!-- <img src="<?php // echo get_the_post_thumbnail( $post_id, 'thumbnail' );  ?>" alt=""> -->
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
            <?php endwhile;
            wp_reset_postdata();
            ?>
            
            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
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
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <?php get_sidebar(); ?> 
      </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

<?php

get_footer();
?>