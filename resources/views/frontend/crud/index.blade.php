@extends('frontend.layout')

@section('content')

    <a href="/crud/create" class="btn btn-success">Add</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>{{ trans('crud.email') }}</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($collection as $row)
        <tr>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>
                <a href="/crud/{{ $row->id }}/edit" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i>
                    Edit
                </a>

                <a href="/crud/{{ $row->id }}" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop