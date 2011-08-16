<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


<?php the_title(); ?>

<?php the_content(); ?>

<?php the_author_nickname(); ?>