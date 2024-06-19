<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Pages - Super admin</title>
    @include('layouts admin.header')
    {{-- page css --}}
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/styles/index.min.css" />

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('layouts admin.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('layouts admin.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="mb-4">Daftar Halaman</h4>

                <p class="mb-4">
                  Anda disini bisa mengatur halaman apa saja yang ingin di aktifkan atau di nonaktifkan
                </p>
                <!-- Role cards -->
                <div class="row g-4">
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-end mt-1">
                            <div class="role-heading">
                              <h4 class="mb-1"> Halaman Verifikator</h4>
                            <h6 class="fw-normal mb-2">Halaman verifikator adalah halaman untuk memverifikasi dokumen yang dikirim oleh pengusul</h6>
                              <div class="form-check form-switch mb-2">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                  <label class="form-check-label" for="flexSwitchCheckDefault"
                                    >klik untuk mengaktifkan</label
                                  >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-end mt-1">
                          <div class="role-heading">
                            <h4 class="mb-1"> Halaman Formulir usul kenaikan pangkat reguler</h4>
                          <h6 class="fw-normal mb-2">Halaman Formulir usul kenaikan pangkat reguler adalah halaman pengusul untuk mengirimkan dokumen</h6>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                <label class="form-check-label" for="flexSwitchCheckDefault"
                                  >klik untuk mengaktifkan</label
                                >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-end mt-1">
                            <div class="role-heading">
                              <h4 class="mb-1"> Halaman Formulir usul kenaikan pangkat jabatan fungsional</h4>
                            <h6 class="fw-normal mb-2">Halaman Formulir usul kenaikan pangkat jabatan fungsional adalah halaman pengusul untuk mengirimkan dokumen</h6>
                              <div class="form-check form-switch mb-2">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                  <label class="form-check-label" for="flexSwitchCheckDefault"
                                    >klik untuk mengaktifkan</label
                                  >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-end mt-1">
                            <div class="role-heading">
                              <h4 class="mb-1"> Halaman Formulir usul kenaikan pangkat jabatan struktural</h4>
                            <h6 class="fw-normal mb-2">Halaman Formulir usul kenaikan pangkat jabatan struktural adalah halaman pengusul untuk mengirimkan dokumen</h6>
                              <div class="form-check form-switch mb-2">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                  <label class="form-check-label" for="flexSwitchCheckDefault"
                                    >klik untuk mengaktifkan</label
                                  >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-end mt-1">
                            <div class="role-heading">
                              <h4 class="mb-1"> Halaman Formulir usul kenaikan pangkat penyesuaian ijazah</h4>
                            <h6 class="fw-normal mb-2">Halaman Formulir usul kenaikan pangkat penyesuaian ijazah adalah halaman pengusul untuk mengirimkan dokumen</h6>
                              <div class="form-check form-switch mb-2">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                                  <label class="form-check-label" for="flexSwitchCheckDefault"
                                    >klik untuk mengaktifkan</label
                                  >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!--/ Role cards -->
                <!--/ Add Role Modal -->

                <!-- / Add Role Modal -->
              </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('layouts admin.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('layouts admin.script')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/') }}/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('assets/') }}/js/form-layouts.js"></script>
    <script src="{{ asset('assets/') }}/js/form-validation.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="{{ asset('assets/') }}/js/app-access-roles.js"></script>
    <script src="{{ asset('assets/') }}/js/modal-add-role.js"></script>
  </body>
</html>
