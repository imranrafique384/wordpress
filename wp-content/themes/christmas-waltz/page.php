<?php get_header(); ?>

<div id="content"><!-- #content -->
<div id="posts"><!-- #posts -->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-body single"><!-- .post-body .single -->

 <h2 class="post-title"><?php the_title(); ?></h2>
 <?php the_content(__('Read more'));?>
 <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
 
 <div class="comments">
 <?php comments_template(); ?>
 </div>

</div><!-- /.post-body .single -->

<?php endwhile; else: ?>
  <p><strong>Oops!</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
<?php endif; ?>

</div><!-- /#posts -->

</div><!-- /#content -->

<?php get_sidebar(); ?>
<?php include( TEMPLATEPATH . '/extras.php' ); ?>
<?php get_footer(); ?>