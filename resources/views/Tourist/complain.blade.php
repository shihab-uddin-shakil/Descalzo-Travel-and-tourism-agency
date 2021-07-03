@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tourist Complain</h3>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>Tourist Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complains as $complain)


                                    <tr>
                                        <td>{{ $complain->id }}</td>
                                        <td>{{ $complain->user_id }}</td>
                                        <td>{{ $complain->title }}</td>
                                        <td>{{ $complain->message }}</td>
                                        <td>{{ $complain->created_at }}</td>
                                        <form method="POST">

                                            <td> <a class=" btn btn btn-primary"
                                                    href="{{ url('complains/edit', ['complain' => $complain->id]) }}">
                                                    Reply<i class=""></i> </a>
                                                @csrf

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
