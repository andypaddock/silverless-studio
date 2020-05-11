<?php
/**
 * ============== Template Name: Home Page
 *
 * @package silverlessstudio
 */
get_header();?>


	<div class="container content">
		<div class="col">
			<div class="slide-wrapper">
			<?php if( have_rows('top_carousel') ):
			$i = 1;
			while( have_rows('top_carousel') ): the_row();
			$slideType = get_sub_field('slide_type');
			if (get_sub_field('background_image')):
			$slideImage = get_sub_field('background_image');
			elseif (get_sub_field('background_colour')):
			$slideColor = get_sub_field('background_colour');
			endif;?>

			<div class="pad"></div>

			<div id="slide<?php echo $i;?>" class="slide slide<?php echo $i;?> <?php echo $slideType;?>" style="background:url(<?php echo $slideImage['url'];?>); background-color:<?php echo $slideColor;?>">
				<div class="container">

					<?php if($slideType == 'first'):?>
						<h3 class="heading heading__1"><?php the_sub_field('heading');?></h3>
						<div class="inner-content">
						<h2 class="heading heading__5 mb2"><?php the_sub_field('copy');?></h2>
						<a href="<?php the_sub_field('button_target');?>" class="button button__ghost"><?php the_sub_field('button_text');?></a>
					</div>
					<?php elseif ($slideType == 'work'):?>
						<div class="inner-content">
							<h3 class="heading heading__6">Recent Work</h3>
							<h2 class="heading heading__2"><?php the_sub_field('heading');?></h2>
							<p><?php the_sub_field('copy');?></p>
							<a href="<?php the_sub_field('button_target');?>" class="button button__bare"><?php the_sub_field('button_text');?></a>
						</div>
					<?php elseif ($slideType == 'cta'):?>
						CTA
					<?php endif;?>

				</div><!--container-->
			</div><!--slide-->

		<?php $i++; endwhile; endif;?>
		</div>

		</div>
	</div>

</div><!--outer-container-->

	<?php get_template_part('template-parts/_testimonial-section');?>

	<div class="outer-container">
		<div class="container news-feed">
			<h4 class="heading heading__3">Behind The Scenes</h4>
			<?php $silverlessPosts = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=>3
			));
			if ( $silverlessPosts->have_posts() ) :
			while ( $silverlessPosts->have_posts() ) :
			$silverlessPosts->the_post();
			$postThumbImage = get_field('thumbnail_image'); ?>
			<div class="news-feed__item">
				<div class="image" style="background:url(<?php echo $postThumbImage['url'];?>);"><a href="<?php the_permalink(); ?>"></a></div>
				<p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
				<h3 class="heading heading__7"><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand">Read More</a>
			</div>
			<?php endwhile; wp_reset_postdata();endif; ?>
		</div>
	</div>

</div><!--wrapper-->

<script>
const slides = document.querySelectorAll(".slide");
observer = new IntersectionObserver(
  entries => {
	entries.forEach(entry => {
	  if (entry.isIntersecting) {
		entry.target.classList.add('active');
	  } else {
		entry.target.classList.remove("active");
	  }
	});
  },
  {
	threshold: 0.5
  }
);
var s = 0;
slides.forEach(slide => {
  observer.observe(slide);
});

const slideNumber = document.querySelectorAll('.slide').length;
const lastSlide = "slide" + slideNumber;
const target = document.getElementsByClassName(lastSlide);
removeNav = new IntersectionObserver(
  entries => {
  },
  {
	threshold: 0.5
  }
);

//removeNav.observe(target);
</script>


<?php get_footer();?>
