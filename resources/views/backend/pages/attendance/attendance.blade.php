@extends('backend.master.template')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title">
                    Attendance
                </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Attendance Maintenance Screen
                                <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#defaultModalPrimary" style="float:right">
                                    Add Attendance 
                                </button>
                            </h5>
                        </div>
                    @include('backend.partials.flash-message')
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Starting Date</label>
                                            <input type="date" class="form-control" id="starting_date" name="starting_date" placeholder="Street">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputPassword4">Ending Date</label>
                                            <input type="date" class="form-control" id="ending_date" name="ending_date" placeholder="Street">
                                        </div>
                                    </div>
                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Date</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($attendances as $key => $attendance)
                                                <tr>
                                                    <td>{{ ++$key}}</td>
                                                    <td>{{ $attendance->employee->name}}</td>
                                                    <td>{{ $attendance->employee->designation}}</td>
                                                    <td>{{ $attendance->date}}</td>
                                                    <td>{{ $attendance->time_in}}</td>
                                                    <td>{{ $attendance->time_out}}</td>
                                                    <td>{{ $attendance->status}}</td>
                                                    <td class="table-action">
                                                        <a href="#" class="align-middle fas fa-fw fa-pen edit" title="Edit" data-toggle="modal" data-target="#defaultModalPrimary" id={{$attendance->id}}></a>
                                                        <a href="{{url('/attendance/destroy/' . $attendance->id)}}" onclick="alert('Are you sure you want to Delete?')"><i class="align-middle fas fa-fw fa-trash"></i></a>
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
                        <h5 class="modal-title">Attendance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-3">
                        <form id="modal-form" action="{{url('/attendance/save')}}" method="post">
                            @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Time In</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="user_id"  name="user_id">
                                    <option selected disabled>Choose Employee</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Time In</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control payment_date" name="time_in" id="time_in">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Time Out</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control payment_date" name="time_out" id="time_out">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-3 text-sm-right">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status"  name="status">
                                    <option selected disabled>Choose Status</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                    <option value="Offset">Offset</option>
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
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script>
        function edit(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/attendance/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('.modal-title').text('Update Attendance');
                    $('.submit-button').text('Update');
                    $('#modal-form').attr('action', '/attendance/update/' + data.attendance.id);

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
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            
            $( "table" ).on( "click", ".edit", function() {
                edit(this.id);
            });

            $('.add').click(function(){
                $('.modal-title').text('Add Street');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', '/attendance/save');
            })
        });
    </script>
@endsection