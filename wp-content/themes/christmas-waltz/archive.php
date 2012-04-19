<?php get_header(); ?>

<div id="content"><!-- #content -->
<div id="posts"><!-- #posts -->
<div class="post-body"><!-- .post-body -->

<?php is_tag(); ?>
 <?php if (have_posts()) : ?>

  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php /* If this is a category archive */ if (is_category()) { ?>
   <h2>Posts in &#8216;<?php single_cat_title(); ?>&#8217;</h2>
  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
   <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
   <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
   <h2>Archive for <?php the_time('F, Y'); ?></h2>
  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
   <h2>Archive for <?php the_time('Y'); ?></h2>
  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
   <h2>Author Archive</h2>
  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
   <h2>Blog Archives</h2>
  <?php } ?>


 <?php while (have_posts()) : the_post(); ?>

 <p><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong><br />
 <?php the_time('d M y'); ?>
 </p>


 <?php endwhile; ?>

<div class="post-navigation"><!-- post-navigation -->
  <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
 </div> <!-- /post-navigation -->
 
<?php else : ?>

 <h2>Not Found</h2>
 <p>Try using the search form below</p>
 <?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

</div><!-- /.post-body -->

</div><!-- /#posts -->

</div><!-- /#content -->

<?php get_sidebar(); ?>
<?php include( TEMPLATEPATH . '/extras.php' ); ?>
<?php get_footer(); ?>