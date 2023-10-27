@extends('layouts.app')

@section('content')
<div class="container"> <h2>Edit Product</h2> <form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection