
<?php echo $this->extend('layout/default'); ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-lg-6">
        <h1>Form</h1>       

		<?php echo form_open('user/save'); ?>	
		
		<?php echo form_input('name', '', ['id'=>'name', 'class'=>'form-control','placeholder'=>'Name' ]); ?>	

    	<?php echo form_input('password', '', ['id'=>'pass', 'class'=>'form-control','placeholder'=>'Password' ]); ?>	

    	<?php echo form_input('email', '', ['id'=>'email', 'class'=>'form-control','placeholder'=>'Email' ]); ?>

    	<?php echo form_submit('submit', 'Submit', ['class'=>'form-control btn btn-large bg-info',]); ?>
	
	    <?php echo form_close(); ?>

		</div>
	</div>
<?= $this->endSection() ?>

