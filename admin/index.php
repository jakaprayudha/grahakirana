<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php
require '../template/head-apps.php';
?>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="sidebar-enabled">
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
				<?php
				require 'header.php';
				?>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						<!--begin::Row-->
						<div class="row gy-5 g-xl-10">
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 13-->
								<div class="card card-xl-stretch mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Revenue</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div class="mixed-widget-13-chart" style="height: 100px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-5">
											<!--begin::Symbol-->
											<span class="text-dark fw-bold fs-2x lh-0">IDR</span>
											<!--end::Symbol-->
											<!--begin::Number-->
											<span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
											<!--end::Number-->
											<!--begin::Text-->
											<span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
											<!--end::Text-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Mixed Widget 13-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 14-->
								<div class="card card-xxl-stretch mb-xl-10 theme-dark-bg-body" style="background-color: #CBF0F4">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column flex-grow-1">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Students</a>
											<!--end::Title-->
											<!--begin::Chart-->
											<div class="mixed-widget-14-chart" style="height: 100px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Stats-->
										<div class="pt-5">
											<!--begin::Number-->
											<span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
											<!--end::Number-->
											<!--begin::Text-->
											<span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
											<!--end::Text-->
										</div>
										<!--end::Stats-->
									</div>
								</div>
								<!--end::Mixed Widget 14-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Mixed Widget 14-->
								<div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBD4F4">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column mb-7">
											<!--begin::Title-->
											<a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
											<!--end::Title-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Row-->
										<div class="row g-0">
											<!--begin::Col-->
											<div class="col-6">
												<div class="d-flex align-items-center mb-9 me-2">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-3">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-dark">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor" />
																	<path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div>
														<div class="fs-5 text-dark fw-bold lh-1">50K</div>
														<div class="fs-7 text-gray-600 fw-bold">Rev</div>
													</div>
													<!--end::Title-->
												</div>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<div class="d-flex align-items-center mb-9 ms-2">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-3">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-dark">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor" />
																	<path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div>
														<div class="fs-5 text-dark fw-bold lh-1">4,5K</div>
														<div class="fs-7 text-gray-600 fw-bold">Std</div>
													</div>
													<!--end::Title-->
												</div>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<div class="d-flex align-items-center me-2">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-3">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-dark">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
																	<path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div>
														<div class="fs-5 text-dark fw-bold lh-1">12</div>
														<div class="fs-7 text-gray-600 fw-bold">Lct</div>
													</div>
													<!--end::Title-->
												</div>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<div class="d-flex align-items-center ms-2">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-3">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-dark">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z" fill="currentColor" />
																	<path opacity="0.3" d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div>
														<div class="fs-5 text-dark fw-bold lh-1">5,8M</div>
														<div class="fs-7 text-gray-600 fw-bold">Sales</div>
													</div>
													<!--end::Title-->
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
								</div>
								<!--end::Mixed Widget 14-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Tables Widget 9-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold fs-3 mb-1">Dosen Statistics</span>
									<span class="text-muted mt-1 fw-semibold fs-7">Over 12 Dosen</span>
								</h3>
								<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
									<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
										<span class="svg-icon svg-icon-3">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
												<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Tambah Dosen</a>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body py-3">
								<!--begin::Table container-->
								<div class="table-responsive">
									<!--begin::Table-->
									<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
										<!--begin::Table head-->
										<thead>
											<tr class="fw-bold text-muted">
												<th class="w-25px">
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
													</div>
												</th>
												<th class="min-w-200px">Nama Lengkap</th>
												<th class="min-w-150px">Keahlian</th>
												<th class="min-w-150px">P2M</th>
												<th class="min-w-100px text-end">Actions</th>
											</tr>
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input widget-9-check" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="symbol symbol-45px me-5">
															<img src="assets/media/avatars/300-14.jpg" alt="" />
														</div>
														<div class="d-flex justify-content-start flex-column">
															<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Ana Simmons</a>
															<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">Intertico</a>
													<span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
												</td>
												<td class="text-end">
													<div class="d-flex flex-column w-100 me-2">
														<div class="d-flex flex-stack mb-2">
															<span class="text-muted me-2 fs-7 fw-bold">50%</span>
														</div>
														<div class="progress h-6px w-100">
															<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex justify-content-end flex-shrink-0">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																	<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																	<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input widget-9-check" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="symbol symbol-45px me-5">
															<img src="assets/media/avatars/300-2.jpg" alt="" />
														</div>
														<div class="d-flex justify-content-start flex-column">
															<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Jessie Clarcson</a>
															<span class="text-muted fw-semibold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">Agoda</a>
													<span class="text-muted fw-semibold text-muted d-block fs-7">Houses &amp; Hotels</span>
												</td>
												<td class="text-end">
													<div class="d-flex flex-column w-100 me-2">
														<div class="d-flex flex-stack mb-2">
															<span class="text-muted me-2 fs-7 fw-bold">70%</span>
														</div>
														<div class="progress h-6px w-100">
															<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex justify-content-end flex-shrink-0">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																	<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																	<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input widget-9-check" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="symbol symbol-45px me-5">
															<img src="assets/media/avatars/300-5.jpg" alt="" />
														</div>
														<div class="d-flex justify-content-start flex-column">
															<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Lebron Wayde</a>
															<span class="text-muted fw-semibold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">RoadGee</a>
													<span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
												</td>
												<td class="text-end">
													<div class="d-flex flex-column w-100 me-2">
														<div class="d-flex flex-stack mb-2">
															<span class="text-muted me-2 fs-7 fw-bold">60%</span>
														</div>
														<div class="progress h-6px w-100">
															<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex justify-content-end flex-shrink-0">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																	<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																	<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input widget-9-check" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="symbol symbol-45px me-5">
															<img src="assets/media/avatars/300-20.jpg" alt="" />
														</div>
														<div class="d-flex justify-content-start flex-column">
															<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Natali Goodwin</a>
															<span class="text-muted fw-semibold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">The Hill</a>
													<span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
												</td>
												<td class="text-end">
													<div class="d-flex flex-column w-100 me-2">
														<div class="d-flex flex-stack mb-2">
															<span class="text-muted me-2 fs-7 fw-bold">50%</span>
														</div>
														<div class="progress h-6px w-100">
															<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex justify-content-end flex-shrink-0">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																	<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																	<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input widget-9-check" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="symbol symbol-45px me-5">
															<img src="assets/media/avatars/300-23.jpg" alt="" />
														</div>
														<div class="d-flex justify-content-start flex-column">
															<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Kevin Leonard</a>
															<span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">RoadGee</a>
													<span class="text-muted fw-semibold text-muted d-block fs-7">Art Director</span>
												</td>
												<td class="text-end">
													<div class="d-flex flex-column w-100 me-2">
														<div class="d-flex flex-stack mb-2">
															<span class="text-muted me-2 fs-7 fw-bold">90%</span>
														</div>
														<div class="progress h-6px w-100">
															<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex justify-content-end flex-shrink-0">
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
															<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
															<span class="svg-icon svg-icon-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																	<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																	<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
													</div>
												</td>
											</tr>
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table container-->
							</div>
							<!--begin::Body-->
						</div>
						<!--end::Tables Widget 9-->
						<!--begin::Row-->
						<div class="row gy-5 g-xl-10">
							<!--begin::Col-->
							<div class="col-xxl-6">
								<!--begin::List Widget 5-->
								<div class="card card-xl-stretch mb-xl-10">
									<!--begin::Header-->
									<div class="card-header align-items-center border-0 mt-4">
										<h3 class="card-title align-items-start flex-column">
											<span class="fw-bold mb-2 text-dark">Activities</span>
											<span class="text-muted fw-semibold fs-7">890,344 Sales</span>
										</h3>
										<div class="card-toolbar">
											<!--begin::Menu-->
											<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
															<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfbfef5f0b7">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-dark fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfbfef5f0b7" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
											<!--end::Menu-->
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body pt-5">
										<!--begin::Timeline-->
										<div class="timeline-label">
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-warning fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Text-->
												<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-success fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Content-->
												<div class="timeline-content d-flex">
													<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-danger fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Desc-->
												<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
													<a href="#" class="text-primary">USD 700</a>. to ESL
												</div>
												<!--end::Desc-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-primary fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Text-->
												<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-danger fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Desc-->
												<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
													<a href="#" class="text-primary">#XF-2356</a>.
												</div>
												<!--end::Desc-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-primary fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Text-->
												<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-danger fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Desc-->
												<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
													<a href="#" class="text-primary">#XF-2356</a>.
												</div>
												<!--end::Desc-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="timeline-item mb-9">
												<!--begin::Label-->
												<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
												<!--end::Label-->
												<!--begin::Badge-->
												<div class="timeline-badge">
													<i class="fa fa-genderless text-success fs-1"></i>
												</div>
												<!--end::Badge-->
												<!--begin::Text-->
												<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Timeline-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end: List Widget 5-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xxl-6">
								<!--begin::List Widget 4-->
								<div class="card card-xl-stretch mb-5 mb-xl-10">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark">Trends</span>
											<span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
										</h3>
										<div class="card-toolbar">
											<!--begin::Menu-->
											<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
															<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--begin::Menu 3-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="menu-item px-3">
													<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
												</div>
												<!--end::Heading-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Create Invoice</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Generate Bill</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
													<a href="#" class="menu-link px-3">
														<span class="menu-title">Subscription</span>
														<span class="menu-arrow"></span>
													</a>
													<!--begin::Menu sub-->
													<div class="menu-sub menu-sub-dropdown w-175px py-4">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Plans</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Billing</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Statements</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-2"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3">
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																	<!--end::Input-->
																	<!--end::Label-->
																	<span class="form-check-label text-muted fs-6">Recuring</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu sub-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-1">
													<a href="#" class="menu-link px-3">Settings</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu 3-->
											<!--end::Menu-->
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body pt-5">
										<!--begin::Item-->
										<div class="d-flex align-items-sm-center mb-7">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-5">
												<span class="symbol-label">
													<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Section-->
											<div class="d-flex align-items-center flex-row-fluid flex-wrap">
												<div class="flex-grow-1 me-2">
													<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
													<span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
												</div>
												<span class="badge badge-light fw-bold my-2">+82$</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-sm-center mb-7">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-5">
												<span class="symbol-label">
													<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Section-->
											<div class="d-flex align-items-center flex-row-fluid flex-wrap">
												<div class="flex-grow-1 me-2">
													<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
													<span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
												</div>
												<span class="badge badge-light fw-bold my-2">+280$</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-sm-center mb-7">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-5">
												<span class="symbol-label">
													<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Section-->
											<div class="d-flex align-items-center flex-row-fluid flex-wrap">
												<div class="flex-grow-1 me-2">
													<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
													<span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
												</div>
												<span class="badge badge-light fw-bold my-2">+4500$</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-sm-center mb-7">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-5">
												<span class="symbol-label">
													<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Section-->
											<div class="d-flex align-items-center flex-row-fluid flex-wrap">
												<div class="flex-grow-1 me-2">
													<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
													<span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
												</div>
												<span class="badge badge-light fw-bold my-2">+686$</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-sm-center mb-7">
											<!--begin::Symbol-->
											<div class="symbol symbol-50px me-5">
												<span class="symbol-label">
													<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Section-->
											<div class="d-flex align-items-center flex-row-fluid flex-wrap">
												<div class="flex-grow-1 me-2">
													<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
													<span class="text-muted fw-semibold d-block fs-7">Disco, Retro, Sports</span>
												</div>
												<span class="badge badge-light fw-bold my-2">+726$</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::List Widget 4-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
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
			<!--begin::Sidebar-->
			<div id="kt_sidebar" class="sidebar" data-kt-drawer="true" data-kt-drawer-name="sidebar" data-kt-drawer-activate="{default: true, xxl: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggler">
				<!--begin::Sidebar Content-->
				<div class="d-flex flex-column sidebar-body px-5 py-10" id="kt_sidebar_body">
					<!--begin::Sidebar Nav-->
					<ul class="sidebar-nav nav nav-tabs mb-10" id="kt_sidebar_tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_1">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
								<span class="svg-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z" fill="currentColor" />
										<path opacity="0.3" d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_2">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
								<span class="svg-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
										<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_3">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs036.svg-->
								<span class="svg-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22 12C22 12.2 22 12.5 22 12.7L19.5 10.2L16.9 12.8C16.9 12.5 17 12.3 17 12C17 9.5 15.2 7.50001 12.8 7.10001L10.2 4.5L12.7 2C17.9 2.4 22 6.7 22 12ZM11.2 16.9C8.80001 16.5 7 14.5 7 12C7 11.7 7.00001 11.5 7.10001 11.2L4.5 13.8L2 11.3C2 11.5 2 11.8 2 12C2 17.3 6.09999 21.6 11.3 22L13.8 19.5L11.2 16.9Z" fill="currentColor" />
										<path opacity="0.3" d="M22 12.7C21.6 17.9 17.3 22 12 22C11.8 22 11.5 22 11.3 22L13.8 19.5L11.2 16.9C11.5 16.9 11.7 17 12 17C14.5 17 16.5 15.2 16.9 12.8L19.5 10.2L22 12.7ZM10.2 4.5L12.7 2C12.5 2 12.2 2 12 2C6.7 2 2.4 6.1 2 11.3L4.5 13.8L7.10001 11.2C7.50001 8.8 9.5 7 12 7C12.3 7 12.5 7.00001 12.8 7.10001L10.2 4.5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_4">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
								<span class="svg-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
										<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_5">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
								<span class="svg-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor" />
										<path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</li>
					</ul>
					<!--end::Sidebar Nav-->
					<!--begin::Sidebar Content-->
					<div id="kt_sidebar_content">
						<div class="hover-scroll-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-offset="0px" data-kt-scroll-dependencies="#kt_sidebar_tabs" data-kt-scroll-wrappers="#kt_sidebar_content, #kt_sidebar_body">
							<!--begin::Tab content-->
							<div class="tab-content px-5 px-xxl-10">
								<!--begin::Tab pane-->
								<div class="tab-pane fade" id="kt_sidebar_tab_1" role="tabpanel">
									<!--begin::Statistics Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-10">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Assigned Tasks</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Row-->
											<div class="row g-5">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="100" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Pending</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="210" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Completed</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="10" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">On Hold</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="55" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">In Progress</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card Body-->
									</div>
									<!--end::Statistics Widget-->
									<!--begin::Tasks Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-5">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Latest Tasks</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfbfef60dd4">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bold">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfbfef60dd4" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-0">
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Project Briefing</a>
													<span class="sidebar-text-muted fw-bold">Project Manager</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-warning">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Concept Design</a>
													<span class="sidebar-text-muted fw-bold">Art Director</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Functional Logics</a>
													<span class="sidebar-text-muted fw-bold">Lead Developer</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-danger">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Development</a>
													<span class="sidebar-text-muted fw-bold">DevOps</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/general/gen049.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-info">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
																<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor" />
																<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Testing</a>
													<span class="sidebar-text-muted fw-bold">QA Managers</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tasks Widget-->
								</div>
								<!--end::Tab pane-->
								<!--begin::Tab pane-->
								<div class="tab-pane fade" id="kt_sidebar_tab_2" role="tabpanel">
									<!--begin::Statistics Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-10">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Customer Orders</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Row-->
											<div class="row g-5">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="40" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">In Process</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="110" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Delivered</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="29" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">On Hold</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="15" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">In Progress</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card Body-->
									</div>
									<!--end::Statistics Widget-->
									<!--begin::Best Sellers Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-5">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Latest Orders</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-0">
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-20.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Premium Coffee</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">Arabica Specialty Brand</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-25.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Light Sneakers</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">The Best Lightweight Sneakers</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-24.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Red Boots</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">All Season Boots</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-19.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Wall Decoration</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">Creative &amp; Easy To Install</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-27.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Home Confort</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">Smart Air Purifier</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Best Sellers Widget-->
								</div>
								<!--end::Tab pane-->
								<!--begin::Tab pane-->
								<div class="tab-pane fade show active" id="kt_sidebar_tab_3" role="tabpanel">
									<!--begin::Statistics Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-10">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Support Tickets</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Row-->
											<div class="row g-5">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="28" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Pending</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="204" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Completed</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="76" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">On Hold</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="9" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">In Progress</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card Body-->
									</div>
									<!--end::Statistics Widget-->
									<!--begin::Best Sellers Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-5">
										<!--begin::Header-->
										<div class="card-header align-items-center">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Best Sellers</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-1.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Spotify App</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">HTML, SASS, Bootstrap</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-2.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Fitnes Drive</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">Angular, Typescript, Bootstrap</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-3.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Taskify App</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">HTML, CSS. jQuery</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-5.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Calendr App</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">React, MangoDb. Node</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center">
												<!--begin::Image-->
												<div class="symbol symbol-40px symbol-2by3 me-4">
													<img src="assets/media/stock/600x400/img-6.jpg" alt="" class="mw-100" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
													<a href="#" class="text-white fw-semibold text-hover-primary fs-6">Stocked SaaS</a>
													<span class="sidebar-text-muted fw-semibold fs-7 my-1">PHP, Laravel, Oracle</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Best Sellers Widget-->
								</div>
								<!--end::Tab pane-->
								<!--begin::Tab pane-->
								<div class="tab-pane fade" id="kt_sidebar_tab_4" role="tabpanel">
									<!--begin::Statistics Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-10">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Notifcations</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Row-->
											<div class="row g-5">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="5" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">System Alert</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="10" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Server Failure</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="40" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">User Feedback</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="3" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Backup</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card Body-->
									</div>
									<!--end::Statistics Widget-->
									<!--begin::Tasks Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-5">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Latest Tasks</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfbfef626b8">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bold">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfbfef626b8" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-0">
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Project Briefing</a>
													<span class="sidebar-text-muted fw-bold">Project Manager</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-warning">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Concept Design</a>
													<span class="sidebar-text-muted fw-bold">Art Director</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Functional Logics</a>
													<span class="sidebar-text-muted fw-bold">Lead Developer</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-danger">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Development</a>
													<span class="sidebar-text-muted fw-bold">DevOps</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/general/gen049.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-info">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
																<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor" />
																<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Testing</a>
													<span class="sidebar-text-muted fw-bold">QA Managers</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tasks Widget-->
								</div>
								<!--end::Tab pane-->
								<!--begin::Tab pane-->
								<div class="tab-pane fade" id="kt_sidebar_tab_5" role="tabpanel">
									<!--begin::Statistics Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-10">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Outgoing Emails</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Row-->
											<div class="row g-5">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="160" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Sending</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="2600" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Sent</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="2500" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Delivered</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Item-->
													<div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
														<!--begin::Value-->
														<div class="text-white fs-2 fs-xxl-2x fw-bold mb-1" data-kt-countup="true" data-kt-countup-value="11" data-kt-countup-prefix="">0</div>
														<!--begin::Value-->
														<!--begin::Label-->
														<div class="sidebar-text-muted fs-6 fw-bold">Failed</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card Body-->
									</div>
									<!--end::Statistics Widget-->
									<!--begin::Tasks Widget-->
									<div class="card card-flush card-p-0 shadow-none bg-transparent mb-5">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="card-title fw-bold text-white fs-3">Latest Tasks</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<button type="button" class="btn btn-icon btn-icon-white btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfbfef62fc9">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bold">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfbfef62fc9" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-0">
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Project Briefing</a>
													<span class="sidebar-text-muted fw-bold">Project Manager</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-warning">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Concept Design</a>
													<span class="sidebar-text-muted fw-bold">Art Director</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Functional Logics</a>
													<span class="sidebar-text-muted fw-bold">Lead Developer</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-danger">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Development</a>
													<span class="sidebar-text-muted fw-bold">DevOps</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-nowrap align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label sidebar-bg-muted">
														<!--begin::Svg Icon | path: icons/duotune/general/gen049.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-info">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
																<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor" />
																<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column">
													<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Testing</a>
													<span class="sidebar-text-muted fw-bold">QA Managers</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tasks Widget-->
								</div>
								<!--end::Tab pane-->
							</div>
							<!--end::Tab content-->
						</div>
					</div>
					<!--end::Sidebar Content-->
				</div>
				<!--end::Sidebar Content-->
			</div>
			<!--end::Sidebar-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none border-0 rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
											<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="../../demo3/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo3/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="../../demo3/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo3/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
											<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="assets/media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
											<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="assets/media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="../../demo3/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
											<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
											<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
											<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
											<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="assets/media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
												<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-semibold">
												<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
											<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
											<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="../../demo3/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-semibold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--end::Main-->
	<!--begin::Engage drawers-->
	<!--begin::Demos drawer-->
	<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_engage_demos_header">
				<h3 class="card-title fw-bold text-gray-700">Demos</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_engage_demos_body">
				<!--begin::Content-->
				<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
					<!--begin::Wrapper-->
					<div class="mb-0">
						<!--begin::Heading-->
						<div class="mb-7">
							<div class="d-flex flex-stack">
								<h3 class="mb-0">Metronic Licenses</h3>
								<a href="https://themeforest.net/licenses/standard" class="fw-semibold" target="_blank">License FAQs</a>
							</div>
						</div>
						<!--end::Heading-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
									</div>
									<div class="fs-7 text-muted">For single end product used by you or one client</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-semibold me-n1">$</span>
									<span class="text-dark fs-1 fw-bold">39</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-inverse" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
									</div>
									<div class="fs-7 text-muted">For single SaaS app with paying users</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-semibold me-n1">$</span>
									<span class="text-dark fs-1 fw-bold">969</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
									</div>
									<div class="fs-7 text-muted">Reach us for custom license offers.</div>
								</div>
								<div class="text-nowrap">
									<a href="https://devs.keenthemes.com" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::Purchase-->
						<a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy Now</a>
						<!--end::Purchase-->
						<!--begin::Demos-->
						<div class="mb-0">
							<h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
							<!--begin::Row-->
							<div class="row g-5">
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">Demo 10</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">Demo 12</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">Demo 14</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">Demo 15</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">Demo 16</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">Demo 17</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">Demo 18</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">Demo 19</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">Demo 20</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo21.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo21" class="btn btn-sm btn-success shadow">Demo 21</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo22.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo22" class="btn btn-sm btn-success shadow">Demo 22</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo23.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-semibold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Demos-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Demos drawer-->
	<!--begin::Help drawer-->
	<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_help_header">
				<h5 class="card-title fw-semibold text-gray-600">Learn &amp; Get Inspired</h5>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_help_body">
				<!--begin::Content-->
				<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
					<!--begin::Support-->
					<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
						<!--begin::Heading-->
						<h2 class="fw-bold mb-5">Support at
							<a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
						</h2>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fs-5 fw-semibold mb-5">
							<span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
							<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
						</div>
						<!--end::Description-->
						<!--begin::Link-->
						<a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
						<!--end::Link-->
					</div>
					<!--end::Support-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/getting-started.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation &amp; Videos</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to live demos and code examples to get started.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
							<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
									<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
									<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/base/utilities.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins &amp; Components</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house components and customized 3rd-party plugins.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
							<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
							<span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
									<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://preview.keenthemes.com/metronic8/demo3/layout-builder.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and export the HTML for server side integration.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
							<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
							<span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
									<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
									<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://devs.keenthemes.com/metronic" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic Downloads</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and demo with one click.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
							<!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
							<span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor" />
									<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/getting-started/changelog.html" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements added with our users feedback in mind.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Help drawer-->
	<!--end::Engage drawers-->
	<!--begin::Engage toolbar-->
	<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
		<!--begin::Demos drawer toggle-->
		<button id="kt_engage_demos_toggle" class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0" title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
			<span id="kt_engage_demos_label">Demos</span>
		</button>
		<!--end::Demos drawer toggle-->
		<!--begin::Help drawer toggle-->
		<button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Learn &amp; Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
		<!--end::Help drawer toggle-->
	</div>
	<!--end::Engage toolbar-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Formulir Dosen</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">NIDN</div>
						<!--end::Heading-->
						<input type="text" class="form-control form-control-solid mb-8">
					</div>
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">Nama Lengkap (Beserta Gelar)</div>
						<!--end::Heading-->
						<input type="text" class="form-control form-control-solid mb-8">
					</div>
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<textarea class="form-control form-control-solid mb-8" rows="5" placeholder="Alamat Domisili"></textarea>
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-semibold">
							<label class="fs-6">Status Dosen</label>
							<div class="fs-7 text-muted">Apakah status dosen ini, merupakan dosen tetap, dukungan file SK nantinya wajib disertakan</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Dosen Tetap</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
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
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-semibold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
												<div class="fw-semibold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
												<div class="fw-semibold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
												<div class="fw-semibold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
												<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
												<div class="fw-semibold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
												<div class="fw-semibold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
												<div class="fw-semibold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
												<div class="fw-semibold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-semibold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/dozzy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>