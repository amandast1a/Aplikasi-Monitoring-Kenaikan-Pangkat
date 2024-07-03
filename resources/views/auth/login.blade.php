<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}/"
  data-template="vertical-menu-template">
  <head>
    @include('layouts auth.header')
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('assets/') }}/img/favicon/logo.png" alt="" width="40px" height="40px">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold ms-1" style="font-size: 16px; width: 100%;">PENGOLAHAN DATA DAN MONITORING KENAIKAN PANGKAT</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Welcome back</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('authenticate') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="email" class="form-label">NIP</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="nip"
                    placeholder="Enter your NIP"
                    autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    @include('layouts auth.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('logoutsuccess'))
        <script>
            Swal.fire('{{ $message }}', "", "success")
        </script>
    @endif
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}', "", "warning");
        </script>
    @endif
  </body>
</html>
