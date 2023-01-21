@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card m-auto" style="width: 70%">
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
        </tr>
    </thead>
    
    <tbody>

        @foreach ($users as $user_record)
            <tr>
                <td>{{ $user_record->id }}</td>
                <td>{{ $user_record->name }}</td>
                <td>{{ $user_record->email }}</td>
                <td>{{ $user_record->created_at }}</td>
            </tr>
        @endforeach

  </tbody>
</table>
    </div>
</div>
@endsection