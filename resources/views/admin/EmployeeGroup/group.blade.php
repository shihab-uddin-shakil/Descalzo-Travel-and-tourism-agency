@extends('main.index')
@section('content')
    <h1>Group</h1>
     <div class="row">
            <div class="col-md-12">
     <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">DataTable Export</h3>
                        <div class="btn-group pull-right">
                            <a href="{{route('EGrpCreate')}}"class="btn btn-info "><i class="fa fa-plus"></i>
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
                                <tr>
                                    <td>1</td>
                                    <td>Guide</td>
                                    <td>
                                        <form method="POST">

                                            <a class="btn btn btn-primary"
                                                > <i
                                                    class="fa fa-edit"></i> </a>
                                            @csrf
                                           
                                           <button onclick="return confirm('Are You Sure Want to delete?')" type="submit"
                                                class=" btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Manager</td>
                                    <td>
                                        <form method="POST">

                                            <a class="btn btn btn-primary"
                                                > <i
                                                    class="fa fa-edit"></i> </a>
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
 </div>
                <!-- END DATATABLE EXPORT -->



            </div>
        </div>

    </div>
@stop
