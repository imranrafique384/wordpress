<?php get_header(); ?>

<div id="content"><!-- #content -->
<div id="posts"><!-- #posts -->
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <div class="post-body"><!-- .post-body -->
 <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <div class="post-comment-count"><span><?php comments_popup_link('No Comments. Leave one?', '1 Comment', '% Comments'); ?><!-- | <?php trackback_rdf(); ?>--></span></div>
 <div class="post-meta"><!-- .post-meta -->
  <p>Posted on <?php the_time('d M y'); ?> in <?php the_category(', ') ?><!-- Show tags if they're used --><?php if (has_tag()) { ?> | Tagged <?php the_tags(' ', ', ', ' '); ?><?php }else{ ?><?php } ?><!-- /end Tags --></p>
 </div><!-- /.post-meta -->
 

 <?php the_content(__('Read more'));?>
 <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>

 </div><!-- /.post-body -->

 <?php endwhile; else: ?>
  <p><strong>Oops!</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
 <?php endif; ?> 

 <div class="post-navigation"><!-- post-navigation -->
  <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
 </div> <!-- /post-navigation -->

</div><!-- /#posts -->
</div><!-- /#content -->

<?php get_sidebar(); ?>
<?php include( TEMPLATEPATH . '/extras.php' ); ?>
<?php get_footer(); ?>
