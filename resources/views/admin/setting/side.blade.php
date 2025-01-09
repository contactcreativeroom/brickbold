

<div class="nav flex-column nav-tabs h-100" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }}" href="{{route('admin.settings')}}">Home</a>
    <a class="nav-link {{ (request()->is('admin/settings/social')) ? 'active' : '' }}" href="{{route('admin.settings.social')}}">Social</a>
    {{-- <a class="nav-link {{ (request()->is('admin/settings/seo-list') || request()->is('admin/settings/seo') || request()->is('admin/settings/seo/*')) ? 'active' : '' }}" href="{{route('admin.settings.seo.list')}}">SEO Pages</a>
    <a class="nav-link {{ (request()->is('admin/settings/marketing-facebook')) ? 'active' : '' }}" href="{{route('admin.settings.marketing.facebook')}}">Facebook Marketing</a>
    <a class="nav-link {{ (request()->is('admin/settings/payments')) ? 'active' : '' }}" href="{{route('admin.settings.payments')}}">Payment Methods</a> --}}
 
</div>

 