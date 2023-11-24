<table class="data-table table align-middle table-row-dashed g-5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Logo</th>
        <th>Client</th>
        <th>Name</th>
        <th>Description</th>
        <th>Start/ Due Date</th>
        <th>Created At</th>
        <th>Status</th>
    </tr>
    </thead>
</table>

@push('pageInnerScript')
    <script type="text/javascript">
        $(function () {
            let table = $('.data-table').DataTable({
                ordering: false,
                searching: false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.project.index') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.client = $('#client').val()
                        d.date_range = $('#kt_daterangepicker_1').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'logo', name: 'logo'},
                    {data: 'client',name: 'client'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'start_due_date', name: 'start_due_date'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'status',name: 'status'},
                ],
            });

            $('#status, #client, #kt_daterangepicker_1').change(function () {
                table.draw();
            });

            $("#kt_daterangepicker_1").daterangepicker({
                startDate: moment().subtract('days', 29),
                endDate: moment(),
            });
        });
    </script>
@endpush