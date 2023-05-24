@include('admin.partials.header-links')
@include('admin.partials.header')
<div id="layoutSidenav">
<div id="layoutSidenav_nav">          
@include('admin.partials.sidebar')

</div>
<div id="layoutSidenav_content">
@yield('main-content')
@include('admin.partials.footer')

</div>
</div>
@include('admin.partials.footer-links')
