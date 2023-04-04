<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--begin::Fonts(mandatory for all pages)-->
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>--}}
    <!--end::Fonts-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    @livewireStyles
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">


<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


        <!-- Header -->
        @include('admin.layouts.inc.header')
        <!-- End Header -->

        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            <!-- Sidebar -->
            @include('admin.layouts.inc.sidebar')
            <!-- End Sidebar -->

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">


                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Multipurpose
                                </h1>
                                <!--end::Title-->

                                @include('admin.layouts.inc.breadcrumb')
                            </div>
                            <!--end::Page title-->

                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->


                </div>
            </div>
        </div>

    </div>
    <!-- /Page Wrapper -->

</div>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->


@livewireScripts
</body>
</html>
