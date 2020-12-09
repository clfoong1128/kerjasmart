<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#0000e6">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">KerjaSmart</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

   
   
    <li class="nav-item">
        <a class="nav-link" href="/company">
            <i class="fas fa-building "></i>
            <span>Company</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/user">
            <i class="fas fa-user "></i>
            <span>User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/customer">
            <i class="fas fa-users "></i>
            <span>Customer</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/services">
            <i class="fas fa-hands-helping "></i>
            <span>Service</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="csollapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Job</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('job')}}">Job List</a>
                <a class="collapse-item" href="{{url('approval')}}">Job Approval</a>

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
<!-- End of Sidebar -->