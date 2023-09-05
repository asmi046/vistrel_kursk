
<?php 
/*
Template Name: Реквизиты
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

        <div class="text_styles">
            <h2><?php echo carbon_get_theme_option( 'org_name' ); ?></h2>
            <p><b>Адрес:</b> <?php echo carbon_get_theme_option( 'adress' ); ?></p>        
            <p><b>Юридический адрес:</b> <?php echo carbon_get_theme_option( 'adress_ur' ); ?></p>
            <p><b>Директор:</b> <?php echo carbon_get_theme_option( 'director' ); ?></p>  
            <p><b>ИНН:</b> <?php echo carbon_get_theme_option( 'inn' ); ?></p>        
            <p><b>КПП:</b> <?php echo carbon_get_theme_option( 'kpp' ); ?></p>        
            <p><b>ОКТМО:</b> <?php echo carbon_get_theme_option( 'oktmo' ); ?></p>        
            <p><b>ОГРН:</b> <?php echo carbon_get_theme_option( 'ogrn' ); ?></p>  
            <p><b>ОКВЭД:</b> <?php echo carbon_get_theme_option( 'okved' ); ?></p>        
            <p><b>ОКОПФ:</b> <?php echo carbon_get_theme_option( 'okopf' ); ?></p>        
            <p><b>ОКПО:</b> <?php echo carbon_get_theme_option( 'okpo' ); ?></p>      
          
            <h2>Банковские реквизиты:</h2>
            
            <p><b>Банк:</b> <?php echo carbon_get_theme_option( 'bank_name' ); ?></p>        
            <p><b>БИК:</b> <?php echo carbon_get_theme_option( 'bik' ); ?></p>        
            <p><b>р/с:</b> <?php echo carbon_get_theme_option( 'r-sch' ); ?></p>        
            <p><b>к/с:</b> <?php echo carbon_get_theme_option( 'k-sch' ); ?></p> 

            <? the_content(); ?>
        </div>

    </div>
</section>
    

<?php get_footer(); ?>