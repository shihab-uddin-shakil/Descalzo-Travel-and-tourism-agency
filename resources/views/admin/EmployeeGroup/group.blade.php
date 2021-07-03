@extends('main.index')
@section('content')
    <h1>Employee Category</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Employee Category List</h3>
                    <div class="btn-group pull-right">
                        <a href="{{ url('employee_categories/create') }}" class="btn btn-info "><i class="fa fa-plus"></i>
                            NewEmployeeGroup</a>

                    </div>

                </div>
                <div class="panel-body">
                    <table id="customers2" class="table datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($ecategories as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->title }}</td>
                                    <td>
                                        <form method="post" action="{{ url('/employee_categories/' . $group->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger" href="{{ url('/employee_categories') }}"><i
                                                    class="fas  fa fa-trash-o"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- END DATATABLE EXPORT -->



    </div>
    </div>

    </div>
@stop
