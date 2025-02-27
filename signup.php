<?php
require 'controller/auth/signUpController.php';
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php
require 'template/head.php';
?>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
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
		<!--begin::Page bg image-->
		<style>
			body {
				background-image: url('assets/media/auth/bg10.jpeg');
			}

			[data-theme="dark"] body {
				background-image: url('assets/media/auth/bg10-dark.jpeg');
			}
		</style>
		<!--end::Page bg image-->
		<!--begin::Authentication - Sign-up -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<?php
			require 'template/aside.php';
			?>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
				<!--begin::Wrapper-->
				<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
					<!--begin::Content-->
					<div class="w-md-400px">
						<!--begin::Form-->
						<form class="form w-100" method="POST">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
								<!--end::Subtitle=-->
							</div>
							<!--begin::Heading-->
							<!--begin::Login options-->
							<div class="row g-3 mb-9">
								<!--begin::Col-->
								<div class="col-md-6">
									<!--begin::Google link=-->
									<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6">
									<!--begin::Google link=-->
									<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Login options-->
							<!--begin::Separator-->
							<div class="separator separator-content my-14">
								<span class="w-300px text-gray-500 fw-semibold fs-7">Or with email or with NPM</span>
							</div>
							<!--end::Separator-->
							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input type="text" required placeholder="Email or NPM" name="username" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Email-->
							</div>
							<!--begin::Input group-->
							<div class="fv-row mb-8" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control bg-transparent" type="password" placeholder="Password" required name="password" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--end::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Repeat Password-->
								<input placeholder="Repeat Password" required name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Repeat Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Accept-->
							<div class="fv-row mb-8">
								<label class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="toc" value="1" />
									<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#terms" class="ms-1 link-primary">Terms</a></span>
								</label>
							</div>
							<!--end::Accept-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="" name="sign-up" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Sign up</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->
							<!--begin::Sign up-->
							<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
								<a href="index" class="link-primary fw-semibold">Sign in</a>
							</div>
							<!--end::Sign up-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-up-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="assets/js/custom/authentication/sign-up/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
	<?php
	require 'template/alert.php';
	?>
</body>
<!--end::Body-->

<!-- Modal -->
<div class="modal fade" id="terms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Terms & Condition</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>
					Terakhir diperbarui: 18 Februari 2024
					Harap baca Syarat & Ketentuan ini sebelum mendaftar dan menggunakan aplikasi kami. Dengan melakukan registrasi, Anda menyetujui seluruh ketentuan yang berlaku. Jika Anda tidak menyetujui, harap untuk tidak melanjutkan proses pendaftaran.
				<h1> 1️⃣ Pendaftaran & Akun Pengguna</h1>
				<ul>
					<li>Pengguna wajib memberikan informasi yang benar, lengkap, dan terkini saat mendaftar.</li>
					<li> Pengguna bertanggung jawab atas keamanan akun dan menjaga kerahasiaan kata sandi.</li>
					<li> Pihak aplikasi tidak bertanggung jawab atas penyalahgunaan akun akibat kelalaian pengguna.</li>
					<li>Setiap individu hanya diperbolehkan memiliki satu akun kecuali dinyatakan lain oleh penyedia layanan.</li>
				</ul>
				<h1> 2️⃣ Kelayakan & Batasan Usia</h1>
				<ul>
					<li>Pendaftaran hanya boleh dilakukan oleh individu berusia minimal 13 tahun (atau sesuai hukum yang berlaku di wilayah pengguna).</li>
					<li>Jika pengguna di bawah umur, pendaftaran harus mendapat izin dari orang tua atau wali.</li>
				</ul>
				<h1> 3️⃣ Penggunaan Akun</h1>
				<ul>
					<li> Pengguna tidak diperbolehkan menggunakan akun untuk aktivitas ilegal, menyesatkan, atau merugikan pihak lain.</li>
					<li>
						Akun tidak boleh dipindahtangankan atau dijual kepada orang lain tanpa izin tertulis dari pihak aplikasi.
					</li>
					<li>
						Pihak aplikasi berhak menonaktifkan atau menghapus akun yang melanggar aturan tanpa pemberitahuan sebelumnya.
					</li>
				</ul>
				<h1>4️⃣ Privasi & Keamanan Data</h1>
				<ul>
					<li>Data pribadi yang dikumpulkan akan dikelola sesuai dengan Kebijakan Privasi aplikasi.</li>
					<li>Kami tidak akan membagikan data pengguna kepada pihak ketiga tanpa izin, kecuali diwajibkan oleh hukum.</li>
				</ul>
				<h1>5️⃣ Hak & Kewajiban Pengguna</h1>
				<ul>
					<li> Pengguna Berhak Menggunakan aplikasi sesuai dengan fitur yang disediakan.
					</li>
					<li>
						Pengguna Berhak Melaporkan masalah teknis atau penyalahgunaan kepada tim dukungan aplikasi.
					</li>
					<li>
						Penggunan dilarang Menyebarkan konten yang mengandung ujaran kebencian, diskriminasi, atau pornografi.
					</li>
					<li>
						Pengguna dilarang Menggunakan aplikasi untuk tindakan penipuan, hacking, atau pelanggaran hukum lainnya.
					</li>
					<li>
						Pengguna dilarang Menggunakan identitas palsu atau berpura-pura menjadi orang lain.
					</li>
				</ul>
				<h1>6️⃣ Sanksi & Penutupan Akun</h1>
				<ul>
					<li>Pihak aplikasi berhak untuk menonaktifkan atau menghapus akun pengguna jika ditemukan pelanggaran terhadap Syarat & Ketentuan ini.Pelanggaran yang dapat menyebabkan akun ditutup:
						<ol>
							<li>Penggunaan akun untuk tindakan ilegal</li>
							<li>Penyalahgunaan fitur aplikasi</li>
							<li>Pelanggaran terhadap hak cipta atau privasi pihak lain</li>
							<li>Melanggar aturan penggunaan aplikasi</li>
						</ol>
					</li>
				</ul>
				<h1>7️⃣ Perubahan Syarat & Ketentuan</h1>
				<ul>
					<li>Pihak aplikasi berhak untuk mengubah Syarat & Ketentuan ini kapan saja tanpa pemberitahuan sebelumnya.
					</li>
					<li>
						Pengguna disarankan untuk secara berkala memeriksa pembaruan aturan pada halaman resmi aplikasi.
					</li>
				</ul>
				<h1>7️⃣ Perubahan Syarat & Ketentuan</h1>
				<ul>
					<li>Pihak aplikasi berhak untuk mengubah Syarat & Ketentuan ini kapan saja tanpa pemberitahuan sebelumnya.</li>
					<li>Pengguna disarankan untuk secara berkala memeriksa pembaruan aturan pada halaman resmi aplikasi.</li>
				</ul>
				<h1>8️⃣ Hukum yang Berlaku</h1>
				<ul>
					<li>Syarat & Ketentuan ini diatur oleh hukum yang berlaku di Indonesia.
						Dengan menyelesaikan proses pendaftaran, Anda menyatakan telah membaca, memahami, dan menyetujui seluruh Syarat & Ketentuan ini.
					</li>
					<li>
						Kontak Dukungan: Jika Anda memiliki pertanyaan, silakan hubungi kami di [jakaprayudha3@gmail.com].
					</li>
				</ul>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Memahami</button>
			</div>
		</div>
	</div>
</div>

</html>