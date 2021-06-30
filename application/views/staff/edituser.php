<?php
$utype=array('Customer'=>'Customer','Staff'=>'Staff','Organisation'=>'Organisation','Super Admin'=>'Super Admin',);
?>
<!-- Container-fluid starts -->
<div class="container-fluid" style="width: 100%; margin-top: 50px;">
    <div class="row">
		<div class="col-md-6 middle">
			<div class="card">
				<div class="card-header"><h3 class="card-header-text">Update User here</h3></div>
				
				<div class="card-block">
					<form id="main" class="form-horizontal" action="<?php echo site_url('index.php/users/edituser/'.$detail[0]->login_id); ?>" method="post" novalidate>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-ui-user"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="username">Full name</label>
								<input type="text" class="form-control"  name="username" id="username" value="<?php echo empty($detail[0]->username)?'':$detail[0]->username; ?>" />
								<span class="messages"></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-email"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="email">Your Email address</label>
								<input type="email" class="form-control"  name="email" id="email" value="<?php echo empty($detail[0]->email)?'':$detail[0]->email; ?>" disabled />
								<span class="messages"></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
						 <span class="md-add-on">
							<i class="icofont icofont-ui-password"></i>
						 </span>
							<div class="md-input-wrapper">
								<label for="password">Enter Password</label>
								<input type="password" class="form-control"  name="password" id="password" value="<?php echo empty($detail[0]->password)?'':$detail[0]->password; ?>" disabled />
								<span class="messages"><?php echo form_error('password'); ?></span>
							</div>
						</div>
						<div class="md-group-add-on p-relative">
							<span class="md-add-on">
								<i class="icofont icofont-businessman"></i>
							 </span>
							<div class="md-input-wrapper">
								<label for="password">Select User type</label>
								<?php echo form_dropdown('usertype', $utype, $detail[0]->usertype, 'class="form-control"'); ?>
								<?php echo form_error('usertype'); ?>
							</div>
						</div>

						<div class="md-input-wrapper">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Container-fluid ends -->
