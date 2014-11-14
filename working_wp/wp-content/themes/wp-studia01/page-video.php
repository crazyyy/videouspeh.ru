<?php /* Template Name: Video Page Template */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<!-- article -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<h1 class="page-title inner-title"><?php the_title(); ?></h1>
			<?php if(get_field('pretext'))	{ echo get_field('pretext'); } ?>
			<?php if(get_field('video'))	{ echo get_field('video'); } ?>


			<p><strong>Смотрите ещё:</strong></p>
			<table class="preview5">
				<tr>
				
					<?php $posts = get_field('repeater-inner-1');
					if( $posts ): ?>

						<td>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
							<!-- post thumbnail -->
							<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail()) :
									the_post_thumbnail('medium');	
								else: ?>
								<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?></a>
							<!-- /post thumbnail -->
					        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					    <?php endforeach; ?>
					    </td>
					<?php wp_reset_postdata();  endif; ?>
				
					<?php $posts = get_field('repeater-inner-2');
					if( $posts ): ?>

						<td>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
							<!-- post thumbnail -->
							<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail()) :
									the_post_thumbnail('medium');	
								else: ?>
								<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?></a>
							<!-- /post thumbnail -->
					        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					    <?php endforeach; ?>
					    </td>
					<?php wp_reset_postdata();  endif; ?>

					<?php $posts = get_field('repeater-inner-3');
					if( $posts ): ?>

						<td>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
							<!-- post thumbnail -->
							<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail()) :
									the_post_thumbnail('medium');	
								else: ?>
								<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?></a>
							<!-- /post thumbnail -->
					        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					    <?php endforeach; ?>
					    </td>
					<?php wp_reset_postdata();  endif; ?>

					<?php $posts = get_field('repeater-inner-4');
					if( $posts ): ?>

						<td>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
							<!-- post thumbnail -->
							<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail()) :
									the_post_thumbnail('medium');	
								else: ?>
								<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?></a>
							<!-- /post thumbnail -->
					        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					    <?php endforeach; ?>
					    </td>
					<?php wp_reset_postdata();  endif; ?>

					<?php $posts = get_field('repeater-inner-5');
					if( $posts ): ?>

						<td>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
							<!-- post thumbnail -->
							<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail()) :
									the_post_thumbnail('medium');	
								else: ?>
								<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?></a>
							<!-- /post thumbnail -->
					        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					    <?php endforeach; ?>
					    </td>
					<?php wp_reset_postdata();  endif; ?>

				</tr>
			</table>


			<?php the_content(); ?>
		<?php endwhile; else: // If 404 page error ?>
			<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
		<?php endif; ?>
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>