<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="#">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        DELEON'S BEST
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
                    Main
                </li>

                <li class="sidebar-item">
                    <a href="#dashboard" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fa fa-fw fa-chart-pie" style="color: #153d77"></i> <span class="align-middle">Dashboard</span>
                    </a>
                    <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('dashboard') }}">Daily</a></li>
                        @role('Super Admin|Admin')
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('dashboard/monthly') }}">Monthly</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('dashboard/masterfile') }}">Master File</a></li>
                        @endrole
                    </ul>
                </li>

                

                <li class="sidebar-item">
                    <a href="#customer" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fa fa-fw fa-mug-hot" style="color: #153d77"></i> <span class="align-middle">CRM</span>
                    </a>
                    <ul id="customer" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('customer') }}">Customer</a></li>
                    </ul>
                </li>

                @role('Super Admin')
                <li class="sidebar-item">
                    <a href="#account" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fa fa-fw fa-user" style="color: #153d77"></i> <span class="align-middle">Manage Account</span>
                    </a>
                    <ul id="account" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ ('user') }}">Users</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('#') }}">Roles And Permissions</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fab fa-fw fa-chrome"></i> <span class="align-middle">Official Website</span>
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="#">Food and Beverage</a></li>
                    </ul>
                </li>
                @endrole

                <li class="sidebar-header">
                   Deleon's Best
                </li>

                <li class="sidebar-item">
                    <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-cart-plus"></i> <span class="align-middle">Sales Order</span>
                    </a>
                    <ul id="sales" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('daily_sales') }}">Daily Sales</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('daily_sales/all') }}">All Sales</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('payment') }}">Payment</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('rushfee') }}">Rush Fee</a></li>
                    </ul>
                </li>

                
                <li class="sidebar-item">
                    <a href="#printhings_expense" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-money-bill"></i> <span class="align-middle">Expense</span>
                    </a>
                    <ul id="printhings_expense" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('expense') }}">Daily Expense</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('expense/all') }}">All Expenses</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#inventory" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle mr-2 fas fa-fw fa-dolly-flatbed"></i> <span class="align-middle">Inventory</span>
                    </a>
                    <ul id="inventory" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('inventory') }}">Inventory</a></li>
                        @role('Super Admin|Admin')
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('inventory/view_add_stock') }}">Inventory Transaction</a></li>
                        @endrole
                    </ul>
                </li>


                @role('Super Admin|Admin')
                    <li class="sidebar-header">
                        Maintenance
                    </li>
                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('consumable') }}">
                            <i class="align-middle mr-2 fa fa-fw fa-wine-bottle" style="color: #153d77"></i> <span class="align-middle">Consumable Product</span>
                        </a>
                        <a class="sidebar-link" href="{{ url('payment_type') }}">
                            <i class="align-middle mr-2 far fa-fw fa-credit-card"></i> <span class="align-middle">Payment Type</span>
                        </a>
                        <a class="sidebar-link" href="{{ url('expense_type') }}">
                            <i class="align-middle mr-2 fa fa-fw fa-money-bill" style="color: #153d77"></i> <span class="align-middle">Expense Type</span>
                        </a>
                        <a class="sidebar-link" href="{{ url('sales_account') }}">
                            <i class="align-middle mr-2 far fa-fw fa-user"></i> <span class="align-middle">Sales Account</span>
                        </a>
                        <a class="sidebar-link" href="{{ url('product') }}">
                            <i class="align-middle mr-2 fa fa-fw fa-list" style="color: #153d77"></i> <span class="align-middle">Product and Services</span>
                        </a>
                    </li>
                @endrole
            @endrole
        </ul>
    </div>
</nav>