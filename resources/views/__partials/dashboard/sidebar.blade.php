<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="card user-sidebar mb-4">
        <div class="card-header user-sidebar-header">
            <div class="profile-content rounded-pill">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <x-img
                            src="assets/img/users/user-01.jpg"
                            alt="image"
                            class="img-fluid avatar avatar-lg rounded-circle me-1"
                        />
                        <div>
                            <h6 class="fs-16">{{ auth()->user()->name }}</h6>
                            <span class="fs-14 text-gray-6">{{ auth()->user()->role }}</span>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a
                                href="profile-settings.html"
                                class="rounded-circle btn btn-light d-flex align-items-center justify-content-center p-1"
                            ><i class="isax isax-edit-2 fs-14"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body user-sidebar-body">
            <ul>
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Main</span>
                </li>
                <li>
                    <a
                        href="dashboard.html"
                        class="d-flex align-items-center active"
                    >
                        <i class="isax isax-grid-55"></i> Dashboard
                    </a>
                </li>
                <li class="submenu">
                    <a
                        href="javascript:void(0);"
                        class="d-block"
                    ><i class="isax isax-calendar-tick5"></i><span>My Bookings</span><span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a
                                href="customer-flight-booking.html"
                                class="fs-14 d-inline-flex align-items-center"
                            >Flights</a>
                        </li>
                        <li>
                            <a
                                href="customer-hotel-booking.html"
                                class="fs-14 d-inline-flex align-items-center"
                            >Hotels</a>
                        </li>
                        <li>
                            <a
                                href="customer-car-booking.html"
                                class="fs-14 d-inline-flex align-items-center"
                            >Cars</a>
                        </li>
                        <li>
                            <a
                                href="customer-cruise-booking.html"
                                class="fs-14 d-inline-flex align-items-center"
                            >Cruise</a>
                        </li>
                        <li>
                            <a
                                href="customer-tour-booking.html"
                                class="fs-14 d-inline-flex align-items-center"
                            >Tour</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a
                        href="review.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-magic-star5"></i> My Reviews
                    </a>
                </li>
                <li>
                    <div class="message-content">
                        <a
                            href="chat.html"
                            class="d-flex align-items-center"
                        >
                            <i class="isax isax-message-square5"></i> Messages
                        </a>
                        <span class="msg-count rounded-circle">02</span>
                    </div>
                </li>
                <li class="mb-2">
                    <a
                        href="wishlist.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-heart5"></i> Wishlist
                    </a>
                </li>
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Finance</span>
                </li>
                <li>
                    <a
                        href="wallet.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-wallet-add-15"></i> Wallet
                    </a>
                </li>
                <li class="mb-2">
                    <a
                        href="payment.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-money-recive5"></i> Payments
                    </a>
                </li>
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Account</span>
                </li>
                <li>
                    <a
                        href="my-profile.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-profile-tick5"></i> My Profile
                    </a>
                </li>
                <li>
                    <div class="message-content">
                        <a
                            href="notification.html"
                            class="d-flex align-items-center"
                        >
                            <i class="isax isax-notification-bing5"></i> Notifications
                        </a>
                        <span class="msg-count bg-purple rounded-circle">05</span>
                    </div>
                </li>
                <li>
                    <a
                        href="profile-settings.html"
                        class="d-flex align-items-center"
                    >
                        <i class="isax isax-setting-25"></i> Settings
                    </a>
                </li>
                <li>
                    <a
                        href="/logout"
                        class="d-flex align-items-center pb-0"
                    >
                        <i class="isax isax-logout-15"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
