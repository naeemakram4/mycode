@foreach(config('houmanity.menu.employee') as $menu)
    @if(in_array($menu['route'], auth()->user()->getAllPermissionsFromRole()) ||
    array_intersect($menu['sub_routes'] ?? [''] ,auth()->user()->getAllPermissionsFromRole()))
        @if(isset($menu['heading']))
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ $menu['heading'] }}</span>
                </div>
            </div>
        @endif
        @if(isset($menu['sub']))
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (array_search(request()->route()->action['as'], $menu['sub_routes']) != false) ? 'here' : '' }}">
                @else
                    <div class="menu-item menu-accordion {{ (request()->url() == route($menu['route'])) ? 'here' : '' }}">
                        @endif
        @if(isset($menu['sub']))
                                        <span class="menu-link">
            @else
                                                <a class="menu-link" href="{{ route($menu['route']) }}">
            @endif
        <span class="menu-icon">
            <i class="bi bi-{{ $menu['icon'] }} fs-3"></i>
        </span>
        <span class="menu-title">{{ $menu['title'] }}</span>
        @if(isset($menu['sub']))
                                                        <span class="menu-arrow"></span>
                                            @endif
        @if(isset($menu['sub']))
                </span>
                                        @else
                                        </a>
                                    @endif

        {{--  Sub Menu  --}}
        @if(isset($menu['sub']))
            @foreach($menu['sub'] as $submenu)
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link {{ (request()->url() == route($submenu['route'])) ? 'active' : '' }}"
                           href="{{ route($submenu['route']) }}">
    <span class="menu-bullet">
        <span class="bullet bullet-dot"></span>
    </span>
                            <span class="menu-title">{{ $submenu['title'] }}</span>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    @endif
@endforeach
