<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Material</h1>
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
            <form action="<?php echo base_url() ?>material/update" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Material Name: </label>
                            <input id="name" name="name" type="text" class="form-control" value="<?php echo $material['name'] ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Broker: </label>
                            <select name="broker_id" type="text" class="form-control">
                                <option value="">Please Select</option>
                                <?php foreach($brokers as $broker) { ?>
                                    <option value="<?php echo $broker['id'] ?>" <?php if($broker['id'] == $material['broker_id']) {echo "selected";} ?>><?php echo $broker['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Rate for Broker: </label>
                            <input id="broker_rate" name="broker_rate" type="number" class="form-control" value="<?php echo $material['broker_rate'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Client: </label>
                            <select name="client_id" type="text" class="form-control">
                                <option value="">Please Select</option>
                                <?php foreach($clients as $client) { ?>
                                    <option value="<?php echo $client['id'] ?>" <?php if($client['id'] == $material['client_id']) {echo "selected";} ?>><?php echo $client['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Rate for Client: </label>
                            <input id="client_rate" name="client_rate" type="number" class="form-control" value="<?php echo $material['client_rate'] ?>"  />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="d-none" name="id" value="<?php echo $material['id'] ?>" />
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->