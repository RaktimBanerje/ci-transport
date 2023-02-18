<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Order</h1>
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
            <form action="<?php echo base_url() ?>order/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="order_name">Order Name: </label>
                                <input id="name" name="name" type="text" class="form-control" value="<?php echo $order["name"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client">Client: </label>
                                <select class="form-control" name="client_id">
                                    <option value="">Please Select</option>
                                    <?php foreach($clients as $client) { ?>
                                        <option value="<?php echo $client['id']?>" <?php if($client["id"] == $order["client_id"]) { echo "selected"; } ?>><?php echo $client['name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="purchase_order_no">Purchase Order No: </label>
                                <input id="purchase_order_no" name="purchase_order_no" type="text" class="form-control" value="<?php echo $order["purchase_order_no"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="purchase_order_date">Purchase Order Date: </label>
                                <input id="purchase_order_date" name="purchase_order_date" type="date" class="form-control" value="<?php echo $order["purchase_order_date"] ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="d-none" name="id" value="<?php echo $order["id"] ?>" />
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