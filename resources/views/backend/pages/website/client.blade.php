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
                    Client
                </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Client
                                <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#defaultModalPrimary" style="float:right">
                                    Add Client
                                </button>
                            </h5>
                        </div>
                        @include('backend.partials.flash-message')
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Address</th>
                                                <th>Date Purchase</th>
                                                <th>Contact</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $key => $client)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td>{{ $client->name}}</td>
                                                    <td>{{ $client->company_name }} </td>
                                                    <td>{{ $client->address}}</td>
                                                    <td>{{ $client->date_purchase}}</td>
                                                    <td>{{ $client->contact}}</td>
                                                    <td> <img src="{{asset('/images/client/'.$client->picture)}}" height="30px" width="30px"> </td>
                                                    @if ($client->status == 1)
                                                        <td>Active</td>
                                                    @else
                                                        <td>Inactive</td>
                                                    @endif
                                                    <td class="table-action">
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$client->id}}></a>
                                                        <a href="{{url('client/destroy/' . $client->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                    </td>
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
                        <form id="modal-form" action="{{url('client/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">City</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Date Purchase</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="date_purchase" id="date_purchase">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Contact</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter Contact">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Facebook URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="facebook_page" id="facebook_page" placeholder="Enter Facebook Url">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" name="picture" id="picture" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Status</label>
                            <div class="col-sm-9">
                                <select id="status" name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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
                url: '/client/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('#modal-form').attr('action', 'client/update/' + data.clients.id);
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

        $(function() {
            $('#datatables').DataTable({
                "scrollX": true
            });

            $( "table" ).on( "click", ".edit", function() {
                edit(this.id);
            });

            $('.add').click(function(){
                $('.modal-title').text('Add Client');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', 'client/save');
            })
        });
    </script>
@endsection