<?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>
		<h2 id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php the_content('more'); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<?php endwhile; ?>
<?php endif; ?>	

<p class="postmetadata">
  <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | 
  <?php edit_post_link('Edit', '', ' | '); ?>  
  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</p>

<?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 