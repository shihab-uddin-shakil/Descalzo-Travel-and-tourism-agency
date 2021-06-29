@extends('main.index')
@section('content')
    <div class="block">



        <form method="post" class="form-horizontal">
            {{-- {!! Form::model($user, ['url' => ['cmolains/store', $user->id], 'method' => 'post', ' class' => 'form-horizontal']) !!} --}}
            @csrf






            <div class="form-group">
                <label for="user_id" class="col-md-3 control-label">Name</label>
                <div class="col-md-6">
                    {!! Form::number('user_id', null, ['class' => 'form-control', 'id' => 'user_id', 'placeholder' => 'user_id']) !!}
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-md-3 control-label">Username</label>
                <div class="col-md-6">
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'id' => 'message', 'placeholder' => 'message']) !!}

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
