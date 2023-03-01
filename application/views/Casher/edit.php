<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Casher</h1>
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
            <form action="<?php echo base_url() ?>casher/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Casher Name: </label>
                                <input id="name" name="name" type="text" class="form-control" value="<?php echo $casher["name"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Casher Phone No.: </label>
                                <input id="phone_no" name="phone_no" type="text" class="form-control" value="<?php echo $casher["phone_no"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Casher Address: </label>
                                <input id="address" name="address" type="text" class="form-control" value="<?php echo $casher["address"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Casher PAN Card: </label>
                                <input id="pan" name="pan" type="file" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Casher AADHAR Card: </label>
                                <input id="pan" name="aadhaar" type="file" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Casher Bank Name: </label>
                                <input id="bank_name" name="bank_name" type="text" class="form-control" value="<?php echo $casher["bank_name"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Bank Account No: </label>
                                <input id="bank_account_no" name="bank_account_no" type="text" class="form-control" value="<?php echo $casher["bank_account_no"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Bank IFS Code: </label>
                                <input id="bank_ifsc" name="bank_ifsc" type="text" class="form-control" value="<?php echo $casher["bank_ifsc"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Branch Name: </label>
                                <input id="bank_branch_name" name="bank_branch_name" type="text" class="form-control" value="<?php echo $casher["bank_branch_name"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="d-none" name="id" value="<?php echo $casher["id"] ?>" />
                                <input type="submit" value="Save" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->