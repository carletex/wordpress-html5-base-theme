<?php get_header(); ?>

<section id="main">
	<article id="single">

  	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

  		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>

  		<div class="post">
  		   <?php the_content(); ?>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>

	</article> <!-- Fin de single -->

</section> <!-- Fin de main -->

<?php  get_sidebar()?>

<?php get_footer(); ?>
