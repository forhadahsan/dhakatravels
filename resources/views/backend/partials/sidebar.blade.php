<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- <img src="{{ asset('frontend/img/logo.png') }}" alt=""> -->
        <h5>Dhaka Travels & Traders</h5>
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('admin/dashboard')? 'active' : '' }}">
      <a href="{{ url('admin/dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard &#9925; </div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item {{ request()->is('admin/topheader')? 'active' : '' }}">
      <a href="{{ url('admin/topheader') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Top Header &#127892; </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/abouts')? 'active' : '' }}">
      <a href="{{ url('admin/abouts') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> About Us</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/services')? 'active' : '' }}">
      <a href="{{ url('admin/services') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Service </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/galleries')? 'active' : '' }}">
      <a href="{{ url('admin/galleries') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Gallery </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/contacts')? 'active' : '' }}">
      <a href="{{ url('admin/contacts') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Contact </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/packages')? 'active' : '' }}">
      <a href="{{ url('admin/packages') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Package </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/ourclients')? 'active' : '' }}">
      <a href="{{ url('admin/ourclients') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Our Client </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/ourteams')? 'active' : '' }}">
      <a href="{{ url('admin/ourteams') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Our Team </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/stories')? 'active' : '' }}">
      <a href="{{ url('admin/stories') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Story </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/blogs')? 'active' : '' }}">
      <a href="{{ url('admin/blogs') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Blog </div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/topdestination')? 'active' : '' }}">
      <a href="{{ url('admin/topdestination') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics"> Top Destination </div>
      </a>
    </li>
    {{-- <li class="menu-item {{ request()->is('admin/teams*')? 'active' : '' }}">
      <a href="{{ url('admin/teams') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Team</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/stories*')? 'active' : '' }}">
      <a href="{{ url('admin/stories') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Stories</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/projects*')? 'active' : '' }}">
      <a href="{{ url('admin/projects') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/documents*')? 'active' : '' }}">
      <a href="{{ url('admin/documents') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project Documents</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/news*')? 'active' : '' }}">
      <a href="{{ url('admin/news') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">News</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/galleries*')? 'active' : '' }}">
      <a href="{{ url('admin/galleries') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Gallery</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/carriers*')? 'active' : '' }}">
      <a href="{{ url('admin/carriers') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Career</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/projectcategory*')? 'active' : '' }}">
      <a href="{{ url('admin/projectcategory') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Project Category</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/credits*')? 'active' : '' }}">
      <a href="{{ url('admin/credits') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Credits</div>
      </a>
    </li>
 
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Configuration</span>
    </li>
    <li class="menu-item {{ request()->is('admin/websites*')? 'active' : '' }}">
      <a href="{{ url('admin/websites/1/edit') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-contact"></i>
        <div data-i18n="Analytics">Website</div>
      </a>
    </li> --}}

 

  </ul>
</aside>