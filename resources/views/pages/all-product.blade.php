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
    <div class="row g-4">
        <div class="col-12">
            <div class="panel">
                <div class="panel-header">
                    <h5>All Products</h5>
                    <div class="btn-box d-flex flex-wrap gap-2">
                        <div id="tableSearch"></div>
                        <button class="btn btn-sm btn-icon btn-outline-primary"><i class="fa-light fa-arrows-rotate"></i></button>
                        <div class="digi-dropdown dropdown">
                            <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="digi-dropdown-menu dropdown-menu">
                                <li class="dropdown-title">Show Table Title</li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showProduct" checked>
                                        <label class="form-check-label" for="showProduct">
                                            Products
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showPublished" checked>
                                        <label class="form-check-label" for="showPublished">
                                            Published
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showStock" checked>
                                        <label class="form-check-label" for="showStock">
                                            Stock
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
                                        <input class="form-check-input" type="checkbox" id="showSales" checked>
                                        <label class="form-check-label" for="showSales">
                                            Sales
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="showRating" checked>
                                        <label class="form-check-label" for="showRating">
                                            Rating
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
                        <div class="btn-box">
                            <a href="dashboard-add-product.html" class="btn btn-sm btn-primary"><i class="fa-light fa-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="product-table-quantity">
                        <ul>
                            <li class="text-white">All (23)</li>
                            <li>Published (19)</li>
                            <li>Draft (05)</li>
                            <li>Trush (05)</li>
                        </ul>
                    </div>
                    <div class="table-filter-option">
                        <div class="row g-3">
                            <div class="col-xl-10 col-9 col-xs-12">
                                <div class="row g-3">
                                    <div class="col">
                                        <form class="row g-2">
                                            <div class="col">
                                                <select class="form-control form-control-sm" data-placeholder="Bulk action">
                                                    <option value="">Bulk action</option>
                                                    <option value="0">Edit</option>
                                                    <option value="1">Move To Trash</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button class="btn btn-sm btn-primary w-100">Apply</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm">
                                            <option value="0">All Category</option>
                                            <option value="1">Cloth</option>
                                            <option value="2">Fashion</option>
                                            <option value="3">Bag</option>
                                            <option value="4">Food</option>
                                            <option value="5">Medicine</option>
                                            <option value="6">Watch</option>
                                            <option value="7">Smart Phone</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm">
                                            <option value="0">All Product Type</option>
                                            <option value="1">Downloadable</option>
                                            <option value="2">Virtual</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control form-control-sm">
                                            <option value="0">All Product Stock</option>
                                            <option value="1">In stock</option>
                                            <option value="2">Out of stock</option>
                                            <option value="3">On backorder</option>
                                        </select>
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
                                                        <input class="form-check-input" type="checkbox" id="filterCategory" checked>
                                                        <label class="form-check-label" for="filterCategory">
                                                            Category
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterProductType" checked>
                                                        <label class="form-check-label" for="filterProductType">
                                                            Product Type
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="filterStock" checked>
                                                        <label class="form-check-label" for="filterStock">
                                                            Stock
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
                                <th>Product</th>
                                <th>SKU</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Sales</th>
                                <th>Rating</th>
                                <th>Published</th>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-1.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">A4TECH BH300 Bluetooth Wireless Headset</span>
                                            <span class="product-category">Category: electronics/music</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-4.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Premium Blend Tea</span>
                                            <span class="product-category">Category: Drink/tea</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>22</td>
                                <td>$160</td>
                                <td>756</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(380)</div>
                                    </div>
                                </td>
                                <td>10/21/2022 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-3.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Chris Adams Body Spray Classic Denim</span>
                                            <span class="product-category">Category: Fashion/perfume</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-1.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">A4TECH BH300 Bluetooth Wireless Headset</span>
                                            <span class="product-category">Category: electronics/music</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-4.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Premium Blend Tea</span>
                                            <span class="product-category">Category: Drink/tea</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>22</td>
                                <td>$160</td>
                                <td>756</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(380)</div>
                                    </div>
                                </td>
                                <td>10/21/2022 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-3.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Chris Adams Body Spray Classic Denim</span>
                                            <span class="product-category">Category: Fashion/perfume</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-1.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">A4TECH BH300 Bluetooth Wireless Headset</span>
                                            <span class="product-category">Category: electronics/music</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-4.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Premium Blend Tea</span>
                                            <span class="product-category">Category: Drink/tea</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>22</td>
                                <td>$160</td>
                                <td>756</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(380)</div>
                                    </div>
                                </td>
                                <td>10/21/2022 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-3.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Chris Adams Body Spray Classic Denim</span>
                                            <span class="product-category">Category: Fashion/perfume</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-1.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">A4TECH BH300 Bluetooth Wireless Headset</span>
                                            <span class="product-category">Category: electronics/music</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-4.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Premium Blend Tea</span>
                                            <span class="product-category">Category: Drink/tea</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>22</td>
                                <td>$160</td>
                                <td>756</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(380)</div>
                                    </div>
                                </td>
                                <td>10/21/2022 01:05 PM</td>
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
                                <td>
                                    <div class="table-product-card">
                                        <div class="part-img">
                                            <img src="dashboad/assets/images/product-img-3.jpg" alt="Image">
                                        </div>
                                        <div class="part-txt">
                                            <span class="product-name">Chris Adams Body Spray Classic Denim</span>
                                            <span class="product-category">Category: Fashion/perfume</span>
                                        </div>
                                    </div>
                                </td>
                                <td>CSJ0158</td>
                                <td>12</td>
                                <td>$560</td>
                                <td>256</td>
                                <td>
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star starred"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-amount">(42)</div>
                                    </div>
                                </td>
                                <td>12/24/2023 01:05 PM</td>
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
