@extends('main.index')
@section('content')
    <div class="page-content-wrap">



        <div class="row">
            <div class="col-md-12">

                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vehicle Transaction</h3>
                       
                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                     <td>
                                        <form method="POST">

                                            
                                            @csrf
                                           
                                            <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                     <td>
                                        <form method="POST">

                                           
                                            @csrf
                                           
                                           <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                     <td>
                                         <form method="POST">

                                          
                                            @csrf
                                           
                                           <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->



            </div>
        </div>

    </div>

@stop
