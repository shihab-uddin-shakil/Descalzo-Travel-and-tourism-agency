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
                            <a href="{{route('NewPayment')}}"class="btn btn-info "><i class="fa fa-plus"></i>
                                NewPayment</a>

                        </div>
                       
                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                
                                    <th>Id</th>
                                    <th>Employee Name</th>
                                    <th>Description</th>
                                    <th>Credit card</th>
                                    
                                    <th>Date</th>
                                    <th>Amount</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>nabill</td>
                                    <td>give salary</td>
                                    <td>6112332323</td>
                                    <td>2021/04/25</td>
                                    <td>$320,800</td>
                                     
                                </tr>
                                
                                
                            </tbody>
                        </table>

                    </div>
                </div>
               



            </div>
        </div>

    </div>

@stop
