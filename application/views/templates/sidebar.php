<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#082032">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/'); ?>/img/logo/logosimobus2.png" width="35%">
        </div>
        <!-- <div class="sidebar-brand-text mx-3" style="color:#FF4C29">SIMOBUS</div> -->
    </a>

    <?php if ($user['role_id'] == 1) : ?>
        <div class="sidebar-heading mt-3" style="color:#FF4C29">
            Dashboard
        </div>
        <li class="nav-item" style="color:#FF4C29">
            <a class="nav-link" href="<?= base_url('Admin'); ?>">
                <i class="fas fa-fw fa-tachometer-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Dashboard</span></a>
        </li>
        <!-- <li class="nav-item" style="color:#FF4C29">
            <a class="nav-link " href="<?= base_url('Status'); ?>">
                <i class="fas fa-fw fa-stream" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Status Bus</span></a>
        </li> -->
        <div class="sidebar-heading" style="color:#FF4C29">
            Informasi Bus
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseBus1" aria-expanded="true" aria-controls="collapseBus1">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 1111 ABC</span>
            </a>
            <div id="collapseBus1" class="collapse" aria-labelledby="headingBus1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseBus2" aria-expanded="true" aria-controls="collapseBus2">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 2222 ABC</span>
            </a>
            <div id="collapseBus2" class="collapse" aria-labelledby="headingBus2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang2'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps2'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan2'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap2'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseBus3" aria-expanded="true" aria-controls="collapseBus3">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 3333 ABC</span>
            </a>
            <div id="collapseBus3" class="collapse" aria-labelledby="headingBus3" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang3'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps3'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan3'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap3'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseBus4" aria-expanded="true" aria-controls="collapseBus4">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 4444 ABC</span>
            </a>
            <div id="collapseBus4" class="collapse" aria-labelledby="headingBus4" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang4'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps4'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan4'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap4'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseBus5" aria-expanded="true" aria-controls="collapseBus5">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 5555 ABC</span>
            </a>
            <div id="collapseBus5" class="collapse" aria-labelledby="headingBus5" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang5'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps5'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan5'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap5'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBus6" aria-expanded="true" aria-controls="collapseBus6">
                <i class="fas fa-fw fa-bus-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">B 6666 ABC</span>
            </a>
            <div id="collapseBus6" class="collapse" aria-labelledby="headingBus6" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Project/penumpang6'); ?>">Penumpang</a>
                    <a class="collapse-item" href="<?= base_url('Project/gps6'); ?>">Lokasi & Kecepatan Bus</a>
                    <a class="collapse-item" href="<?= base_url('Project/kecepatan6'); ?>">Database Kecepatan</a>
                    <a class="collapse-item" href="<?= base_url('Project/asap6'); ?>">Status Udara</a>
                </div>
            </div>
        </li>
        <div class="sidebar-heading" style="color:#FF4C29">
            Profile
        </div>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('User'); ?>">
                <i class="fas fa-fw fa-user" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">My Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('User/edit'); ?>">
                <i class="fas fa-fw fa-user-edit" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Edit Profile</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/changepassword'); ?>">
                <i class="fas fa-fw fa-key" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Change Password</span></a>
        </li> -->
    <?php elseif ($user['role_id'] == 2) : ?>
        <div class="sidebar-heading" style="color:#FF4C29">
            Profile
        </div>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('User'); ?>">
                <i class="fas fa-fw fa-user" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">My Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/edit'); ?>">
                <i class="fas fa-fw fa-user-edit" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Edit Profile</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/changepassword'); ?>">
                <i class="fas fa-fw fa-key" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Change Password</span></a>
        </li> -->
        <div class="sidebar-heading" style="color:#FF4C29">
            Informasi Bus
        </div>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('Project/penumpang'); ?>">
                <i class="fas fa-fw fa-user-friends" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Penumpang</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('Project/gps'); ?>">
                <i class="fas fa-map-marked-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Lokasi & Kecepatan Bus</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('Project/kecepatan'); ?>">
                <i class="fas fa-map-marked-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Database Kecepatan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Project/asap'); ?>">
                <i class="fas fa-fw fa-fire-alt" style="color:#FF4C29"></i>
                <span style="color:#FF4C29">Status Udara</span></a>
        </li>
    <?php endif; ?>
    <!-- <hr class="sidebar-divider" style="color:#FF4C29"> -->

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBus2" aria-expanded="true" aria-controls="collapseBus2">
            <i class="fas fa-fw fa-bus" style="color:#FF4C29"></i>
            <span style="color:#FF4C29">Bus 2</span>
        </a>
        <div id="collapseBus2" class="collapse" aria-labelledby="headingBus2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('Project/penumpang2'); ?>">Penumpang</a>
                <a class="collapse-item" href="<?= base_url('Project/gps2'); ?>">Lokasi & Kecepatan Bus</a>
                <a class="collapse-item" href="<?= base_url('Project/kecepatan2'); ?>">Database Kecepatan</a>
                <a class="collapse-item" href="<?= base_url('Project/asap2'); ?>">Status Udara</a>
            </div>
        </div>
    </li> -->
    <!-- <div class="sidebar-heading" style="color:#FF4C29">
        About
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Dashboard/about'); ?>">
            <i class="fas fa-fw fa-info" style="color:#FF4C29"></i>
            <span style="color:#FF4C29">About Us & Disclaimer</span></a>
    </li> -->
    <hr class="sidebar-divider pb-0" style="color:#FF4C29">
    <li class="nav-item">
        <a class="nav-link pt-0" href="<?= base_url('Auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt" style="color:#FF4C29"></i>
            <span style="color:#FF4C29">Logout</span></a>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color:#FF4C29"></button>
    </div>
</ul>