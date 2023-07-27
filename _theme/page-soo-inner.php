
<?php 
/*
Template Name: Сведения об образовательной организации - Внутренняя
Template Post Type: page
*/

get_header(); ?>
<?php get_template_part('template-parts/page-subhead');?>

<section class="section">
    <div class="_container">
        <?
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
            }
        ?>
        <?php get_template_part('template-parts/soo-sidebar');?>
            

                <div class="information-categoty__text">
                    
                    <?php the_content();?>
                    
                </div>

            </div>
        </div>
    </section>
 
<?php get_footer(); ?>