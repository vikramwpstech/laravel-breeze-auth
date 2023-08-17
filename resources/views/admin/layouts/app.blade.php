<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('js/select.dataTables.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

        <style>
            /* .sidebar .nav .nav-item.active > .nav-link {
                background: #F95F53;
            }
            .sidebar .nav .nav-item .nav-link i.menu-icon {
                color: #F95F53;
            }
            .sidebar .nav .nav-item.active > .nav-link .menu-title{
                color: #000;
            }
            .sidebar .nav .nav-item .nav-link {
                color: #F95F53;
            }

            */
            .navbar .navbar-brand-wrapper {
                /* background-color: #F95F53; */
                background-color: #1E283D;
            }

            .navbar .navbar-brand-wrapper .navbar-toggler{
                color: rgba(255, 255, 255, 0.55);
            }

            .sidebar-icon-only .navbar .navbar-brand-wrapper{
                background-color: #1E283D;
            }

            .welcome-text .text-black{
                color: rgba(255, 255, 255, 0.55) !important;
            }

        </style>
        @livewireStyles
    </head>
    {{-- sidebar-icon-only --}}
    {{ Request::cookie('minimized') }}
    <body class="font-sans antialiased">

        <div class="container-scroller">

            <!-- partial:partials/_navbar.html -->
            @include('admin.layouts.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_settings-panel.html -->
              {{-- @include('admin.layouts.settings-panel') --}}
              <!-- partial -->
              <!-- partial:partials/_sidebar.html -->
              @include('admin.layouts.sidebar')
              <!-- partial -->
              <div class="main-panel">
                @yield('content')

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('admin.layouts.footer')
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('js/off-canvas.js')}}"></script>
        <script src="{{asset('js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/template.js')}}"></script>
        <script src="{{asset('js/settings.js')}}"></script>
        <script src="{{asset('js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
        <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>
        <!-- End custom js for this page-->

        <!-- Add this at the end of your HTML file, before </body> -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Check if the cookie exists
                function getCookie(name) {
                    const value = `; ${document.cookie}`;
                    const parts = value.split(`; ${name}=`);
                    if (parts.length === 2) return parts.pop().split(';').shift();
                }

                // Toggle the cookie and add/remove class
                function toggleCookie() {
                    const minimizedCookie = getCookie('minimized');
                    const now = new Date();
                    now.setFullYear(now.getFullYear() + 1); // Set the expiration to 1 year from now
                    const expires = now.toUTCString();

                    if (minimizedCookie === 'true') {
                        // Remove the cookie and class
                        document.cookie = 'minimized=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                        document.body.classList.remove('navbar-minimized');
                    } else {
                        // Set the cookie and add the class
                        document.cookie = 'minimized=true; expires=' + expires + '; path=/';
                        document.body.classList.add('navbar-minimized');
                    }
                }

                const minimizeButton = document.getElementById('minimizeButton');

                minimizeButton.addEventListener('click', function() {
                    toggleCookie();
                });

                // Check if the cookie exists and add class to body if needed
                const minimizedCookie = getCookie('minimized');
                if (minimizedCookie === 'true') {
                    document.body.classList.add('sidebar-icon-only');
                }
            });
        </script>

        @livewireScripts
    </body>
</html>
