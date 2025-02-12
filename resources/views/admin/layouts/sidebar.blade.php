<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme primary elevation-4">
    <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" {{-- class="app-brand-link" --}}>
            <img src="{{ App\Helper\Helper::getLogo(); }}" width="100%">
        </a>

        {{-- <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a> --}}
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1"> 
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Navigation</span>
        </li>
        <!-- Dashboard -->

        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.dashboard']) ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-tv"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.banners']) ? 'active' : '' }}">
            <a href="{{ route('admin.banners') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-images"></i>
                <div data-i18n="Analytics">Banners</div>
            </a>
        </li> --}}
        @if (Auth::guard('admin')->user()->level ==1)
            <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.subadmins']) ? 'active' : '' }}">
                <a href="{{ route('admin.subadmins') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-user-tie"></i>
                    <div>Sub Admin</div>
                </a>
            </li>
        @endif
        

        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.users']) ? 'active' : '' }}">
            <a href="{{route('admin.users')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-users"></i>
                <div>Users</div>
            </a>
        </li> 

        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.properties']) ? 'active' : '' }}">
            <a href="{{route('admin.properties')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-building"></i>
                <div>Properties</div>
            </a>
        </li>
          

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Packages</span>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.packages']) ? 'active' : '' }}">
            <a href="{{ route('admin.packages') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-box"></i>
                <div>Packages</div>
            </a>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.package.orders']) ? 'active' : '' }}">
            <a href="{{ route('admin.package.orders') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-file-invoice"></i>
                <div>Orders</div>
            </a>
        </li>    
       
        {{-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">General Pages</span>
        </li>

        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.banners']) ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon fa-solid fa-info-circle"></i>
                <div>About-Us</div>
            </a>
        </li>

        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.banners']) ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon fa-solid fa-envelope"></i>
                <div>Contact-Us</div>
            </a>
        </li> --}}

        
 
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Enquiries</span>
        </li> 
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.property-enquiries']) ? 'active' : '' }}">
            <a href="{{route('admin.property-enquiries')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-home"></i>
                <div>Properties Enquiries</div>
            </a>
        </li> 
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.contact-enquiries']) ? 'active' : '' }}">
            <a href="{{route('admin.contact-enquiries')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-address-card"></i>
                <div>Contact Enquiries</div>
            </a>
        </li> 
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.loan-enquiries']) ? 'active' : '' }}">
            <a href="{{route('admin.loan-enquiries')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-house-user"></i>
                <div>Home Loan Enquiries</div>
            </a>
        </li> 
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.subscribers']) ? 'active' : '' }}">
            <a href="{{route('admin.subscribers')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-user-check"></i>
                <div>Subscribers</div>
            </a>
        </li> 

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">CMS Pages</span>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.pages']) ? 'active' : '' }}">
            <a href="{{route('admin.pages')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-file"></i>
                <div data-i18n="Analytics">All Pages</div>
            </a>
        </li>

        @foreach (App\Helper\Helper::pages() as $page)
            <li class="menu-item {{ (Route::currentRouteName() == 'admin.page.edit' && Route::current()->parameter('id') == $page->id) ? 'active' : '' }}">
                <a href="{{route('admin.page.edit', $page->id)}}" class="menu-link">
                    <i class="menu-icon fa-solid {{$page->icon}}"></i>
                    <div data-i18n="Analytics">{{$page->title}}</div>
                </a>
            </li>
        @endforeach 

        {{-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">SEO</span>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.meta.list']) ? 'active' : '' }}">
            <a href="{{ route('admin.meta.list') }}" class="menu-link">
                <i class="menu-icon fas fa-file-alt"></i>
                <div data-i18n="Analytics">Meta Details</div>
            </a>
        </li> --}}
    </ul>
</aside>

 
