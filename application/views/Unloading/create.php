<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Unloading Entry</h1>
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

    <div class="card card-flush mb-4">
        <div class="card-body">
            <form action="<?php echo base_url() ?>unloading/get-loading-details" method="GET" enctype="multipart/form-data">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="vehicle">Select Vehicle</label>
                            <select class="form-control" name="vehicle_id">
                                <option value="">Select</option>
                                <?php foreach($vehicles as $vehicle) { ?>
                                    <option value="<?php echo $vehicle['id']?>"><?php echo $vehicle['registration_no']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success mt-2" type="submit">Search <i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if(isset($records) && (count($records) > 0)) { ?>
        <div class="card card-flush mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-nowrap">
                                <th>Sl NO.</th>
                                <th></th>
                                <th data-resizable-column-id="broker">Broker</th>
                                <th data-resizable-column-id="loading_date">Loading Date</th>
                                <th data-resizable-column-id="vehicle">Vehicle No.</th>
                                <th data-resizable-column-id="fright_slip_no">Fright Slip No.</th>
                                <th data-resizable-column-id="challan_no">Challan No.</th>
                                <th data-resizable-column-id="loading_qun">Loading Quantity</th>
                                <th data-resizable-column-id="material">Material</th>
                                <th data-resizable-column-id="price">Price</th>
                                <th data-resizable-column-id="loading_point">Loading Point</th>
                                <th data-resizable-column-id="cash_advance">Cash Advance</th>
                                <th data-resizable-column-id="bank_advance">Bank Advance</th>
                                <th data-resizable-column-id="pump_id">Pump</th>
                                <th data-resizable-column-id="diesal_advance_amount">Diesal Advance Amount</th>
                                <th data-resizable-column-id="driver_commission">Driver Commission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sl_no = 0; foreach($records as $record) { $sl_no++; ?>
                                <tr class="text-nowrap">
                                    <td><strong><?php echo $sl_no; ?></strong></td>
                                    <td><button class="btn btn-sm btn-dark" onclick="unload('<?php echo $record['challan_no'] ?>', '<?php echo $record['id'] ?>')">Unload</button></td>
                                    <td><?php echo $record["broker"] ?></td>
                                    <td><?php echo $record["loading_date"] ?></td>
                                    <td><?php echo $record["vehicle"] ?></td>
                                    <td><?php echo $record["fright_slip_no"] ?></td>
                                    <td><?php echo $record["challan_no"] ?></td>
                                    <td><?php echo $record["loading_qun"] ?></td>
                                    <td><?php echo $record["material"] ?></td>
                                    <td><?php echo $record["price"] ?></td>
                                    <td><?php echo $record["loading_point"] ?></td>
                                    <td><?php echo $record["cash_advance"] ?></td>
                                    <td><?php echo $record["pump"] ?></td>
                                    <td><?php echo $record["diesal_advance_amount"] ?></td>
                                    <td><?php echo $record["broker_advance"] ?></td>
                                    <td><?php echo $record["driver_commission"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="unloading_form" class="card card-flush mb-5" style="display: none;">
            <form action="<?php echo base_url()?>unloading/store" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Challan No</label>
                                <input type="text" class="form-control" name="challan_no" readonly disabled />
                                <input type="text" class="form-control d-none" name="loading_id" readonly />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="form-label">Challan Upload</label>
                                <input type="file" class="form-control" name="challan_record" />
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Unloading Date</label>
                                <input type="date" class="form-control" name="unloading_date" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Unloading Point</label>
                                <select class="form-control" name="unloading_point_id">
                                    <option value="">Select</option>
                                    <?php foreach($unloading_points as $up) { ?>
                                        <option value="<?php echo $up['id']?>"><?php echo $up['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Unloading Quantity</label>
                                <input type="text" class="form-control" name="unloading_quantity" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Shortage Quantity</label>
                                <input type="text" class="form-control" name="shortage_quantity" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Shortage Value</label>
                                <input type="text" class="form-control" name="shortage_value" />
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </div>                    
                </div>
            </form>
        </div>
    <?php } ?>
    <script>
        function unload(challan_no, loading_id) {
            console.log({challan_no, loading_id})
            $("#unloading_form").show()
            $("input[name='challan_no']").val(challan_no)
            $("input[name='loading_id']").val(loading_id)
        }
    </script>
</div>
<!-- /.container-fluid -->
