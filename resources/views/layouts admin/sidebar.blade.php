<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/') }}/img/favicon/polindra.png" alt="" width="40px" height="40px">
        </span>
        <span class="app-brand-text demo menu-text fw-bold">Super admin</span>
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
      {{-- <li class="menu-item {{ Request::is('profile') ? 'active' : '' }}">
        <a href="/profile" class="menu-link">
            <i class="menu-icon tf-icons ti ti-user"></i>
            <div data-i18n="Profile">Profile</div>
        </a>
      </li> --}}
      <li class="menu-item {{ Request::is('role') ? 'active' : '' }}">
        <a href="/role" class="menu-link">
            <i class="menu-icon ti ti-settings"></i>
            <div data-i18n="role">role</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('pages') ? 'active' : '' }}">
        <a href="/pages" class="menu-link">
            <i class="menu-icon tf-icons ti ti-file"></i>
            <div data-i18n="pages">pages</div>
        </a>
      </li>

    </ul>
  </aside>
  <!-- / Menu -->
