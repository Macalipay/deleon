@extends('backend.master.template')
@section('content')
<div class="main">
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Dashboard - Master File
                </h1>
                <p class="header-subtitle">Summary of Overall Performance and Budget Allocation.</p>  
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Cash On Hand</h5> 
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fas fa-money-bill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="total_sale">₱{{ number_format($cash_on_hand, 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-success">Total Amount of Accessible Cash.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Accounts Receivable</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fas fa-tasks"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="total_expense">₱{{ number_format($cash_receivable, 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-success">Total Unpaid Cash that expected to receive.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Accounts Payable</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fas fa-tasks"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="total_expense">₱ 0</h1>
                            <div class="mb-0">
                                <span class="text-success">Total of Outstanding Amounts Owed.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-xxl-6 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Salaries Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle fas fa-money-bill-wave"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_salaries, 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($salaries, 2) }} </span> Total Salaries Allocated Budget
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Rent Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle fas fa-money-bill-wave"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_rent, 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($rent, 2) }} </span> Total Rent Allocated Budget
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Supplies Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle fas fa-money-bill-wave"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_supplies , 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($supplies , 2) }} </span> Total Supplies Allocated Budget
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Utilities Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="fas fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_utilities, 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($utilities, 2) }} </span> Total Utilities Allocated Budget
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Office Expense Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle fas fa-money-bill-wave"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱ {{  number_format($total_office_expense , 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($office_expense , 2) }} </span> Total Office Expense Allocated Budget
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Advertisement Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="fas fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_advertisement, 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($advertisement, 2) }} </span> Total Ads Allocated Budget
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Maintenance Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="align-middle fas fa-money-bill-wave"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_maintenance , 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($maintenance , 2) }} </span> Total Maintenance Allocated Budget
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Food Allocated Budget</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                                        <i class="fas fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="display-5 mt-1 mb-3">₱{{ number_format($total_food, 2) }}</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> ₱{{ number_format($food, 2) }} </span> Total Food Allocated Budget
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card flex-fill w-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Monthly Sales</h5>
                                    </div>
                                    <div class="card-body d-flex w-100">
                                        <div class="align-self-center chart chart-lg">
                                            <canvas id="chartjs-dashboard-bar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-xxl-6">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Expense Allocation</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="py-3">
                                    <div class="chart chart-xs">
                                        <canvas id="chartjs-dashboard-pie"></canvas>
                                    </div>
                                </div>

                                <table class="table mb-0">
                                    <tbody>
                                        @foreach ($piechart as $item)
                                            <tr>
                                                <td><i class="fas fa-circle fa-fw" style="color:{{$item->expense_type->color}}"></i>{{$item->expense_type->expense}}</td>
                                                <td class="text-right">₱{{number_format($item->amount, 2)}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Daily Sales Summary</h5>
                        </div>
                        <table id="datatables" class="table table-striped my-0" style="padding: 10px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th width="230px">Sales Performance</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($monthly_sales as $key => $monthly_sale)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ date('F', mktime(0, 0, 0, $monthly_sale->month, 10)) }}</td>
                                    <td> ₱{{number_format($monthly_sale->total, 2)}} </td>
                                    @if (($monthly_sale->total/300000) * 100 >= 100)
                                        <td> <span class="badge badge-success">{{ (number_format($monthly_sale->total/300000, 2)) * 100 }}%</span></td>
                                    @else
                                        <td> <span class="badge badge-danger">{{ (number_format($monthly_sale->total/300000, 2)) * 100 }}%</span></td>
                                    @endif
                                </tr>
                               @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    
                </div>
            </div>

        </div>
    </main>
</div>
@endsection

@section('scripts')
                

    <script>
       $(function() {
        // PIE CHART
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/dashboard/piechart_masterfile',
                method: 'get',
                success: function(data) {
                    var expense_type = [];
                    var amount = [];
                    var color = [];

                    for(i=0; i < data.piechart.length; i++) {
                        expense_type.push(data.piechart[i].expense_type.expense);
                        amount.push(data.piechart[i].amount);
                        color.push(data.piechart[i].expense_type.color);
                    }
                    // Pie chart
                    new Chart(document.getElementById("chartjs-dashboard-pie"), {
                        type: 'pie',
                        data: {
                            labels: expense_type,
                            datasets: [{
                                data: amount,
                                backgroundColor: color,
                                borderColor: "transparent"
                            }]
                        },
                        options: {
                            responsive: !window.MSInputMethodContext,
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            cutoutPercentage: 75
                        }
                    });
                }
            });

            $('#datatables').DataTable({
                responsive: true,
                "pageLength": 100
            });

            $('#filtering_date').change(function(){
                $('#datatables').dataTable().fnDestroy();

                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/dashboard/filtering/' + this.value,
                method: 'get',
                success: function(data) {
                    var formatter = new Intl.NumberFormat('en-PH', {
                    style: 'currency',
                    currency: 'PHP',
                    });

                    $('#total_sale').text(formatter.format(data.daily_sale));
                    $('#total_expense').text(formatter.format(data.expense));
                    $('#bdo').text(formatter.format(data.bdo));
                    $('#bpi').text(formatter.format(data.bpi));
                    $('#gcash').text(formatter.format(data.gcash));
                    $('#cash').text(formatter.format(data.cash));
                    $('#today').text(moment(data.dt).format('MMM-DD-YYYY'));

                    $('#datatables').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: {
                        url: "/dashboard/payment/" + data.dt,
                        type: 'GET',
                        },
                        columns: [
                                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                {data: 'dailysale.customer.name', name: 'dailysale.customer.name' },
                                {data: 'amount', name: 'amount' },
                                {data: 'payment_type.payment', name: 'payment_type.payment' },
                            ],
                        order: [[0, 'desc']]
                    });
                }
            });
            })

            function GetMonthName(monthNumber) {
                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                return months[monthNumber - 1];
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/dashboard/bargraph_masterfile',
                method: 'get',
                success: function(data) {
                    var payment = [];
                    var daily = [];

                    for(i=0; i < data.bargraph.length; i++) {
                        payment.push(data.bargraph[i].total);
                        var month = GetMonthName(data.bargraph[i].month);
                        daily.push(month);
                    }
                   
                    // BAR GRAPH
                    new Chart(document.getElementById("chartjs-dashboard-bar"), {
                    type: 'bar',
                    data: {
                        labels: daily,
                        datasets: [{
                            label: "This Day",
                            backgroundColor: window.theme.primary,
                            borderColor: window.theme.primary,
                            hoverBackgroundColor: window.theme.primary,
                            hoverBorderColor: window.theme.primary,
                            data: payment,
                            barPercentage: .75,
                            categoryPercentage: .5
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                gridLines: {
                                    display: false
                                },
                                stacked: false,
                                ticks: {
                                    stepSize: 50000
                                }
                            }],
                            xAxes: [{
                                stacked: false,
                                gridLines: {
                                    color: "transparent"
                                }
                            }]
                        }
                    }
                });
                  
                }
            });

            
            // CALENDAR
            $('#datetimepicker-dashboard').datetimepicker({
				inline: true,
				sideBySide: false,
				format: 'L'
            });
        });
    </script>
@endsection