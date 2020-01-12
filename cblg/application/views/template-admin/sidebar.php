
<!-- Start Sidebar -->


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-fw fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?=base_url('admin/')?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Article</span>
                </a>
                <a href="<?=base_url('admin/report')?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="<?=base_url('admin/setDashboard')?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="<?=base_url()?>/admin/setting" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-fw fa-gear fa-sm fa-fw mr-2 text-gray-400"></span>
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="<?=base_url()?>/admin/changeKey" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-fw fa-key fa-sm fa-fw mr-2 text-gray-400"></span>
                    <span class="menu-collapsed">Password</span>
                </a>
                <a href="<?=base_url()?>/auth/logout" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></span>
                    
                    <span class="menu-collapsed">Logout</span>
                </a>
            </div>            
           
        </ul>
    </div> 
    <!-- End Sidebar -->