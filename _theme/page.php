
<?php 
/*
Template Name: Страница Проект
Template Post Type: page
*/

get_header(); ?>

<section class="section">
    <div class="_container">
        <?
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
            }
        ?>

        <h1><? the_title();?></h1>
    
    </div>
</section>

    

<?php get_footer(); ?>