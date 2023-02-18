<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Unloading Point</h1>
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
            <form action="<?php echo base_url() ?>unloading-point/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Unloading Point Name: </label>
                                <input id="name" name="name" type="text" class="form-control" value="<?php echo $unloading_point["name"] ?>" />
                            </div>
                        </div>

                        <div class="col-md-2" style="margin-top: 30px;">
                                <input type="text" class="d-none" name="id" value="<?php echo $unloading_point["id"] ?>" />
                                <input type="submit" value="Save" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->