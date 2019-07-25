<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}

#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
	text-align: center;
}
</style>
</head>
<body>
<table width="700" border="0" align="center">
	<tr>
		<td><h2>Products (<a href="<?php echo base_url().'products' ?>">View Products</a>)</h2></td>
	</tr>
	<tr>
		<td><div id="infoMessage"><?php echo $message;?></div></td>
	</tr>
	<tr>
		<td><input name="New" type="button" value="Add New" onclick="window.location='product/add'" /></td>
	</tr>
</table>
<form name="frmproduct" method="post">
	<input type="hidden" name="rid" />
	<input type="hidden" name="command" />
	<table width="700" align="center">
		<tr>
			<th width="150"><strong>Product Name</strong></th>
			<th><strong>Product Description</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Edit</strong></th>
			<th><strong>Delete</strong></th>
		</tr>
		<?php
		foreach ($products as $product){
			$product_id = $product['id'];
		?>
			<tr>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['description'] ?></td>
				<td><?php echo $product['price'] ?></td>
				<td><a href='product/edit/<?php echo $product_id ?>'>Edit</a></td>
				<td>
					<?php 
						echo anchor('product/delete/'.$product_id, 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')"));
					?>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</form>
</body>
</html>