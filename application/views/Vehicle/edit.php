<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit buyer</h1>
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

    <div class="row">
        <div class="col-md-6">
            <form action="<?php echo base_url() ?>buyer/update" method="POST">
                <div class="form-group">
                    <label for="name">Buyer name: </label>
                    <input id="name" name="name" type="text" class="form-control" value="<?php echo $buyer["name"] ?>" />
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <textarea id="address" name="address" type="text" class="form-control"><?php echo $buyer["address"] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="mobile_no">Mobile No: </label>
                    <input id="mobile_no" name="mobile_no" type="text" class="form-control" value="<?php echo $buyer["mobile_no"] ?>" />
                </div>
                <div class="form-group">
                    <label for="gst_no">GST No: </label>
                    <input id="gst_no" name="gst_no" type="text" class="form-control" value="<?php echo $buyer["gst_no"] ?>" />
                </div>
                <div class="form-group">
                    <label for="bank_ac_no">Bank A/c No: </label>
                    <input id="bank_ac_no" name="bank_ac_no" type="text" class="form-control" value="<?php echo $buyer["bank_ac_no"] ?>" />
                </div>
                <div class="form-group">
                    <label for="bank_branch">Branch: </label>
                    <input id="bank_branch" name="bank_branch" type="text" class="form-control" value="<?php echo $buyer["bank_branch"] ?>" />
                </div>
                <div class="form-group">
                    <label for="bank_ifsc">IFSC Code: </label>
                    <input id="bank_ifsc" name="bank_ifsc" type="text" class="form-control" value="<?php echo $buyer["bank_ifsc"] ?>" />
                </div>
                <div class="form-group">
                    <input type="text" class="d-none" name="id" value="<?php echo $buyer["id"] ?>" />
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->