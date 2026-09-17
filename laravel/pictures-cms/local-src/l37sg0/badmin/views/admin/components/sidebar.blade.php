<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

            @php
                $adminMenu = config('admin_menu');

                // Sort the top-level menu items by 'order'
                uasort($adminMenu, fn($a, $b) => $a['order'] <=> $b['order']);
            @endphp

            <ul class="nav flex-column">
                @foreach($adminMenu as $label => $item)
                    @if(isset($item['can']))
                        @can($item['can'])
                            <li class="nav-item {{ isset($item['children']) ? 'has-treeview' : '' }}">
                                <a
                                    href="{{ $item['route'] ? route($item['route']) : '#' }}"
                                    class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success {{ isset($item['children']) ? 'menu-toggle' : '' }}"
                                    style="align-items: center;"
                                >
                                    {!! $item['icon'] !!}
                                    <p class="mb-0" style="line-height: 1.5;">
                                        {{ $label }}
                                        @if(isset($item['children']))
                                            <i class="right fas fa-angle-left"></i>
                                        @endif
                                    </p>
                                </a>

                                @if(isset($item['children']))
                                    <ul class="nav nav-treeview" style="display: none; padding-left: 20px;">
                                        @php
                                            uasort($item['children'], fn($a, $b) => $a['order'] <=> $b['order']);
                                        @endphp
                                        @foreach($item['children'] as $subLabel => $subItem)
                                            @if(isset($subItem['can']))
                                                @can($subItem['can'])
                                                    <li class="nav-item">
                                                        <a href="{{ route($subItem['route']) }}"
                                                           class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success"
                                                           style="align-items: center;">
                                                            {!! $subItem['icon'] !!}
                                                            <p class="mb-0"
                                                               style="line-height: 1.5;">{{ $subLabel }}</p>
                                                        </a>
                                                    </li>
                                                @endcan
                                            @else
                                                <li class="nav-item">
                                                    <a href="{{ route($subItem['route']) }}"
                                                       class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success"
                                                       style="align-items: center;">
                                                        {!! $subItem['icon'] !!}
                                                        <p class="mb-0" style="line-height: 1.5;">{{ $subLabel }}</p>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endcan
                    @else
                        <li class="nav-item {{ isset($item['children']) ? 'has-treeview' : '' }}">
                            <a
                                href="{{ $item['route'] ? route($item['route']) : '#' }}"
                                class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success {{ isset($item['children']) ? 'menu-toggle' : '' }}"
                                style="align-items: center;"
                            >
                                {!! $item['icon'] !!}
                                <p class="mb-0" style="line-height: 1.5;">
                                    {{ $label }}
                                    @if(isset($item['children']))
                                        <i class="right fas fa-angle-left"></i>
                                    @endif
                                </p>
                            </a>

                            @if(isset($item['children']))
                                <ul class="nav nav-treeview" style="display: none; padding-left: 20px;">
                                    @php
                                        uasort($item['children'], fn($a, $b) => $a['order'] <=> $b['order']);
                                    @endphp
                                    @foreach($item['children'] as $subLabel => $subItem)
                                        @if(isset($subItem['can']))
                                            @can($subItem['can'])
                                                <li class="nav-item">
                                                    <a href="{{ route($subItem['route']) }}"
                                                       class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success"
                                                       style="align-items: center;">
                                                        {!! $subItem['icon'] !!}
                                                        <p class="mb-0"
                                                           style="line-height: 1.5;">{{ $subLabel }}</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route($subItem['route']) }}"
                                                   class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success"
                                                   style="align-items: center;">
                                                    {!! $subItem['icon'] !!}
                                                    <p class="mb-0" style="line-height: 1.5;">{{ $subLabel }}</p>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
                    <li class="nav-item">
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link d-flex align-items-center gap-2 pt-1 pb-1 text-success" aria-current="page"
                           style="align-items: center; cursor: pointer;"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('Logout') }}
                        </a>
                    </li>

            </ul>


        </div>
    </div>
</div>

@section('page_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggles = document.querySelectorAll('.menu-toggle');

            menuToggles.forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();

                    const parent = this.closest('.nav-item');
                    const treeviewMenu = parent.querySelector('.nav-treeview');

                    // Toggle the 'menu-open' class
                    parent.classList.toggle('menu-open');

                    // Toggle the visibility of the submenu
                    if (treeviewMenu) {
                        if (treeviewMenu.style.display === 'none') {
                            treeviewMenu.style.display = 'block';
                        } else {
                            treeviewMenu.style.display = 'none';
                        }
                    }
                });
            });
        });
    </script>
@endsection
