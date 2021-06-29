@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tourist Review</h3>

                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Id</th>
                                    <th>Rate</th>
                                    <th>Coment</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reviews as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->user_id }}</td>
                                        <td>{{ $user->rate }}</td>
                                        <td>{{ $user->coment }}</td>
                                        <td>{{ $user->status }}</td>

                                        <td>

                                            <form method=""><a class=" btn btn btn-info"
                                                    href="{{ url('review/edit', ['user' => $user->id]) }}"> <i
                                                        class="fa fa-check">approved</i></a>




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
