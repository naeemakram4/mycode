@if(!empty($breadcrumbs))
    <!--begin::Separator-->
    <span class="h-20px border-gray-300 border-start mx-4"></span>
    <!--end::Separator-->

    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        @foreach($breadcrumbs as $leaf)
            @if(!empty($leaf['url']))
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="{{ $leaf['url'] }}" class="text-muted text-hover-primary">
                        {{ ucfirst($leaf['text']) }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">{{ ucfirst($leaf['text']) }}</li>
            @endif
        @endforeach
    </ul>
    <!--end::Breadcrumb-->
@endif
