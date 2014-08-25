<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<?php echo $this -> Html -> charset("utf-8"); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<title>Đăng nhập</title>
		<?php echo $this -> Html -> css("admin/css/login-style", array('inline' => false)); ?>
		<?php echo $this->fetch('css');?>
	</head>
	<body>
		<div class="container">
		    <?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>
