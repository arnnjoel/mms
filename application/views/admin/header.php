<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $header_title ?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
        <?php if($this->session->userdata('admin')){ ?>
        <li><a href="admin/logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>                 
  </div>
  <div class="center_content">