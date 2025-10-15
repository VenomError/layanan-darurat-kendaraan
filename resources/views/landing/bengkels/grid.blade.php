@push('script')
      <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" ></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" ></script>

@endpush
<x-layout.app>
    <div class="breadcrumb-bar breadcrumb-bg-06 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Cruise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Cruise</li>
                            <li class="breadcrumb-item active" aria-current="page">Cruise Grid</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">

            <!-- Cruise Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form class="d-lg-flex">
                            <div class="d-flex form-info">
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" role="menu"
                                        aria-expanded="false"
                                    >
                                        <label class="form-label fs-14 text-default mb-1">City, Property name or
                                            Location</label>
                                        <input class="form-control" type="text" value="Newyork">
                                        <p class="fs-12 mb-0">USA</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-md p-0">
                                        <div class="input-search border-bottom p-3">
                                            <div class="input-group">
                                                <input class="form-control" type="text"
                                                    placeholder="Search for City, Property name or Location"
                                                >
                                                <span class="input-group-text border-start-0 px-2"><i
                                                        class="isax isax-search-normal"
                                                    ></i></span>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">USA</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Japan</h6>
                                                    <p>3000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Singapore</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li class="border-bottom">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Russia</h6>
                                                    <p>8000 Properties</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <h6 class="fs-16 fw-medium">Germany</h6>
                                                    <p>2000 Properties</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check In</label>
                                    <input class="form-control datetimepicker" type="text" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item">
                                    <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                    <input class="form-control datetimepicker" type="text" value="21-10-2025">
                                    <p class="fs-12 mb-0">Monday</p>
                                </div>
                                <div class="form-item dropdown">
                                    <div data-bs-toggle="dropdown" data-bs-auto-close="outside" role="menu"
                                        aria-expanded="false"
                                    >
                                        <label class="form-label fs-14 text-default mb-1">Guests</label>
                                        <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                        <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                        <h5 class="mb-3">Select Travelers & Class</h5>
                                        <div class="br-10 info-item mb-3 border pb-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="" type="button"
                                                                    >
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input class="input-number" name="quantity"
                                                                    type="text" value="01"
                                                                >
                                                                <span class="input-group-btn float-end">
                                                                    <button
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="" type="button"
                                                                    >
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-3">
                                                        <label class="form-label text-gray-9 mb-2">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input class="input-number" name="quantity"
                                                                    type="text" value="01"
                                                                >
                                                                <span class="input-group-btn float-end">
                                                                    <button
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-3">
                                                        <label class="form-label text-gray-9 mb-2">Children <span
                                                                class="text-default fw-normal"
                                                            >( 2-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input class="input-number" name="quantity"
                                                                    type="text" value="01"
                                                                >
                                                                <span class="input-group-btn float-end">
                                                                    <button
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-3">
                                                        <label class="form-label text-gray-9 mb-2">Infants <span
                                                                class="text-default fw-normal"
                                                            >( 0-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input class="input-number" name="quantity"
                                                                    type="text" value="01"
                                                                >
                                                                <span class="input-group-btn float-end">
                                                                    <button
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field=""
                                                                        type="button"
                                                                    >
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="br-10 info-item mb-3 border pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check mb-3 me-3">
                                                    <input
                                                        class="form-check-input"
                                                        id="room1"
                                                        name="room"
                                                        type="radio"
                                                        checked
                                                    >
                                                    <label class="form-check-label" for="room1">
                                                        Single
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3 me-3">
                                                    <input class="form-check-input" id="room2" name="room"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="room2">
                                                        Double
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3 me-3">
                                                    <input class="form-check-input" id="room3" name="room"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="room3">
                                                        Delux
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="room4" name="room"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="room4">
                                                        Suite
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="br-10 info-item mb-3 border pb-1">
                                            <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="form-check mb-3 me-3">
                                                    <input
                                                        class="form-check-input"
                                                        id="property1"
                                                        name="property"
                                                        type="radio"
                                                        checked
                                                    >
                                                    <label class="form-check-label" for="property1">
                                                        Villa
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3 me-3">
                                                    <input class="form-check-input" id="property2" name="property"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="property2">
                                                        Condo
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3 me-3">
                                                    <input class="form-check-input" id="property3" name="property"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="property3">
                                                        Cabin
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="property4" name="property"
                                                        type="radio"
                                                    >
                                                    <label class="form-check-label" for="property4">
                                                        Apartments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-light btn-sm me-2" href="javascript:void(0);">Cancel</a>
                                            <button class="btn btn-primary btn-sm" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary search-btn rounded" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Cruise Search -->

            <!-- Cruise Types -->
            <div class="mb-2">
                <div class="mb-3">
                    <h5 class="mb-2">Choose type of Cruise you are interested</h5>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-04.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">Luxury Cruise</a></h6>
                                <p class="fs-14">216 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-02.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">Adventure Cruise</a></h6>
                                <p class="fs-14">569 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-03.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">River Cruise</a></h6>
                                <p class="fs-14">129 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-04.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">Family Cruise</a></h6>
                                <p class="fs-14">150 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-05.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">Sailing Cruises</a></h6>
                                <p class="fs-14">200 Cruises</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="d-flex align-items-center hotel-type-item mb-3">
                            <a class="avatar avatar-lg" href="cruise-grid.html">
                                <img class="rounded-circle" src="assets/img/cruise/cruise-06.jpg" alt="img">
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-16 fw-medium"><a href="cruise-grid.html">World Cruises</a></h6>
                                <p class="fs-14">320 Cruises</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Cruise Types -->

            <div class="row">

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card filter-sidebar mb-lg-0 mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Filters</h5>
                            <a class="fs-14 link-primary" href="javascript:void(0);">Reset</a>
                        </div>
                        <div class="card-body p-0">
                            <form action="https://dreamstour.dreamstechnologies.com/html/search.html">
                                <div class="border-bottom p-3">
                                    <label class="form-label fs-16">Search by Cruise Type</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-search-normal"></i>
                                        </span>
                                        <input class="form-control" type="text"
                                            placeholder="Search by Cruise Type"
                                        >
                                    </div>
                                </div>
                                <div class="accordion accordion-list">
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-populars"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-populars"
                                            >
                                                <i class="isax isax-ranking text-primary me-2"></i>Popular
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-populars">
                                            <div class="accordion-body pt-2">
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input
                                                        class="form-check-input ms-0 mt-0"
                                                        id="popular1"
                                                        name="popular1"
                                                        type="checkbox"
                                                        checked
                                                    >
                                                    <label class="form-check-label ms-2" for="popular1">
                                                        Wi-Fi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="popular2"
                                                        name="popular2" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="popular2">
                                                        Beverage Packages
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="popular3"
                                                        name="popular3" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="popular3">
                                                        Adventure
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="popular4"
                                                        name="popular4" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="popular4">
                                                        Spa & Wellness
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-popular"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-popular"
                                            >
                                                <i class="isax isax-coin text-primary me-2"></i>Price Per Night
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-popular">
                                            <div class="accordion-body">
                                                <div class="filter-range">
                                                    <input id="range_03" type="text">
                                                </div>
                                                <div class="filter-range-amount">
                                                    <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200
                                                            - $5695</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-cabin"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-cabin"
                                            >
                                                <i class="isax isax-airplane4 text-primary me-2"></i>Cabin Types
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-cabin">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="cabin1"
                                                            name="cabin1"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin1">
                                                            Inside
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="cabin2"
                                                            name="cabin2"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin2">
                                                            Oceanview
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cabin3"
                                                            name="cabin3" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin3">
                                                            Balcony
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cabin4"
                                                            name="cabin4" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin4">
                                                            Suite
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cabin5"
                                                            name="cabin5" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin5">
                                                            Mini-Suite
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cabin6"
                                                            name="cabin6" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin6">
                                                            Family Cabin
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cabin7"
                                                            name="cabin7" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cabin7">
                                                            Penthouse Suite
                                                        </label>
                                                    </div>
                                                </div>
                                                <a class="more-view fw-medium fs-14" href="javascript:void(0);">Show
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-amenity"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-amenity"
                                            >
                                                <i class="isax isax-candle text-primary me-2"></i>Amenities
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-amenity">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="amenity1"
                                                            name="amenity1"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity1">
                                                            Free Wifi
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="amenity2"
                                                            name="amenity2" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity2">
                                                            Casinos
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="amenity3"
                                                            name="amenity3"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity3">
                                                            Pool
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="amenity4"
                                                            name="amenity4" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity4">
                                                            Fitness Centers
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="amenity5"
                                                            name="amenity5" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity5">
                                                            Theaters
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="amenity6"
                                                            name="amenity6" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity6">
                                                            Complimentary meals
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="amenity7"
                                                            name="amenity7" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="amenity7">
                                                            Play Areas
                                                        </label>
                                                    </div>
                                                </div>
                                                <a class="more-view fw-medium fs-14" href="javascript:void(0);">Show
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3 pb-2">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-daylist"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-daylist"
                                            >
                                                <i class="isax isax-timer text-primary me-2"></i>Days
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-daylist">
                                            <div class="accordion-body">
                                                <div class="">
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="daylist1"
                                                            name="daylist1" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="daylist1">
                                                            1 - 2 days
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="daylist2"
                                                            name="daylist2" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="daylist2">
                                                            3 - 5 days
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="daylist3"
                                                            name="daylist3" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="daylist3">
                                                            6 - 9 days
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="daylist4"
                                                            name="daylist4" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="daylist4">
                                                            10+ days
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-meal"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-meal"
                                            >
                                                <i class="isax isax-reserve text-primary me-2"></i>Meal plans available
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-meal">
                                            <div class="accordion-body pt-2">
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="meals1"
                                                        name="meals1" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="meals1">
                                                        All inclusive
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="meals2"
                                                        name="meals2" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="meals2">
                                                        Breakfast
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="meals3"
                                                        name="meals3" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="meals3">
                                                        Lunch
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-checkbox form-check form-check-inline d-inline-flex align-items-center me-2 mt-2">
                                                    <input class="form-check-input ms-0 mt-0" id="meals4"
                                                        name="meals4" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="meals4">
                                                        Dinner
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-cruise"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-cruise"
                                            >
                                                <i class="isax isax-home-2 text-primary me-2"></i>Cruise Types
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-cruise">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="cruise1"
                                                            name="cruise1"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise1">
                                                            Luxury Cruise
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="cruise2"
                                                            name="cruise2"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise2">
                                                            Adventure Cruise
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cruise3"
                                                            name="cruise3" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise3">
                                                            Expedition Cruise
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input
                                                            class="form-check-input ms-0 mt-0"
                                                            id="cruise4"
                                                            name="cruise4"
                                                            type="checkbox"
                                                            checked
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise4">
                                                            River Cruise
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cruise5"
                                                            name="cruise5" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise5">
                                                            Family Cruise
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="cruise6"
                                                            name="cruise6" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="cruise6">
                                                            Economic Cruise
                                                        </label>
                                                    </div>
                                                </div>
                                                <a class="more-view fw-medium fs-14" href="javascript:void(0);">Show
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3 pb-2">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-guests"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-guests"
                                            >
                                                <i class="isax isax-timer text-primary me-2"></i>Guests
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-guests">
                                            <div class="accordion-body">
                                                <div class="">
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="guests1"
                                                            name="guests1" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="guests1">
                                                            1 - 5
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="guests2"
                                                            name="guests2" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="guests2">
                                                            5 - 10
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="guests3"
                                                            name="guests3" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="guests3">
                                                            10 - 15
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="guests4"
                                                            name="guests4" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="guests4">
                                                            15 - 20
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                        <input class="form-check-input ms-0 mt-0" id="guests5"
                                                            name="guests5" type="checkbox"
                                                        >
                                                        <label class="form-check-label ms-2" for="guests5">
                                                            20+
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div
                                                class="accordion-button p-0"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordion-brand"
                                                role="button"
                                                aria-expanded="true"
                                                aria-controls="accordion-brand"
                                            >
                                                <i class="isax isax-discount-shape text-primary me-2"></i>Reviews
                                            </div>
                                        </div>
                                        <div class="accordion-collapse show collapse" id="accordion-brand">
                                            <div class="accordion-body">
                                                <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                    <input class="form-check-input ms-0 mt-0" id="review1"
                                                        name="review1" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="review1">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">5 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                    <input class="form-check-input ms-0 mt-0" id="review2"
                                                        name="review2" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="review2">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">4 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                    <input class="form-check-input ms-0 mt-0" id="review3"
                                                        name="review3" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="review3">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">3 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-2 ps-0">
                                                    <input class="form-check-input ms-0 mt-0" id="review4"
                                                        name="review4" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="review4">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">2 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-0 ps-0">
                                                    <input class="form-check-input ms-0 mt-0" id="review5"
                                                        name="review5" type="checkbox"
                                                    >
                                                    <label class="form-check-label ms-2" for="review5">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">1 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8 theiaStickySidebar">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="mb-3">1920 Cruises Found on Your Search</h6>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="d-flex align-items-center mb-3 list-item">
                                <a class="list-icon active me-2" href="cruise-grid.html"><i
                                        class="isax isax-grid-1"></i></a>
                                <a class="list-icon me-2" href="cruise-list.html"><i
                                        class="isax isax-firstline"></i></a>
                                <a class="list-icon me-2" href="cruise-map.html"><i class="isax isax-map-1"></i></a>
                            </div>
                            <div class="dropdown mb-3">
                                <a class="dropdown-toggle py-2" data-bs-toggle="dropdown" href="javascript:void(0);"
                                    aria-expanded="false"
                                >
                                    <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form action="https://dreamstour.dreamstechnologies.com/html/cruise-grid.html">
                                        <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                        <div class="form-check d-flex align-items-center mb-2 ps-0">
                                            <input
                                                class="form-check-input ms-0 mt-0"
                                                id="recommend1"
                                                name="recommend"
                                                type="checkbox"
                                                checked
                                            >
                                            <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb-2 ps-0">
                                            <input class="form-check-input ms-0 mt-0" id="recommend2"
                                                name="recommend" type="checkbox"
                                            >
                                            <label class="form-check-label ms-2" for="recommend2">Price: low to
                                                high</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb-2 ps-0">
                                            <input class="form-check-input ms-0 mt-0" id="recommend3"
                                                name="recommend" type="checkbox"
                                            >
                                            <label class="form-check-label ms-2" for="recommend3">Price: high to
                                                low</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb-2 ps-0">
                                            <input class="form-check-input ms-0 mt-0" id="recommend4"
                                                name="recommend" type="checkbox"
                                            >
                                            <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb-2 ps-0">
                                            <input class="form-check-input ms-0 mt-0" id="recommend5"
                                                name="recommend" type="checkbox"
                                            >
                                            <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb-0 ps-0">
                                            <input class="form-check-input ms-0 mt-0" id="recommend6"
                                                name="recommend" type="checkbox"
                                            >
                                            <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-end border-top mt-3 pt-3">
                                            <a class="btn btn-light btn-sm me-2" href="javascript:void(0);">Reset</a>
                                            <button class="btn btn-primary btn-sm" type="submit">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-info br-10 mb-4 p-3 pb-2">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14 fw-medium d-inline-flex align-items-center mb-2"><i
                                    class="isax isax-info-circle me-2"
                                ></i>Save an average of 15% on thousands of cruise when you're signed in</p>
                            <a class="btn btn-white btn-sm mb-2" href="login.html">Sign In</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-05.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-02.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-04.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a class="fav-icon selected" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-08.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Beth Williams</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                            <p class="fs-14 text-truncate">(400)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Super Aquamarine</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2021</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width
                                                : <span class="text-dark fw-medium">88.47 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >19 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"></i><i
                                                class="isax isax-scissor me-2"
                                            ></i><i class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"
                                            ></i><a class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$500 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <a href="cruise-details.html">
                                        <img class="img-fluid" src="assets/img/cruise/cruise-12.jpg" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-09.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Tom Andrews</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                            <p class="fs-14 text-truncate">(300)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Bonnie Yacht</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2020</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >3</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width
                                                : <span class="text-dark fw-medium">70.63 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >17 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"></i><i
                                                class="isax isax-scissor me-2"
                                            ></i><i class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"
                                            ></i><a class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$600 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <a href="cruise-details.html">
                                        <img class="img-fluid" src="assets/img/cruise/cruise-09.jpg" alt="img">
                                    </a>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-10.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Robert Cogs</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                            <p class="fs-14 text-truncate">(320)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Coral Cruiser</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2021</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width
                                                : <span class="text-dark fw-medium">88.47 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >19 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"></i><i
                                                class="isax isax-scissor me-2"
                                            ></i><i class="isax isax-profile-2user me-2"></i><i
                                                class="isax isax-wind-2 me-2"
                                            ></i><a class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$500 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <a href="cruise-details.html">
                                        <img class="img-fluid" src="assets/img/cruise/cruise-09.jpg"
                                            alt="img"
                                        >
                                    </a>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-11.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Kenneth Pal</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.3</span>
                                            <p class="fs-14 text-truncate">(380)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Harbor Haven</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2016</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >6</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >98.15 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >14 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$300 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-01.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-07.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-05.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-12.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Timothy</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.1</span>
                                            <p class="fs-14 text-truncate">(300)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Albert Yacht</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2018</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >3</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >90.25 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >25 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$550 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <a href="cruise-details.html">
                                        <img class="img-fluid" src="assets/img/cruise/cruise-11.jpg"
                                            alt="img"
                                        >
                                    </a>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-13.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Mark Arriton</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.4</span>
                                            <p class="fs-14 text-truncate">(450)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Shelly Yacht</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2023</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >2</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >72.83 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >23 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$450 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-07.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-08.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-11.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-14.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Beth Will</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.6</span>
                                            <p class="fs-14 text-truncate">(520)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Sunny Sailor</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2008</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >4</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >64.37 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >18 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$350 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-06.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-12.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-04.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-15.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">John James</p>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.8</span>
                                            <p class="fs-14 text-truncate">(360)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Ocean Voyager</a>
                                    </h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2022</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >7</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >98.56 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >15 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$700 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                        <!-- Cruise Grid -->
                        <div class="col-xl-4 col-md-6 d-flex">
                            <div class="place-item flex-fill mb-4">
                                <div class="place-img">
                                    <div class="img-slider image-slide owl-carousel nav-center">
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-08.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-05.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="cruise-details.html">
                                                <img class="img-fluid" src="assets/img/cruise/cruise-03.jpg"
                                                    alt="img"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item">
                                        <a class="fav-icon" href="javascript:void(0);">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-info d-inline-flex align-items-center"><i
                                                class="isax isax-ranking me-1"
                                            ></i>Trending</span>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">

                                        <a class="d-flex align-items-center me-2 overflow-hidden"
                                            href="javascript:void(0);"
                                        >
                                            <span class="avatar avatar-md me-2 flex-shrink-0">
                                                <img class="rounded-circle" src="assets/img/users/user-16.jpg"
                                                    alt="img"
                                                >
                                            </span>
                                            <p class="fs-14 text-truncate">Ronald Moult</p>
                                        </a>

                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2"
                                            >4.2</span>
                                            <p class="fs-14 text-truncate">(500)</p>
                                        </div>
                                    </div>
                                    <h5 class="text-truncate mb-1"><a href="cruise-details.html">Sailor’s
                                            Delight</a></h5>
                                    <p class="d-flex align-items-center mb-3"><i
                                            class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                    <div
                                        class="curise-details d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-calendar-2 text-gray-6 me-1"></i>Year : <span
                                                    class="text-dark fw-medium"
                                                >2021</span></p>
                                            <p><i class="isax isax-user me-1"></i>Guests : <span
                                                    class="text-dark fw-medium"
                                                >6</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-1"><i
                                                    class="isax isax-fatrows text-gray-6 me-1"></i>Width : <span
                                                    class="text-dark fw-medium"
                                                >95.14 m</span></p>
                                            <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                    class="text-dark fw-medium"
                                                >16 Knots</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                        <h6 class="d-flex align-items-center"><i
                                                class="isax isax-home-wifi me-2 ms-2"
                                            ></i><i class="isax isax-scissor me-2"></i><i
                                                class="isax isax-profile-2user me-2"
                                            ></i><i class="isax isax-wind-2 me-2"></i><a
                                                class="fs-14 fw-normal text-default d-inline-block"
                                                href="javascript:void(0);"
                                            >+2</a></h6>
                                        <h5 class="text-primary me-2 text-nowrap">$650 <span
                                                class="fs-14 fw-normal text-default"
                                            >/ day</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cruise Grid -->

                    </div>

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Pagination -->

                </div>

            </div>
        </div>
    </div>
</x-layout.app>
