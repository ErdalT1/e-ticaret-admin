@extends('frontend.layout.layout')
@section('content')
<body class="body-padding body-p-top light-theme">
 <!-- main sidebar start -->
 <div class="main-sidebar flush-menu">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item">
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-index.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-grid-2"></i></span> <span class="sidebar-txt">Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Apps</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-all-customer.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-group"></i></span> <span class="sidebar-txt">All Customer</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-add-product.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">Add Product</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-all-product.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-boxes"></i></span> <span class="sidebar-txt">All Product</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-category.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-tag"></i></span> <span class="sidebar-txt">Category</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-order.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span> <span class="sidebar-txt">Order</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="dashboard-calendar.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Calendar</span></a>
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
                            <li class="sidebar-dropdown-item"><a href="dashboard-login.html" class="sidebar-link">Login</a></li>
                            <li class="sidebar-dropdown-item"><a href="dashboard-registration.html" class="sidebar-link">Registration</a></li>
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
    <div class="row g-4">
        <div class="col-12">
            <div class="panel">
                <div class="panel-header">
                    <h5>All Order</h5>
                    <div class="btn-box d-flex gap-2">
                        <div id="tableSearch"></div>
                        <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>
                        <div class="digi-dropdown dropdown">
                            <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="digi-dropdown-menu dropdown-menu">
                                <li class="dropdown-title">Show Table Title</li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showOrderId" checked>
                                        <label class="form-check-label" for="showOrderId">
                                            Order ID
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showCustomer" checked>
                                        <label class="form-check-label" for="showCustomer">
                                            Customer
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showStatus" checked>
                                        <label class="form-check-label" for="showStatus">
                                            Status
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showProduct" checked>
                                        <label class="form-check-label" for="showProduct">
                                            Product
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showPrice" checked>
                                        <label class="form-check-label" for="showPrice">
                                            Price
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showPaymentMethod" checked>
                                        <label class="form-check-label" for="showPaymentMethod">
                                            Payment Method
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showDeliveryStatus" checked>
                                        <label class="form-check-label" for="showDeliveryStatus">
                                            Delivery Status
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showOrderDate" checked>
                                        <label class="form-check-label" for="showOrderDate">
                                            Order Date
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showAction" checked>
                                        <label class="form-check-label" for="showAction">
                                            Action
                                        </label>
                                    </div>
                                </li>
                                <li class="dropdown-title pb-1">Showing</li>
                                <li>
                                    <div class="input-group">
                                        <input type="number" class="form-control form-control-sm w-50" value="10">
                                        <button class="btn btn-sm btn-primary w-50">Apply</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="product-table-quantity d-flex justify-content-between align-items-center mb-20">
                        <ul class="mb-0">
                            <li class="text-white">All (23)</li>
                            <li>Pending (19)</li>
                            <li>Draft (05)</li>
                            <li>Trush (05)</li>
                        </ul>
                        <div class="btn-box d-lg-flex d-none gap-2">
                            <button class="btn btn-sm btn-icon btn-outline-primary" title="Download Excel" id="downloadExcel"><i class="fa-light fa-file-spreadsheet"></i></button>
                            <button class="btn btn-sm btn-icon btn-outline-primary" title="Download PDF" id="downloadPdf"><i class="fa-light fa-file-pdf"></i></button>
                        </div>
                    </div>
                    <div class="table-filter-option">
                        <div class="row g-3">
                            <div class="col-xl-10 col-9 col-xs-12">
                                <div class="row g-3">
                                    <div class="col">
                                        <form class="row g-2">
                                            <div class="col">
                                                <select class="form-control form-control-sm">
                                                    <option value="0">Bulk action</option>
                                                    <option value="1">Move to trash</option>
                                                    <option value="2">Change Status to processing</option>
                                                    <option value="3">Change Status to on-hold</option>
                                                    <option value="4">Change Status to completed</option>
                                                    <option value="5">Change Status to cancelled</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary w-100">Apply</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm">
                                            <option value="0">All Orders</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Cancel</option>
                                            <option value="4">Return</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm" name="basic" id="orderTableFilter" readonly>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i> Filter</button>
                                    </div>
                                    <div class="col">
                                        <div class="digi-dropdown dropdown">
                                            <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-plus"></i></button>
                                            <ul class="digi-dropdown-menu dropdown-menu">
                                                <li class="dropdown-title">Filter Options</li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterDeliveryStatus" checked>
                                                        <label class="form-check-label" for="filterDeliveryStatus">
                                                            Delivery Status
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterDateRange" checked>
                                                        <label class="form-check-label" for="filterDateRange">
                                                            Date Range
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                <div id="productTableLength"></div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                        <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="markAllProduct">
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Payment Method</th>
                                <th>Delivery Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120101</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120102</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120103</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120104</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120101</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120102</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120103</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120104</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120101</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120102</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120103</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td>12</td>
                                <td>$256</td>
                                <td>Cash on</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td><a href="dashboard-invoices.html">#22120104</a></td>
                                <td>Shaikh Abu Dardah</td>
                                <td><span class="text-warning">Hold</span></td>
                                <td>15</td>
                                <td>$625</td>
                                <td>Paypal</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>12/24/2023 - 01:05 PM</td>
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
