<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Formulir usul kenaikan pangkat jabatan fungsional</title>
    @include('layouts application.header')
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
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Formulir usul kenaikan pangkat jabatan fungsional</h4>

                <!-- Bootstrap Validation -->
                <div class="col-md">
                    <div class="card">
                      <h5 class="card-header">Formulir usul kenaikan pangkat jabatan fungsional</h5>
                      <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-name">Periode</label>
                                <input type="text" class="form-control" id="bs-validation-name" value="{{ $form->periode }}" readonly  />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-name">Nama lengkap</label>
                                <input type="text" class="form-control" id="bs-validation-name" value="{{ $form->nama }}" readonly  />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-nip">NIP</label>
                                <input type="text" class="form-control" id="bs-validation-nip" value="{{ $form->nip }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-nip">Pangkat/Golongan Ruang</label>
                                <input type="text" class="form-control" id="bs-validation-nip" value="{{ $form->golongan }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="bs-validation-jabatan" value="{{ $form->jabatan }}" readonly />
                            </div>
                            <div class="mb-3">

                                <label class="form-label" for="bs-validation-dob">Tanggal lahir</label>
                                <input type="text" class="form-control flatpickr-validation" id="bs-validation-dob" value="{{ $form->date }}" readonly />
                            </div>
                            <div class="mb-3">

                                <label class="form-label" for="bs-validation-dob">Unit kerja</label>
                                <input type="text" class="form-control" id="bs-validation-unit_kerja" value="{{ $form->unit_kerja }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-wa">No WA</label>
                                <input type="text" class="form-control" id="bs-validation-wa" value="{{ $form->nomor_wa }}" readonly />
                            </div>
                            <div class="mb-3">
                                <div class="card p-2 shadow-none border">
                                    <div class="rounded-2 text-center mb-3">
                                        <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                            type="application/pdf" width="100%" height="300px">
                                            <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    download>men-download</a> dokumen ini.</p>
                                        </object>
                                    </div>
                                    <div class="card-body p-3 pt-2">
                                        <a class="w-100 btn btn-label-primary"
                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-skPangkat">SK PANGKAT TERAKHIR</label>
                                <input type="file" class="form-control" id="bs-validation-upload-skPangkat" name="doc_skPangkat" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-pakKonvensional">PAK KONVENSIONAL (PAK Terakhir)</label>
                                <input type="file" class="form-control" id="bs-validation-upload-pakKonvensional" name="doc_pakKonvensional" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-pakIntegrasi">PAK INTEGRASI</label>
                                <input type="file" class="form-control" id="bs-validation-upload-pakIntegrasi" name="doc_pakIntegrasi" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-pakKonversi">PAK KONVERSI</label>
                                <input type="file" class="form-control" id="bs-validation-upload-pakKonversi" name="doc_pakKonversi" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-penilaian2022">PENILAIAN KINERJA 2022</label>
                                <input type="file" class="form-control" id="bs-validation-upload-penilaian2022" name="doc_penilaian2022" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-penilaian2023">PENILAIAN KINERJA 2023</label>
                                <input type="file" class="form-control" id="bs-validation-upload-penilaian2023" name="doc_penilaian2023" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-jabatanLama">SK JABATAN ATASAN LANGSUNG</label>
                                <input type="file" class="form-control" id="bs-validation-upload-jabatanLama" name="doc_jabatanLama" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-jabatanTerakhir">SK JABATAN FUNGSIONAL LAMA</label>
                                <input type="file" class="form-control" id="bs-validation-upload-jabatanTerakhir" name="doc_jabatanTerakhir" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-pendidik">SERTIFIKAT PENDIDIK (Bagi Guru)</label>
                                <input type="file" class="form-control" id="bs-validation-upload-pendidik" name="doc_pendidik" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-uji">SERTIFIKAT UJI KOMPETENSI (Bagi yang naik jenjang)</label>
                                <input type="file" class="form-control" id="bs-validation-upload-uji" name="doc_uji" accept="application/pdf" required />
                                <div class="invalid-feedback">Silahkan unggah file PDF maksimal 1MB</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Bootstrap Validation -->
                  <div class="card mb-4 mt-4">
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="card-body">
                                <div class="row gy-4 mb-4">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_skPangkat) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_skPangkat) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_skPangkat) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_suratPengantar) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card p-2 h-100 shadow-none border">
                                            <div class="rounded-2 text-center mb-3">
                                                <object data="{{ asset('assets/documentJabatans/' . $form->doc_uji) }}"
                                                    type="application/pdf" width="100%" height="300px">
                                                    <p>Browser tidak mendukung tampilan PDF. Anda dapat <a
                                                            href="{{ asset('assets/documentJabatans/' . $form->doc_uji) }}"
                                                            download>men-download</a> dokumen ini.</p>
                                                </object>
                                            </div>
                                            <div class="card-body p-3 pt-2">
                                                <a class="h5" href="app-academy-course-details.html">SURAT PENGANTAR (dari Kepala SKPD)</a>
                                                <a class="w-100 btn btn-label-primary"
                                                    href="{{ asset('assets/documentJabatans/' . $form->doc_uji) }}" download><i
                                                        class="me-2 mt-n1 scaleX-n1-rtl"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>

                    </div>
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
