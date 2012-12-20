<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $header_title ?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0"></a></div>            
    <div id="menu">
      <ul>                                                                       
        <li<?php echo $this->uri->segment(1) == '' || $this->uri->segment(1) == 'home' ? ' class="selected"' : '' ?>><a href="home">home</a></li>
        <li<?php echo $this->uri->segment(1) == 'about' ? ' class="selected"' : '' ?>><a href="about">about us</a></li>
        <li<?php echo $this->uri->segment(1) == 'category' ? ' class="selected"' : '' ?>><a href="category">category</a></li>
        <li><a href="specials.html">services</a></li>
        <li><a href="myaccount.html">my accout</a></li>
        <li><a href="register.html">register</a></li>
        <li><a href="details.html">prices</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </div>                 
  </div>
  <div class="center_content">