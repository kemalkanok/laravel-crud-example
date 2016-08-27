@extends('frontend.layout')

@section('content')





    <form action="/crud/{{ $element->id }}" method="post" class="form">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" value="{{ $element->email }}" type="text"  name="email">
        </div>
        <div class="form-group"><label for="">Phone</label><input class="form-control" value="{{ $element->phone }}" type="text" name="phone"></div>
        <div class="form-group"><label for="">Password</label><input class="form-control"  type="password" value="{{ $element->password }}" name="password"></div>
        <div class="form-group">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
@stop