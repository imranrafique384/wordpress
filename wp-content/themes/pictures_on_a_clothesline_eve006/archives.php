<?php get_header(); ?>
<?php
$lcmp_page_head = <<<TXT
<div class="contentLayout">
<div class="content">

TXT;
$lcmp_is_left = strpos($lcmp_page_head,"sidebar");
if($lcmp_is_left===FALSE){
    $lcmp_rightdefault = 'default';
    $lcmp_leftdefault = 'notdefault';
}else{
    $lcmp_leftdefault = 'default';
    $lcmp_rightdefault = 'notdefault';
}
?>
<div class="contentLayout">
<?php 
global $lcmp_sidebarloc;
if($lcmp_sidebarloc == $lcmp_leftdefault || $lcmp_sidebarloc == 'left'){ ?>
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<?php } ?>
<div class="content">
<div class="Block">
    <div class="Block-body">

<div class="BlockContent">
    <div class="BlockContent-tl"></div>
    <div class="BlockContent-tr"><div></div></div>
    <div class="BlockContent-bl"><div></div></div>
    <div class="BlockContent-br"><div></div></div>
    <div class="BlockContent-tc"><div></div></div>
    <div class="BlockContent-bc"><div></div></div>
    <div class="BlockContent-cl"><div></div></div>
    <div class="BlockContent-cr"><div></div></div>
    <div class="BlockContent-cc"></div>
    <div class="BlockContent-body">

<h2><?php _e('Archives by Month:', 'kubrick'); ?></h2>
<ul><?php wp_get_archives('type=monthly'); ?></ul>
<h2><?php _e('Archives by Subject:', 'kubrick'); ?></h2>
<ul><?php wp_list_categories(); ?></ul>

    </div>
</div>


    </div>
</div>

</div>
<?php 
global $lcmp_sidebarloc;
if($lcmp_sidebarloc == $lcmp_rightdefault || $lcmp_sidebarloc == 'right'){ ?>
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<?php } ?>
<?php if(file_exists(TEMPLATEPATH . '/sidebar2.php')){ ?>
<div class="sidebar2">
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<?php } ?>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>