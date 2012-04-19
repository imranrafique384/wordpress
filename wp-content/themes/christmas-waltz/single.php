<?php get_header(); ?>

<div id="content"><!-- #content -->

<div id="posts"><!-- #posts -->
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <div class="post-body single"><!-- .post-body .single -->
 
 <div class="post-date"><?php the_time('d M y'); ?></div>
 <h2 class="post-title"><?php the_title(); ?></h2>
<div class="post-meta"><!-- .post-meta -->
In <?php the_category(', ') ?><!-- Show tags if they're used --><?php if (has_tag()) { ?> | Tagged <?php the_tags(' ', ', ', ' '); ?><?php }else{ ?><?php } ?><!-- /end Tags -->
</div><!-- /.post-meta -->

 <?php the_content(__('Read more'));?>
 <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
 
 <div class="comments">
 <?php comments_template(); ?>
 </div>
 
 <div class="post-navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
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