<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('backend/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="layout-1">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('backend/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="layout-2">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('backend/assets/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('backend/assets/css/app-dark.min.css') }}">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('backend/assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="layout-3">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{ asset('backend/assets/css/app-rtl.min.css') }}">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>

{{--Mega Menu--}}
<div class="dropdown dropdown-mega d-none d-lg-block ms-2">
    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
        Mega Menu
        <i class="mdi mdi-chevron-down"></i>
    </button>
    <div class="dropdown-menu dropdown-megamenu">
        <div class="row">
            <div class="col-sm-8">

                <div class="row">
                    <div class="col-md-4">
                        <h5 class="font-size-14">UI Components</h5>
                        <ul class="list-unstyled megamenu-list">
                            <li>
                                <a href="javascript:void(0);">Lightbox</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Range Slider</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Rating</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Forms</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Tables</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Charts</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="font-size-14">Applications</h5>
                        <ul class="list-unstyled megamenu-list">
                            <li>
                                <a href="javascript:void(0);">Ecommerce</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Calendar</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Email</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Projects</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Tasks</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Contacts</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="font-size-14">Extra Pages</h5>
                        <ul class="list-unstyled megamenu-list">
                            <li>
                                <a href="javascript:void(0);">Light Sidebar</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Compact Sidebar</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Horizontal layout</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Maintenance</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Coming Soon</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Timeline</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">FAQs</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="font-size-14">UI Components</h5>
                        <ul class="list-unstyled megamenu-list">
                            <li>
                                <a href="javascript:void(0);">Lightbox</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Range Slider</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Rating</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Forms</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Tables</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Charts</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-5">
                        <div>
                            <img src="{{ asset('backend/assets/images/megamenu-img.png') }}" alt="megamenu-img" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{--  from header.blade.php --}}
{{--Land Menu--}}
<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="ri-search-line"></i>
</button>
<form class="p-3">
    <div class="mb-3 m-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search ...">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
            </div>
        </div>
    </div>
</form>
{{--Flag Lang--}}
<div class="dropdown d-inline-block d-lg-none ms-2">
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
         aria-labelledby="page-header-search-dropdown">

    </div>
</div>
<div class="dropdown d-none d-sm-inline-block">
    <button type="button" class="btn header-item waves-effect"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="" src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
    </button>
    <div class="dropdown-menu dropdown-menu-end">

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="{{ asset('backend/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="{{ asset('backend/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="{{ asset('backend/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="{{ asset('backend/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
        </a>
    </div>
</div>
{{--Quadro--}}
<div class="dropdown d-none d-lg-inline-block ms-1">
    <button type="button" class="btn header-item noti-icon waves-effect"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ri-apps-2-line"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <div class="px-lg-2">
            <div class="row g-0">
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                        <span>GitHub</span>
                    </a>
                </div>
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                        <span>Bitbucket</span>
                    </a>
                </div>
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}" alt="dribbble">
                        <span>Dribbble</span>
                    </a>
                </div>
            </div>

            <div class="row g-0">
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}" alt="dropbox">
                        <span>Dropbox</span>
                    </a>
                </div>
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                        <span>Mail Chimp</span>
                    </a>
                </div>
                <div class="col">
                    <a class="dropdown-icon-item" href="#">
                        <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                        <span>Slack</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Notification--}}
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
     aria-labelledby="page-header-notifications-dropdown">
    <div class="p-3">
        <div class="row align-items-center">
            <div class="col">
                <h6 class="m-0"> Notifications </h6>
            </div>
            <div class="col-auto">
                <a href="#!" class="small"> View All</a>
            </div>
        </div>
    </div>
    <div data-simplebar style="max-height: 230px;">
        <a href="" class="text-reset notification-item">
            <div class="d-flex">
                <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                </div>
                <div class="flex-1">
                    <h6 class="mb-1">Your order is placed</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">If several languages coalesce the grammar</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="text-reset notification-item">
            <div class="d-flex">
                <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}"
                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                <div class="flex-1">
                    <h6 class="mb-1">James Lemire</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">It will seem like simplified English.</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="text-reset notification-item">
            <div class="d-flex">
                <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                </div>
                <div class="flex-1">
                    <h6 class="mb-1">Your item is shipped</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">If several languages coalesce the grammar</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="" class="text-reset notification-item">
            <div class="d-flex">
                <img src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}"
                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                <div class="flex-1">
                    <h6 class="mb-1">Salena Layfield</h6>
                    <div class="font-size-12 text-muted">
                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="p-2 border-top">
        <div class="d-grid">
            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
            </a>
        </div>
    </div>
</div>
{{--Notification--}}
<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ri-notification-3-line"></i>
        <span class="noti-dot"></span>
    </button>

</div>
{{--Setting--}}
<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
        <i class="ri-settings-2-line"></i>
    </button>
</div>

{{--from sidebar.blade.php --}}
{{--User details--}}
<div class="user-profile text-center mt-3">
    <div class="">
        <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
    </div>
    <div class="mt-3">
        <h4 class="font-size-16 mb-1">Julia Hudda</h4>
        <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
    </div>
