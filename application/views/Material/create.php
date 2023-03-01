<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Create Material</h1>
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
            <form action="<?php echo base_url() ?>material/store" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Material Name: </label>
                            <input id="name" name="name" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Broker: </label>
                            <select name="broker_id" type="text" class="form-control">
                                <option value="">Select</option>
                                <?php foreach($brokers as $broker) { ?>
                                    <option value="<?php echo $broker['id'] ?>"><?php echo $broker['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Rate for Broker: </label>
                            <input id="broker_rate" name="broker_rate" type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="address">From Date: </label>
                            <input id="broker_from_date" name="broker_from_date" type="date" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="address">To Date: </label>
                            <input id="broker_to_date" name="broker_to_date" type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Client: </label>
                            <select name="client_id" type="text" class="form-control">
                                <option value="">Select</option>
                                <?php foreach($clients as $client) { ?>
                                    <option value="<?php echo $client['id'] ?>"><?php echo $client['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Rate for Client: </label>
                            <input id="client_rate" name="client_rate" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="address">From Date: </label>
                            <input id="client_from_date" name="client_from_date" type="date" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="address">To Date: </label>
                            <input id="client_to_date" name="client_to_date" type="date" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
