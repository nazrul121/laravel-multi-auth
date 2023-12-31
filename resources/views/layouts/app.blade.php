<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta charset="utf-8" />
	<title>@yield('title','Mbrella HR')</title>
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="{{asset('assets/css/pages/login/login-11036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/global/plugins.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.bundle1036.css?v=2.1.1')}}" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="https://preview.keenthemes.com/keen/theme/demo3/dist/assets/media/logos/favicon.ico" />
	@stack('style')

	@vite('resources/js/app.js')
</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

		<div class="d-flex flex-column flex-root">
			@yield('content')
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>

		<script src="{{asset('assets/plugins/global/plugins.bundle1036.js?v=2.1.1')}}"></script>
		<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle1036.js?v=2.1.')}}1"></script>

		<script src="{{asset('assets/js/pages/custom/login/login1036.js?v=2.1.1')}}"></script>
		@stack('scripts')
	</body>
	
</html>