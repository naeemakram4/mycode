<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-8">
        <div class="card-title">
            <h3>Files</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body">
        <div class="row g-6 g-xl-9">
            @foreach($project->tasks as $task)
                <!--begin::Col-->
                <div class="col-md-3 col-xl-4">
                    <!--begin::Card-->
                    <a href="" class="card border border-1">
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <div class="fs-3 fw-bolder text-dark">{{ $task->subject }}</div>
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">{{ ucfirst(str_replace('_', ' ',$task->status)) }}</span>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px w-100px bg-light">
                                <img src="{{ asset('assets/media/logos/avatar.png') }}" alt="image" class="p-3">
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end:: Card body-->
                    </a>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            @endforeach
        </div>
    </div>
    <!--end::Card body-->
</div>
