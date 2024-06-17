<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    <title>Role - Super admin</title>
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
                <h4 class="mb-4">Roles List</h4>

                <p class="mb-4">
                  A role provided access to predefined menus and features so that depending on <br />
                  assigned role an administrator can have access to what user needs.
                </p>
                <!-- Role cards -->
                <div class="row g-4">
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h6 class="fw-normal mb-2">Total 1 users</h6>
                          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Vinnie Mostowy"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar" />
                            </li>
                          </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-1">
                          <div class="role-heading">
                            <h4 class="mb-1">Super Admin</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h6 class="fw-normal mb-2">Total 7 users</h6>
                          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Jimmy Ressula"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/4.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="John Doe"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Kristi Lawker"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/2.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Kaith D'souza"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/3.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Danny Paul"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/7.png" alt="Avatar" />
                            </li>
                          </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-1">
                          <div class="role-heading">
                            <h4 class="mb-1">Verifikator</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h6 class="fw-normal mb-2">Total 5 users</h6>
                          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Andrew Tye"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Rishi Swaat"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/9.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Rossie Kim"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Kim Merchent"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="Avatar" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              title="Sam D'souza"
                              class="avatar avatar-sm pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/13.png" alt="Avatar" />
                            </li>
                          </ul>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-1">
                          <div class="role-heading">
                            <h4 class="mb-1">Pengusul</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <!-- Role Table -->
                    <div class="card">
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                <i class="ti ti-brand-angular ti-lg text-danger me-3"></i>
                                <span class="fw-medium">Angular Project</span>
                                </td>
                                <td>Albert Cook</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-pencil me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="ti ti-brand-react-native ti-lg text-info me-3"></i>
                                <span class="fw-medium">React Project</span>
                                </td>
                                <td>Barry Hunter</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td><span class="badge bg-label-success me-1">Completed</span></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-pencil me-2"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-trash me-2"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="ti ti-brand-vue ti-lg text-success me-3"></i>
                                <span class="fw-medium">VueJs Project</span>
                                </td>
                                <td>Trevor Baker</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-pencil me-2"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-trash me-2"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="ti ti-brand-bootstrap ti-lg text-primary me-3"></i>
                                <span class="fw-medium">Bootstrap Project</span>
                                </td>
                                <td>Jerry Milton</td>
                                <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-pencil me-2"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="ti ti-trash me-2"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!--/ Role Table -->
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
