<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th>ID</th>
        <th>Label</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($services))
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->label}}</td>
                <td>{{ $service->description ?? '--'}}</td>
                <td>
                    <button class="btn btn-sm btn-light-primary"
                            id="editService" data-id="{{ $service->id }}">
                        Edit
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
