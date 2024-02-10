<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th>Name</th>
        <th>Company/ Website</th>
        <th>Phone/ Email</th>
        <th>Service</th>
        <th>Start Date</th>
        <th>Type</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->user->first_name .' '. $client->user->last_name }}</td>
            <td>{{ $client->company_name ?? ''}} <br>
                <a href="{{ $client->website ?? '' }}" target="_blank">{{ $client->website ?? ''}}</a>
            </td>
            <td>
                <a href="tel:{{ $client->user->phone }}">{{ $client->user->phone }}</a> <br>
                <a href="mailto:{{ $client->user->email }}">{{ $client->user->email }}</a></td>
            <td>
                @foreach($client->services as $service)
                    <span class="badge badge-light-dark">{{ $service->label ?? ''}}</span>
                @endforeach
            </td>
            <td>{{ $client->start_date ?? ''}}</td>
            <td>
                <span class="badge badge-light-primary">{{ $client->clientType->label ?? ''}}</span>
            </td>
            <td>
                @if($client->user->status == \App\Models\User::STATUS_ACTIVE)
                    <span class="badge badge-light-success">Active</span>
                @else
                    <span class="badge badge-light-danger">Inactive</span>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
