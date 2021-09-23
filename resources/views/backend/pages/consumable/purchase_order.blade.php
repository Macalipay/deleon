@extends('backend.master.template')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title">
                    Purchase Order ( {{ $po_code = ($po_code === NULL) ? 'PO-0000000' : $po_code}} ) <i class="fas fa-print"></i>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           <div class="row col-12">
                               <div class="col-4">
                                    <h5 class="card-title">Create Purchase Order</h5>
                               </div>

                               <div class="col-4">
                                    <h3>Customer: {{$customer->name}}</h3>
                               </div>

                               <div class="col-4">
                                    <h3 style="float: right !important">Title: {{$title}}</h3>
                               </div>
                           </div>
                        </div>
                        @include('backend.partials.flash-message')
                        <div class="col-12">
                            <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Product</label>
                                        <input type="text" class="form-control" id="consumable_header_id" name="consumable_header_id" value="{{ $id }}" hidden>

                                        <select class="form-control" id="inventory_id_header"  name="inventory_id_header" required>
                                            <option selected disabled>Select a Product</option>
                                            @foreach ($inventories as $inventory)
                                                <option value="{{ $inventory->id }}">{{ $inventory->consumable->consumable }}</option>
                                            @endforeach
                                        </select>
                                    </div>
        
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Quantity</label>
                                        <input type="text" class="form-control" id="quantity_header" name="quantity_header" placeholder="Quantity" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Description</label>
                                        <input type="text" class="form-control" id="description_header" name="description_header" placeholder="Description" required>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Unit Price</label>
                                        <input type="text" class="form-control" id="unit_price_header" name="unit_price_header" placeholder="Unit Price" required>
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="inputPassword4">Action</label>
                                        <button class="btn btn-primary form-control" id="button-add">Add</button>
                                    </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Action</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td class="table-action">
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$order->id}}></a>
                                                        <a href="{{url('purchase_order/destroy/' . $order->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                    </td>
                                                    <td>{{ $order->inventory->consumable->consumable}}</td>
                                                    <td>{{ $order->quantity}}</td>
                                                    <td>{{ $order->description}}</td>
                                                    <td>₱ {{ number_format($order->unit_price, 2) }}</td>
                                                    <td>₱ {{ number_format($order->total, 2) }}</td>
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
                        <h5 class="modal-title">Add Consumable</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form" action="{{url('consumable/save')}}" method="post">
                            @csrf
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Product</label>
                            <select class="form-control" id="inventory_id"  name="inventory_id" required disabled>
                                <option selected disabled>Select a Product</option>
                                @foreach ($inventories as $inventory)
                                    <option value="{{ $inventory->id }}">{{ $inventory->consumable->consumable }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Unit Price</label>
                            <input type="text" class="form-control" id="unit_price" name="unit_price" placeholder="Enter Consumable">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit-button">Add</button>
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
        var formatter = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP',
                        });

        function edit(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/purchase_order/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('.modal-title').text('Update Consumable');
                    $('.submit-button').text('Update');
                        $.each(data, function() {
                            $.each(this, function(k, v) {
                                $('#'+k).val(v);
                            });
                        });
                    $('#modal-form').attr('action', '/purchase_order/update/' + data.item.id);
                }
            });
        }

        function getPrice(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/purchase_order/get_price/' + id,
                method: 'get',
                success: function(data) {
                   $('#unit_price_header').val(data.price.selling_price);
                   $('#unit_price').val(data.price.selling_price);
                }
            });
        }

        function addOrder(){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/purchase_order/add_order/',
                method: 'get',
                data:{
                    consumable_header_id: $('#consumable_header_id').val(),
                    inventory_id: $('#inventory_id_header').val(),
                    quantity: $('#quantity_header').val(),
                    description: $('#description_header').val(),
                    unit_price: $('#unit_price_header').val(),
                },
                success: function(data) {
                        $('#datatables').dataTable().fnDestroy();
                        $('#datatables').DataTable({
                            processing: true,
                            serverSide: true,
                            pageLength:100,
                            ajax: {
                            url: "/purchase_order/list_order/" + $('#consumable_header_id').val(),
                            type: 'GET',
                            },
                            columns: [
                                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                    {data: 'id',
                                        render: function(data, type, row, meta) {
                                            return '<a href="#" class="align-middle fas fa-fw fa-pen edit" style="color:#6c757d" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id="'+ data +'"></a>' +
                                                    '<a href="{{url("/purchase_order/destroy/" . ' + data + ')}}" onclick="alert("Are you sure you want to Delete?")"><i class="align-middle fas fa-fw fa-trash" style="color:#6c757d"></i></a>'
                                        }
                                    },
                                    {data: 'inventory.consumable.consumable', name: 'inventory.consumable.consumable' },
                                    {data: 'quantity', name: 'quantity' },
                                    {data: 'description', name: 'description' },
                                    {data: 'unit_price',
                                        render: function(data, type, row, meta) {
                                            return formatter.format(data);
                                        }
                                    },
                                    {data: 'total',
                                        render: function(data, type, row, meta) {
                                            return formatter.format(data);
                                        }
                                    },
                                ],
                            order: [[0, 'desc']]
                        });
                }
            });
        }

        $(function() {
            $('#datatables').DataTable({
                responsive: true,
                "pageLength": 100
            });

            $('#inventory_id_header').change(function(){
                getPrice(this.value);
            })

            $('#inventory_id').change(function(){
                getPrice(this.value);
            })

            $( "table" ).on( "click", ".edit", function() {
                edit(this.id);
            });

            $('#button-add').click(function(){
                addOrder();
            })

            $('.add').click(function(){
                $('.modal-title').text('Add Consumable');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', 'consumable/save');

            })
        });
    </script>
@endsection