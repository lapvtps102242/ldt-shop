<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/test1/duan1/vendor/admin.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/973e3dddad.js"></script>
	<script type="text/javascript" src="/duan4//vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="/test1/duan1/vendor/bootstrap.css">
</head>
<body>
	<div class="col-left">
		<?php include("menu.php"); ?>
	</div> <!-- End col left-->
	<div class="col-right">
		<?php 
		include("header.php");
		?>
		<div class="box_right">
			<?php
				require $VIEW_NAME;
			?>
		</div>
	</div>
</body>
</html>