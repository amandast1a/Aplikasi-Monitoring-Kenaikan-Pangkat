<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Document Pengusul - Super Admin</title>
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
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Document Pengusul</h4>
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Table Document Pengusul</h5>
                    </div>
                    <div class="col-md-12 d-flex justify-flex-start align-items-center">
                        <div  style="display: flex; align-items: center; height: fit-content; margin-right: 10px;">
                            <h5 class="card-header">Search</h5>
                            <input
                              type="search"
                              class="form-control"
                              id="bs-validation-name"
                              placeholder="Search"
                              required />
                          </div>
                        <div  style="display: flex; align-items: center; height: fit-content; margin-right: 10px;">
                            <h5 class="card-header">Status</h5>
                            <select id="defaultSelect" class="form-select">
                              <option value="Complete">Complete</option>
                              <option value="Pending">Pending</option>
                              <option value="Fail">Fail</option>
                            </select>
                          </div>
                        <div  style="display: flex; align-items: center; height: fit-content; margin-right: 10px;">
                            <h5 class="card-header">Type</h5>
                            <select id="defaultSelect" class="form-select">
                              <option value="Formulir usul kenaikan pangkat reguler">Formulir usul kenaikan pangkat reguler</option>
                              <option value="Formulir usul kenaikan pangkat jabatan fungsional">Formulir usul kenaikan pangkat jabatan fungsional</option>
                              <option value="Formulir usul kenaikan pangkat jabatan struktural">Formulir usul kenaikan pangkat jabatan struktural</option>
                              <option value="Formulir usul kenaikan pangkat penyesuaian ijazah">Formulir usul kenaikan pangkat penyesuaian ijazah</option>
                            </select>
                          </div>
                        <div style="margin-right: 20px" >
                            <button type="submit" class="btn btn-primary">
                                Cari data
                                <i class='bx bx-search'></i>
                            </button>
                        </div>

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
                <!--/ Basic Bootstrap Table -->

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
  </body>
</html>