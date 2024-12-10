<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  @include('admin.layouts.head')
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      @include('admin.layouts.sidebar')


      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        @include('admin.layouts.navbar')

        <!-- / Navbar -->


        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          @yield('content')

          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . Made with ❤️ by Creative Room

              </div>

            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  @include('admin.layouts.script')

  @stack('scripts')

  @if(Session::has('message'))

    @if(Session::get('result')==true)
    <script type="text/javascript">
      toastr.success("{{ Session::get('message') }}", 'Success');
    </script>
    @endif

    @if(Session::get('result')==false)
    <script type="text/javascript">
      toastr.error("{{ Session::get('message') }}", 'Error');
    </script>
    @endif

  @endif

</body>

</html>