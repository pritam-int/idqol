<div id="externalcontenterwarper">
<div id="externalcontenter">
<div class="navigation">
<?php print theme_nice_menus_main_menu(array('direction' => 'down', 'depth' => -1)); ?>
</div>
<br class="spacer" />
  
  
<div id="contentarea">
<!-- left panel start-->
<div id="leftpanel fullwidth">
<div class="logoportion">
<?php if ($logo): ?><div class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div><?php endif; ?>
<?php if($page['header_right']) {; ?><div id="header_right" class="header_right other_pages"><?php print render($page['header_right']); ?></div><?php } ?>
<div class="findbutton"><?php print render($page['header']); ?></div>
</div>

<div class="buttonsection"><?php print render($page['content_top']); ?></div>
<div class="intro">
	    <?php print $breadcrumb; ?><div style="float:right"><?php print render($page['iconsection']); ?></div>
		<br clear="all" />
	    <div class="tabs"><?php print render($tabs); ?></div>
	    <?php print render($page['help']); ?> <?php print render($page['messages']); ?>
	    <?php if ($messages): ?>
               <div id="messages"><div class="section clearfix">
                 <?php print $messages; ?>
               </div></div> <!-- /.section, /#messages -->
            <?php endif; ?>
<h2><?php print $title; ?></h2>
<?php print render($page['content']); ?>
</div>


</div>
<!-- left panel end-->




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