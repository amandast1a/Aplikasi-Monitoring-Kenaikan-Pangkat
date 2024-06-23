<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Proses Pengajuan - Pengusul</title>
    @include('layouts application.header')
    {{-- page css --}}
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/styles/index.min.css" />

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('layouts application.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('layouts application.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4">Proses Pengajuan</h4>
                <div class="row">
                    <!-- Default Wizard -->
                    <div class="col-12 mb-4">
                      <div class="bs-stepper wizard-numbered mt-2">
                        <div class="bs-stepper-header">
                          <div class="step" data-target="#account-details">
                            <button type="button" class="step-trigger">
                              <span class="bs-stepper-circle"><i class="ti ti-chart-pie-2 ti-sm"></i></span>
                              <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Pending</span>
                                <span class="bs-stepper-subtitle">Masih proses verifikasi</span>
                              </span>
                            </button>
                          </div>
                          <div class="step" data-target="#personal-info">
                            <button type="button" class="step-trigger">
                              <span class="bs-stepper-circle"><i class="ti ti-chart-pie-2 ti-sm"></i></span>
                              <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Pending</span>
                                <span class="bs-stepper-subtitle">Masih proses verifikasi</span>
                              </span>
                            </button>
                          </div>
                          <div class="step" data-target="#social-links">
                            <button type="button" class="step-trigger">
                              <span class="bs-stepper-circle"><i class="ti ti-x ti-sm"></i></span>
                              <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Ditolak</span>
                                <span class="bs-stepper-subtitle">Dokumen anda ditolak</span>
                              </span>
                            </button>
                          </div>
                        </div>
                        <div class="bs-stepper-content">
                          <form onSubmit="return false">
                            <!-- Account Details -->
                            <div id="account-details" class="content">
                                <div class="col-md-12 d-flex justify-content-between align-items-cente">
                                    <h5 class="card-header">Table Formulir usul kenaikan pangkat regular</h5>
                                    <a href="/form-regular" class="btn btn-primary" style="height: fit-content; padding: 15px 30px 15px 30px; margin-top: 20px; margin-right: 20px;">Tambah Data</a>

                                </div>
                                <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div id="personal-info" class="content">
                              <div class="content-header mb-3">
                                <h6 class="mb-0">Personal Info</h6>
                                <small>Enter Your Personal Info.</small>
                              </div>
                              <div class="row g-3">
                                <div class="col-sm-6">
                                  <label class="form-label" for="first-name">First Name</label>
                                  <input type="text" id="first-name" class="form-control" placeholder="John" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="last-name">Last Name</label>
                                  <input type="text" id="last-name" class="form-control" placeholder="Doe" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="country">Country</label>
                                  <select class="select2" id="country">
                                    <option label=" "></option>
                                    <option>UK</option>
                                    <option>USA</option>
                                    <option>Spain</option>
                                    <option>France</option>
                                    <option>Italy</option>
                                    <option>Australia</option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="language">Language</label>
                                  <select
                                    class="selectpicker w-auto"
                                    id="language"
                                    data-style="btn-transparent"
                                    data-icon-base="ti"
                                    data-tick-icon="ti-check text-white"
                                    multiple>
                                    <option>English</option>
                                    <option>French</option>
                                    <option>Spanish</option>
                                  </select>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                  <button class="btn btn-label-secondary btn-prev">
                                    <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                  </button>
                                  <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="ti ti-arrow-right"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- Social Links -->
                            <div id="social-links" class="content">
                              <div class="content-header mb-3">
                                <h6 class="mb-0">Social Links</h6>
                                <small>Enter Your Social Links.</small>
                              </div>
                              <div class="row g-3">
                                <div class="col-sm-6">
                                  <label class="form-label" for="twitter">Twitter</label>
                                  <input
                                    type="text"
                                    id="twitter"
                                    class="form-control"
                                    placeholder="https://twitter.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="facebook">Facebook</label>
                                  <input
                                    type="text"
                                    id="facebook"
                                    class="form-control"
                                    placeholder="https://facebook.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="google">Google+</label>
                                  <input
                                    type="text"
                                    id="google"
                                    class="form-control"
                                    placeholder="https://plus.google.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                  <label class="form-label" for="linkedin">LinkedIn</label>
                                  <input
                                    type="text"
                                    id="linkedin"
                                    class="form-control"
                                    placeholder="https://linkedin.com/abc" />
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                  <button class="btn btn-label-secondary btn-prev">
                                    <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                  </button>
                                  <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- /Default Wizard -->
                  </div>

            </div>




            <!-- / Content -->

            <!-- Footer -->
            @include('layouts application.footer')
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

    @include('layouts application.script')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/') }}/vendor/libs/bs-stepper/bs-stepper.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="{{ asset('assets/') }}/js/form-wizard-numbered.js"></script>
    <script src="{{ asset('assets/') }}/js/form-wizard-validation.js"></script>
  </body>
</html>
