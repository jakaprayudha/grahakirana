<?php
require '../controller/auth/viewController.php';
require '../controller/master/mahasiwaController.php';
$id = $_GET['id'];
if ($id != NULL) {
	$checkdetail = mysqli_query($koneksi, "SELECT * FROM ms_student LEFT OUTER JOIN ms_faculty ON ms_faculty.id_faculty = ms_student.id_faculty LEFT OUTER JOIN ms_program_study ON ms_program_study.id_prodi = ms_student.id_program_study LEFT OUTER JOIN ms_lecture ON ms_lecture.id_lecture = ms_student.id_academic_advisor LEFT OUTER JOIN ms_class ON ms_class.id_class = ms_student.student_class LEFT OUTER JOIN ms_student_details ON ms_student_details.student_uid = ms_student.student_uid WHERE ms_student.student_uid='$id'");
	$datastudent = mysqli_fetch_array($checkdetail);
}

?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<?php
require '../template/head-apps.php';
?>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body">
	<!--begin::Theme mode setup on page load-->
	<script>
		if (document.documentElement) {
			const defaultThemeMode = "system";
			const name = document.body.getAttribute("data-kt-name");
			let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
			if (themeMode === null) {
				if (defaultThemeMode === "system") {
					themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
				} else {
					themeMode = defaultThemeMode;
				}
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
				<!--begin::Brand-->
				<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
					<!--begin::Logo-->
					<a href="../../demo3/dist/index.html">
						<img alt="Logo" src="assets/media/logos/demo3.svg" class="h-20px logo theme-light-show" />
						<img alt="Logo" src="assets/media/logos/demo3-dark.svg" class="h-20px logo theme-dark-show" />
					</a>
					<!--end::Logo-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside menu-->
				<?php
				require 'menu.php';
				?>
				<!--end::Aside menu-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header">
					<!--begin::Container-->
					<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
							<!--begin::Heading-->
							<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Mahasiswa</h1>
							<!--end::Heading-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
								<li class="breadcrumb-item text-muted">Academic</li>
								<li class="breadcrumb-item text-muted">Mahasiswa</li>
								<li class="breadcrumb-item text-dark">Details Form</li>
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title=-->

						<!--begin::Topbar-->
						<div class="d-flex align-items-center flex-shrink-0">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
								<!--begin::Tablet and mobile search toggle-->
								<div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px">
										<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
												<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Tablet and mobile search toggle-->
								<!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
								<form data-kt-search-element="form" class="d-none align-items-center d-lg-flex w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									<input type="hidden" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
											<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->

							</div>
							<!--end::Search-->
							<!--begin::Activities-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Drawer toggle-->
								<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px" id="kt_activities_toggle">
									<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
											<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Drawer toggle-->
							</div>
							<!--end::Activities-->
							<!--begin::Chat-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Drawer wrapper-->
								<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px position-relative" id="kt_drawer_chat_toggle">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
											<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Bullet-->
									<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									<!--end::Bullet-->
								</div>
								<!--end::Drawer wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::Theme mode-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Menu toggle-->
								<a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
									<span class="svg-icon theme-light-show svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
											<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
											<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
											<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
											<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
											<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
											<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
											<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
											<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
									<span class="svg-icon theme-dark-show svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
											<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
											<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
											<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--begin::Menu toggle-->
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
														<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
														<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
														<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
														<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
														<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
														<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
														<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
														<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Light</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
														<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
														<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
														<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Dark</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">System</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Theme mode-->
							<!--begin::Sidebar Toggler-->
							<!--end::Sidebar Toggler-->
						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						<!--begin::Form-->
						<form class="form d-flex flex-column flex-lg-row" method="POST">
							<input type="hidden" name="id" value="<?= $id ?>">
							<!--begin::Aside column-->
							<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
								<!--begin::Thumbnail settings-->
								<div class="card card-flush py-4">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Foto</h2>
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body text-center pt-0">
										<!--begin::Image input-->
										<!--begin::Image input placeholder-->
										<style>
											.image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image.svg');
											}

											[data-theme="dark"] .image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image-dark.svg');
											}
										</style>
										<!--end::Image input placeholder-->
										<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-150px h-150px"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
												<i class="bi bi-pencil-fill fs-7"></i>
												<!--begin::Inputs-->
												<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="avatar_remove" />
												<!--end::Inputs-->
											</label>
											<!--end::Label-->
											<!--begin::Cancel-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
												<i class="bi bi-x fs-2"></i>
											</span>
											<!--end::Cancel-->
											<!--begin::Remove-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
												<i class="bi bi-x fs-2"></i>
											</span>
											<!--end::Remove-->
										</div>
										<!--end::Image input-->
										<!--begin::Description-->
										<div class="text-muted fs-7">Set the image thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
										<!--end::Description-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Thumbnail settings-->
								<!--begin::Status-->
								<div class="card card-flush py-4">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Status</h2>
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
										</div>
										<!--begin::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Select2-->
										<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="status" id="kt_ecommerce_add_product_status_select">
											<option value="1" <?= ($datastudent['student_status'] == "1") ? "selected" : "" ?>>Active</option>
											<option value="0" <?= ($datastudent['student_status'] == "0") ? "selected" : "" ?>>Inactive</option>
											<option value="99" <?= ($datastudent['student_status'] == "99") ? "selected" : "" ?>>Skorsing</option>
										</select>
										<!--end::Select2-->
										<!--begin::Description-->
										<div class="text-muted fs-7">Set the student status.</div>
										<!--end::Description-->
										<!--begin::Datepicker-->
										<div class="d-none mt-10">
											<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
											<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" />
										</div>
										<!--end::Datepicker-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Status-->
								<!--begin::Category & tags-->
								<div class="card card-flush py-4">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Advisor Student</h2>
										</div>
										<!--end::Card title-->
									</div>

									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Input group-->
										<!--begin::Label-->
										<label class="form-label">Lecture</label>
										<!--end::Label-->
										<!--begin::Select2-->
										<select class="form-select mb-2" data-control="select2" name="dosen_pendamping" data-placeholder="Select an option" data-allow-clear="true">
											<option value="<?= $datastudent['id_academic_advisor'] ?>"><?= $datastudent['lecture_name'] ?></option>
											<?php
											$getdosen = tampildata("SELECT * FROM ms_lecture");
											?>
											<?php foreach ($getdosen as $dosen) : ?>
												<option value="<?= $dosen['id_lecture'] ?>"><?= $dosen['lecture_name'] ?></option>
											<?php endforeach ?>
										</select>
										<!--end::Select2-->
										<!--begin::Description-->
										<div class="text-muted fs-7 mb-7">Add lecture to a advisor.</div>
										<!--end::Description-->
										<!--end::Input group-->
										<!--begin::Button-->
										<a href="admin/dosen" class="btn btn-light-primary btn-sm mb-10">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
													<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Create new lecture</a>
										<!--end::Button-->
										<!--begin::Input group-->
										<!--end::Input group-->
										<?php
										if ($datastudent['lecture_name'] == NULL) { ?>
											<div class="alert alert-warning" role="alert">
												Belum Memiliki Dosen Pendamping Akademik
											</div>
										<?php }
										?>

									</div>

									<!--end::Card body-->
								</div>
								<!--end::Category & tags-->
							</div>
							<!--end::Aside column-->
							<!--begin::Main column-->
							<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
								<!--begin:::Tabs-->
								<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Data Pribadi</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Akademik</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#krs">KRS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#khs">KHS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#dns">DNS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#skpi">SKPI</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#p2m">P2M</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#uangkuliah">Uang Kuliah</a>
									</li>
									<!--end:::Tab item-->
								</ul>
								<!--end:::Tabs-->
								<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab pane-->
									<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<!--begin::General options-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>General</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-7 fv-row">
														<!--begin::Label-->
														<label class="required form-label">NPM</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="npm" class="form-control mb-2" placeholder="20221222" value="<?= @$datastudent['npm'] ?>" />
														<!--end::Input-->
														<!--begin::Description-->
														<div class="text-muted fs-7">A NPM ID is required and recommended to be unique.</div>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<!--begin::Input group-->
													<div class="mb-7 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Nama Lengkap</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" value="<?= @$datastudent['student_name'] ?>" name="nama_mahasiswa" class="form-control mb-2" />
														<!--end::Input-->
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<div class="row">
														<div class="col">
															<div class="mb-7 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Agama</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="agama" class="form-select" id="agama">
																	<option value="<?= @$datastudent['student_religion'] ?>"><?= @$datastudent['student_religion'] ?></option>
																	<option value="Islam">Islam</option>
																	<option value="Kristen">Kristen</option>
																	<option value="Katholik">Katholik</option>
																	<option value="Hindu">Hindu</option>
																	<option value="Buddha">Buddha</option>
																	<option value="Konghucu">Konghucu</option>
																</select>
																<!--end::Input-->
																<!--end::Description-->
															</div>
														</div>
														<div class="col">
															<div class="mb-7 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Jenis Kelamin</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="gender" class="form-select" id="gender">
																	<option value="<?= @$datastudent['student_gender'] ?>"><?= @$datastudent['student_gender'] ?></option>
																	<option value="Pria">Pria</option>
																	<option value="Wanita">Wanita</option>
																</select>
																<!--end::Input-->
																<!--end::Description-->
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="mb-7 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Tempat Lahir</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" value="<?= @$datastudent['student_addressbirth'] ?>" class="form-control" name="tempatlahir" id="tempatlahir">
																<!--end::Input-->
																<!--end::Description-->
															</div>
														</div>
														<div class="col">
															<div class="mb-7 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Tanggal Lahir</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="date" value="<?= @$datastudent['student_datebirth'] ?>" class="form-control" name="tanggallahir" id="tanggallahir">
																<!--end::Input-->
																<!--end::Description-->
															</div>
														</div>
													</div>
													<div class="mb-7 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Alamat Domisili</label>
														<!--end::Label-->
														<!--begin::Input-->
														<textarea name="alamat" class="form-control" required rows="10" id="alamat"><?= $datastudent['student_address'] ?></textarea>
														<!--end::Input-->
														<!--end::Description-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::General options-->
											<!--begin::Media-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Media</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="fv-row mb-2">
														<!--begin::Dropzone-->
														<div class="dropzone" id="kt_ecommerce_add_product_media">
															<!--begin::Message-->
															<div class="dz-message needsclick">
																<!--begin::Icon-->
																<i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="ms-4">
																	<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																	<span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
																</div>
																<!--end::Info-->
															</div>
														</div>
														<!--end::Dropzone-->
													</div>
													<!--end::Input group-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the resource media .</div>
													<!--end::Description-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::Media-->
											<!--begin::Pricing-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Academic</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<div class="mb-7 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Fakultas</label>
														<!--end::Label-->
														<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" name="fakultas" data-allow-clear="true">
															<option value="<?= $datastudent['id_faculty'] ?>"><?= $datastudent['faculty_long'] ?></option>
															<?php
															$getfakultas = tampildata("SELECT * FROM ms_faculty");
															?>
															<?php foreach ($getfakultas as $fakultas) : ?>
																<option value="<?= $fakultas['id_faculty'] ?>"><?= $fakultas['faculty_long'] ?></option>
															<?php endforeach ?>
														</select>
														<!--end::Description-->
													</div>
													<div class="mb-7 fv-row">
														<!--begin::Label-->
														<label class="required form-label">Program Studi</label>
														<!--end::Label-->
														<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" name="prodi" data-allow-clear="true">
															<option value="<?= $datastudent['id_prodi'] ?>"><?= $datastudent['program_study_long'] ?></option>
															<?php
															$getprodi = tampildata("SELECT * FROM ms_program_study");
															?>
															<?php foreach ($getprodi as $prodi) : ?>
																<option value="<?= $prodi['id_prodi'] ?>"><?= $prodi['program_study_long'] ?></option>
															<?php endforeach ?>
														</select>
														<!--end::Description-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-6 fw-semibold mb-2">Degree
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Pilih jenjang pendidikan mahasiswa"></i></label>
														<!--End::Label-->
														<!--begin::Row-->
														<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																		<input class="form-check-input" type="radio" name="degree" value="D3" <?= ($datastudent['degree'] == "D3") ? "checked" : ""; ?> />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Info-->
																	<span class="ms-5">
																		<span class="fs-4 fw-bold text-gray-800 d-block">Diploma 3</span>
																	</span>
																	<!--end::Info-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																		<input class="form-check-input" type="radio" name="degree" value="S1" <?= ($datastudent['degree'] == "S1") ? "checked" : ""; ?> />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Info-->
																	<span class="ms-5">
																		<span class="fs-4 fw-bold text-gray-800 d-block">Strata 1</span>
																	</span>
																	<!--end::Info-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Option-->
																<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																		<input class="form-check-input" type="radio" name="degree" value="S2" <?= ($datastudent['degree'] == "S2") ? "checked" : ""; ?> />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Info-->
																	<span class="ms-5">
																		<span class="fs-4 fw-bold text-gray-800 d-block">Strata 2</span>
																	</span>
																	<!--end::Info-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Input group-->
													<!--begin::Tax-->

													<div class="d-flex flex-wrap gap-5">
														<!--begin::Input group-->
														<div class="fv-row w-100 flex-md-root">
															<!--begin::Label-->
															<label class="form-label">Kategori</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select class="form-select mb-2" name="kategori" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
																<option value="<?= $datastudent['student_category'] ?>"><?= $datastudent['student_category'] ?></option>
																<option value="Reguler">Reguler</option>
																<option value="Transfer">Transfer</option>
															</select>
															<!--end::Input-->
															<!--begin::Description-->
															<!--end::Description-->
														</div>
														<!--begin::Input group-->
														<div class="fv-row w-100 flex-md-root">
															<!--begin::Label-->
															<label class="form-label">Tahun Akademik</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select class="form-select mb-2" name="tahun" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
																<option value="<?= $datastudent['student_year'] ?>"><?= $datastudent['student_year'] ?></option>
																<?php
																$gettahun = tampildata("SELECT * FROM ms_academic_year WHERE periode_status = 1");
																?>
																<?php foreach ($gettahun as $tahun): ?>
																	<option value="<?= $tahun['periode'] ?>"><?= $tahun['periode'] ?></option>
																<?php endforeach ?>
															</select>
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Periode tahun akademik aktif saat ini</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row w-100 flex-md-root">
															<!--begin::Label-->
															<label class="required form-label">Semester</label>
															<!--end::Label-->
															<!--begin::Select2-->
															<select class="form-select mb-2" name="semester" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
																<option value="<?= $datastudent['student_semester'] ?>"><?= $datastudent['student_semester'] ?></option>
																<option value="1">Semester I</option>
																<option value="2">Semester II</option>
																<option value="3">Semester III</option>
																<option value="4">Semester IV</option>
																<option value="5">Semester V</option>
																<option value="6">Semester VI</option>
																<option value="7">Semester VII</option>
																<option value="8">Semester VIII</option>
															</select>
															<!--end::Select2-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Semester active mahasiswa saat ini.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row w-100 flex-md-root">
															<!--begin::Label-->
															<label class="required form-label">Kelas</label>
															<!--end::Label-->
															<!--begin::Select2-->
															<select class="form-select mb-2" name="kelas" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
																<option value="<?= $datastudent['student_class'] ?>"><?= $datastudent['class_name'] ?></option>
																<?php
																$getkelas = tampildata("SELECT * FROM ms_class WHERE class_status=1");
																?>
																<?php foreach ($getkelas as $kelas): ?>
																	<option value="<?= $kelas['id_class'] ?>"><?= $kelas['class_name'] ?></option>
																<?php endforeach ?>
															</select>
															<!--end::Select2-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Kelas aktif mahasiswa saat ini.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->

													</div>
													<!--end:Tax-->
												</div>
												<!--end::Card header-->
											</div>
											<!--end::Pricing-->
										</div>
									</div>
									<!--end::Tab pane-->
									<!--begin::Tab pane-->
									<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<?php
											if ($datastudent == NULL) { ?>
												<div class="alert alert-danger" role="alert">
													Formulir ini akan active setelah anda mendaftarkan mahasiswa tersebut dengan benar.
												</div>
											<?php	} else { ?>
												<!--begin::Inventory-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Akademik</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<div class="row">
															<div class="col">
																<!--begin::Input group-->
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">No.Telepon</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="tel" name="telepon" class="form-control mb-2" placeholder="62" value="<?= $datastudent['student_phone'] ?>" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the phone number whatsapp.</div>
																	<!--end::Description-->
																</div>
															</div>
															<div class="col">
																<!--begin::Input group-->
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Email</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="email" name="email" class="form-control mb-2" placeholder="" value="<?= $datastudent['student_mail'] ?>" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the email for login activity.</div>
																	<!--end::Description-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-7 fv-row">
															<!--begin::Label-->
															<label class="required form-label">Barcode</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" name="sku" class="form-control form-control-solid mb-2" placeholder="Barcode Number" readonly value="<?= $id ?>" />
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Enter the student barcode number.</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Label-->
															<label class="form-label">Cuti Kegiatan Perkuliahan</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div class="form-check form-check-custom form-check-solid mb-2">
																<input class="form-check-input" type="checkbox" name="student_leave" value="1" <?= ($datastudent['student_leave'] == 1) ? "checked" : "" ?> />
																<label class="form-check-label">Yes</label>
															</div>
															<!--end::Input-->
															<!--begin::Description-->
															<div class="text-muted fs-7">Centang apabila mahasiswa cuti / tidak aktif dalam waktu tertentu</div>
															<!--end::Description-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card header-->
												</div>
												<!--end::Inventory-->
												<!--begin::Variations-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Orang Tua</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<div class="row">
															<div class="col">
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class=" form-label">Nama Ayah</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="ayah" class="form-control mb-2" value="<?= $datastudent['name_father'] ?>" />
																	<!--end::Input-->
																	<!--end::Description-->
																</div>
															</div>
															<div class="col">
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class=" form-label">Nama Ibu</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="ayah" class="form-control mb-2" value="<?= $datastudent['name_mother'] ?>" />
																	<!--end::Input-->
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col">
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Telepon</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="telepon_orangtua" class="form-control  mb-2" value="<?= $datastudent['parents_phone'] ?>" />
																	<!--end::Input-->
																	<!--end::Description-->
																</div>
															</div>
															<div class="col">
																<div class="mb-7 fv-row">
																	<!--begin::Label-->
																	<label class=" form-label">Email</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="mail_orangtua" class="form-control mb-2" value="<?= $datastudent['parents_mail'] ?>" />
																	<!--end::Input-->
																	<!--end::Description-->
																</div>
															</div>
														</div>
														<div class="mb-7 fv-row">
															<!--begin::Label-->
															<label class=" form-label">Alamat</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea name="alamat_orangtua" class="form-control" rows="5" id=""><?= $datastudent['parents_address'] ?></textarea>
															<!--end::Input-->
															<!--end::Description-->
														</div>

													</div>
													<!--end::Card header-->
												</div>
											<?php	}
											?>


										</div>
									</div>
									<div class="tab-pane fade" id="krs" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="khs" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="dns" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="skpi" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="p2m" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="uangkuliah" role="tab-panel">
										<div class="d-flex flex-column gap-7 gap-lg-10">
											<div class="alert alert-warning" role="alert">
												Data ini tidak tersedia untuk saat ini dikarenakan belum ada proses data disistem ini
											</div>
										</div>
									</div>
									<!--end::Tab pane-->
								</div>
								<!--end::Tab content-->
								<div class="d-flex justify-content-end">
									<!--begin::Button-->
									<a href="admin/mahasiswa" class="btn btn-light me-5">Cancel</a>
									<!--end::Button-->
									<!--begin::Button-->
									<button type="submit" id="" name="submit" class="btn btn-primary">
										<span class="indicator-label">Save</span>
									</button>
									<!--end::Button-->
								</div>
							</div>
							<!--end::Main column-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<?php
				require '../template/footer-apps.php';
				?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>

	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="assets/js/custom/apps/ecommerce/sales/listing.js"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="assets/js/custom/documentation/documentation.js"></script>
	<script src="assets/js/custom/documentation/search.js"></script>
	<script src="assets/js/custom/documentation/general/datatables/basic.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>

