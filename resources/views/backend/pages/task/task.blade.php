@extends('backend.master.template')
@section('content')
<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Tasks
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tasks</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
<i class="align-middle" data-feather="refresh-cw"></i>
</a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
  <i class="align-middle" data-feather="more-vertical"></i>
</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Upcoming</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body p-3">
                        <div id="tasks-upcoming">
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked>
                                            <span class="custom-control-label text-hide">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked>
                                            <span class="custom-control-label text-hide">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label text-hide">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label text-hide">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-block">Add new task</a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
<i class="align-middle" data-feather="refresh-cw"></i>
</a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
  <i class="align-middle" data-feather="more-vertical"></i>
</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">In Progress</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-progress">
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-block">Add new task</a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
<i class="align-middle" data-feather="refresh-cw"></i>
</a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
  <i class="align-middle" data-feather="more-vertical"></i>
</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">On Hold</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-hold">
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-block">Add new task</a>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
<i class="align-middle" data-feather="refresh-cw"></i>
</a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
  <i class="align-middle" data-feather="more-vertical"></i>
</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Completed</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-completed">
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <div class="float-right mr-n2">
                                        <label class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input">
      <span class="custom-control-label text-hide">Checkbox</span>
    </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                                    <div class="float-right mt-n1">
                                        <img src="{{asset('images/profile/try1611705477.jpg')}}" width="32" height="32" class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-block">Add new task</a>

                    </div>
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
                url: '/expense_type/edit/' + id,
                method: 'get',
                data: {

                },
                success: function(data) {
                    $('.modal-title').text('Update Expense Type');
                    $('.submit-button').text('Update');
                        $.each(data, function() {
                            $.each(this, function(k, v) {
                               $('[name ="'+k+'"]').val(v);
                            });
                        });
                    $('#modal-form').attr('action', 'expense_type/update/' + data.expense_type.id);
                }
            });

        }

        $(function() {
            dragula([
				document.querySelector("#tasks-upcoming"),
				document.querySelector("#tasks-progress"),
				document.querySelector("#tasks-hold"),
				document.querySelector("#tasks-completed")
			]);

            $('#datatables').DataTable({
                responsive: true
            });

            $( "table" ).on( "click", ".edit", function() {
                edit(this.id);
            });

            $('.add').click(function(){
                $('.modal-title').text('Add Expense Type');
                $('.submit-button').text('Add');
                $('#modal-form').attr('action', 'expense_type/save');
            })
        });
    </script>
@endsection