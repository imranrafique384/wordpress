<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content"><!-- #content -->

<div id="posts"><!-- #posts -->

<div class="post-body"><!-- .post-body -->

 <h2 class="post-title">Archives</h2>
 <h3>Listed by Month</h3>
 <ul><?php wp_get_archives('type=monthly'); ?></ul>
 
 <h3>All Posts</h3>
 <ul><?php wp_get_archives('type=postbypost'); ?></ul>
 
 

</div><!-- /.post-body -->
</div><!-- /#posts -->

</div><!-- /#content -->

<?php get_sidebar(); ?>
<?php include( TEMPLATEPATH . '/extras.php' ); ?>
<?php get_footer(); ?>