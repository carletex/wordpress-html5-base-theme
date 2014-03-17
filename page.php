<?php get_header(); ?>

<section id="main">
	<article id="single">

  	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

  		<h2><?php the_title(); ?></h2>

  		<div class="page">
  		   <?php the_content(); ?>
    	</div>

    <?php endwhile; ?>

    <?php endif; ?>

	</article>

</section>

<?php  get_sidebar()?>

<?php get_footer(); ?>
