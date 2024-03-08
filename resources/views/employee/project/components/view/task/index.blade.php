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
