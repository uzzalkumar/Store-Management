<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Management Header
        <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <!-- my code -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            Category Management
        </div>
                    <span style="color:red;font-size: 18px;text-align: center;margin-left: 500px;">
                <?php
$message = $this->session->userdata('message');
if (isset($message)) {
	echo $message;
	$this->session->set_userdata('message');
}
?>
            </span>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Employee Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$id = 0;
foreach ($view_employee as $employee) {
	$id = $id + 1;
	?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $employee->employee_name; ?></td>
                                        <td><?php echo $employee->mobile; ?></td>
                                        <td><?php echo $employee->address; ?></td>
                                        <td><?php echo $employee->status; ?></td>
                                        <td>

                                        <a href="<?php echo base_url("edit-employee/$employee->id") ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="<?php echo base_url("delete-employee/$employee->id") ?>" onclick="return confirmDelete()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <?php
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->