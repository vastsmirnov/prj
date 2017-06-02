@extends('layouts.app')

@section('content')
    <div class="container">

        {{ Html::ul($errors->all()) }}

        {{ Form::open(array('url' => 'products')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'description') }}
            {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('cost', 'cost') }}
            {{ Form::text('cost', Input::old('cost'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the Group!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection
