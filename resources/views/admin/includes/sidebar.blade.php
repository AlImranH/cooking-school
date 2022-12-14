<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Utilities Collapse Menu -->
    


    
    <!-- Nav Item - Images -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('image.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Images</span></a>
    </li>
    <!-- Nav Item - Sliders -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('slider.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sliders</span></a>
    </li>
    
    <!-- Nav Item - Services -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('service.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Services</span></a>
    </li>

    <!-- Nav Item - Video -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('video.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Videos</span></a>
    </li>

    <!-- Nav Item - Team -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('team.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Teams</span></a>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Contact</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('message.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Messages</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>