
<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>KGDR</title>
        <meta charset="utf-8"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free."/>
        <meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href=""/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>

        @include('Template.Head')

        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5FS8GGP');
        </script>
        
        <script>
            var defaultThemeMode = "light";
            var themeMode;
        
            if ( document.documentElement ) {
                if ( document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if ( localStorage.getItem("data-theme") !== null ) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                    themeMode = defaultThemeMode;
                    }			
                }
        
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
            document.documentElement.setAttribute("data-theme", themeMode);
            }            
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>
    <body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
        
        <div class="preload-wrapper preloader" style="display: none;">
            <div id="preloader_3"></div>
        </div>

        <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        
                @include('Template.Header')
        
                <!--begin::Wrapper-->
                <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
        
                    @include('Template.Sidebar')

                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        @yield('content')

                        <div id="kt_app_footer" class="app-footer ">
                            <!--begin::Footer container-->
                            <div
                                class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                                <!--begin::Copyright-->
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">{{date('Y')}}&copy;</span>
                                    <a href="#" target="" class="text-gray-800 text-hover-primary">KGDR_OFFICIAL</a>
                                </div>
                                <!--end::Copyright-->
    
                                <!--begin::Menu-->
                                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                    <li class="menu-item"><a href="#" target="" class="menu-link px-2">About</a></li>
    
                                    <li class="menu-item"><a href="#" target="" class="menu-link px-2">Support</a></li>
    
                                    <li class="menu-item"><a href="#" target="" class="menu-link px-2">Purchase</a></li>
                                </ul>
                                <!--end::Menu-->
                            </div>
                            <!--end::Footer container-->
                        </div>
                    </div>
                    <!--end:::Main-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->

        <script>
            $(document).on("click", ".dalam-penawaran", function (e) {
                Swal.fire({
                    position:'center',
                    title: 'Perogram ini masih menunggu bembayaran DP, jadi beberapa fitur masih kami non aktifkan !',
                    icon: 'warning',
                    showConfirmButton: true,
                }).then((result) => {

                })
            });
        </script>

        @include('Template.HeadFoot')
    </body>
</html>