<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th>User</th>
        <th>Module</th>
        <th>Log</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($logs))
        @foreach($logs as $log)
                @php $user = DB::table('users')->where('id',$log->user_id)->first(); @endphp
            <tr>
                <td>{{ $log->user_id }}</td>
                <td>{{$log->module}}</td>
                <td>{{$log->log}}</td>
                <td>{{date($setting->date_format,strtotime($log->created_at))}}</td>
            </tr>
        @endforeach
        @else
            <tr class="text-center">
                <td colspan="6" class="bg-light-danger text-danger">No record found!</td>
            </tr>
       @endif
    </tbody>
</table>

@push('pageInnerScript')
    <script>
    </script>
@endpush
