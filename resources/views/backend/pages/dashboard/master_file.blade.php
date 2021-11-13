@extends('backend.master.template')
@section('content')
<div class="main">
    <main class="content">
        <div class="container-fluid">
            <div class="header col-md-12"  style="display: inline-flex">
                <div class="col-md-9">
                    <h1 class="header-title">
                        Dashboard - Masterfile Summary ( <span id="today">{{ date('M-d-Y', strtotime($dt))  }}</span> ) 
                    </h1>
                    <p class="header-subtitle">Make sure we always meet our Quota.</p>
                </div>
                
                <div class="col-md-3">
                    <input type="date" class="form-control" id="filtering_date" name="filtering_date" value="<?php echo date('Y-m-d'); ?>">      
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total Sales</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fas fa-money-bill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="total_sale">₱{{ number_format($daily_sale, 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-success">Total Income for Today.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">GCash</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fas fa-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="gcash">₱{{ number_format($gcash, 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-success">Money transferred on GCash Account
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Cash</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="avatar">
                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                            <i class="align-middle fa fa-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="display-5 mt-1 mb-3" id="cash">₱{{ number_format($cash, 2) }}</h1>
                            <div class="mb-0">
                                <span class="text-success">Total Cash
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-12 col-lg-12 d-flex">
                    <div class="card flex-fill" style="padding:30px">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Client who pay today. </h5>
                        </div>
                        <table id="datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $key => $payment)
                                    <tr>
                                        <td>{{ ++$key}}</td>
                                        <td>{{ $payment->dailysale->user->firstname }}</td>
                                        <td>₱ {{ $payment->amount}}</td>
                                        <td>{{ $payment->payment }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
@endsection

@section('scripts')
    <script>
         $(function() {
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
        });
    </script>
@endsection