<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-muted">
        <th>Invoice</th>
        <th>Project</th>
        <th>Amount</th>
        <th>Issue/ Due Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a href="{{ route('customer.invoice.show', 31202) }}">31202</a>
            </td>
            <td>DD App Start</td>
            <td>$10.00</td>
            <td>02-08-2023 <br> 09-08-2023</td>
            <td><span class="badge badge-light-warning">Pending</span></td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('customer.invoice.show', 34782) }}">34782</a>
            </td>
            <td>Front-end Basics</td>
            <td>$302.00</td>
            <td>02-08-2023 <br> 09-08-2023</td>
            <td><span class="badge badge-light-warning">Pending</span></td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('customer.invoice.show', 34785) }}">34782</a>
            </td>
            <td>Quacdic App</td>
            <td>$1022.00</td>
            <td>02-08-2023 <br> 09-08-2023</td>
            <td><span class="badge badge-light-success">Completed</span></td>
        </tr>
    </tbody>
</table>
