<ul>
	<li><?php previous_post_link(); ?></li>
	<li><?php next_post_link(); ?></li>
</ul>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>


<?php the_title(); ?>

<?php the_content(); ?>

<?php the_author_nickname(); ?>


<?php the_tags( 'Tags: ', ', '); ?><br />
Category: <?php the_category(', ') ?><br />

