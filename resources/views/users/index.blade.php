@extends('layouts.app')
@section('content')

<div class="container">
    <div class="container" style="width: 70%; margin-bottom: 10px; padding: 0; text-align: right">
        <a href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
    </div>
    <div class="card m-auto" style="width: 70%">
    <div class="card-body">
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    
    <tbody>

        @foreach ($users as $user_record)
            <tr>
                <td>{{ $user_record->id }}</td>
                <td>{{ $user_record->name }}</td>
                <td>{{ $user_record->email }}</td>
                <td>{{ $user_record->created_at }}</td>
                <td>
                    <a href="{{route('users.edit', ['id' => $user_record->id])}}" class="btn btn-warning">Edit</a>
                    <form
                    method="POST" action="{{ route('users.destroy', ['id' => $user_record->id]) }}"
                    style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

  </tbody>
</table>
</div>
    </div>
</div>
@endsection