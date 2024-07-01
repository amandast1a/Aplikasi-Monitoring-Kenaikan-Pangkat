<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard-pengusul" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/') }}/img/favicon/polindra.png" alt="" width="40px" height="40px">
        </span>
        <span class="app-brand-text demo menu-text fw-bold">Pengusul</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ Request::is('dashboard-pengusul') ? 'active' : '' }}">
        <a href="/dashboard-pengusul" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('notifikasi-pengusul') ? 'active' : '' }}">
        <a href="/notifikasi-pengusul" class="menu-link">
            <i class="menu-icon tf-icons ti ti-bell"></i>
            <div data-i18n="Notifikasi">Notifikasi</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-files"></i>
          <div data-i18n="Form Kenaikan Pangkat">Form Kenaikan Pangkat</div>
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
            <li class="menu-item {{ Request::is('table-jabatan-ijazah') ? 'active' : '' }}">
                <a href="/table-jabatan-ijazah" class="menu-link" >
                <div data-i18n="Formulir usul kenaikan pangkat penyesuaian ijazah">Formulir usul kenaikan pangkat penyesuaian ijazah</div>
                </a>
            </li>
            </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-progress"></i>
          <div data-i18n="Proses">Proses</div>
        </a>
            <ul class="menu-sub">
            <li class="menu-item {{ Request::is('proses-table-regular') ? 'active' : '' }}">
                <a href="/proses-table-regular" class="menu-link" >
                <div data-i18n="Proses Formulir usul kenaikan pangkat reguler">Formulir usul kenaikan pangkat reguler</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('proses-table-jabatan-fungsional') ? 'active' : '' }}">
                <a href="/proses-table-jabatan-fungsional" class="menu-link">
                <div data-i18n="Proses Formulir usul kenaikan pangkat jabatan fungsional">Proses Formulir usul kenaikan pangkat jabatan fungsional</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('proses-table-jabatan-struktural') ? 'active' : '' }}">
                <a href="/proses-table-jabatan-struktural" class="menu-link" >
                <div data-i18n="Proses Formulir usul kenaikan pangkat jabatan struktural">Proses Formulir usul kenaikan pangkat jabatan struktural</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('proses-table-jabatan-struktural') ? 'active' : '' }}">
                <a href="/proses-table-jabatan-struktural" class="menu-link" >
                <div data-i18n="Proses Formulir usul kenaikan pangkat penyesuaian ijazah">Proses Formulir usul kenaikan pangkat penyesuaian ijazah</div>
                </a>
            </li>
            </ul>
      </li>
      <li class="menu-item {{ Request::is('notifikasi-pengusul') ? 'active' : '' }}">
        <a href="/notifikasi-pengusul" class="menu-link">
            <i class="menu-icon tf-icons ti ti-check"></i>
            {{-- <i class="ti ti-rosette-discount-check"></i> --}}
            {{-- <i class="ti ti-circle-dashed-check"></i> --}}
            <div data-i18n="Berhasil Diverifikasi">Berhasil Diverifikasi</div>
        </a>
      </li>

    </ul>
  </aside>
  <!-- / Menu -->
