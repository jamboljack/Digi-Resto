<?php
$meta = $this->menu_m->select_meta()->row();
?>
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
  	<head>
     	<meta charset="UTF-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<title><?=$meta->meta_name;?></title>
		<link rel="shortcut icon" href="<?=base_url('img/logo-icon.png');?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/animate.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/font-pizzaro.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/colors/red.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('frontend');?>/css/jquery.mCustomScrollbar.min.css" media="all" />
      	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
   </head>
   <body class="page-template-template-homepage-v1 home-v1">
      	<div id="page" class="hfeed site">
        <?=$_header;?>
		<?=$content;?>
        <?=$_footer;?>
      	</div>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/jquery.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/tether.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/bootstrap.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/owl.carousel.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/social.share.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      	<script type="text/javascript" src="<?=base_url('frontend');?>/js/scripts.min.js"></script>
   	</body>
</html>