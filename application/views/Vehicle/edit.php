<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Vehicle</h1>
        </div>
        <div class="col-md-6">
            <?php if ($this->session->flashdata("success")) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?php echo $this->session->flashdata("success") ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata("error")) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Failed!</strong> <?php echo $this->session->flashdata("error") ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="card card-flush">
        <div class="card-body">
            <form action="<?php echo base_url() ?>vehicle/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Vehicle Registration No: </label>
                                    <input id="registration_no" name="registration_no" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['registration_no'] ?>"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Registration Copy: </label>
                                    <input id="registration_copy" name="registration_copy" type="file" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gst_no">Wheel Type: </label>
                            <input id="wheel_type" name="wheel_type" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['wheel_type'] ?>" />
                        </div>
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="mobile_no">Owner Name: </label>
                                    <input id="owner_name" name="owner_name" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['owner_name'] ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bank_ac_no">Owner Pan Card: </label>
                                    <input id="owner_pan" name="owner_pan" type="file" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gst_no">Owner Phone: </label>
                            <input id="owner_phone" name="owner_phone" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['owner_phone'] ?>" />
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="d-none" name="id" value="<?php echo $vehicle["id"] ?>" />
                            <input type="submit" value="Save" class="btn btn-primary" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Bank Name: </label>
                            <input id="registration_no" name="bank_name" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['bank_name'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="name">Bank Account No: </label>
                            <input id="registration_no" name="bank_account_no" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['bank_account_no'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="name">Bank IFS Code: </label>
                            <input id="registration_no" name="bank_ifsc" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['bank_ifsc'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="name">Branch Name: </label>
                            <input id="registration_no" name="bank_branch_name" type="text" class="form-control" style="text-transform:uppercase" value="<?php echo $vehicle['bank_branch_name'] ?>" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->