<?php
/* Template Name: Doctors Template */

get_header();

$doctors = array( 'post_type' => 'doctor', 'posts_per_page' => 10 );
$the_query = new WP_Query( $doctors ); 
?>

<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="row">

                    <?php
                        if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
            
                    <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                        <div class="card-doctor">
                            <div class="header">
                                <!-- <img src="../assets/img/doctors/doctor_1.jpg" alt=""> -->
                                <?php 
                                
                                    echo the_post_thumbnail( 'medium' );
                                    //echo set_post_thumbnail_size( 100);
                                    // echo add_image_size( 'single-post-thumbnail', 100);
                                
                                ?>
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0"><?php echo get_the_title(); ?></p>
                                <span class="text-sm text-grey">Cardiology</span>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        endif;
                    ?>

                </div>

            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<?php
get_footer();

