
<?php 
/*
Template Name: Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/page-subhead');?>

<section class="section">
    <div class="_container">
    <?php echo carbon_get_theme_option( 'phone' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'adress_ur' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'adress' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'inn' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'kpp' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'oktmo' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'ogrn' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'r-sch' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'k-sch' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'bik' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'director' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'okved' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'okopf' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'okpo' ); ?>
    <br>
    <?php echo carbon_get_theme_option( 'email' ); ?>
    </div>
</section>


<?php get_footer(); ?>