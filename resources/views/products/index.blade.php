@extends('layouts.app')

@section('content')

<div class="container">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
    @if (Session::has('error-message'))
        <div class="alert alert-danger">{{ Session::get('error-message') }}</div>
    @endif
    <div class="form-group">
        <a class="btn btn-small" href="{{ URL::to('products/create') }}">Create product!</a>
    </div>

<table class="table table-striped ">
    <thead>
        <tr>
            <td>№</td>
            <td>Name</td>
            <td>Description</td>
            <td>Cost</td>
        </tr>
    </thead>
    <tbody>
    <?php $counter=1 ?>
    @foreach($products as $key => $value)
        <tr>
            <td>{{$counter++}}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->cost }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


@endsection
