<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Room</title>
</head>

<body>
<h2 align="center">Add Room</h2>
<div id="infoMessage"><?php echo $message;?></div>
<?php echo form_open("product/add");?>
	<table width="700" border="1" cellpadding="0" cellspacing="2" align="center">
		<tr>
			<td width="130" align="right" bgcolor="#FFFFFF">Product Name: </td>
			<td><?php echo form_input($name);?></td>
		</tr>
		<tr>
			<td width="130" align="right" bgcolor="#FFFFFF">Product Description: </td>
			<td><?php echo form_textarea($description); ?></td>
		</tr>
		<tr>
			<td align="right" bgcolor="#FFFFFF">Price:</td>
			<td><?php echo form_input($price); ?></td>
		</tr>
		<tr>
			<td align="right" bgcolor="#FFFFFF">Picture (182x100):</td>
			<td><?php echo form_input($picture); ?></td>
		</tr>
		<tr>
			<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
			<td><?php echo form_submit('submit', 'Submit');?>
				<input type="button" name="btnBack" id="btnBack" value="Back" onclick="window.location.href='<?php echo base_url() ?>products'" /></td>
		</tr>
	</table>
<?php echo form_close(); ?>
</body>
</html>
