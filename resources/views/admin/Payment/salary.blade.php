@extends('main.index')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create New Payment</h1>
    <div class="card shadow mb-4">
        <br>
        <div class="form-group">
            <div class="row justify text-center">
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- @if ($mode == 'find')
                            <form method="get" action="{{ url('payments/' . ['employee' => $employee->id]) }}">
                            @else --}}
                        <form method="post">
                            {{-- @endif --}}
                            @csrf

                            <div class="col-md-6">
                                <label for="user_id"> Employee Name</label>



                                <select class="form-control" name="user_id" id="user_id">
                                    @foreach ($employee as $em)
                                        <option value="{{ $em->id }}">{{ $em->name }}</option>
                                    @endforeach
                                </select>
                                {{-- @if ($mode == 'find')
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Find Employee">
                                @else --}}
                                <label for="account"> Employee Card Number</label>
                                <select class="form-control" name="account" id="account">
                                    @foreach ($employee as $em)
                                        <option value="{{ $em->account }}">{{ $em->account }}</option>
                                    @endforeach
                                </select>
                                <label for="amount"> Amount</label>
                                <select class="form-control" name="amount" id="amount">
                                    @foreach ($employee as $em)
                                        <option value="{{ $em->salary }}">{{ $em->salary }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <input type="submit" name="submit" class="btn btn-primary" value="Pay Salary">





                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
