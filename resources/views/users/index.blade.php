@extends('layouts.app')

@section('content')
<div class="container"> <h2>User List</h2> <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>
    <table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form method="POST" action="{{ route('user.destroy', $user->id) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
            </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection