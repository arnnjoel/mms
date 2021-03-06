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
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>

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
    <div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0"></a></div>            
    <div id="menu">
      <ul>                                                                       
        <li<?php echo $this->uri->segment(1) == '' || $this->uri->segment(1) == 'home' ? ' class="selected"' : '' ?>><a href="home">home</a></li>
        <li<?php echo $this->uri->segment(1) == 'surplus' ? ' class="selected"' : '' ?>><a href="surplus">products</a></li>
        <li<?php echo $this->uri->segment(1) == 'account' ? ' class="selected"' : '' ?>><a href="account">my account</a></li>
        <?php if($this->session->userdata('username') == ''){ ?>
        <li<?php echo $this->uri->segment(1) == 'register' ? ' class="selected"' : '' ?>><a href="register">register</a></li>
        <?php } ?>
        <li<?php echo $this->uri->segment(1) == 'about' ? ' class="selected"' : '' ?>><a href="about">about us</a></li>
        <li<?php echo $this->uri->segment(1) == 'contact' ? ' class="selected"' : '' ?>><a href="contact_us">contact</a></li>
         <?php if($this->session->userdata('username')){ ?>
        <li><a href="account/log_out">logout</a></li>
        <?php } ?>
      </ul>
    </div>                 
  </div>
  <div class="center_content">