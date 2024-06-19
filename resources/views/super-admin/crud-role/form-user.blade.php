<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Formulir Pengguna - super admin</title>
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
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Formulir Pengguna</h4>

                <!-- Bootstrap Validation -->
                <div class="col-md">
                    <div class="card">
                      <h5 class="card-header">Formulir Pengguna</h5>
                      <div class="card-body">
                        <form class="needs-validation" novalidate>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Nama lengkap</label>
                            <input
                              type="text"
                              class="form-control"
                              id="bs-validation-name"
                              placeholder="masukan nama lengkap"
                              required />
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan masukan nama lengkap</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-country">Pilih Level</label>
                            <select class="form-select" id="bs-validation-country" required>
                              <option value="">Pilih Level</option>
                              <option value="user">User</option>
                              <option value="verifikator">Verifikator</option>
                              <option value="superadmin">Superadmin</option>
                            </select>
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan pilih dinas</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-country">Pilih Kecamatan</label>
                            <select class="form-select" id="bs-validation-country" required>
                              <option value="">Pilih Kecamatan</option>
                              <option value="Jatibarang">Jatibarang</option>
                              <option value="Bangkir">Bangkir</option>
                              <option value="Sindang">Sindang</option>
                            </select>
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan pilih kecamatan</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-country">Pilih Dinas</label>
                            <select class="form-select" id="bs-validation-country" required>
                              <option value="">Pilih Dinas</option>
                              <option value="Dinas pehubungan">Dinas pehubungan</option>
                              <option value="Dinas Perairan">Dinas Perairan</option>
                            </select>
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan pilih dinas</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="bs-validation-jabatan" name="jabatan" placeholder="masukan jabatan" required />
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan masukan jabatan anda</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-nip">NIP</label>
                            <input type="text" class="form-control" id="bs-validation-nip" name="nip" placeholder="masukan NIP" required />
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan masukan nomor NIP anda</div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="bs-validation-dob">Tanggal lahir</label>
                            <input type="text" class="form-control flatpickr-validation" id="bs-validation-dob" name="date" placeholder="YYYY-MM-DD" required />
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan masukan tanggal lahir anda</div>
                          </div>
                          <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="bs-validation-password">Password</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="bs-validation-password"
                                class="form-control"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                required />
                              <span class="input-group-text cursor-pointer" id="basic-default-password4"
                                ><i class="ti ti-eye-off"></i
                              ></span>
                            </div>
                            <div class="valid-feedback">Terisi</div>
                            <div class="invalid-feedback">Silahkan masukan password</div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /Bootstrap Validation -->
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
