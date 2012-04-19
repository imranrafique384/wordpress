<?php get_header(); ?>

<div id="content"><!-- #content -->

<div id="posts"><!-- #posts -->
<div class="post-body"><!-- .post-body -->

<h3>Search Results</h3>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<ul>
 <li><strong><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong><br />
 <?php the_time('d M y'); ?> | Filed under <?php the_category(', ') ?> | Tagged: <?php the_tags(' ', ',', ' '); ?>
 </li>
</ul>

<?php endwhile; else: ?>
 <h4>No Results</h4>
 <p>Please try again, or take a look in our <a href="archives/">archives&nbsp;&raquo;</a><p/>
<?php endif; ?>

</div><!-- /.post-body -->
</div><!-- /#posts -->
</div><!-- /#content -->

<?php get_sidebar(); ?>
<?php include( TEMPLATEPATH . '/extras.php' ); ?>
<?php get_footer(); ?>