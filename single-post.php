<?php
// ---------------------------------------------------------------------------------
// ----- SINGLE POST PAGE ----------------------------------------------------------
// ---------------------------------------------------------------------------------
get_header(); ?>

<?php if( isset($_GET['pid']) ){ $posttype = get_post( $_GET['pid'] )->post_type; } ?>

<div class="page-wrap">

	<div class="content-wrap">

		<?php if ( have_posts() ) { ?>

		    <div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						$categories = wp_get_object_terms( $post->ID, 'category' );
						$post_meta = get_post_meta( $post->ID );
						//$post_uploads = get_field('blog_article_uploads');

						//echo '<pre>'.print_r($post_upload, true).'</pre>';
					?>

					<h1 class="page-title"><?php the_title(); ?></h1>
					<p class="blog-article-meta">Posted on <?php echo get_the_time( "F j, Y" );  ?> in
						<?php
							foreach ( $categories as $category ) {
						        echo '<span class="category-item">'.$category->name.'<span class="category-divider">, </span></span>';
						    }
						?>
					</p>

					<?php // ARTICLE TEXT ?>
					<?php the_content(); ?>

					<?php // ARTICLE GALLERY ?>
					<?php if( !empty(get_field( 'blog_article_gallery' ) ) ) { ?>

						<div class="blog-article-gallery">

							<h2>Article Gallery</h2>

						    <div class="blog-article-gallery-grid">
								<?php
									$gallitems = get_field( 'blog_article_gallery' );

									foreach ($gallitems as $item) {
										// echo '<pre>'.print_r($item, true).'</pre>';
										echo '<div class="blog-article-gallery-image" style="background-image: url('.$item['url'].')">'.
											'<a rel=”lightbox” class="gallery-node-gallery-image-lightbox" href="'.$item['sizes']['large'].'">'.
											'</a>'.
											'</div>';

										// echo '<div class="blog-article-gallery-image">'.
										// '<a rel=”lightbox” class="gallery-node-gallery-image-lightbox" href="'.$item['sizes']['large'].'">'.
										// '<img src="'.$item['sizes']['gallery-thumbnail'].'" />'.
										// '</a>'.
										// '</div>';
									}

								?>
						    </div>
						</div>
					<?php } ?>

					<div class="blog-article-social-share">
						<h2>Share This Article</h2>
						<?php echo do_shortcode( '[addtoany]' ); ?> 
					</div>

				<?php endwhile; ?><!-- PAGE MAIN QUERY -->
			</div>

		<?php } ?>

		<?php get_sidebar(); ?>

		<br class="clearfloat" />
	</div>
</div>


<?php get_footer(); ?>