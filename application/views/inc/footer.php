</div>
<!-- End of Main Content -->

<!-- Footer -->
<!--
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span></span>
        </div>
    </div>
</footer>
-->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url()?>logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->


<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/table2csv.js"></script>

<script>
	$(document).ready(function () {
    	$('table').wrap('<div class="table-responsive"></div>')
    })

    $(document).on("click", ".pagination li a", function(event) {
        const limit = $("#limit").val()
        const page = event.target.getAttribute("data-ci-pagination-page")
        loadData(limit, page)
    })

    $(document).on("click", "#limit", function(event) {
        const limit = $("#limit").val()
        let currentPage = window.location.pathname.split("/").pop()
        if(Number(currentPage))
        {
            currentPage = Number(currentPage)
        }
        else {
            currentPage = 1
        }
        loadData(limit, currentPage)
    })
</script>

</body>

</html>