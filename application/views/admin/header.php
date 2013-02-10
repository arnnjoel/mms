<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $header_title ?></title>

<link rel="icon" type="image/png" href="<?php echo base_url('images/favicon.ico'); ?>">
<link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="./css/jquery.tooltip.css" rel="stylesheet" type="text/css" />
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link href="./css/jqueryUI/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic&amp;subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="./js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="./js/admin.js"></script>

<!-- jquery noty js -->
<script type="text/javascript" src="./js/jquery.noty.js"></script>
<script type="text/javascript" src="./js/layouts/top.js"></script>
<script type="text/javascript" src="./js/themes/default.js"></script>
<!-- end jquery noty js -->

<!-- jquery ui js -->
<script type="text/javascript" src="./js/jquery-ui.js"></script>
<!-- end jquery ui js -->
</head>

<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href=""><img src="images/logo.gif" alt="" title="" border="0"></a></div>            
    <div id="menu">
      <ul>                                                                       
        <li><a href="admin/users">Users</a></li>
        <li><a href="admin/contacts">Contacts</a></li>
        <li><a href="admin/products">Products</a></li>
        <li><a href="admin/categories">Category</a></li>
        <li><a href="admin/checkouts">Checkouts</a></li>
        <?php if($this->session->userdata('admin')){ ?>
        <li><a href="admin/logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>                 
  </div>
  <div class="center_content">
  <div style="padding: 5px 10px">
  	<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""></span><?php echo $this->uri->segment(2) ?></div>
  <div>
