@extends('admin.layouts.admin')

@section('title')
    Create Category
@endsection

@section('css_styles')
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/plugins/custom/cropperjs/cropper.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('breadcrumb')
    @include('admin.layouts.inc.breadcrumb', ['page_title' => 'Create Category','items' => ['category' => route('admin.category.index'), 'Create Category' => '']])
@endsection

@section('content')

        <div id="category_form_errors" class="alert alert-danger d-none">
            <ul id="category_errors">

            </ul>
        </div>

    <form id="category_form" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
        @csrf
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Thumbnail</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->

                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">

                        <label class="label" data-toggle="tooltip" title="Change your avatar">
                            <img class="rounded w-150px h-150px" id="avatar" src="{{ asset('admin/media/svg/files/blank-image.svg') }}" alt="avatar">
                            <input type="file" class="sr-only" id="input" name="image" accept="image/*">
                        </label>

                        <input type="hidden" id="image" name="image">
                    </div>

                    {{--<style>
                        .image-input-placeholder {
                            background-image: url('{{ asset('admin/media/svg/files/blank-image.svg') }}');
                        }

                        [data-bs-theme="dark"] .image-input-placeholder {
                            background-image: url('{{ asset('admin/media/svg/files/blank-image-dark.svg') }}');
                        }
                    </style>
                    <!--end::Image input placeholder-->

                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::Preview existing avatar-->

                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>                <!--end::Icon-->

                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->

                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
                        <!--end::Cancel-->

                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
                        <!--end::Remove-->
                    </div>--}}
                    <!--end::Image input-->

                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Status</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select2-->
                    <select class="form-select mb-2" name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                        <option></option>
                        <option value="1" selected>Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                    <!--end::Select2-->

                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the category status.</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
            <!--end::Status-->
        <!--end::Aside column-->

        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>General</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Category Name</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="name" class="form-control mb-2" placeholder="Category Name" value="" />
                        <!--end::Input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Category Slug</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="slug" class="form-control mb-2" placeholder="Category Slug" value="" />
                        <!--end::Input-->
                        <small id="slug_error" class="text-danger"></small>

                        <!--begin::Description-->
                        <div class="text-muted fs-7">A category Slug must be Unique</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div>
                        <!--begin::Label-->
                        <label class="form-label" for="description">Description</label>
                        <!--end::Label-->

                        <!--begin::Editor-->
                        <textarea name="description" id="description" cols="15" class="form-control mb-2" rows="5"></textarea>
                        <!--end::Editor-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
            <!--begin::Meta options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Meta Options</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Meta Tag Title</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                        <!--end::Input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label" for="meta_description">Meta Tag Description</label>
                        <!--end::Label-->

                        <!--begin::Editor-->
                        <textarea name="meta_description" id="meta_description" cols="15" class="form-control mb-2" rows="5"></textarea>
                        <!--end::Editor-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set a meta tag description to the category for increased SEO ranking.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div>
                        <!--begin::Label-->
                        <label class="form-label">Meta Tag Keywords</label>
                        <!--end::Label-->

                        <!--begin::Editor-->
                        <input id="kt_ecommerce_add_category_meta_keywords" name="meta_keyword" class="form-control mb-2" />
                        <!--end::Editor-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set a list of keywords that the category is related to. Separate the keywords by adding a comma <code>,</code> between each keyword.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card header-->
            </div>
            <!--end::Meta options-->

            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                    Cancel
                </a>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Save Changes
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>

    <!--begin::Modal - New Card-->
    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add Category Image</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="img-fluid">
                        <img id="hidden" height="50px" class="img-fluid" src="{{ asset('admin/media/svg/files/blank-image.svg') }}">
                    </div>
                    <div class="text-center pt-15">
                        <button type="button" class="btn btn-light me-3" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
                    </div>

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->


@endsection

@section('js_scripts')
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/cropperjs/cropper.js') }}"></script>

    <script>
        //Image Crop
        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar');
            var image = document.getElementById('hidden');
            var input = document.getElementById('input');
            var $modal = $('#modal');
            var cropper;

            $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                    var files = e.target.files;
                    var done = function (url) {
                        input.value = '';
                        image.src = url;
                        $modal.modal('show');
                    };
                    var reader;
                    var file;
                    var url;

                    if (files && files.length > 0) {
                        file = files[0];

                        if (URL) {
                            done(URL.createObjectURL(file));
                        } else if (FileReader) {
                            reader = new FileReader();
                            reader.onload = function (e) {
                                done(reader.result);
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                });

                $modal.on('shown.bs.modal', function () {
                    cropper = new Cropper(image, {
                        aspectRatio: 1,
                        viewMode: 3,
                    });
                }).on('hidden.bs.modal', function () {
                    cropper.destroy();
                    cropper = null;
                });

            document.getElementById('crop').addEventListener('click', function () {
                var canvas;
                $modal.modal('hide');
                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 700
                    });
                    avatar.src = canvas.toDataURL();
                    document.getElementById('image').value = avatar.src;
                }
            });
        });


        $('#category_form').submit(function (e){
            e.preventDefault();
            var form = this;
            $.ajax({
                url: '/admin/category/store',
                method: 'POST',
                data: $(form).serialize(),
                datatype: 'json',
                success: function (data){
                    if (data.success){
                        Swal.fire({
                            title: 'Success!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result)=> {
                            if (result.isConfirmed){
                                window.location.href = '/admin/category';
                            }
                        });
                    }
                },error: function (data){
                    $('html,body').animate({scrollTop:0}, 'slow');
                    $('#category_form_errors').removeClass('d-none').addClass('d-block');
                    var errors = data.responseJSON.errors;
                    $.each(errors, function (key, value){
                        $('#category_errors').append('<li>' + value + '</li>');
                    });
                }
            });
        });

    </script>


    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
@endsection
