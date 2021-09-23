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
                    Support
                </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Support
                                <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#defaultModalPrimary" style="float:right">
                                    Add Support
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
                                                <th>Contact</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($supports as $key => $support)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td>{{ $support->name}}</td>
                                                    <td>{{ $support->contact }} </td>
                                                    <td> <img src="{{asset('/images/support/'.$support->picture)}}" height="30px" width="30px"> </td>
                                                    @if ($support->status == 1)
                                                        <td>Active</td>
                                                    @else
                                                        <td>Inactive</td>
                                                    @endif
                                                    <td class="table-action">
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$support->id}}></a>
                                                        <a href="{{url('support/destroy/' . $support->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
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
                        <h5 class="modal-title">Add Support</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form" action="{{url('support/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Contact Number</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number">
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
                url: '/support/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('#modal-form').attr('action', 'support/update/' + data.supports.id);
                    $('.modal-title').text('Update Support');
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
                $('.modal-title').text('Add Support');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', 'support/save');
            })
        });
    </script>
@endsection