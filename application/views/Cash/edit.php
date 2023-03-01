<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Cash Record</h1>
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
            <form action="<?php echo base_url() ?>cash/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Casher Name: </label>
                                <select id="casher_id" name="casher_id" class="form-control">
                                    <option value="">Select</option>
                                    <?php foreach($cashers as $casher) { ?>
                                        <option value="<?php echo $casher['id']?>" <?php if($cash['casher_id'] == $casher['id']) {echo "selected";}?>><?php echo $casher['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amount">Amount: </label>
                                <input id="amount" name="amount" type="text" class="form-control" value="<?php echo $cash["amount"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="payment_mode">Payment Mode: </label>
                                <select class="form-control" name="payment_mode">
                                    <option value="cash" <?php if($cash['payment_mode'] == "cash") {echo "selected";}?>>Cash</option>
                                    <option value="bank" <?php if($cash['payment_mode'] == "bank") {echo "selected";}?>>Bank</option>
                                    <option value="online" <?php if($cash['payment_mode'] == "online") {echo "selected";}?>>Online</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="remarks">Remarks: </label>
                                <input id="remarks" name="remarks" type="text" class="form-control" value="<?php echo $cash['remarks'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="d-none" name="id" value="<?php echo $cash["id"] ?>" />
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