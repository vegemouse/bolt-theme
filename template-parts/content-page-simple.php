<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bolt
 */

?>


<!-- Custom header -->
<div class="jumbotron-product" style="height: 20">

  <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_header_image(); ?>" class="site-title"></a>

    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
      <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
    <?php
    endif; ?>
  </div>

</div>


<nav id="site-navigation" class="main-navigation main-navigation-product" role="navigation">
  <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Show Menu</button> -->
  <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => '' ) ); ?>
</nav>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bolt' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						esc_html__( 'Edit %s', 'bolt' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
	<?php endif; ?> -->

</article><!-- #post-## -->
