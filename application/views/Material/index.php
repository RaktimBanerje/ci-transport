<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Materials</h1>
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
                        <th data-resizable-column-id="name">Material Name</th>
                        <th data-resizable-column-id="broker_name">Broker Name</th>
                        <th data-resizable-column-id="broker_rate">Broker Rate</th>
                        <th data-resizable-column-id="broker_from_date">From Date</th>
                        <th data-resizable-column-id="broker_to_date">To Date</th>
                        <th data-resizable-column-id="client_name">Client Name</th>
                        <th data-resizable-column-id="client_rate">Client Rate</th>
                        <th data-resizable-column-id="client_from_date">From Date</th>
                        <th data-resizable-column-id="client_to_date">To Date</th>
                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materials as $key => $material) { ?>
                        <tr>
                            <td><?php echo $material["name"] ?></td>
                            <td><?php echo $material["broker_name"] ?></td>
                            <td><?php echo $material["broker_rate"] ?></td>
                            <td><?php echo $material["broker_from_date"] ?></td>
                            <td><?php echo $material["broker_to_date"] ?></td>
                            <td><?php echo $material["client_name"] ?></td>
                            <td><?php echo $material["client_rate"] ?></td>
                            <td><?php echo $material["client_from_date"] ?></td>
                            <td><?php echo $material["client_to_date"] ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?php echo base_url()?>material/edit/<?php echo $material["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url()?>material/delete/<?php echo $material["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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


<script>
    const base_url = "<?php echo base_url() ?>"

    async function loadData(limit, page) {
        event.preventDefault()
        window.history.pushState({page}, "", `${base_url}broker/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
