<?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $more = 0; ?>
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<?php the_content('more'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php endwhile; endif; ?>

<p class="postmetadata"><small>
  <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | 
  <?php edit_post_link('Edit', '', ' | '); ?>  
  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</small></p>

<?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?> 