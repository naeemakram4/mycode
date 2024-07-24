<div class="row justify-content-center">
    <div class="col-md-8">
        <form class="form p-5" method="POST" action="{{ route('admin.access-management.permission.update', $role->id) }}" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="row mb-5">
        <!--begin::Col-->
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            <label for="name" class="required form-label">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name', $role->name) }}"/>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            <label for="label" class="required form-label">Label</label>
            <input id="label" class="form-control" type="text" name="label" value="{{ old('label', $role->label) }}"/>
        </div>
        <!--end::Col-->
    </div>

    <div class="fv-row mb-10">
        <label class="form-label required">Select {{$role->name}} Role Permissions</label>
        <div class="pb-3">
            <button type="button" class="select-all-permissions btn btn-sm btn-light-dark py-2 w-25">Select All</button>
            <button type="button" class="deselect-all-permissions btn btn-sm btn-light-dark py-2 w-25">Deselect All</button>
        </div>
        <select name="permissions[]" id="permissions" class="form-select form-select-sm" multiple="multiple" required
                multiple data-placeholder="Select Permissions" data-allow-clear="true">
            @foreach($permissions as $key => $value)
                @if(in_array($key, $role->permissions->pluck('id')->toArray()))
                    {{$selected = "selected"}}
                @else
                    {{$selected = "" }}
                @endif

                <option value="{{$key}}" {{ $selected }}>{{$value}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-10">
        <input class="form-check-input" name="active"  type="checkbox" {{ $role->active == true ? 'checked="checked' : ''}}"/>
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-sm btn-primary">Update Permissions</button>
    </div>
</form>
    </div>
</div>
