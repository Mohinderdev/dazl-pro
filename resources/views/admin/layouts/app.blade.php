<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> @yield('page-title') - @yield('page-sub-title') </title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--end::Fonts -->

    <link href="{{ asset('assets/admin') }}/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('assets/admin') }}/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->
    <link href="{{ asset('assets/admin') }}/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/admin') }}/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/css/demo1/custom.style.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('assets/admin') }}/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin') }}/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/media/logos/logo-light.png" />
    @stack('javascript')
    @stack('css')
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{route('dashboard.index')}}">
            <img width="40px" height="40px" alt="Logo" src="{{ asset('assets/admin') }}/media/logos/logo-light.png" />
        </a>
        <p style="color: white; margin-top:40px; margin-left:5px ">A real state collabration hub</p>

    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">


        @include('admin.layouts.sidebar')

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
        @include('admin.layouts.header')
        <!-- end:: Header -->

            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Content Head -->
            @include('admin.layouts.subheader')

            <!-- end:: Content Head -->

                <!-- begin:: Content -->
                <div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                @include('admin.layouts.notifier')

                @yield('content')

                <!--End::Dashboard 1-->
                </div>

                <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__copyright">
                        2021 &nbsp;&copy;&nbsp;
                        <a href="{{ route('dashboard.index') }}" target="_blank" class="kt-link">
                            PAULA GEORGE
                        </a>
                    </div>
                    <div class="kt-footer__menu">
                        <a href="{{ route('dashboard.index') }}" target="_blank" class="kt-footer__menu-link kt-link"> Home </a>
                    </div>
                </div>
            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->

@include('admin.layouts.control-sidebar')

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->



<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                    <span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>

                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages--solid">
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        How likely are you to recommend our company<br> to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." style="height: 50px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{ asset('assets/admin') }}/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('assets/admin') }}/js/demo1/scripts.bundle.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('assets/admin') }}/js/demo1/pages/dashboard.js" type="text/javascript"></script>
<script src="{{ asset('assets/admin') }}/js/demo1/custom.scripts.js" type="text/javascript"></script>
@stack('scripts')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
