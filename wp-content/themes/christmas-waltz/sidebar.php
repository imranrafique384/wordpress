<div id="sidebar"><!-- #sidebar -->
<div class="content"><!-- .content -->

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('sidebar') ) : ?>

<h3>Recent Posts</h3>
<ul>
<?php get_archives('postbypost', 10); ?>
</ul>

<?php endif; ?>

</div><!-- /.content -->
</div><!-- /#sidebar -->