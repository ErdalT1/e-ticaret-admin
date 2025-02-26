@extends('layout.layout')
@section('content')
<body class="body-padding body-p-top light-theme">
<!-- main sidebar start -->
<div class="main-sidebar flush-menu">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item open">
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{route('anasayfa')}}" class="sidebar-link active"><span class="nav-icon"><i class="fa-light fa-grid-2"></i></span> <span class="sidebar-txt">Dashboard</span></a>
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

<!-- main content start -->
<div class="main-content">
    <div class="row">
        <div class="col-xxl-9 col-lg-8">
            <div class="panel">
                <div class="panel-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 calendar-sidebar">
            <div class="panel mb-30">
                <div class="panel-header">
                    <h5>Reserved Event</h5>
                </div>
                <div class="panel-body">
                    <div id="external-events" class="sidebar-event-list">
                        <div class="fc-event">My Event 1</div>
                        <div class="fc-event">My Event 2</div>
                        <div class="fc-event">My Event 3</div>
                        <div class="fc-event">My Event 4</div>
                        <div class="fc-event">My Event 5</div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="drop-remove">
                            <label for="drop-remove" class="form-check-label">Remove after drop</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <h5>Upcoming Events</h5>
                </div>
                <div class="panel-body">
                    <div class="upcoming-event-list sidebar-event-list"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Revel</span></p>
    </div>
    <!-- footer end -->
</div>
<!-- main content end -->

<!-- event modal start -->
<div class="modal fade" id="event-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="needs-validation" name="event-form" id="form-event" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Event</h5>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div>
                                <label class="control-label form-label">Event Name</label>
                                <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required>
                                <div class="invalid-feedback">Please provide a valid event name</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="control-label form-label">Category</label>
                                <select class="form-control" name="category" id="event-category" required>
                                    <option value="">Select a category</option>
                                    <option value="bg-primary">Primary</option>
                                    <option value="bg-danger">Danger</option>
                                    <option value="bg-success">Success</option>
                                    <option value="bg-info">Info</option>
                                    <option value="bg-dark">Dark</option>
                                    <option value="bg-warning">Warning</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid event category</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-sm btn-danger" id="btn-delete-event">Delete</button>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-sm btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-success" id="btn-save-event">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
