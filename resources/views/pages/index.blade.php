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
                            <li class="sidebar-dropdown-item"><a href="{{route('view-profile')}}" class="sidebar-link">View Profile</a></li>
                            <li class="sidebar-dropdown-item"><a href="{{route('edit-profile')}}" class="sidebar-link">Edit Profile</a></li>
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
        <h2>Dashboard</h2>
        <div class="input-group dashboard-filter">
            <input type="text" class="form-control" name="basic" id="dashboardFilter" readonly>
            <label for="dashboardFilter" class="input-group-text"><i class="fa-light fa-calendar-days"></i></label>
        </div>
    </div>
    <div class="row mb-30">
        <div class="col-lg-3 col-6 col-xs-12">
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
        <div class="col-lg-3 col-6 col-xs-12">
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
        <div class="col-lg-3 col-6 col-xs-12">
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
        <div class="col-lg-3 col-6 col-xs-12">
            <div class="dashboard-top-box rounded-bottom panel-bg">
                <div class="left">
                    <h3>$724,152</h3>
                    <p>My Balance</p>
                    <a href="#">Withdraw</a>
                </div>
                <div class="right">
                    <span class="text-primary">+16.24%</span>
                    <div class="part-icon rounded">
                        <span><i class="fa-light fa-credit-card"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-8">
            <div class="panel chart-panel-1">
                <div class="panel-header">
                    <h5>Sales Analytics</h5>
                    <div class="btn-box">
                        <button class="btn btn-sm btn-outline-primary">Week</button>
                        <button class="btn btn-sm btn-outline-primary">Month</button>
                        <button class="btn btn-sm btn-outline-primary">Year</button>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="saleAnalytics" class="chart-dark"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="panel">
                <div class="panel-header">
                    <h5>Social Media Visitor</h5>
                    <div class="btn-box d-sm-block d-none">
                        <button class="btn btn-sm btn-outline-primary">Week</button>
                        <button class="btn btn-sm btn-outline-primary">Month</button>
                        <button class="btn btn-sm btn-outline-primary">Year</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-borderless visitor-table">
                        <thead>
                            <tr>
                                <th>Sources</th>
                                <th>Visitor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-fb"><i class="fa-brands fa-facebook-f"></i></span> Facebook</td>
                                <td>153,100</td>
                            </tr>
                            <tr>
                                <td><span class="text-behance"><i class="fa-brands fa-behance"></i></span> Behance</td>
                                <td>234,200</td>
                            </tr>
                            <tr>
                                <td><span class="text-comb"><i class="fa-brands fa-y-combinator"></i></span> Combinator</td>
                                <td>326,012</td>
                            </tr>
                            <tr>
                                <td><span class="text-insta"><i class="fa-brands fa-instagram"></i></span> Instagram</td>
                                <td>124,420</td>
                            </tr>
                            <tr>
                                <td><span class="text-dribble"><i class="fa-brands fa-dribbble"></i></span> Dribble</td>
                                <td>554,220</td>
                            </tr>
                            <tr>
                                <td><span class="text-pinterest"><i class="fa-brands fa-pinterest-p"></i></span> Pinterest</td>
                                <td>134,800</td>
                            </tr>
                            <tr>
                                <td><span class="text-linkedin"><i class="fa-brands fa-linkedin-in"></i></span> Linkedin</td>
                                <td>254,812</td>
                            </tr>
                            <tr>
                                <td><span class="text-twitter"><i class="fa-brands fa-twitter"></i></span> Twitter</td>
                                <td>124,250</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="panel">
                <div class="panel-header">
                    <h5>New Customers</h5>
                    <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                </div>
                <div class="panel-body">
                    <table class="table table-borderless new-customer-table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Iftikar Ammed</p>
                                            <span>@iftikarahmed</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar-2.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Sadab Khan</p>
                                            <span>@sadabkhan</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar-3.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Hoyder Ali</p>
                                            <span>@hoyderali</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar-4.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Hardik Ali</p>
                                            <span>@hardikali</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar-5.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Alaysa Haly</p>
                                            <span>@alaysahaly</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="new-customer">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/avatar-6.png" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <p class="customer-name">Natalush Khan</p>
                                            <span>@natalushkhan</span>
                                        </div>
                                    </div>
                                </td>
                                <td>2 Orders</td>
                                <td>$179</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xxl-8">
            <div class="panel">
                <div class="panel-header">
                    <h5>Recent Orders</h5>
                    <div id="tableSearch"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Order Date</th>
                                <th>Payment Method</th>
                                <th>Delivery Date</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>855212</td>
                                <td>Soward</td>
                                <td>28/10/22</td>
                                <td>Cash</td>
                                <td>02/11/22</td>
                                <td>$05.22</td>
                                <td><span class="badge bg-success">Paid</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855213</td>
                                <td>Kian</td>
                                <td>29/10/22</td>
                                <td>Card</td>
                                <td>03/11/22</td>
                                <td>$17.00</td>
                                <td><span class="badge bg-primary">Delivered</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855214</td>
                                <td>Jennifer</td>
                                <td>29/10/22</td>
                                <td>Card</td>
                                <td>03/11/22</td>
                                <td>$15.22</td>
                                <td><span class="badge bg-info">Pending</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855215</td>
                                <td>Benjamin</td>
                                <td>30/10/22</td>
                                <td>Cash</td>
                                <td>03/11/22</td>
                                <td>$12.15</td>
                                <td><span class="badge bg-secondary">Unpaid</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855216</td>
                                <td>Anna</td>
                                <td>31/10/22</td>
                                <td>Cheque</td>
                                <td>04/11/22</td>
                                <td>$05.35</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855217</td>
                                <td>Bradley</td>
                                <td>01/11/22</td>
                                <td>Cash</td>
                                <td>05/11/22</td>
                                <td>$25.28</td>
                                <td><span class="badge bg-info">Pending</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>855218</td>
                                <td>Parkinson</td>
                                <td>03/11/22</td>
                                <td>Cheque</td>
                                <td>06/11/22</td>
                                <td>$32.32</td>
                                <td><span class="badge bg-info">Pending</span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-bottom-control"></div>
                </div>
            </div>
        </div>
    </div>
