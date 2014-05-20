<?php
/*
Template Name: Job offer template
*/

?>

<div class="apply-bar">
	<button class="btn-wikia" >Aplikuj</button>
</div>
<div class="container prev-next-nav">
	<div class="prev-next-buttons" id="stickyHandNav">
		<button class="prev"></button>
		<button class="next"><span></span></button>
		<button class="back"></button>
	</div>
</div>

<div class="container spaced-container">
<?php while (have_posts()) : the_post(); ?>
	<ul class="tags">
	<?php foreach (get_the_tags(108) as $tag) : ?>
		<li>
			<a href="<?php  echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
	<article <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>
</div>


<script>
	$(document).ready(function(){

		var bottomOffset = $(document).height() - ($('.news-feed').offset().top - $('#stickyHandNav').outerHeight()),
			topOffset = $('#stickyHandNav').offset().top - $('.navigation').outerHeight();
		$('#stickyHandNav').affix({
			offset: {
				top: topOffset,
				bottom: bottomOffset
			}
		});

	});
</script>
