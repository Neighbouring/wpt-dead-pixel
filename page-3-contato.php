<?php /* Template Name: 03 - Contato */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	
<?php the_custom_logo(); ?>

<?php wp_head(); ?>
<?php get_header(); ?>



<h1>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<?php bloginfo( 'name' ); ?>
	</a>
</h1>




<?php
	$blank_description = get_bloginfo( 'description', 'display' );
		if ( $blank_description || is_customize_preview() ) : ?>
	<p>
		<?php echo esc_html( $blank_description ); ?>
	</p>
<?php endif; ?>




<!-- <?php
if ( is_home() ) :
	get_header( 'home' );
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header();
endif;
?> -->

<?php wp_body_open(); ?>

<footer id="rodape">
	<?php wp_footer(); ?>
	<?php get_footer(); ?>
</footer>

</body>
</html>

