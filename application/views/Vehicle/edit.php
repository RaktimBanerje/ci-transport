<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit vehicle</h1>
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
                        <div class="form-group">
                            <label for="name">Vehicle Registration No: </label>
                            <input id="registration_no" name="registration_no" type="text" class="form-control" value="<?php echo $vehicle["registration_no"] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="address">Registration Copy: 
                                <?php if($vehicle["registration_copy"]) { ?>
                                    <a target="_blank" class="ml-2 text-dark" href="<?php echo base_url() . "storage/registrations/" . $vehicle["registration_copy"]?>"><i class="fa fa-eye"></i></a>  
                                <?php } ?>
                            </label>
                            <input id="registration_copy" name="registration_copy" type="file" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">Owner Name:</label>
                            <input id="owner_name" name="owner_name" type="text" class="form-control" value="<?php echo $vehicle["owner_name"] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="gst_no">Owner Phone: </label>
                            <input id="owner_phone" name="owner_phone" type="text" class="form-control" value="<?php echo $vehicle["owner_phone"] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="bank_ac_no">Owner Pan Card: 
                                <?php if($vehicle["owner_pan"]) { ?>
                                    <a target="_blank" class="ml-2 text-dark" href="<?php echo base_url() . "storage/pans/" . $vehicle["owner_pan"]?>"><i class="fa fa-eye"></i></a>  
                                <?php } ?>
                            </label>
                            <input id="owner_pan" name="owner_pan" type="file" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="d-none" name="id" value="<?php echo $vehicle["id"] ?>" />
                            <input type="submit" value="Save" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->