<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title> {{ env('APP_NAME') }}  | Login Page </title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--begin::Page Custom Styles(used by this page) -->
        <link href="{{ asset('assets/admin') }}/css/demo1/pages/login/login-6.css" rel="stylesheet" type="text/css" />

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/admin') }}/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

	</head>

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div class="kt-login__logo">
										<a href="#">
											<img width="100px" src="{{ asset('assets/admin') }}/media/company-logos/logo-2.png">
										</a>
									</div>
									<div class="kt-login__signin">
										<div class="kt-login__head">
											<h3 class="kt-login__title"> Sign In To Admin </h3>
										</div>
										<div class="kt-login__form">
                                            {!! Form:: open(['method'=>'POST', 'route' => "admin.login", 'class' => 'kt-form']) !!}
												<div class="form-group">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="enter email" />
                                                    @if ($errors->has('email'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
												<div class="form-group">
                                                    <input id="password" type="password" class="form-control form-control-last" name="password" placeholder="enter password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="remember"> Remember me
														<span></span>
													</label>
													{{-- <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a> --}}
												</div>
												<div class="kt-login__actions">
                                                    <button type="submit" id="m_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">
                                                        Sign In
                                                    </button>
                                                </div>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{ asset('assets/admin/media//bg/bg-8.jpg') }});">
						<div class="kt-login__section">
							<div class="kt-login__block">
                                <h4 class="kt-login__title">Welcome to <span style="font-weight: bolder; color: #233746;">{{ env('APP_NAME') }}</span> Dashboard </h4>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
