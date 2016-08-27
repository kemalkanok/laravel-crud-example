@extends('frontend.layout')

@section('content')





    <form action="/crud/" method="post" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" value="{{ old('email') }}" type="text"  name="email">
        </div>
        <div class="form-group"><label for="">Phone</label><input class="form-control" value="{{ old('phone') }}" type="text" name="phone"></div>
        <div class="form-group"><label for="">Password</label><input class="form-control"  type="password" name="password"></div>
        <div class="form-group">
            <button class="btn btn-success">Add</button>
        </div>
    </form>
@stop