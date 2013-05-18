<!--<script type="text/javascript">
jQuery(function() {
	jQuery(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>-->




<div id="externalcontenterwarper">
<div id="externalcontenter">
<div class="navigation">
<?php print theme_nice_menus_main_menu(array('direction' => 'down', 'depth' => -1)); ?>
</div>
  
  
  
<div id="contentarea">
<!-- left panel start-->
<div id="leftpanel">
<div class="logoportion">
<?php if ($logo): ?><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a><?php endif; ?>
<div class="findbutton"><?php print render($page['header']); ?></div>
</div>

<div class="buttonsection"><?php print render($page['content_top']); ?></div>
<div class="intro">
	    <?php print $breadcrumb; ?>
	    <div class="tabs"><?php print render($tabs); ?></div>
	    <?php print render($page['help']); ?> <?php print render($page['messages']); ?>
	    <?php if ($messages): ?>
               <div id="messages"><div class="section clearfix">
                 <?php print $messages; ?>
               </div></div> <!-- /.section, /#messages -->
            <?php endif; ?>
<h2><?php print render($page['title']); ?></h2>
<?php print render($page['content']); ?>
</div>

<?php print render($page['bottom']); ?>
</div>
<!-- left panel end-->


<!-- right panel start-->
<div id="rightpanel">
<?php if($page['header_right']) {; ?><div id="header_right" class="header_right front_page"><?php print render($page['header_right']); ?></div><?php } ?>
<?php print render($page['sidebar_second']); ?>
</div>
<!-- right panel end-->

</div>
<br class="spacer" />
</div>


<div id="footerfull">
<div class="footerwarper">

<div class="footertop">
<div class="footernav">
<h2>Site Link</h2>
<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'primary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>   
</div>


<div class="footcontact">
<?php print render($page['footer_top']); ?>
</div>
</div>
<div class="copyright"><?php print render($page['footer']); ?></div>
</div>
</div>
</div>