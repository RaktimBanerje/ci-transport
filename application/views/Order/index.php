<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Orders</h1>
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
                    <tr>
                        <th data-resizable-column-id="name">Order Name</th>
                        <th data-resizable-column-id="client">Client</th>
                        <th data-resizable-column-id="purchase_order_no">Purchase Order No</th>
                        <th data-resizable-column-id="purchase_order_date">Purchase Order Date</th>

                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $key => $order) { ?>
                        <tr>
                            <td><?php echo $order["name"] ?></td>
                            <td><?php echo $order["client"] ?></td>
                            <td><?php echo $order["purchase_order_no"] ?></td>
                            <td><?php echo $order["purchase_order_date"] ?></td>
                            <td>
                                <a href="<?php echo base_url()?>order/edit/<?php echo $order["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>order/delete/<?php echo $order["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
        window.history.pushState({page}, "", `${base_url}order/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
