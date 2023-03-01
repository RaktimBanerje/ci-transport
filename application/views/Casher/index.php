<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Cashers</h1>
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
                        <th data-resizable-column-id="name">Casher Name</th>
                        <th data-resizable-column-id="phone_no">Casher Phone No.</th>
                        <th data-resizable-column-id="address">Casher Address</th>
                        <th data-resizable-column-id="pan">Casher PAN Card</th>
                        <th data-resizable-column-id="aadhaar">Casher AADHAAR Card</th>
                        <th data-resizable-column-id="bank_name">Casher Bank Name</th>
                        <th data-resizable-column-id="bank_account_no">Bank Account No</th>
                        <th data-resizable-column-id="bank_ifsc">Bank IFS Code</th>
                        <th data-resizable-column-id="bank_branch_name">Branch Name</th>
                        <th data-resizable-column-id="balance">Balance</th>
                        <th colspan=2 data-resizable-column-id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cashers as $key => $casher) { ?>
                        <tr>
                            <td><?php echo $casher["name"] ?></td>
                            <td><?php echo $casher["phone_no"] ?></td>
                            <td><?php echo $casher["address"] ?></td>
                            <td>
                                <?php if($casher["pan"]) { ?>
                                    <a class="btn btn-sm btn-outline-primary" target="_blank" href="<?php echo base_url() . 'storage/files/' . $casher["pan"] ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($casher["aadhaar"]) { ?>
                                    <a class="btn btn-sm btn-outline-primary" target="_blank" href="<?php echo base_url() . 'storage/files/' . $casher["aadhaar"] ?>">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                <?php } ?>
                            </td>
                            <td><?php echo $casher["bank_name"] ?></td>
                            <td><?php echo $casher["bank_account_no"] ?></td>
                            <td><?php echo $casher["bank_ifsc"] ?></td>
                            <td><?php echo $casher["bank_branch_name"] ?></td>
                            <td><?php echo number_format($casher["balance"],2) ?></td>
                            <td>
                                <a href="<?php echo base_url()?>casher/edit/<?php echo $casher["id"] ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>casher/delete/<?php echo $casher["id"] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
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
        window.history.pushState({page}, "", `${base_url}casher/${limit}/${page}`)
        window.location.reload()
    }
</script>
<!-- /.container-fluid -->
