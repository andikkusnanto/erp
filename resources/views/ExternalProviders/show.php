<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/employee/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">ExternalProvider</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/employee">
					<div class="form-group">
						<label class="col-sm-2 control-label">External Provider Name</label>
						<div class="col-sm-6">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->expname;?></label>
						</div>
					</div>
					<div class="form-group ">
						<label class="col-sm-2 control-label">pic</label>
						<div class="col-sm-6">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->pic;?></label>
						</div>
					</div>
					<div class="form-group ">
						 <label class="col-sm-2 control-label">phone</label>
						 <div class="col-sm-10">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->phone;?></label>
						 </div>
					</div>
					<div class="form-group ">
						<label class="col-sm-2 control-label">email</label>
						<div class="col-sm-6">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->email;?></label>
						</div>
					</div>
					<div class="form-group ">
						<label class="col-sm-2 control-label">maps</label>
						<div class="col-sm-6">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->maps;?></label>
						</div>
					</div>
					<div class="form-group ">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-6">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->address;?></label>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
