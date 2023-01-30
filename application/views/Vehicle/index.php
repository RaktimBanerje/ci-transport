<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Buyers</h1>
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

    <table data-toggle="table" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th>GST No</th>
                <th>Bank A/c No</th>
                <th>Branch</th>
                <th>IFSC Code</th>
                <th colspan=2>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buyers as $key => $buyer) { ?>
                <tr>
                    <td><?php echo $buyer["name"] ?></td>
                    <td><?php echo $buyer["address"] ?></td>
                    <td><?php echo $buyer["mobile_no"] ?></td>
                    <td><?php echo $buyer["gst_no"] ?></td>
                    <td><?php echo $buyer["bank_ac_no"] ?></td>
                    <td><?php echo $buyer["bank_branch"] ?></td>
                    <td><?php echo $buyer["bank_ifsc"] ?></td>
                    
                    <td>
                        <a href="<?php echo base_url()?>buyer/edit/<?php echo $buyer["id"] ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url()?>buyer/delete/<?php echo $buyer["id"] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php }  ?>
        </tbody>
    </table>
    <?php $this->load->view("inc/pagination") ?>
</div>


<script>
    const base_url = "<?php echo base_url() ?>"

    async function loadData(limit, page) {
        event.preventDefault()

        $("#loader").show()

        const response = await fetch(`${base_url}buyer/paginate/${limit}/${page}`)
        const data = await response.json()

        let records = ''
        data.buyers.forEach(buyer => {
            records += `
                <tr>
                    <td>${buyer["name"]}</td>
                    <td>${buyer["address"]}</td>
                    <td>${buyer["mobile_no"]}</td>
                    <td>${buyer["gst_no"]}</td>
                    <td>${buyer["bank_ac_no"]}</td>
                    <td>${buyer["bank_branch"]}</td>
                    <td>${buyer["bank_ifsc"]}</td>
                    
                    <td>
                        <a href=${base_url}buyer/edit/${buyer["id"]} class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href=${base_url}buyer/delete/${buyer["id"]} class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            `;
        })

        window.history.pushState({page}, "", `${base_url}buyer/${limit}/${page}`)

        $("#pagination_link ul").remove()
        $("#pagination_link").append(data.pagination_link)
        
        $("tbody tr").remove()
        $("tbody").html(records)
        $("#loader").hide()
    }
</script>
<!-- /.container-fluid -->
