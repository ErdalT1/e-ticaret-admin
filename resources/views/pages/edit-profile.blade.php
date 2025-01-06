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
        <h2>Edit Profile</h2>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="panel">
                <div class="panel-header">
                    <nav>
                        <div class="btn-box d-flex flex-wrap gap-1" id="nav-tab" role="tablist">
                            <button class="btn btn-sm btn-outline-primary active" id="nav-edit-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-edit-profile" type="button" role="tab" aria-controls="nav-edit-profile" aria-selected="true">Edit Profile</button>
                            <button class="btn btn-sm btn-outline-primary" id="nav-change-password-tab" data-bs-toggle="tab" data-bs-target="#nav-change-password" type="button" role="tab" aria-controls="nav-change-password" aria-selected="false">Change Password</button>
                            <button class="btn btn-sm btn-outline-primary" id="nav-other-settings-tab" data-bs-toggle="tab" data-bs-target="#nav-other-settings" type="button" role="tab" aria-controls="nav-other-settings" aria-selected="false">Other Settings</button>
                        </div>
                    </nav>
                </div>
                <div class="panel-body">
                    <div class="tab-content profile-edit-tab" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edit-profile-tab" tabindex="0">
                            <form>
                                <div class="profile-edit-tab-title">
                                    <h6>Public Information</h6>
                                </div>
                                <div class="public-information mb-30">
                                    <div class="row g-4">
                                        <div class="col-md-3">
                                            <div class="admin-profile">
                                                <div class="image-wrap">
                                                    <div class="part-img rounded-circle overflow-hidden">
                                                        <img src="dashboad/assets/images/admin.png" alt="admin">
                                                    </div>
                                                    <button class="image-change"><i class="fa-light fa-camera"></i></button>
                                                </div>
                                                <span class="admin-name">Mitchell C. Shay</span>
                                                <span class="admin-role">Graphic Designer</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                        <input type="text" class="form-control" placeholder="Full Name" value="Mitchell C. Shay">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa-light fa-at"></i></span>
                                                        <input type="text" class="form-control" placeholder="Username" value="@mitchellc">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control h-150-p" placeholder="Biography">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-edit-tab-title">
                                    <h6>Private Information</h6>
                                </div>
                                <div class="private-information mb-30">
                                    <div class="row g-3">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Unique ID" value="1D233">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text"><i class="fa-light fa-user-tie"></i></span>
                                                <select class="form-control select-search" data-placeholder="Role">
                                                    <option value="">Role</option>
                                                    <option value="0">Admin</option>
                                                    <option value="1">Manager</option>
                                                    <option value="2">Project Manager</option>
                                                    <option value="3">Managing Director</option>
                                                    <option value="4">Chairman</option>
                                                    <option value="5" selected>Graphic Designer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text"><i class="fa-light fa-circle-check"></i></span>
                                                <select class="form-control" data-placeholder="Status">
                                                    <option value="">Status</option>
                                                    <option value="0" selected>Enable</option>
                                                    <option value="1">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="Email" value="example@mail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-phone"></i></span>
                                                <input type="tel" class="form-control" placeholder="Phone" value="+0 123 456 789">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                                <input type="url" class="form-control" placeholder="Website" value="https://themeforest.net/">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control h-100-p" placeholder="Address">California, United States</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-edit-tab-title">
                                    <h6>Social Information</h6>
                                </div>
                                <div class="social-information">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-facebook-f"></i></span>
                                                <input type="url" class="form-control" placeholder="Facebook" value="https://www.facebook.com/">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                                <input type="url" class="form-control" placeholder="Twitter" value="https://twitter.com/">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-linkedin-in"></i></span>
                                                <input type="url" class="form-control" placeholder="Linkedin" value="https://www.linkedin.com/">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                                <input type="url" class="form-control" placeholder="Instagram" value="https://www.instagram.com/">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                                <input type="url" class="form-control" placeholder="Youtube" value="https://www.youtube.com/">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-brands fa-pinterest-p"></i></span>
                                                <input type="url" class="form-control" placeholder="Pinterest" value="https://www.pinterest.com/">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-change-password" role="tabpanel" aria-labelledby="nav-change-password-tab" tabindex="0">
                            <form>
                                <div class="profile-edit-tab-title">
                                    <h6>Change Password</h6>
                                </div>
                                <div class="social-information">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                <input type="url" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-light fa-lock"></i></span>
                                                <input type="url" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-other-settings" role="tabpanel" aria-labelledby="nav-other-settings-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="profile-edit-tab-title">
                                        <h6>Activity Email Settings</h6>
                                    </div>
                                    <div class="activity-email-settings">
                                        <form>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-1">
                                                <label class="form-check-label" for="activity-email-settings-1">
                                                    Someone adds you as a connection
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-2">
                                                <label class="form-check-label" for="activity-email-settings-2">
                                                    you're sent a direct message
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-3">
                                                <label class="form-check-label" for="activity-email-settings-3">
                                                    New membership approval
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-4">
                                                <label class="form-check-label" for="activity-email-settings-4">
                                                    Send Copy To Personal Email
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="activity-email-settings-5">
                                                <label class="form-check-label" for="activity-email-settings-5">
                                                    Tips on getting more out of PCT-themes
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="profile-edit-tab-title">
                                        <h6>Product Email Settings</h6>
                                    </div>
                                    <div class="product-email-settings">
                                        <form>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="product-email-settings-1">
                                                <label class="form-check-label" for="product-email-settings-1">
                                                    Someone adds you as a connection
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="product-email-settings-2">
                                                <label class="form-check-label" for="product-email-settings-2">
                                                    you're sent a direct message
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="product-email-settings-3">
                                                <label class="form-check-label" for="product-email-settings-3">
                                                    New membership approval
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="product-email-settings-4">
                                                <label class="form-check-label" for="product-email-settings-4">
                                                    Send Copy To Personal Email
                                                </label>
                                            </div>
                                            <div class="form-check mb-15">
                                                <input class="form-check-input" type="checkbox" value="" id="product-email-settings-5">
                                                <label class="form-check-label" for="product-email-settings-5">
                                                    Tips on getting more out of PCT-themes
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
