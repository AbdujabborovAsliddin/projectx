{{-- resources/views/partials/sidebar.blade.php --}}
<ul class="nav nav-secondary">
    <li class="nav-item active">
        <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-section">
        <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Menu</h4>
    </li>

    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#submenu">
            <i class="fas fa-bars"></i>
            <p>Напрвлении</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="submenu">
            <ul class="nav nav-collapse">
                @foreach ($directions as $direction)

                <li>
                    <a class="{{ Request::is('directions/' . $direction->symbol_code . '*') ? 'active' : '' }}" href="/directions/{{$direction->symbol_code}}">
                        <span class="sub-item">{{ $direction->name }}</span>
                    </a>
                </li>

                @endforeach
            </ul>
        </div>
    </li>

</ul>