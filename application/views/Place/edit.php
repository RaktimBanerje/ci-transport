<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Place</h1>
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
            <form action="<?php echo base_url() ?>place/update" method="POST" enctype="multipart/form-data">
                <div class="row" style="align-items: end;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Place Name: </label>
                                <input id="name" name="name" type="text" class="form-control" value="<?php echo $place['name'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Client: </label>
                                <select name="client_id" type="text" class="form-control">
                                    <option value="">Please Select</option>
                                    <?php foreach($clients as $client) { ?>
                                        <option value="<?php echo $client['id'] ?>" <?php if($client['id'] == $place['client_id']) {echo "selected";} ?>><?php echo $client['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Extra Rate Per Truck </label>
                                <input id="extra_rate_per_truck" name="extra_rate_per_truck" type="number" class="form-control" value="<?php echo $place['extra_rate_per_truck'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="d-none" name="id" value="<?php echo $place['id'] ?>" />
                                <input type="submit" value="Save" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->