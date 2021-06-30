<!-- Container-fluid starts -->
<div class="container-fluid" style="width: 100%; margin-top: 50px;">
	
    <!-- Row Starts -->
    <!--Data Table is start from here-->

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h5 class="card-header-text"></h5></div>
          <div class="card-block">
            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">
              <thead>
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tfoot>
              <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </tfoot>
              <tbody>
			  <?php foreach($detail as $val){ ?>
              <tr>
                <td><?php echo $val->username;?></td>
                <td><?php echo $val->email;?></td>
                <td><?php echo $val->usertype;?></td>
                <td>
				<?php if($val->is_status){ ?>
				<a href="<?php echo site_url('index.php/users/block/'.$val->login_id); ?>" class="btn btn-success waves-effect">Active</a>
				<?php }else{ ?>
				<a href="<?php echo site_url('index.php/users/activate/'.$val->login_id); ?>" class="btn btn-danger waves-effect">Block</a>
				<?php } ?>
				</td>
                <td>
				<a href="<?php echo site_url('index.php/users/edituser/'.$val->login_id); ?>" title="Edit" class="btn btn-warning waves-effect">Edit</a> 
				
				<a href="<?php echo site_url('index.php/users/deleteuser/'.$val->login_id); ?>" title="Delete" class="btn btn-danger waves-effect">Delete</a>
				</td>
              </tr>
			  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
	
  </div>
        <!-- Container-fluid ends -->
     </div>