<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Vehicles</h1>
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
                        <th data-resizable-column-id="registration_no">Registration No.</th>
                        <th data-resizable-column-id="registration_copy">Registration Copy</th>
                        <th data-resizable-column-id="owner_name">Owner Name</th>
                        <th data-resizable-column-id="owner_phone">Owner Phone</th>
                        <th data-resizable-column-id="owner_pan">Owner Pan Card</th>
                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vehicles as $key => $vehicle) { ?>
                        <tr>
                            <td><?php echo $vehicle["registration_no"] ?></td>
                            <td>
                                <?php if($vehicle["registration_copy"]) { ?>
                                    <a class="btn btn-sm btn-outline-primary" target="_blank" href="<?php echo base_url() . 'storage/registrations/' . $vehicle["registration_copy"] ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                <?php } ?>
                            </td>
                            <td><?php echo $vehicle["owner_name"] ?></td>
                            <td><?php echo $vehicle["owner_phone"] ?></td>
                            <td>
                                <?php if($vehicle["owner_pan"]) { ?>
                                    <a class="btn btn-sm btn-outline-primary" target="_blank" href="<?php echo base_url() . 'storage/pans/' . $vehicle["owner_pan"] ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url()?>vehicle/edit/<?php echo $vehicle["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>vehicle/delete/<?php echo $vehicle["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
        window.history.pushState({page}, "", `${base_url}vehicle/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
