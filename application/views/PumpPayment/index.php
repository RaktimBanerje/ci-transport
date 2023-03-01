<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Pump Payment Record</h1>
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
            <table data-toggle="table" class="table table-sm" id="dataTable" width="100%" cellspacing="0"  data-resizable-columns-id="demo-table">
                <thead>
                    <tr class="text-nowrap">
                        <th data-resizable-column-id="pump_name">Pump Name</th>
                        <th data-resizable-column-id="amount">Payment Amount</th>
                        <th data-resizable-column-id="payment_mode">Payment Mode</th>
                        <th data-resizable-column-id="remarks">Remarks</th>

                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pump_payments as $key => $payment) { ?>
                        <tr class="text-nowrap">
                            <td><?php echo $payment["pump_name"] ?></td>
                            <td><?php echo $payment["amount"] ?></td>
                            <td><?php echo strtoupper($payment["payment_mode"]) ?></td>
                            <td><?php echo $payment["remarks"] ?></td>
                            <td>
                                <a href="<?php echo base_url()?>pump-payment/edit/<?php echo $payment["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>pump-payment/delete/<?php echo $payment["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
            <?php $this->load->view("inc/pagination") ?>
        </div>
    </div>
</div>


<script>
    const base_url = "<?php echo base_url() ?>"

    async function loadData(limit, page) {
        event.preventDefault()
        window.history.pushState({page}, "", `${base_url}pump/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
