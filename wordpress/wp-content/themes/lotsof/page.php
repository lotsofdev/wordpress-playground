<?php get_header(); ?>

<main class="main">

	<?php

	require __DIR__ . '/src/components/card/card1.php';

	?>

	<?php while (have_posts()):
		the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

</main>

<?php get_footer(); ?>