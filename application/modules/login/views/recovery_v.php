<div class="container">
	<?php echo form_open('login/recover_credentials');?>
	<?php echo form_fieldset('', array('id' => 'login_legend'));?>
	<legend id="login_legend">
		Account Recovery
	</legend>
	<?php echo $this->session->flashdata('error_message');?>
	<div class="item">	
		<?php echo form_error('email_address', '<div class="error_message">', '</div>');?>
		<?php echo form_label('Email Address:', 'email_address');?>
		<?php echo form_input(array('name' => 'email_address', 'id' => 'email_address', 'size' => '24', 'class' => 'textfield', 'placeholder' => 'you@yourmail.com'));?>
	</div>
	<?php echo form_fieldset_close();?>
	<?php echo form_fieldset('', array('class' => 'tblFooters'));?>
	<a href='<?php echo base_url().'login'; ?>'>Go To Login</a>
	<?php echo form_submit('input_go', 'Submit');?>
	<?php echo form_fieldset_close();?>
	<?php echo form_close();?>
</div>