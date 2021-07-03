Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@Tanvir0146 
shihab-uddin24
/
Descalzo-Travel-and-tourism-agency
1
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Descalzo-Travel-and-tourism-agency/resources/views/EmployeeUser/CreateUser.blade.php
@shihab-uddin24
shihab-uddin24 employee added updated delted complited
Latest commit 959e806 4 days ago
 History
 1 contributor
130 lines (107 sloc)  4.96 KB
  
@extends('main.index')
@section('content')
    <div class="block">
        @if ($mode == 'edit')
            <h1 class="h3 mb-4 text-gray-800">Update Employee </h1>
        @else
            <h1 class="h3 mb-4 text-gray-800">Create New Employee</h1>
        @endif
        @if (@isset($user))
            {{-- <form method="put" class="form-horizontal"> --}}
            {!! Form::model($user, ['url' => ['employee/update', $user->id], 'method' => 'put', ' class' => 'form-horizontal']) !!}
            @csrf

        @else
            {{-- {!! Form::open(['url' => ['employee/store','method' => 'post',' class' => 'form-horizontal']) !!} --}}
            <form method="POST" class="form-horizontal">


        @endif
        {{-- {!! Form::open(['route' => 'employee.store', 'method' => 'post']) !!} --}}

        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Category:</label>
            <div class="col-md-3">

                {{-- <select for="group " name="group" class="select form-control">
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->title }}</option>
                        @endforeach
                    </select> --}}
                {!! Form::select('category_id', $groups, null, ['class' => 'form-control', 'id' => 'category_id', 'placeholder' => 'Select Group']) !!}

            </div>
        </div>
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
        @if ($mode == 'edit')
            <div class="form-group ">
                <label for="password" class="col-md-3 control-label">Password:</label>
                <div class="col-md-6">

                    {!! Form::text('password', null, ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'password..', 'readonly']) !!}

                </div>
            </div>
        @else
            <div class="form-group">
                <label for="password" class="col-md-3 control-label">Password:</label>
                <div class="col-md-6">

                    <input type="password" name="password" id="password" class=" form-control" id="password" required />

                </div>
            </div>
        @endif
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
                {!! Form::number('salary', null, ['class' => 'form-control', 'id' => 'salary', 'placeholder' => 'salary']) !!}

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 control-label">
                @if ($mode == 'edit')
                    <input class="btn btn-info" name="submit" value="Update Employee" type="submit">
                @else
                    <input class="btn btn-primary" name="submit" value="Add Employee" type="submit">
                @endif




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
