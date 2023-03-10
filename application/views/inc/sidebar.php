<!-- Sidebar -->
<div class="my-sidebar-container">
    <ul class="navbar-nav sidebar sidebar-dark accordion my-sidebar" id="accordionSidebar" style="width: 250px !important; background-color: #009688 !important;">

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
                <span>Create Sections</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <ul class="navbar-nav sidebar accordion my-sidebar" id="accordionSidebar1" style="background-color: transparent !important; min-height: 0px; ">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneOne" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Vehicle</span>
                        </a>

                        <div id="collapseOneOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>vehicle/create">Create Vehicle</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>vehicle">Vehicle List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Broker</span>
                        </a>

                        <div id="collapseOneTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>broker/create">Create Broker</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>broker">Broker List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneThree" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Client</span>
                        </a>

                        <div id="collapseOneThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>client/create">Create Client</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>client">Client List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneFour" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Material</span>
                        </a>

                        <div id="collapseOneFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>material/create">Create Material</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>material">Material List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneFive" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Order</span>
                        </a>

                        <div id="collapseOneFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>order/create">Create Order</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>order">Order List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneSix" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Loading Point</span>
                        </a>

                        <div id="collapseOneSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>loading-point/create">Create Loading Point</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>loading-point">Loading Point List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOneSeven" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Unloading Point</span>
                        </a>

                        <div id="collapseOneSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>unloading-point/create">Create Unloading Point</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>unloading-point">Unloading Point List</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Cash & Day Book</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <ul class="navbar-nav sidebar accordion my-sidebar" id="accordionSidebar1" style="background-color: transparent !important; min-height: 0px; ">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Casher</span>
                        </a>

                        <div id="collapseTwoOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>casher/create">Create Casher</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>casher">Casher List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Cash In</span>
                        </a>

                        <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>cash/create">Cash Entry</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>cash">Cash Entry Record</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Loading & Unloading</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <ul class="navbar-nav sidebar accordion my-sidebar" id="accordionSidebar1" style="background-color: transparent !important; min-height: 0px; ">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThreeOne" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Loading</span>
                        </a>

                        <div id="collapseThreeOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>loading/create">Loading Entry</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>loading">Loading Records</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThreeTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Unloading</span>
                        </a>

                        <div id="collapseThreeTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar1">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>unloading/create">Unloading Entry</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>unloading">Unloading Records</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Fuel Department</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <ul class="navbar-nav sidebar accordion my-sidebar" id="accordionSidebar2" style="background-color: transparent !important; min-height: 0px; ">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFourOne" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Pump</span>
                        </a>

                        <div id="collapseFourOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar2">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>pump/create">Create Pump</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>pump">Pump List</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFourTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Payment</span>
                        </a>

                        <div id="collapseFourTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar2">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="<?php echo base_url() ?>pump-payment/create">Payment Entry</a>
                                <a class="collapse-item" href="<?php echo base_url() ?>pump-payment">Payment Record</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>




        <!-- Divider
        <hr class="sidebar-divider d-none d-md-block">

        Sidebar Toggler (Sidebar) -->
        <!-- <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div> -->

    </ul>
</div>
<!-- End of Sidebar -->