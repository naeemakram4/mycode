<form class="form p-5" method="POST" action="{{ route('save.setting') }}">
    @csrf
    <div class="mb-10">
        <label for="logo" class="required form-label">Logo Image</label>
        <input type="file" id="logo" name="logo" class="form-control form-control-sm mb-6"/>
    </div>

    <div class="mb-10">
        <label for="favicon" class="required form-label">Favicon Image</label>
        <input type="file" id="favicon" name="favicon" class="form-control form-control-sm mb-6"/>
    </div>


    <div class="mb-10">
        <label for="companyName" class="required form-label">Company Name</label>
        <input id="companyName" class="form-control form-control-sm" type="text" name="company_name" value="{{ old('company_name', $settings->site_name) }}">
    </div>


    <button id="submit-button" type="submit" class="btn btn-sm btn-primary">
        Update Setting
    </button>
</form>
