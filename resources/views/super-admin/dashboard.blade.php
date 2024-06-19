<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template">
  <head>
    <title>Dashboard super admin</title>
    @include('layouts admin.header')
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/shepherd/shepherd.css" />
    <link rel="stylesheet" href="{{ asset('assets/') }}/vendor/libs/animate-on-scroll/animate-on-scroll.css" />
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('layouts admin.sidebar')

        <!-- Layout container -->
        <div class="layout-page">

            @include('layouts admin.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div  class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div id="statistic" class="col-lg-12 mb-4 col-md-12">
                    <div class="card h-100">
                      <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Data Pengusul Kenaikan Pangkat</h5>
                        <small class="text-muted">Updated 1 day ago</small>
                      </div>
                      <div class="card-body pt-2">
                        <div class="row gy-3">
                          <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-warning me-3 p-2">
                                <i class="ti ti-chart-pie-2 ti-sm"></i>
                              </div>
                              <div class="card-info">
                                <h5 class="mb-0">12</h5>
                                <small>Pending</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-success me-3 p-2">
                                <i class="ti ti-check ti-sm"></i>
                              </div>
                              <div class="card-info">
                                <h5 class="mb-0">23</h5>
                                <small>Di Terima</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                <i class="ti ti-x ti-sm"></i>
                              </div>
                              <div class="card-info">
                                <h5 class="mb-0">0</h5>
                                <small>Di Tolak</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                              <div class="badge rounded-pill bg-label-info me-3 p-2">
                                <i class="ti ti-users ti-sm"></i>
                              </div>
                              <div class="card-info">
                                <h5 class="mb-0">12</h5>
                                <small>Pengusul</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <!-- Cards with few info -->
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                            <h5 class="mb-0 me-2">126</h5>
                            <small>Document Pengusul</small>
                            </div>
                            <div class="card-icon">
                            <span class="badge bg-label-primary rounded-pill p-2">
                                <i class="ti ti-checklist ti-sm"></i>
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                            <h5 class="mb-0 me-2">32</h5>
                            <small>Pengguna</small>
                            </div>
                            <div class="card-icon">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                            <h5 class="mb-0 me-2">4</h5>
                            <small>Halaman Pengguna</small>
                            </div>
                            <div class="card-icon">
                            <span class="badge bg-label-success rounded-pill p-2">
                                <i class="ti ti-file ti-sm"></i>
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                            <h5 class="mb-0 me-2">3</h5>
                            <small>Role</small>
                            </div>
                            <div class="card-icon">
                            <span class="badge bg-label-info rounded-pill p-2">
                                <i class="ti ti-user-circle ti-sm"></i>
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--/ Cards with few info -->
                    <div class="col-lg-12 mb-4 col-md-12">
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
                    </div>
              </div>
            </div>

            <!-- / Content -->

            @include('layouts admin.footer')

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
    <script src="{{ asset('assets/') }}/vendor/libs/shepherd/shepherd.js"></script>

  </body>
</html>
