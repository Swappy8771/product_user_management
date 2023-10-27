@extends('layouts.app')

@section('content')
<div class="container"> <h2>Edit User</h2> <form method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection