<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="#">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        DE LEON'S BEST
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="{{ asset('/images/profile/' . Auth::user()->picture) }}" class="img-fluid rounded-circle mb-2" alt="Profile Picture" />
            <div class="font-weight-bold">{{ Auth::user()->name }}</div>
            <small>{{ Auth::user()->designation }}</small>
        </div>

        <ul class="sidebar-nav">

            {{-- SUPER ADMIN SIDEBAR --}}
            
            @role('Super Admin|Sales Executive|Admin')
                <li class="sidebar-header">
                    Dashboard
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('dashboard') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-chart-line"></i> <span class="align-middle">Daily</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('dashboard/monthly') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-chart-bar"></i> <span class="align-middle">Monthly</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('dashboard/masterfile') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Master File</span>
                    </a>
                </li>

                <li class="sidebar-header">
                   Sales Order
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('daily_sales') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-shopping-cart"></i> <span class="align-middle">Daily Sales</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('daily_sales/all') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-cart-plus"></i> <span class="align-middle">All Sales</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('payment') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-money-bill-wave"></i> <span class="align-middle">Payment</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('promo') }}">
                        <i class="align-middle mr-2 fas fa-fw fa-money-bill-wave"></i> <span class="align-middle">Promo</span>
                    </a>
                </li> --}}
                <li class="sidebar-header">
                    Inventory
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="{{ url('inventory') }}">
                         <i class="align-middle mr-2 fas fa-fw fa-boxes"></i> <span class="align-middle">Inventory</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="{{ url('inventory/view_add_stock') }}">
                         <i class="align-middle mr-2 fas fa-fw fa-truck-loading"></i> <span class="align-middle">Inventory Transaction</span>
                     </a>
                 </li>
            @endrole
        </ul>
    </div>
</nav>