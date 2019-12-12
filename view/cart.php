<?php

session_start();
?>
<h2>gio hang cua ban</h2>
	<table width="100%" cellspacing="0" cellpadding="0" boder="1">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
			<?php
			include("model/danhmuc.php");
			foreach ($_SESSION["cart_items"] as $item){
			echo
			
			$item["id_sp"];
			
			
			}
			?>
	</table>
<fieldset>
	<legend>thong tin nguoi mua hang</legend>
	<form method="POST" action="">
		<div>
			<label>ho va ten</label>
			<input type="text" name="hoten">
		</div>
		<div>
			<label>dia chi</label>
			<input type="text" name="diachi">
		</div>
		<div>
			<label>email</label>
			<input type="text" name="email">
		</div>
		<div>
			<label>sdt</label>
			<input type="text" name="sdt">
		</div>
		<div>
			<label>dat hang</label>
			<input type="text" name="dathang">
		</div>
	</form>
</fieldset>