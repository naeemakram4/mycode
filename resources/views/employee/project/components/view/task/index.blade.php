<div class="tab-content">
    <!--begin::Tab pane-->
    <div id="kt_project_targets_card_pane" class="tab-pane fade active show">
        <!--begin::Row-->
        <div class="row g-9">
            @include('employee.project.components.view.task.yet-to-start')
            @include('employee.project.components.view.task.in-progress')
            @include('employee.project.components.view.task.completed')
        </div>
        <!--end::Row-->
    </div>
    <!--end::Tab pane-->
</div>

@push('pageInnerScript')
    <script>
        // Edit record modal window script
        $('body').on('click', '#editTaskBtn', function (event) {
            event.preventDefault();

            let id = $(this).data('id');

            $.get('/employee/task/' + id + '/edit', function (data) {
                $('#editTaskForm').prop('action', '/employee/task/' + data.id);
                $('input[name="subject"]').val(data.subject);
                $('textarea[name="description"]').text(data.description);
                $('input[name="due_date"]').val(data.due_date);
                $('select[name="task_assignees"]').val(data.employees[0].id);
                $('select[name="task_priority"]').val(data.priority);
                $('select[name="service"]').val(data.service_id);
                $('select[name="status"]').val(data.status);

                $('#kt_modal_edit_task').modal('show');
            });
        });

        // Right drawer content updating
        // $('body').on('click', '#kt_drawer_example_dismiss_button', function (event) {
        //     event.preventDefault();
        //
        //     let id = $(this).data('id');
        //
        //     $.get('/employee/task/' + id, function (data) {
        //         console.log(data);
        //         var createdAtDate = new Date(data.created_at);
        //         var dueDateDate = new Date(data.due_date);
        //
        //         $('#drawerPriority').text(data.priority);
        //         $('#drawerStatus').text(data.status.replace(/_/g, ' '));
        //         $('#drawerUpdateStatus').val(data.status);
        //         $('#drawerService').text(data.service.name);
        //         $('#drawerCreatedBy').text(createdAtDate.getMonth() + '-' + createdAtDate.getDate() + '-' + createdAtDate.getFullYear());
        //         $('#drawerDueDate').text(dueDateDate.getMonth() + '-' + dueDateDate.getDate() + '-' + dueDateDate.getFullYear());
        //         $('#drawerDescription').text(data.description);
        //         $('#drawerTaskId').val(data.id);
        //     });
        // });
    </script>
@endpush
