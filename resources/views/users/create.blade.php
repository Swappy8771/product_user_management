@extends('layouts.app')

@section('content')
<div class="container"> <h2>Create User</h2> <form method="POST" action="{{ route('user.store') }}">
    @csrf
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection