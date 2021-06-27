@extends('main.index')
@section('content')
    <div class="block">

        <h1 class="h3 mb-4 text-gray-800">Update Employee </h1>

        {{-- <form method="put" class="form-horizontal"> --}}
        {!! Form::model($user, ['url' => ['tourist/update', $user->id], 'method' => 'put', ' class' => 'form-horizontal']) !!}
        @csrf






        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Name</label>
            <div class="col-md-6">
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-md-3 control-label">Username</label>
            <div class="col-md-6">
                {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'User Name']) !!}

            </div>
        </div>


        <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password:</label>
            <div class="col-md-6">

                <input type="password" name="password" id="password" class=" form-control" id="password" required />

            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-md-3 control-label">Phone:</label>
            <div class="col-md-6">
                {!! Form::tel('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'phone']) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="account" class="col-md-3 control-label">Account:</label>
            <div class="col-md-6    ">
                {!! Form::text('account', null, ['class' => 'form-control', 'id' => 'account', 'placeholder' => 'account']) !!}

            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-3 control-label">Email:</label>
            <div class="col-md-6">
                {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'email']) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-md-3 control-label">Address:</label>
            <div class="col-md-6">
                {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'address']) !!}

            </div>
        </div>
        <div class="form-group">
            <label for="salary" class="col-md-3 control-label">Salary:</label>
            <div class="col-md-6">
                {!! Form::number('status', null, ['class' => 'form-control', 'id' => 'status', 'placeholder' => 'salary']) !!}

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 control-label">

                <input class="btn btn-info" name="submit" value="Active tourist" type="submit">




            </div>
        </div>
        {!! Form::close() !!}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop
