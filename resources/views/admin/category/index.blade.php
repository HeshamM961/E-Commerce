@extends('admin.layouts.admin')

@section('title')
    Categories
@endsection

@section('css_styles')
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <!--begin::Category-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Category" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Add customer-->
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                    Add Category
                </a>
                <!--end::Add customer-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-250px">Category</th>
                    <th class="min-w-150px">Category Type</th>
                    <th class="min-w-70px">Actions</th>
                </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url(../../../assets/media/stock/ecommerce/68.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->

                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Computers</a>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bold">Our computers and tablets include all the big brands.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="add-category.html" class="menu-link px-3">
                                    Edit
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                    Delete
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->    </div>
        <!--end::Card body-->
    </div>
    <!--end::Category-->

@endsection

@section('js_scripts')
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
@endsection