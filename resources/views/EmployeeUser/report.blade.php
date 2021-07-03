@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">REPORTS</h3>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Employee Id</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reports as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->employee_id }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td>{{ $user->description }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->status }}</td>

                                        <td>

                                            <form method="POST"
                                                action="{{ url('report/destroy', ['user' => $user->id]) }}">

                                                <a class=" btn btn btn-primary"
                                                    href="{{ url('report/edit', ['user' => $user->id]) }}"> <i
                                                        class="fa fa-check"></i> Accept</a>



                                                @csrf
                                                @method('DELETE')
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
