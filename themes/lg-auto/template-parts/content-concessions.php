<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lgauto
 */

?>
 <?php $get_city = get_the_terms($post->ID, 'ville'); 
        $city = $get_city[0]->name;
 ?>

<article id="post-<?php the_ID(); ?>" class="concessions">

	<div class="containerconcessions">
        <div class="thumbconcessionscontainer">
            <div class="thumbnail"  style="background : url('<?= get_the_post_thumbnail_url($post) ?>'); background-position: center;
        background-size: cover;"></div>
        </div>
        <div class="contentconcessionscontainer">
        <header class="entry-header">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                endif; ?>
            <h2 class="city"> <?= $city ?> </h2>
        </header>
        <!-- .entry-header -->
            <div class="entry-content">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lgauto' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
                ?>
            </div><!-- .entry-content -->
        </div>
    </div>
	<footer class="entry-footer">
		<?php lgauto_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
