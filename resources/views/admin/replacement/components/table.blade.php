<table class="data-table table align-middle table-row-dashed g-5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Origin</th>
        <th>Item Number</th>
        <th>Order Date</th>
        <th>Shipment Type</th>
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
                    url: "{{ route('replacements') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.orderType = $('#orderType').val()
                        d.origin = $('#origin').val()
                        d.shipmentOption = $('#shipmentOption').val()
                        d.date_range = $('#kt_daterangepicker_1').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'type', name: 'type'},
                    {data: 'order_id', name: 'order_id'},
                    {data: 'customer', name: 'customer'},
                    {data: 'origin', name: 'origin'},
                    {data: 'replacement_id', name: 'replacement_id'},
                    {data: 'order_date', name: 'order_date'},
                    {data: 'shipmentType', name: 'shipmentType'},
                    {data: 'status', name: 'status'},
                ],
            });

            $('#status, #orderType, #origin, #shipmentOption, #kt_daterangepicker_1').change(function () {
                table.draw();
            });

            $("#kt_daterangepicker_1").daterangepicker({
                startDate: moment().subtract('days', 29),
                endDate: moment(),
            });

            $('body').on('click', '#replacementDetail', function (event) {
                event.preventDefault();

                let id = $(this).data('id');

                $.get('/admin/order/view/' + id, function (data) {
                    console.log(data.data);
                    $('#orderDetailModal').modal('show');
                })
            });
        });
    </script>
@endpush
