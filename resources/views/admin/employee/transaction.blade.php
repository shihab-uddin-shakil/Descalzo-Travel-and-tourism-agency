@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Transaction</h3>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Id</th>
                                    <th>User </th>
                                    <th>Activity</th>
                                    <th>Description</th>
                                    <th> Created Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $tr)
                                    <tr>
                                        <td>{{ $tr->id }}</td>
                                        <td>{{ $tr->user_id }}</td>
                                        <td>{{ $tr->user }}</td>
                                        <td>{{ $tr->activity }}</td>
                                        <td>{{ $tr->description }}</td>
                                        <td>{{ $tr->created_at }}</td>

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
