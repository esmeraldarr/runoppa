@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit building
    </h1>
    <form method = 'get' action = '{!!url("building")!!}'>
        <button class = 'btn btn-danger'>building Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("building")!!}/{!!$building->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$building->
            name!!}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$building->
            description!!}">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
