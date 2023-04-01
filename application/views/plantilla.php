<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/boostrap/css/bootstrap.css'); ?>">
<script src="<?php  echo base_url('public/j
s/jquery.min.js')  ?>"></script>

<script src="<?php  echo base_url('public/j
s/bootstrap.js')  ?>"></script>
<script src="<?php  echo base_url('public/boostrap/js/bootstrap.js')  ?>"></script>
</head>
<body>
	

<div id="container">
	<div class="col-md-10">
<?php
$this->load->view($contenido);

	?>

</div>
</div>
	
</body>
</html><?php

