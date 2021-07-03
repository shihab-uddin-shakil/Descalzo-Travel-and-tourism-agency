@extends('main.index')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create New Payment</h1>
 <div class="card shadow mb-4">
                       <br>
                        <div class="form-group">
                                    <div class="row justify text-center">
                        <div class="card-body">
                            <div class="table-responsive">
                               <form method="post">
                               @csrf
                                   
                                    <div class="col-md-6">
                                    <label for="title"> Employee Name</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
                                    <label for="title"> Employee Card Number</label>
                                    <input type="number" class="form-control" id="title" name="title" placeholder="Enter card number">
                                    <label for="title"> Amount</label>
                                    <input type="mumber" class="form-control" id="title" name="title" placeholder="Enter amount">
                                    <br>
                                       <input type="submit" class="btn btn-primary" value="Pay Salary">
                             </form>

                               
                            </div>
                        </div>
                         </div>
                        </div>
                    </div>
@stop