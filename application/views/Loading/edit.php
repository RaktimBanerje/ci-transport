<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Loading Details</h1>
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
            <form action="<?php echo base_url() ?>loading/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Broker: </label>
                            <select class="form-control" name="broker_id">
                                <option value="">Select</option>    
                                <?php foreach($brokers as $broker) { ?>
                                    <option value="<?php echo $broker['id'] ?>" <?php if($loading['broker_id'] == $broker['id']) {echo "selected";}?>><?php echo $broker['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loading_date">Loading Date: </label>
                            <input type="date" class="form-control" name="loading_date" value="<?php echo $loading['loading_date'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Vehicle: </label>
                            <select class="form-control" name="vehicle_id">
                                <option value="">Select</option>
                                <?php foreach($vehicles as $vehicle) { ?>
                                    <option value="<?php echo $vehicle['id'] ?>" <?php if($loading['vehicle_id'] == $vehicle['id']) {echo "selected";}?>><?php echo $vehicle['registration_no'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Frieght Slip No: </label>
                            <input name="fright_slip_no" type="text" class="form-control" value="<?php echo $loading['fright_slip_no'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Challan No: </label>
                            <input name="challan_no" type="text" class="form-control" value="<?php echo $loading['challan_no'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Loading Quantity: </label>
                            <input name="loading_qun" type="text" class="form-control" value="<?php echo $loading['loading_qun'] ?>" />
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Material: </label>
                            <select class="form-control" name="material_id">
                                <option value="">Select</option>
                                <?php foreach($materils as $material) { ?>
                                    <option value="<?php echo $material['id'] ?>" <?php if($loading['material_id'] == $material['id']) {echo "selected";}?>><?php echo $material['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Price:</label>
                            <input name="price" type="text" class="form-control" value="<?php echo $loading['price'] ?>" readonly require />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loading_point">Loading Point:</label>
                            <select class="form-control" name="loading_point_id">
                                <option value="">Select</option>
                                <?php foreach($loading_points as $lp) { ?>
                                    <option value="<?php echo $lp['id']?>" <?php if($loading['loading_point_id'] == $lp['id']) {echo "selected";}?>><?php echo $lp['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Cash Advance:</label>
                            <input name="cash_advance" type="text" class="form-control" value="<?php echo $loading['cash_advance'] ?>"  />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Pump:</label>
                            <select class="form-control" name="pump_id">
                                <option value="">Select</option>
                                <?php foreach($pumps as $pump) { ?>
                                    <option value="<?php echo $pump['id']?>" <?php if($loading['pump_id'] == $pump['id']) {echo "selected";}?>><?php echo $pump['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Diesal Advance Amount</label>
                            <input name="diesal_advance_amount" type="v" class="form-control" value="<?php echo $loading['diesal_advance_amount'] ?>"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Broker Advance:</label>
                            <input name="broker_advance" type="text" class="form-control" value="<?php echo $loading['broker_advance'] ?>"  />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Driver Commission:</label>
                            <input name="driver_commission" type="text" class="form-control" value="<?php echo $loading['driver_commission'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="id" value="<?php echo $loading['id'] ?>" class="btn btn-primary d-none" />
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("select[name='broker_id']").change(function(){get_broker_rate()});
    $("input[name='loading_date']").change(function(){get_broker_rate()});

    function get_broker_rate() {
        const broker_id = $("select[name='broker_id']").val()
        const loading_date = $("input[name='loading_date']").val()

        if(broker_id && loading_date) {
            fetch(`<?php echo base_url() ?>loading/get-broker-rate?broker_id=${broker_id}&loading_date=${loading_date}`)
            .then(response => response.json())
            .then(data => $("input[name='price']").val(data.broker_rate))
        }
    }
</script>
<!-- /.container-fluid -->
