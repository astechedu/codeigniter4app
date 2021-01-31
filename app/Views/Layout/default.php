<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Test CI Application - <?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>" />    

</head>
<body>

	<div class="container">
    <?= $this->renderSection('content') ?>
    </div>

   <!-- basic scripts -->
	<script type="text/javascript" src="<?php echo base_url('js/jquery-3.2.1.slim.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/popper.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js');?>"></script>    
</body>
</html>