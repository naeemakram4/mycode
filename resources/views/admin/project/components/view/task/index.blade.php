<div class="tab-content">
    <!--begin::Tab pane-->
    <div id="kt_project_targets_card_pane" class="tab-pane fade active show">
        <!--begin::Row-->
        <div class="row g-9">
            @include('admin.project.components.view.task.yet-to-start')
            @include('admin.project.components.view.task.in-progress')
            @include('admin.project.components.view.task.completed')
        </div>
        <!--end::Row-->
    </div>
    <!--end::Tab pane-->
</div>
