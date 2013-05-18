<!DOCTYPE html>
<head>
<?php print $head; ?>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php print $head_title; ?></title>
<?php print $styles; ?>

<?php
    if(!empty($_SESSION['front_size'])) {
      $css_file_name = $_SESSION['front_size'];
    } else {
      $css_file_name = 'font-size1.css';
    }
    
    $css_path = 'http://'.$_SERVER['HTTP_HOST'].base_path().path_to_theme().'/'.$css_file_name;
    //drupal_add_css($css_path);    
?>

<!--style type="text/css" media="print">@import url("<?php print $css_path;?>");</style-->
<link rel="stylesheet" type="text/css" href="<?php print $css_path;?>" />

<?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
