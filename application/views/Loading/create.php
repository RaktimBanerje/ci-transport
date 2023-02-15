<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Per Day Loading </h1>
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
            <form action="<?php echo base_url() ?>loading/store" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Broker: </label>
                            <select class="form-control" name="broker_id">
                                <option value="">Please Select</option>    
                                <?php foreach($brokers as $broker) { ?>
                                    <option value="<?php echo $broker['id'] ?>"><?php echo $broker['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loading_date">Loading Date: </label>
                            <input type="date" class="form-control" name="loading_date" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Vehicle: </label>
                            <select class="form-control" name="vehicle_id">
                                <option value="">Please Select</option>
                                <?php foreach($vehicles as $vehicle) { ?>
                                    <option value="<?php echo $vehicle['id'] ?>"><?php echo $vehicle['registration_no'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Frieght Slip No: </label>
                            <input name="fright_slip_no" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Challan No: </label>
                            <input name="challan_no" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Loading Quantity: </label>
                            <input name="loading_qun" type="number" class="form-control" />
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Material: </label>
                            <select class="form-control" name="material_id">
                                <option value="">Please Select</option>
                                <?php foreach($materils as $material) { ?>
                                    <option value="<?php echo $material['id'] ?>"><?php echo $material['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Price:</label>
                            <input name="price" type="number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Loading Point:</label>
                            <input name="loading_point" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Cash Advance:</label>
                            <input name="cash_advance" type="number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Bank Advance</label>
                            <input name="bank_advance" type="number" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Pump:</label>
                            <input name="pump_id" type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Diesal Advance Amount</label>
                            <input name="diesal_advance_amount" type="v" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Broker Advance:</label>
                            <input name="broker_advance" type="number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Driver Commission:</label>
                            <input name="driver_commission" type="number" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
