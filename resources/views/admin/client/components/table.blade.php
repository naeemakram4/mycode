<table class="data-table table align-middle table-row-dashed g-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th class="w-200px">Company</th>
        <th>Services</th>
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
                    url: "{{ route('admin.client.index') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.date_range = $('#kt_daterangepicker_1').val(),
                        d.search_company = $('#search_company').val()
                    }
                },
                columns: [
                    {data: 'company',name: 'company'},
                    {
                        data: "services",
                        "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html('<span class="badge badge-light-dark">' + oData.services + '</span>');
                        }
                    },
                    {data: 'status',name: 'status'},
                ],
            });

            $('#status, #kt_daterangepicker_1').change(function () {
                table.draw();
            });

            $('#search_company').keyup(function () {
                table.draw();
            });

            $("#kt_daterangepicker_1").daterangepicker({
                startDate: moment().subtract('days', 29),
                endDate: moment(),
            });
        });
    </script>
@endpush
