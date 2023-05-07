@extends('admin.layouts.admin')

@section('title')
    Categories
@endsection

@section('css_styles')
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


@section('breadcrumb')
    @include('admin.layouts.inc.breadcrumb', ['page_title' => __('admin.category.categories'),'items' => [ __('admin.category.categories') => '']])
@endsection

@section('content')

<div>
    <livewire:admin.category.index />
</div>

@endsection

@section('js_scripts')
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
@endsection