<div class="modal fade" id="modal_add_prodi" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form" id="" method="POST">
				<input type="hidden" name="control" value="add">
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_add_customer_header">
					<!--begin::Modal title-->
					<h2 class="fw-bold">Tambah Data </h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div id="" data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-10 px-lg-17">
					<!--begin::Scroll-->
					<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold mb-2">Fakultas</label>
							<!--end::Label-->
							<!--begin::Input-->
							<?php
							echo $datastudent['id_faculty'];
							?>
							<select name="fakultas" required class="form-select form-select-solid" id="">
								<option value="<?= $datastudent['id_faculty'] ?>"><?= $datastudent['faculty_long'] ?></option>
								<?php
								$getfakultas = tampildata("SELECT * FROM ms_faculty WHERE status=1");
								?>
								<?php foreach ($getfakultas as $fakultas): ?>
									<option value="<?= $fakultas['id_faculty'] ?>"><?= $fakultas['faculty_long'] ?></option>
								<?php endforeach ?>
							</select>
							<!--end::Input-->
						</div>
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold mb-2">Kode</label>
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Kode Fakultas harus bersifat kode unik yang disesuaikan dengan nama fakultas "></i>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" required class="form-control form-control-solid" placeholder="" name="kode" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold mb-2">Initial</label>
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="3 Huruf Singkatan Inisial Program Studi "></i>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" require required class="form-control form-control-solid" placeholder="" name="inisial" />
							<!--end::Input-->
						</div>
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold mb-2">Nama Program Studi</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" required class="form-control form-control-solid" placeholder="" name="prodi" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-15">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2">Deskripsi</label>
							<!--end::Label-->
							<!--begin::Input-->
							<textarea name="deskripsi" class="form-control form-control-solid" rows="5" id="deskripsi"></textarea>
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Scroll-->
				</div>
				<!--end::Modal body-->
				<!--begin::Modal footer-->
				<div class="modal-footer flex-center">
					<!--begin::Button-->
					<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button type="submit" id="" name="submit" class="btn btn-primary">Submit</button>
					<!--end::Button-->
				</div>
				<!--end::Modal footer-->
			</form>
			<!--end::Form-->
		</div>
	</div>
</div>
<!--end::Body-->
<?php
require '../template/alert.php';
?>

</html>