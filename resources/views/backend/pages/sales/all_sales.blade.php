@extends('backend.master.template')
@section('links')

    <style>
table.dataTable thead th {
  white-space: nowrap
}
        </style>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title">
                    PrinThings - All Sales
                </h1>
                <p style="color: white">Always record and update the Daily Sales</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Sales
                                <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#defaultModalPrimary" style="float:right">
                                    Add Order
                                </button>
                            </h5>
                        </div>
                        @include('backend.partials.flash-message')
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-3 col-lg-3">
                                            <h4>Total Sale: <span style="color: green">₱{{ number_format($daily_sale, 2) }}</span> </h4>
                                            <h4>Total Unpaid:  <span style="color: red">₱{{ number_format($unpaid, 2) }}</span></h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <h4>For Delivery/Pick Up: {{$delivery}}</h4>
                                            <h4>No Artist: {{$no_artist}}</h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <h4>For Printing: {{$for_printing}}</h4>
                                            <h4>Layout in Progress: {{$in_progress}}</h4>
                                        </div>
                                        <div class="col-md-3 col-lg-3">

                                        </div>
                                    </div>
                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Action</th>
                                                <th>Date</th>
                                                <th>Client Name</th>
                                                <th>Sales</th>
                                                <th>Product</th>
                                                <th>Description</th>
                                                <th>Production</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                                <th>Balance</th>
                                                <th>Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($daily_sales as $key => $daily_sale)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td class="table-action">
                                                        <a href="#" class="align-middle fa fa-fw fa-money-bill paymentModal" title="Payment" data-toggle="modal" data-target="#paymentModal" id={{$daily_sale->id}}></a>
                                                        <a href="#" class="align-middle fa fa-fw fa-tasks productionStatus" title="Production Status" data-toggle="modal" data-target="#productionStatus" id={{$daily_sale->id}}></a>
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$daily_sale->id}}></a>
                                                        <a href="{{url('daily_sales/destroy/' . $daily_sale->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                    </td>
                                                    <td>{{ date('M-d-Y', strtotime($daily_sale->date))}}</td>
                                                    <td>{{ $daily_sale->customer->name}}</td>
                                                    <td>{{ $daily_sale->sales->sales}}</td>
                                                    <td>{{ $daily_sale->product->product}}</td>
                                                    <td>{{ $daily_sale->description}}</td>
                                                   
                                                    @if ($daily_sale->production_status == 'Delivered')
                                                        <td class="badge badge-success">{{ $daily_sale->production_status}}</td>
                                                    @elseif($daily_sale->production_status == 'Layout in Progress')
                                                        <td class="badge badge-warning">{{ $daily_sale->production_status}}</td>
                                                    @elseif($daily_sale->production_status == 'For Printing')
                                                        <td class="badge badge-secondary">{{ $daily_sale->production_status}}</td>
                                                    @elseif($daily_sale->production_status == 'For Pick Up')
                                                        <td class="badge badge-primary">{{ $daily_sale->production_status}}</td>
                                                    @else 
                                                        <td class="badge badge-danger">{{ $daily_sale->production_status}}</td>
                                                    @endif
                                                    <td>{{ $daily_sale->quantity}}</td>
                                                    <td>₱ {{ number_format($daily_sale->amount, 2) }}</td>
                                                    <td>₱ {{ number_format($daily_sale->balance, 2) }}</td>
                                                    @if ($daily_sale->payment_status == 'Paid')
                                                        <td class="badge badge-success">{{ $daily_sale->payment_status}}</td>
                                                    @else
                                                        <td class="badge badge-danger">{{ $daily_sale->payment_status}}</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL --}}
        <div class="modal fade" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form" action="{{url('daily_sales/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Customer</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="customer_id"  name="customer_id" placeholder="Pick a state...">
                                    <option selected disabled>Select a Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Sales Acc.</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="sales_id"  name="sales_id" placeholder="Choose Sales Account">
                                    <option selected disabled>Select a Sales</option>
                                    @foreach ($sales as $sale)
                                        <option value="{{ $sale->id }}">{{ $sale->sales }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Product Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="product_id"  name="product_id" placeholder="Choose Product">
                                    <option selected disabled>Select a Product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->product }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Description</label>
                            <div class="col-sm-9">
                                <textarea  name="description" id="description" cols="52" rows="3" placeholder="Enter Description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Quantity</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Amount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Production Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="production_status" name="production_status">
                                    <option value="No Artist">No Artist</option>
                                    <option value="Layout in Progress">Layout in Progress</option>
                                    <option value="For Printing">For Printing</option>
                                    <option value="For Pick Up">For Pick Up</option>
                                    <option value="Delivered">Delivered</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

         {{-- MODAL --}}
         <div class="modal fade" id="productionStatus" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Production Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form-production" action="{{url('daily_sales/productionStatus')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Production Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="production_status">
                                    <option value="No Artist">No Artist</option>
                                    <option value="Layout in Progress">Layout in Progress</option>
                                    <option value="For Printing">For Printing</option>
                                    <option value="For Pick Up">For Pick Up</option>
                                    <option value="Delivered">Delivered</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button-production">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL --}}
        <div class="modal fade" id="paymentStatus" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Payment Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form-payment" action="{{url('/daily_sales/productionStatus')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Payment Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="payment_status">
                                    <option value="Paid">Paid</option>
                                    <option value="Unpaid" selected>Unpaid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button-payment">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL --}}
        <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Payment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form-payment" action="{{url('payment/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Amount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="dailysales_id" id="dailysales_id" hidden>
                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Payment Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="payment_id"  name="payment_id" placeholder="Choose Product">
                                    <option selected disabled>Select a Payment</option>
                                    @foreach ($paymenttypes as $paymenttype)
                                        <option value="{{ $paymenttype->id }}">{{ $paymenttype->payment }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control payment_date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button-payment">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        function edit(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/daily_sales/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('#modal-form').attr('action', '/daily_sales/update/' + data.products.id);
                    $('.modal-title').text('Update Client');
                    $('.submit-button').text('Update');
                        $.each(data, function() {
                            $.each(this, function(k, v) {
                                $('#'+k).val(v);
                            });
                        });
                }
            });

        }

        function productionStatus(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/daily_sales/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('#modal-form-production').attr('action', '/daily_sales/productionStatus/' + data.products.id);
                    $('.modal-title').text('Production Status');
                    $('.submit-button-production').text('Update');
                        $.each(data, function() {
                            $.each(this, function(k, v) {
                                $('#'+k).val(v);
                            });
                        });
                }
            });

        }

        function paymentStatus(id){
            $('#dailysales_id').val(id);
        }

        $(function() {
            $('#datatables').DataTable({
                "scrollX": true,
                "pageLength": 100
            });

            $( "table" ).on( "click", ".paymentModal", function() {
                paymentStatus(this.id);
            });

            $( "table" ).on( "click", ".productionStatus", function() {
                productionStatus(this.id);
            });

            $( "table" ).on( "click", ".edit", function() {
                edit(this.id);
            });

            $('.add').click(function(){
                $('.modal-title').text('Add Client');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', '/daily_sales/save');
            })
        });
    </script>
@endsection