</div>
{{--Components--}}
<li class="menu-title">Components</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-pencil-ruler-2-line"></i>
        <span>UI Elements</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="ui-alerts.html">Alerts</a></li>
        <li><a href="ui-buttons.html">Buttons</a></li>
        <li><a href="ui-cards.html">Cards</a></li>
        <li><a href="ui-carousel.html">Carousel</a></li>
        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
        <li><a href="ui-grid.html">Grid</a></li>
        <li><a href="ui-images.html">Images</a></li>
        <li><a href="ui-lightbox.html">Lightbox</a></li>
        <li><a href="ui-modals.html">Modals</a></li>
        <li><a href="ui-offcanvas.html">Offcavas</a></li>
        <li><a href="ui-progressbars.html">Progress Bars</a></li>
        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
        <li><a href="ui-typography.html">Typography</a></li>
        <li><a href="ui-video.html">Video</a></li>
        <li><a href="ui-general.html">General</a></li>

    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-vip-crown-2-line"></i>
        <span>Advanced UI</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="advance-rangeslider.html">Range Slider</a></li>
        <li><a href="advance-roundslider.html">Round Slider</a></li>
        <li><a href="advance-session-timeout.html">Session Timeout</a></li>
        <li><a href="advance-sweet-alert.html">Sweetalert 2</a></li>
        <li><a href="advance-rating.html">Rating</a></li>
        <li><a href="advance-notifications.html">Notifications</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="waves-effect">
        <i class="ri-eraser-fill"></i>
        <span class="badge rounded-pill bg-danger float-end">8</span>
        <span>Forms</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="form-elements.html">Form Elements</a></li>
        <li><a href="form-validation.html">Form Validation</a></li>
        <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
        <li><a href="form-editors.html">Form Editors</a></li>
        <li><a href="form-uploads.html">Form File Upload</a></li>
        <li><a href="form-xeditable.html">Form X-editable</a></li>
        <li><a href="form-wizard.html">Form Wizard</a></li>
        <li><a href="form-mask.html">Form Mask</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-table-2"></i>
        <span>Tables</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="tables-basic.html">Basic Tables</a></li>
        <li><a href="tables-datatable.html">Data Tables</a></li>
        <li><a href="tables-responsive.html">Responsive Table</a></li>
        <li><a href="tables-editable.html">Editable Table</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-bar-chart-line"></i>
        <span>Charts</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="charts-apex.html">Apex Charts</a></li>
        <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
        <li><a href="charts-flot.html">Flot Charts</a></li>
        <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
        <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-brush-line"></i>
        <span>Icons</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="icons-remix.html">Remix Icons</a></li>
        <li><a href="icons-materialdesign.html">Material Design</a></li>
        <li><a href="icons-dripicons.html">Dripicons</a></li>
        <li><a href="icons-fontawesome.html">Font awesome 5</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-map-pin-line"></i>
        <span>Maps</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="maps-google.html">Google Maps</a></li>
        <li><a href="maps-vector.html">Vector Maps</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-share-line"></i>
        <span>Multi Level</span>
    </a>
    <ul class="sub-menu" aria-expanded="true">
        <li><a href="javascript: void(0);">Level 1.1</a></li>
        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="javascript: void(0);">Level 2.1</a></li>
                <li><a href="javascript: void(0);">Level 2.2</a></li>
            </ul>
        </li>
    </ul>
</li>

{{-- =========== index.blade.php=========== --}}
{{--Email Sent--}}

<h4 class="card-title mb-4">Email Sent</h4>
<div class="text-center pt-3">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="d-inline-flex">
                <h5 class="me-2">25,117</h5>
                <div class="text-success font-size-12">
                    <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                </div>
            </div>
            <p class="text-muted text-truncate mb-0">Marketplace</p>
        </div><!-- end col -->
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="d-inline-flex">
                <h5 class="me-2">$34,856</h5>
                <div class="text-success font-size-12">
                    <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                </div>
            </div>
            <p class="text-muted text-truncate mb-0">Last Week</p>
        </div><!-- end col -->
        <div class="col-sm-4">
            <div class="d-inline-flex">
                <h5 class="me-2">$18,225</h5>
                <div class="text-success font-size-12">
                    <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                </div>
            </div>
            <p class="text-muted text-truncate mb-0">Last Month</p>
        </div><!-- end col -->
    </div><!-- end row -->
</div>
{{--Revenue--}}
<h4 class="card-title mb-4">Revenue</h4>

<div class="text-center pt-3">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div>
                <h5>17,493</h5>
                <p class="text-muted text-truncate mb-0">Marketplace</p>
            </div>
        </div><!-- end col -->
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div>
                <h5>$44,960</h5>
                <p class="text-muted text-truncate mb-0">Last Week</p>
            </div>
        </div><!-- end col -->
        <div class="col-sm-4">
            <div>
                <h5>$29,142</h5>
                <p class="text-muted text-truncate mb-0">Last Month</p>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
</div>

<div class="card-body pb-0">
    <div class="float-end d-none d-md-inline-block">
        <div class="dropdown">
            <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="text-muted">This Years<i class="mdi mdi-chevron-down ms-1"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Today</a>
                <a class="dropdown-item" href="#">Last Week</a>
                <a class="dropdown-item" href="#">Last Month</a>
                <a class="dropdown-item" href="#">This Year</a>
            </div>
        </div>
    </div>
</div>
{{--...--}}
<div class="col-xl-4">
    <div class="card">
        <div class="card-body">
            <div class="float-end">
                <select class="form-select shadow-none form-select-sm">
                    <option selected>Apr</option>
                    <option value="1">Mar</option>
                    <option value="2">Feb</option>
                    <option value="3">Jan</option>
                </select>
            </div>
            <h4 class="card-title mb-4">Monthly Earnings</h4>

            <div class="row">
                <div class="col-4">
                    <div class="text-center mt-4">
                        <h5>3475</h5>
                        <p class="mb-2 text-truncate">Market Place</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-4">
                    <div class="text-center mt-4">
                        <h5>458</h5>
                        <p class="mb-2 text-truncate">Last Week</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-4">
                    <div class="text-center mt-4">
                        <h5>9062</h5>
                        <p class="mb-2 text-truncate">Last Month</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="mt-4">
                <div id="donut-chart" class="apex-charts"></div>
            </div>
        </div>
    </div><!-- end card -->
</div><!-- end col -->




