<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Pumps</h1>
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
                        <th data-resizable-column-id="name">Pump Name</th>
                        <th data-resizable-column-id="phone_no">Pump Phone No.</th>
                        <th data-resizable-column-id="address">Pump Address</th>
                        <th data-resizable-column-id="gst_no">Pump PAN Card</th>
                        <th data-resizable-column-id="bank_name">Pump Bank Name</th>
                        <th data-resizable-column-id="bank_account_no">Bank Account No</th>
                        <th data-resizable-column-id="bank_ifsc">Bank IFS Code</th>
                        <th data-resizable-column-id="bank_branch_name">Branch Name</th>

                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pumps as $key => $pump) { ?>
                        <tr>
                            <td><?php echo $pump["name"] ?></td>
                            <td><?php echo $pump["phone_no"] ?></td>
                            <td><?php echo $pump["address"] ?></td>
                            <td><?php echo $pump["gst_no"] ?></td>
                            <td><?php echo $pump["bank_name"] ?></td>
                            <td><?php echo $pump["bank_account_no"] ?></td>
                            <td><?php echo $pump["bank_ifsc"] ?></td>
                            <td><?php echo $pump["bank_branch_name"] ?></td>
                            <td>
                                <a href="<?php echo base_url()?>pump/edit/<?php echo $pump["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>pump/delete/<?php echo $pump["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
