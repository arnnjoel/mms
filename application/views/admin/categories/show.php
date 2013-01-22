<div style="padding: 20px">
	<div>
  	<a href="admin/categories/add"><h3>add category</h3></a>
  </div>
	 <table align="center" width="100%">
    <tr>
    	<th>category name</th>
      <th>date created</th>
      <th>option</th>
    </tr>
    <?php if(!empty($categories)) { ?>
			<?php foreach($categories as $key => $values){ ?>
      <tr style="border: 1px solid #000">
        <td align="center"><?php echo $values['category_name']; ?></td>
        <td align="center"><?php echo date("Y-m-d", strtotime($values['created_at'])); ?></td>
        <td align="center">
          <a href="admin/categories/edit/<?php echo $values['id']; ?>"><img src="./images/admin/b_edit.png" title="edit" /> edit</a> <a onClick="return confirm('Delete contact?');" href="admin//categories/delete/<?php echo $values['id']; ?>"><img src="./images/admin/b_drop.png" title="delete" /> delete</a>
         </td>
      </tr>
      <?php } ?>
    <?php }else{ ?>
    <tr style="border: 1px solid #000">
    	<td colspan="5">&nbsp;</td>
    </tr>
    <tr style="border: 1px solid #000">
    	<td colspan="5"><center><b style="font-size: 16px">No Categories</b></center></td>
    </tr>
    <?php } ?>
  </table>
</div>