
  <div class="clear"></div>
	</div>
  <div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" title=""><br> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0"></a></div>
    <div class="right_footer">
      <a href="admin/users">Users</a>
      <a href="admin/contacts">Contacts</a>
      <a href="admin/products">Products</a>
      <a href="admin/categories">Category</a>
    </div>       
  </div>
<?php if (!empty($_GET['notify']) && ($_GET['notify'] == 'success' || $_GET['notify'] == 'error')) {?>
<script type="text/javascript">
var text = new Object();
var type = '<?php echo $_GET['notify'] ?>';
if (type == 'success') {
	// notification for success
	text.product = 'Successfully updated product';
	text.edit_product = 'Successfully updated product';
	text.category = 'Successfully updated category';
	text.edit_category = 'Successfully updated category';
} else {
	// notification for error
	text.product = '';
	text.category = '';
}

noty({
	text: text.<?php echo $_GET['type'] ?>,
	type: type,
	dismissQueue: true,
	layout: 'top',
	theme: 'defaultTheme'
});
</script>
<?php } ?>
</div>
</body>
</html>