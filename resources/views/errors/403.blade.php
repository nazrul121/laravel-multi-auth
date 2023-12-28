
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>{{request()->get('system_title')}} | Error 403</title>
    <meta name="description" content="Page not found" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('/assets/plugins/global/plugins.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/css/style.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{request()->get('favicon')}}" />

</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-white header-fixed header-mobile-fixed subheader-enabled page-loading">

		<div class="d-flex flex-column flex-root">
			<!--begin::Error-->
			<div class="d-flex flex-column-fluid flex-center">
				<div class="d-flex flex-center flex-column flex-lg-row p-10 p-lg-20">
					<div class="d-flex flex-column justify-content-center align-items-center align-items-lg-end flex-row-fluid order-2 order-lg-1">
						<!--begin::Content-->
						<h1 class="font-weight-boldest text-warning mb-5" style="font-size: 8rem">403</h1>
						<p class="font-size-h3 text-center text-muted font-weight-normal py-2">OOPS! You dont have <span class="text-danger">Permission</span> overthere</p>
						<a href="{{url('/')}}" class="btn btn-light-warning font-weight-bolder py-4 px-8">
						<span class="svg-icon svg-icon-md mr-3">
							<!--begin::Svg Icon | path:/keen/theme/demo3/dist/assets/media/svg/icons/Navigation/Arrow-left.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
									<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>Return Home</a>
						<!--end::Content-->
					</div>
					<img src="{{asset('/storage/images/403.avif')}}" alt="image" class="w-100 w-sm-350px w-md-600px order-1 order-lg-2" />
				</div>
			</div>
			<!--end::Error-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('/assets/plugins/global/plugins.bundle1036.js?v=2.1.1')}}"></script>
		<script src="{{asset('/assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1')}}"></script>
		<script src="{{asset('/assets/js/scripts.bundle1036.js?v=2.1.1')}}"></script>
		<!--end::Global Theme Bundle-->
	</body>
</html>