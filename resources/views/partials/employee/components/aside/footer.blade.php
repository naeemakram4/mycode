<!--begin::Footer-->
<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-custom btn-primary w-100">
            <span class="btn-label">Sign Out</span>
        </button>
    </form>
</div>
<!--end::Footer-->
