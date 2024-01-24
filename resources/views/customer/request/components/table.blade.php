<table class="data-table table align-middle table-row-dashed g-5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Ticket ID</th>
        <th>Employee</th>
        <th>Subject</th>
        <th>Request Type</th>
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
                    url: "{{ route('customer.request.index') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.date_range = $('#kt_daterangepicker_1').val()
                        d.request_type = $('#requestType').val()
                    }
                },
                columns: [
                    {
                        data: 'id',
                        "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html('<a href="javascript:void(0);" id="kt_drawer_example_dismiss_button" data-id="'+ oData.id +'">' + oData.id + '</a>');
                        }
                    },
                    {data: 'ticket_id',name: 'ticket_id'},
                    {data: 'employee',name: 'employee'},
                    {data: 'subject',name: 'subject'},
                    {data: 'request_type',name: 'request_type'},
                    {data: 'status',name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                ],
            });

            $('#status, #kt_daterangepicker_1, #requestType').change(function () {
                table.draw();
            });

            $("#kt_daterangepicker_1").daterangepicker({
                startDate: moment().subtract('days', 29),
                endDate: moment(),
            });

            // Right drawer content updating
            $('body').on('click', '#kt_drawer_example_dismiss_button', function (event) {
                event.preventDefault();

                let id = $(this).data('id');

                $.get('/customer/request/' + id, function (data) {
                    $('#drawerRequestType').text(data.request_type.label);
                    $('#drawerRequestStatus').text(data.status);
                    $('#drawerRequestTicketID').text(data.ticket_id);
                    $('#drawerRequestEmployeeName').text((data.employee != null) ? data.employee.user.first_name + ' ' + data.employee.user.last_name : 'Admin');
                    $('#drawerRequestEmployeeEmail').text((data.employee != null) ? data.employee.user.email : '');
                    $('#drawerRequestDate').text(data.created_at);
                    $('#drawerRequestSubject').text(data.subject);
                    $('#drawerRequestDescription').text(data.description);
                });
            });
        });
    </script>
@endpush

