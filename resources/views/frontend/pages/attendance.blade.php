<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('opimac/landing/css/bootstrap.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <style>
            body {
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div id="attendance">

            @if($message = Session::get('success'))
                <div class="alert alert-success col-md-12 col-lg-12">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if(count($errors) > 0 )
                <div class="alert alert-danger col-md-12 col-lg-12">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="container">
                            <span class="header-name">Attendance</span>
                            <span class="header-name2">System</span>
                        </div>
                    </div>

                    <div class="time_entry">
                        <div class="container">
                            <div class="row">
                                
                                <div class="entry col-lg-6">
                                    @csrf
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <label for="cars">Employee Name:</label>

                                    <select name="user_id" id="user_id">
                                        <option value="" disabled selected>Select your Name</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"> {{ $user->name }}</option>
                                        @endforeach
                                    </select>

                                    <button class="btn btn-primary" id="time_in">Time-In</button>
                                    <button class="btn btn-primary" id="time_out">Time-Out</button>
                                </div>
                                
                                <div class="clock col-lg-6">
                                    <p class="time"></p>
                                </div>

                            </div>
                            
                        </div>
                    </div>

                    <div class="table">
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="row">
                                    <table id="datatables" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($attendances as $key => $attendance)
                                            <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>{{ $attendance->employee->name}}</td>
                                            <td>{{ $attendance->employee->designation}}</td>
                                            <td>{{ $attendance->time_in}}</td>
                                            <td>{{ $attendance->time_out}}</td>
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


        <div class="container">

        </div>
    </body>

    <script src="{{ asset('js/attendance/attendance.js') }}"></script>

</html>
