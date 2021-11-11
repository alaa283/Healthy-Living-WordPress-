<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package erase
 */

?>

    <!-- Start Search -->

        <form action="<?php echo esc_url( home_url('/') ); ?>">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" name="s" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                    <input type="text" name="s" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
        </form>

    <!-- End Search -->