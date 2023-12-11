<table class="data-table table align-middle table-row-dashed g-5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Client</th>
        <th>Subject</th>
        <th>Status</th>
        <th>Created At</th>
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
                    url: "{{ route('admin.request.index') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.date_range = $('#kt_daterangepicker_1').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'client',name: 'client'},
                    {data: 'subject',name: 'subject'},
                    {data: 'status',name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                ],
            });

            $('#status, #kt_daterangepicker_1').change(function () {
                table.draw();
            });

            $("#kt_daterangepicker_1").daterangepicker({
                startDate: moment().subtract('days', 29),
                endDate: moment(),
            });
        });
    </script>
@endpush

