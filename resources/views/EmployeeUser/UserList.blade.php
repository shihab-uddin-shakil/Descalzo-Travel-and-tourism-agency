@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Employees</h3>
                        <div class="btn-group pull-right">
                            <a href="{{ url('employee/create') }}" class="btn btn-info "><i class="fa fa-plus"></i>
                                NewEmployee</a>

                        </div>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Account</th>
                                    <th>Salary</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->category->title }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->account }}</td>
                                        <td>{{ $user->salary }}</td>

                                        <td>
                                            <form method="POST">

                                                <a class="btn btn btn-primary"> <i class="fa fa-edit"></i> </a>
                                                @csrf

                                                <button onclick="return confirm('Are You Sure Want to delete?')"
                                                    type="submit" class=" btn btn-danger"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->



            </div>
        </div>

    </div>

@stop
