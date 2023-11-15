<table  class="data-table table align-middle table-row-dashed fs-6 g-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th><input type="checkbox" id="select-all"></th>
        <th>ID</th>
        {{-- <th>Dealer Status</th> --}}
        <th>Status</th>
        <th>Carrier</th>
        <th>Category</th>
        <th>Product</th>
        <th>Price</th>
        <th>Fee</th>
        <th>Store Commission</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
    {{-- @if(count($account->products))
        @foreach($account->products as $product)
            <tr>
                <td>{{ $product->ProductKey }}</td>
                <td>
                    @if($product->pivot->Status == \App\Models\AccountProductMappingDim::STATUS_ACTIVE)
                        <span class="ms-2 badge badge-light-success fw-bold"> {{ $product->pivot->Status }} </span>
                    @elseif($product->pivot->Status == \App\Models\AccountProductMappingDim::STATUS_INACTIVE)
                        <span class="ms-2 badge badge-light-danger fw-bold"> {{ $product->pivot->Status }} </span>
                    @endif
                </td>
                <td>{{ $product->carrier['Name'] }}</td>
                <td>{{ $product->Category }}</td>
                <td>{{ $product->Name }}</td>
                <td>${{ $product->Price }}</td>
                <td>{{ ($product->IsPercentageProcessingFee == 1) ? $product->AgentProcessingFee.'%' : '$'.$product->AgentProcessingFee }}</td>
                <td>
                    {{ ($product->IsPercentageTotalCommission == 1)
                        ? (($product->TotalCommission - $product->AgentCommissionHoldBack) * $product->pivot->StoreCommissionSplit) * 100 .'%'
                        : '$'.($product->TotalCommission - $product->AgentCommissionHoldBack) * $product->pivot->StoreCommissionSplit
                    }}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6">
                <p class="text-danger text-center">No record found!</p>
            </td>
        </tr>
    @endif --}}
    </tbody>
</table>
<button id="save-button" class="btn btn-primary">Save</button>
@push('pageInnerScript')
    <script type="text/javascript">
        $(function () {
            let fractionalValue = 4;
            let table = $('.data-table').DataTable({
                ordering: false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('store-setting.products', $account->AccountKey) }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val(),
                        d.status = $('#status').val(),
                        d.category = $('#category').val(),
                        d.carrier = $('#carrier').val()
                    }
                },
                columns: [
                    {
                        data: null,
                        render: function (data, type, row) {
                            var checkboxHtml = '<input type="checkbox" class="row-checkbox" value="' + data.ProductKey + '"';
                            if (data.IsEnabled == 1) {
                                checkboxHtml += ' checked';
                            }
                            checkboxHtml += '>';
                            return checkboxHtml;
                        },
                        orderable: false,
                        searchable: false,
                    },
                    {data: 'id', name: 'id'},
                    {data: 'DealerStatus', name: 'DealerStatus'},
                    // {data: 'Status', name: 'Status'},
                    {data: 'Carrier', name: 'Carrier'},
                    {data: 'Category', name: 'Category'},
                    {data: 'Product', name: 'Product'},
                    {data: 'Price', name: 'Price'},
                    {data: 'Fee', name: 'Fee'},
                    {data: 'StoreCommission', name: 'StoreCommission'},
                ],
            });

            $('#select-all').on('change', function () {
                $('.row-checkbox').prop('checked', $(this).prop('checked'));
            });

            $('#carrier,#status,#category').change(function () {
                table.draw();
            });

            // Handle save button click
            $('#save-button').on('click', function () {
                var selectedRows = $('.row-checkbox:checked').map(function () {
                    return $(this).val();
                }).get();

                var unselectedRows = $('.row-checkbox:not(:checked)').map(function () {
                    return $(this).val();
                }).get();

                console.log(selectedRows, unselectedRows);

                // Send AJAX request with selected row IDs
                $.ajax({
                    url: "{{ route('store-setting.products.status.update') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    method: 'POST',
                    data: { SelectedRows: selectedRows, UnselectedRows: unselectedRows, AccountKey: {{ $account->AccountKey }} },
                    success: function(response) {

                        // refresh datatable
                        $('.data-table').DataTable().ajax.reload();

                        Swal.fire({
                            title: 'Success!',
                            text: 'Products status updated successfully.',
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        });

                        $('#select-all').prop('checked', false);
                    },
                    error: function() {
                        // Handle the error case
                    }
                });
            });

        });

    </script>
@endpush
