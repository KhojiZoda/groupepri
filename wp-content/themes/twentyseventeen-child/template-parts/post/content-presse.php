<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"></h3>' );
		} else {
			the_title( '<h2 class="entry-title"></h2>' );
		}
		?>
	</header><!-- .entry-header -->

  <div class="presse-inner-box">
    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
      <div class="entry-summary">
              <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <div class="read-more">
        <a class="more-link" href=" <?php echo get_permalink() ?> ">Lire la suite</a>
      </div>
    <?php endif; ?>
  </div>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
