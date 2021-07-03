@extends('main.index')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create New Group</h1>
 <div class="card shadow mb-4">
                       <br>
                        <div class="form-group">
                                    <div class="row text-align-center">
                        <div class="card-body">
                            <div class="table-responsive">
                               <form method="post">
                               @csrf
                                   
                                    <div class="col-md-6">
                                    <label for="title"> Enter Group Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                    <br>
                                       <input type="submit" class="btn btn-primary" value="Add Title">
                             </form>

                               
                            </div>
                        </div>
                         </div>
                        </div>
                    </div>
@stop