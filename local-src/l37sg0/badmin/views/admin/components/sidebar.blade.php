<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                @php
                    $adminMenu = config('admin_menu');

                    // Sort the menu items by 'order'
                    uasort($adminMenu, function ($a, $b) {
                        return $a['order'] <=> $b['order'];
                    });
                @endphp
                @foreach($adminMenu as $label => $item)
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ route($item['route']) }}">
                            @php echo $item['icon']; @endphp
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
