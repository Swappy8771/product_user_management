@extends('layouts.app')

@section('content')
<div class="container"> <h2>Product List</h2> <a href="{{ route('products.create') }}" class="btn btn-primary">Create
    Product</a>
    <table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
        <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display: inline;">
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