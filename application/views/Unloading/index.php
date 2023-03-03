<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Unloading Records</h1>
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

    <div class="card-flush">
        <div class="card-body">
            <div class="table-responsive">
                <table data-toggle="table" class="table table-sm" id="dataTable" cellspacing="0"  data-resizable-columns-id="demo-table">
                    <thead>
                        <tr class="text-nowrap">
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
                            <th data-resizable-column-id="broker_advance">Broker Advance</th>
                            <th data-resizable-column-id="driver_commission">Driver Commission</th>

                            <th colspan=2 data-resizable-column-id="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($loadings as $key => $loading) { ?>
                            <tr class="text-nowrap">
                                <td><?php echo $loading["broker"] ?></td>
                                <td><?php echo $loading["loading_date"] ?></td>
                                <td><?php echo $loading["vehicle"] ?></td>
                                <td><?php echo $loading["fright_slip_no"] ?></td>
                                <td><?php echo $loading["challan_no"] ?></td>
                                <td><?php echo $loading["loading_qun"] ?></td>
                                <td><?php echo $loading["material"] ?></td>
                                <td><?php echo $loading["price"] ?></td>
                                <td><?php echo $loading["loading_point"] ?></td>
                                <td><?php echo $loading["cash_advance"] ?></td>
                                <td><?php echo $loading["bank_advance"] ?></td>
                                <td><?php echo $loading["pump_id"] ?></td>
                                <td><?php echo $loading["diesal_advance_amount"] ?></td>
                                <td><?php echo $loading["broker_advance"] ?></td>
                                <td><?php echo $loading["driver_commission"] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url()?>loading/edit/<?php echo $loading["id"] ?>" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url()?>loading/delete/<?php echo $loading["id"] ?>" class="btn btn-sm btn-outline-danger mx-1"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
                <?php $this->load->view("inc/pagination") ?>
            </div>
        </div>
    </div>
</div>


<script>
    const base_url = "<?php echo base_url() ?>"

    async function loadData(limit, page) {
        event.preventDefault()
        window.history.pushState({page}, "", `${base_url}loading/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
