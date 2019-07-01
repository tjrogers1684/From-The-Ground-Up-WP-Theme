<?php get_header(); ?>


<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area blog-listing has-sidebar">

			<h1 class="page-title">FTGU Blog: <?php single_cat_title(); ?></h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="blog-item">

					<?php
						$categories = wp_get_object_terms( $post->ID, 'category' );
						$post_meta = get_post_meta( $post->ID );
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						$site_url = get_site_url();
						$article_url = get_permalink();
						$article_title = $post->post_title;
						$article_text = get_the_content();
						$article_text = wp_trim_words( $article_text, 40, '...' );

						//echo 'ARTICLE META<br/><pre>'.print_r( $post_meta, true ).'</pre>';
					?>

					<div class="blog-item-section blog-item-content <?php if ( has_post_thumbnail() ) { echo 'has-blog-image'; } ?>">
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="blog-article-meta">Posted on <?php echo get_the_time( "F j, Y" );  ?> in
							<?php 
								foreach ( $categories as $category ) {
							        echo '<span class="category-item">'.$category->name.'<span class="category-divider">, </span></span>';
							    }
							?>
						</p>

						<div class="blog-article-text"><?php echo $article_text; ?></div>

						<p><a class="btn btn-small" href="<?php echo get_the_permalink(); ?>">Read full article</a></p>

					</div>

				</div>

			<?php endwhile; ?>

			<?php
				$pagination = get_the_posts_pagination( array() );
			?>

			<?php if ( $pagination ) { ?>
				<div class="pagination blog-pagination">
				    <?php
				        echo paginate_links( array(
				            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				            'current'      => max( 1, get_query_var( 'paged' ) ),
				            'format'       => '?paged=%#%',
				            'show_all'     => false,
				            'type'         => 'plain',
				            'end_size'     => 2,
				            'mid_size'     => 1,
				            'prev_next'    => true,
				            'prev_text'    => sprintf( '<i></i> %1$s', __( ' <i class="fas fa-chevron-left"></i> Prev', 'text-domain' ) ),
				            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next <i class="fas fa-chevron-right"></i>', 'text-domain' ) ),
				            'add_args'     => false,
				            'add_fragment' => '',
				        ) );
				    ?>
				</div>
			<?php } ?>

			<?php else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

		<br class="clearfloat" />

	</div>

</div>

<?php get_footer(); ?>