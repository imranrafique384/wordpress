<div id="extras"><!-- #extras -->

<div id="extras-wrapper"><!-- #extras-wrapper -->
<div id="extras-column-one"><!-- #extras-column-one -->
<div class="content"><!-- .content -->
<ul>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('extras-column-one') ) : ?>

<h3>About</h3>
<?php bloginfo('description'); ?>
<p><a href="<?php echo get_option('home'); ?>/about/">Learn more&nbsp;&rsaquo;</a></p>
<?php endif; ?>
</ul>
</div><!-- /.content -->
</div><!-- /#extras-column-one -->
</div><!-- /#extras-wrapper -->

<div id="extras-column-two"><!-- #extras-column-two -->
<div class="content"><!-- .content -->

<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('extras-column-two') ) : ?>

<h3>Browse by Category</h3>
<?php wp_dropdown_categories('show_option_none=Select category'); ?>
<script type="text/javascript"><!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php echo get_option('home');
?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		}
    }
    dropdown.onchange = onCatChange;
--></script>

<h3>Browse by Tag</h3>
<select name="tag-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
	<option value="#">Select Tag</option>
	<?php dropdown_tag_cloud('number=0&order=asc'); ?>
</select>

<h3>Browse by Date</h3>
<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>


<?php endif; ?>

</div><!-- /.content -->
</div><!-- /#extras-column-two -->

<div id="extras-column-three"><!-- #extras-column-three -->
<div class="content"><!-- .content -->
<ul>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('extras-column-three') ) : ?>

<h3>Blogroll</h3>
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>

<?php endif; ?>
</ul>
</div><!-- /.content -->
</div><!-- /#extras-column-three -->

<div id="extras-column-four"><!-- #extras-column-four -->
<div class="content"><!-- .content -->
<ul>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('extras-column-four') ) : ?>

<?php get_calendar(true); ?>

<?php endif; ?>
</ul>
</div><!-- /.content -->
</div><!-- /#extras-column-four -->



</div><!-- /#extras -->