<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Pump</h1>
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
            <form action="<?php echo base_url() ?>pump-payment/update" method="POST" enctype="multipart/form-data">
            <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Select Pump </label>
                                    <select class="form-control" name="pump_id">
                                        <option value="">Select</option>
                                        <?php foreach($pumps as $pump) { ?>
                                            <option value="<?php echo $pump['id']?>" <?php if($payment['pump_id'] == $pump['id']) {echo "selected";}?>><?php echo $pump['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Payment Amount: </label>
                                    <input id="amount" name="amount" type="text" class="form-control" value="<?php echo $payment['amount']?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_mode">Payment Mode: </label>
                                    <select class="form-control" name="payment_mode">
                                        <option value="cash" <?php if($payment['payment_mode'] == "cash") {echo "selected"; } ?>>Cash</option>
                                        <option value="bank" <?php if($payment['payment_mode'] == "bank") {echo "selected"; } ?>>Bank</option>
                                        <option value="online" <?php if($payment['payment_mode'] == "online") {echo "selected"; } ?>>Online</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="remarks">Remarks: </label>
                                    <input id="remarks" name="remarks" type="text" class="form-control" value="<?php echo $payment['remarks'] ?>" />
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="d-none" name="id" value="<?php echo $payment["id"] ?>" />
                                    <input type="submit" value="Save" class="btn btn-primary" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->