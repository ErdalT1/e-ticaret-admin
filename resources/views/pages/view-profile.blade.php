@extends('layout.layout')
@section('content')

<!-- main sidebar start -->
<div class="main-sidebar flush-menu">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item open">
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-index.html" class="sidebar-link active"><span class="nav-icon"><i class="fa-light fa-grid-2"></i></span> <span class="sidebar-txt">Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Apps</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('all-customer')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-group"></i></span> <span class="sidebar-txt">All Customer</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('add-product')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">Add Product</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('all-product')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-boxes"></i></span> <span class="sidebar-txt">All Product</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('category')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-tag"></i></span> <span class="sidebar-txt">Category</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('order')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span> <span class="sidebar-txt">Order</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('calendar')}}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Calendar</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-invoices.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Invoices</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-contact.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Contacts</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Pages</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a role="button" class="sidebar-link has-sub" data-dropdown="authDropdown"><span class="nav-icon"><i class="fa-light fa-user-cog"></i></span> <span class="sidebar-txt">Authentication</span></a>
                        <ul class="sidebar-dropdown-menu" id="authDropdown">
                            <li class="sidebar-dropdown-item"><a href="{{route('login')}}" class="sidebar-link">Login</a></li>
                            <li class="sidebar-dropdown-item"><a href="{{route('register')}}" class="sidebar-link">Registration</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-reset-password.html" class="sidebar-link">Reset Password</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-update-password.html" class="sidebar-link">Update Password</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-login-status.html" class="sidebar-link">Login Status</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a role="button" class="sidebar-link has-sub" data-dropdown="userDropdown"><span class="nav-icon"><i class="fa-light fa-user"></i></span> <span class="sidebar-txt">User</span></a>
                        <ul class="sidebar-dropdown-menu" id="userDropdown">
                            <li class="sidebar-dropdown-item"><a href="dashboard-view-profile.html" class="sidebar-link">View Profile</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-edit-profile.html" class="sidebar-link">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-utility.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">Utility</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Components</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a role="button" class="sidebar-link has-sub" data-dropdown="advanceUiDropdown"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">Advance UI</span></a>
                        <ul class="sidebar-dropdown-menu" id="advanceUiDropdown">
                            <li class="sidebar-dropdown-item"><a href="dashboard-sweet-alert.html" class="sidebar-link">Sweet Alert</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-nestable-list.html" class="sidebar-link">Nestable List</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-animation.html" class="sidebar-link">Animation</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-swiper-slider.html" class="sidebar-link">Swiper Slider</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-form.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span> <span class="sidebar-txt">Forms</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-table.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-table"></i></span> <span class="sidebar-txt">Tables</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-charts.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-chart-simple"></i></span> <span class="sidebar-txt">Charts</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-icon.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-compass-drafting"></i></span> <span class="sidebar-txt">Icons</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-map.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-location-dot"></i></span> <span class="sidebar-txt">Maps</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-file-manager.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-folder-open"></i></span> <span class="sidebar-txt">File Manager</span></a>
                    </li>
                </ul>
            </li>
            <li class="help-center">
                <h3>Help Center</h3>
                <p>We're an award-winning, forward thinking</p>
                <a href="#" class="btn btn-sm btn-light">Go to Help Center</a>
            </li>
        </ul>
    </div>
</div>
<!-- main sidebar end -->
<body class="body-padding body-p-top light-theme">
<!-- main content start -->
<div class="main-content">
    <div class="dashboard-breadcrumb mb-30">
        <h2>View Profile</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="profile-sidebar">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="profile-sidebar-title">User Information</h5>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-icon btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-sm-end">
                                    <li><a class="dropdown-item" href="dashboard-edit-profile.html"><i class="fa-regular fa-pen-to-square"></i> Edit Information</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="top">
                            <div class="image-wrap">
                                <div class="part-img rounded-circle overflow-hidden">
                                    <img src="dashboad/assets/images/admin.png" alt="admin">
                                </div>
                                <button class="image-change"><i class="fa-light fa-camera"></i></button>
                            </div>
                            <div class="part-txt">
                                <h4 class="admin-name">Mitchell C. Shay</h4>
                                <span class="admin-role">Graphic Designer</span>
                                <div class="admin-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-google"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <h6 class="profile-sidebar-subtitle">Communication Info</h6>
                            <ul>
                                <li><span>Full Name:</span>Anna Adame</li>
                                <li><span>Mobile:</span>+(1) 987 65433</li>
                                <li><span>Mail:</span>example@mail.com</li>
                                <li><span>Address:</span>California, United States</li>
                                <li><span>Joining Date:</span>24 Nov 2022</li>
                            </ul>
                            <h6 class="profile-sidebar-subtitle">About Me</h6>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row mb-30">
                <div class="col-lg-4">
                    <div class="dashboard-top-box rounded-bottom panel-bg">
                        <div class="left">
                            <h3>$34,152</h3>
                            <p>Shipping fees are not</p>
                            <a href="#">View net earnings</a>
                        </div>
                        <div class="right">
                            <span class="text-primary">+16.24%</span>
                            <div class="part-icon rounded">
                                <span><i class="fa-light fa-dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-xs-12">
                    <div class="dashboard-top-box rounded-bottom panel-bg">
                        <div class="left">
                            <h3>36,894</h3>
                            <p>Orders</p>
                            <a href="#">Excluding orders in transit</a>
                        </div>
                        <div class="right">
                            <span class="text-primary">+16.24%</span>
                            <div class="part-icon rounded">
                                <span><i class="fa-light fa-bag-shopping"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 col-xs-12">
                    <div class="dashboard-top-box rounded-bottom panel-bg">
                        <div class="left">
                            <h3>$34,152</h3>
                            <p>Customers</p>
                            <a href="#">See details</a>
                        </div>
                        <div class="right">
                            <span class="text-primary">+16.24%</span>
                            <div class="part-icon rounded">
                                <span><i class="fa-light fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <h5>User Activities</h5>
                    <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-primary">View All</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="user-activity">
                        <ul>
                            <li>
                                <div class="left">
                                    <span class="user-activity-title">Your account is logged in</span>
                                    <span class="user-activity-details">From "RuthDyer" UiDesign Leave</span>
                                    <span class="user-activity-date">Monday 12 Jan 2020.</span>
                                </div>
                                <div class="right">
                                    <span class="user-activity-time">6 min ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <span class="user-activity-title">Current language has been changed</span>
                                    <span class="user-activity-details">From "RuthDyer" UiDesign Leave</span>
                                    <span class="user-activity-date">Monday 12 Jan 2020.</span>
                                </div>
                                <div class="right">
                                    <span class="user-activity-time">16 min ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <span class="user-activity-title">Leave Approval Request</span>
                                    <span class="user-activity-details">From "RuthDyer" UiDesign Leave</span>
                                    <span class="user-activity-date">Monday 12 Jan 2020.</span>
                                </div>
                                <div class="right">
                                    <span class="user-activity-time">6 min ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <span class="user-activity-title">Asked about this product</span>
                                    <span class="user-activity-details">From "RuthDyer" UiDesign Leave</span>
                                    <span class="user-activity-date">Monday 12 Jan 2020.</span>
                                </div>
                                <div class="right">
                                    <span class="user-activity-time">16 min ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
