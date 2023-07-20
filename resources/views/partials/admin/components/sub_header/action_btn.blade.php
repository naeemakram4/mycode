@if(!empty($action))
    <!--begin::Actions-->
    <div class="d-flex align-items-center ms-2 gap-2 gap-lg-3">
        <!--begin::Primary button-->
        <a href="{{ $action['route'] }}" {{ $action['data'] ?? '' }} class="btn btn-sm btn-primary">{{ $action['text'] }}</a>
        <!--end::Primary button-->
    </div>
    <!--end::Actions-->
@endif
