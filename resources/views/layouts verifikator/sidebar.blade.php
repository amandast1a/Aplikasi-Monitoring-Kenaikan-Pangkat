<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/') }}/img/favicon/polindra.png" alt="" width="40px" height="40px">
        </span>
        <span class="app-brand-text demo menu-text fw-bold">Verifikator</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
        <a href="/" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('notif-pengusul') ? 'active' : '' }}">
        <a href="/notif-pengusul" class="menu-link">
            <i class="menu-icon tf-icons ti ti-bell"></i>
            <div data-i18n="Notifikasi">Notifikasi</div>
        </a>
      </li>
      {{-- <li class="menu-item {{ Request::is('profile') ? 'active' : '' }}">
        <a href="/profile" class="menu-link">
            <i class="menu-icon tf-icons ti ti-user"></i>
            <div data-i18n="Profile">Profile</div>
        </a>
      </li> --}}
      {{-- <li class="menu-item {{ Request::is('index-form') ? 'active' : '' }}">
        <a href="/index-form" class="menu-link">
            <i class="menu-icon ti ti-list-details"></i>
            <div data-i18n="index-form">index-form</div>
        </a>
      </li> --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-files"></i>
          <div data-i18n="Kenaikan Pangkat">Kenaikan Pangkat</div>
        </a>
            <ul class="menu-sub">
            <li class="menu-item {{ Request::is('table-regular') ? 'active' : '' }}">
                <a href="/table-regular" class="menu-link" >
                <div data-i18n="Formulir usul kenaikan pangkat reguler">Formulir usul kenaikan pangkat reguler</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('table-jabatan-fungsional') ? 'active' : '' }}">
                <a href="/table-jabatan-fungsional" class="menu-link">
                <div data-i18n="Formulir usul kenaikan pangkat jabatan fungsional">Formulir usul kenaikan pangkat jabatan fungsional</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('table-jabatan-struktural') ? 'active' : '' }}">
                <a href="/table-jabatan-struktural" class="menu-link" >
                <div data-i18n="Formulir usul kenaikan pangkat jabatan struktural">Formulir usul kenaikan pangkat jabatan struktural</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
                <a href="/" class="menu-link" >
                <div data-i18n="Formulir usul kenaikan pangkat penyesuaian ijazah">Formulir usul kenaikan pangkat penyesuaian ijazah</div>
                </a>
            </li>
            </ul>
      </li>

    </ul>
  </aside>
  <!-- / Menu -->
