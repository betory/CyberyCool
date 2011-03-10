<?php get_header(); ?>

<div feature>
	<div id="featureleft">
		<img class="featureleft" src="<?php bloginfo('template_url'); ?>/images/featureleft.png">
		<img class="feature" src="<?php bloginfo('template_url'); ?>/images/feature.png">
		<img class="featurebut_1" src="<?php bloginfo('template_url'); ?>/images/featurebutwhite.png">
		<img class="featurebut_2" src="<?php bloginfo('template_url'); ?>/images/featurebutblack.png">
		<img class="featurebut_3" src="<?php bloginfo('template_url'); ?>/images/featurebutwhite.png">
		<img class="featurebut_4" src="<?php bloginfo('template_url'); ?>/images/featurebutwhite.png">
		<img class="featurebut_5" src="<?php bloginfo('template_url'); ?>/images/featurebutwhite.png">
	</div>
	<div id="featureright">
		<img class="featureright" src="<?php bloginfo('template_url'); ?>/images/featureright.png">
		<img class="featurebutmore" src="<?php bloginfo('template_url'); ?>/images/featurebutmore.png">
		<p class="texts">We live in the cyber-world,enjoying the Internet brings cybery cool.</p>
	</div>
</div>

<img class="cut" src="<?php bloginfo('template_url'); ?>/images/cut.png">

<div id="container">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content(); ?>
				<p class="postmetadata">
<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
		<div class="navigation">
			<?php posts_nav_link(); ?>
		</div>
	<?php else : ?>
		<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

