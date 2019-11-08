<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Register for Exam</title>
</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
	  <div class="panel panel-danger">
	  	<div class="panel-heading">Register to take exam</div>
	  	<div class="panel-body">	  	  
			<form method="POST" action="<?php echo base_url(); ?>exam/form_validation">
				<div class="form-group">
					<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" >
				<span class="text-danger"><?php echo form_error('username') ?></span>
			    </div>
			    <div class="form-group">
					<label>Password</label>
				<input type="password" name="user_password" class="form-control" >
				<span class="text-danger"><?php echo form_error('user_password') ?></span>
			    </div>
			    <div class="form-group">
				<input type="submit" name="register" value="Register" class="btn btn-info">
			    </div>
			</form>

		</div>	
	  </div>
	</div> 
    </div>

<script type="text/javascript" src="<?php echo base_url(); ?>jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>