@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">History</h3>
                        <div class="btn-group pull-right">
                            <a href="{{ route('NewPayment') }}" class="btn btn-info "><i class="fa fa-plus"></i>
                                NewPayment</a>

                        </div>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Employee Id</th>
                                    <th>Paid amount</th>
                                    <th>Description</th>
                                    <th>Date</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historys as $history)


                                    <tr>
                                        <td>{{ $history->id }}</td>
                                        <td>{{ $history->employee_id }}</td>
                                        <td>{{ $history->amount }}</td>
                                        <td>{{ $history->description }}</td>
                                        <td>{{ $history->created_at }}</td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>




            </div>
        </div>

    </div>

@stop
