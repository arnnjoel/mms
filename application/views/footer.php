
  <div class="clear"></div>
	</div>
  <div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" title=""><br> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0"></a></div>
    <div class="right_footer">
      <a href="home">home</a>
      <a href="about/index">about us</a>
      <a href="account">login</a>
      <a href="register">register</a>
      <a href="contact_us">contact us</a>
      <a href="admin/login">admin</a>
    </div>       
  </div>
<?php if (!empty($_GET['notify']) && ($_GET['notify'] == 'success' || $_GET['notify'] == 'error')) {?>
<script type="text/javascript">
var text = new Object();
var type = '<?php echo $_GET['notify'] ?>';
if (type == 'success') {
	// notification for success
	text.checkout = 'Successfully purchased products.';
	text.register = 'Registration complete';
	text.contact_us = 'Success';
	text.add_to_cart = 'Item added to cart';
	text.profile = 'Successfully updated profile';
} else {
	// notification for error
	text.checkout = 'Error in checkout';
	text.registration = 'Registration error';
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