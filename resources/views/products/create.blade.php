@extends('layouts.app')

@section('content')
<div class="container"> <h2>Create Product</h2> <form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control" required></textarea>
</div>
<div class="form-group">
    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection