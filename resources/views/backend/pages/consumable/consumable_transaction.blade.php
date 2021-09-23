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
                   OpiMac - Daily Sales
                </h1>
                <p style="color: white">Always record and update the Daily Sales</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Daily Sales
                                <button type="button" class="btn btn-primary add mr-1" data-toggle="modal" data-target="#defaultModalPrimary" style="float:right">Purchase Order</button> 
                                <button type="button" class="btn btn-primary add mr-1" data-toggle="modal" data-target="#customerModal" style="float:right">Add Quotation</button>
                            </h5>
                        </div>
                        @include('backend.partials.flash-message')
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-3 col-lg-3">
                                            {{-- <h4>Total Sale: <span style="color: green">₱{{ number_format($daily_sale, 2) }}</span> </h4>
                                            <h4>Total Unpaid:  <span style="color: red">₱{{ number_format($unpaid, 2) }}</span></h4> --}}
                                        </div>
                                    </div>

                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Action</th>
                                                <th>Code</th>
                                                <th>Title</th>
                                                <th>Client</th>
                                                <th>Sales</th>
                                                <th>Status</th>
                                                <th>Subtotal</th>
                                                <th>Total</th>
                                                <th>Balance</th>
                                                <th>Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($consumables as $key => $consumable)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td class="table-action">
                                                        <a href={{url('consumable_transaction/purchase_order/' . $consumable->id)}} class="align-middle fa fa-fw fa-cart-plus productionStatus" title="Purchase Order" id="purchase"></a>
                                                        <a href="#" class="align-middle fa fa-fw fa-money-bill paymentModal" title="Payment" data-toggle="modal" data-target="#paymentModal" id={{$consumable->id}}></a>
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$consumable->id}}></a>
                                                        <a href="{{url('daily_sales/destroy/' . $consumable->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                    </td>
                                                    <td>{{ $consumable->code}}</td>
                                                    <td>{{ $consumable->title}}</td>
                                                    <td>{{ $consumable->customer->name}}</td>
                                                    <td>{{ $consumable->sales->sales}}</td>
                                                    <td>{{ $consumable->status}}</td>
                                                    <td>₱ {{ number_format($consumable->subtotal, 2) }}</td>
                                                    <td>₱ {{ number_format($consumable->total, 2) }}</td>
                                                    <td>₱ {{ number_format($consumable->balance, 2) }}</td>
                                                    <td>{{ $consumable->payment_status}}</td>
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
                        <h5 class="modal-title">Purchase Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form" action="{{url('consumable_transaction/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Customer</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="customer_id"  name="customer_id" required>
                                    <option selected disabled>Select a Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Title</label>
                            <div class="col-sm-9">
                                <textarea  name="title" id="title" cols="52" rows="3" placeholder="Enter Title" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Sales Account</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="sales_id"  name="sales_id" required>
                                    <option selected disabled>Select a Sales</option>
                                    @foreach ($sales as $sale)
                                        <option value="{{ $sale->id }}">{{ $sale->sales }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button">Create PO</button>
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
                    $('#modal-form').attr('action', 'daily_sales/update/' + data.products.id);
                    $('.modal-title').text('Update Order');
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
                    $('#modal-form-production').attr('action', 'daily_sales/productionStatus/' + data.products.id);
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
                $('.submit-button').text('Add');
            })
        });
    </script>
@endsection