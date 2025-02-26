    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="dashboard-index.html">
                            <img src="dashboad/assets/images/logo-black.png" alt="Logo">
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="dashboard-index.html">
                            <img src="{{asset('dashboad/assets/images/logo-small.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
                <a href="{{route('anasayfa')}}" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i class="fa-light fa-globe me-1"></i> <span>View Website</span></a>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="dashboard-index.html">
                        <img src="{{asset('dashboad/assets/images/logo-small.png')}}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <form class="header-form">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                                <div class="lang-select">
                                    <span>Language:</span>
                                    <select>
                                        <option value="">EN</option>
                                        <option value="">BN</option>
                                        <option value="">FR</option>
                                    </select>
                                </div>
                                <div class="header-btn-box">
                                    <button class="header-btn" id="messageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-light fa-comment-dots"></i>
                                        <span class="badge bg-danger">3</span>
                                    </button>
                                    <ul class="message-dropdown dropdown-menu" aria-labelledby="messageDropdown">
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Archer Cowie</span>
                                                    <span class="msg-short">There are many variations of passages of Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-2.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Cody Rodway</span>
                                                    <span class="msg-short">There are many variations of passages of Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-3.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Zane Bain</span>
                                                    <span class="msg-short">There are many variations of passages of Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="show-all-btn">Show all message</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-btn-box">
                                    <button class="header-btn" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-light fa-bell"></i>
                                        <span class="badge bg-danger">9+</span>
                                    </button>
                                    <ul class="notification-dropdown dropdown-menu" aria-labelledby="notificationDropdown">
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-primary"><i class="fa-solid fa-thumbs-up"></i></span> <span class="fw-bold">Archer</span> Likes your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-2.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-success"><i class="fa-solid fa-comment-dots"></i></span> <span class="fw-bold">Cody</span> Commented on your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-3.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon"><i class="fa-solid fa-share"></i></span> <span class="fw-bold">Zane</span> Shared your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-4.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-primary"><i class="fa-solid fa-thumbs-up"></i></span> <span class="fw-bold">Christopher</span> Likes your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-5.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-success"><i class="fa-solid fa-comment-dots"></i></span> <span class="fw-bold">Charlie</span> Commented on your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="dashboad/assets/images/avatar-6.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon"><i class="fa-solid fa-share"></i></span> <span class="fw-bold">Jayden</span> Shared your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="show-all-btn">Show all message</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i class="fa-light fa-expand"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i class="fa-light fa-ellipsis-vertical"></i></button>
                    <div class="header-btn-box">
                        <button class="profile-btn" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="dashboad/assets/images/admin.png" alt="image">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                            <li>
                                <div class="dropdown-txt text-center">
                                    <p class="mb-0">Shaikh Abu Dardah</p>
                                    <span class="d-block">CEO & Founder</span>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="dashboard-view-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-circle-question"></i></span> Help</a></li>
                            <li><a class="dropdown-item" href="dashboard-edit-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-gear"></i></span> Settings</a></li>
                            <li><a class="dropdown-item" href="dashboard-login.html"><span class="dropdown-icon"><i class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    {{-- <!-- main sidebar start -->
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
    <!-- main sidebar end --> --}}
