<!-- Sidebar -->
<div class="my-sidebar-container">
    <ul class="navbar-nav sidebar sidebar-dark accordion my-sidebar" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-2">APS Transport<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Vehicle</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>vehicle/create">Create Vehicle</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>vehicle">Vehicle List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Broker</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>broker/create">Create Broker</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>broker">Broker List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-cog"></i>
                <span>Client</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>client/create">Create Client</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>client">Client List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                <i class="fas fa-fw fa-cog"></i>
                <span>Materials</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>material/create">Create Material</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>material">Material List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-fw fa-cog"></i>
                <span>Places</span>
            </a>
            <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>place/create">Create Place</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>place">Place List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-fw fa-cog"></i>
                <span>Loading/ Unloading</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url() ?>loading/create">Per Day Loading</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>loading">View Loading</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>unloading/create">Unloading</a>
                    <a class="collapse-item" href="<?php echo base_url() ?>unloading">View Unloading</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
</div>
<!-- End of Sidebar -->