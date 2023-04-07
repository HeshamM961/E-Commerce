<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
        {{ $page_title }}
    </h1>
    <!--end::Title-->

    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-item fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">
                Dashboard
            </a>
        </li>
        <!--end::Item-->
        @foreach($items as $key => $item)
            <li class="breadcrumb-item">
                @if ($item != '')
                    <a href="{{ $item }}" class="text-muted text-hover-primary">
                        {{$key}}
                    </a>
                @else
                    {{ $key }}
                @endif
            </li>
        @endforeach
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->





