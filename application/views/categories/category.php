<?php echo $name ?>

<?php foreach($products as $key => $value) { ?>
<?php echo $value['name']; ?>
<?php echo $value['id']; ?>
<?php echo $value['image']; ?>
<?php } ?>

<?php echo $this->pagination->create_links(); ?>