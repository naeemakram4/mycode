<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th>ID</th>
        <th>Label</th>
        <th>Total Clients</th>
        <th>Total Leads</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($services))
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->label}}</td>
                <td>{{ $service->clients_count }}</td>
                <td>{{ $service->lead_managements_count }}</td>
                <td>{{ $service->description ?? '--'}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
