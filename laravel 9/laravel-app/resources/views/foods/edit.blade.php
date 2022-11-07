@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Edit Foods page</h1>

<form action="/foods/{{ $food-> id }}" method="post"
  enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <input 
    type="text" 
    class="form-control mb-3"
    name="name"
    value="{{ $food -> name }}"
    placeholder="Enter food's name">
  <input 
    type="file" 
    class="form-control mb-3"
    name="image"
    placeholder="Enter food's preview">
  <input 
    type="text" 
    class="form-control mb-3"
    name="description"
    value="{{ $food -> description }}"
    placeholder="Enter food's description">
  <input 
    type="text" 
    class="form-control mb-3"
    name="count"
    value="{{ $food -> count }}"
    placeholder="Enter food's count">
  <div>
    <label class="mb-1">Choose a categories:</label>
    <select class="form-select mb-3" name="category_id">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <button class="btn btn-primary mb-3" type="submit">Update</button>
</form>
@if ($errors -> any())
  <div>
    @foreach ($errors->all() as $error)
      <p class="text-danger">
        {{ $error }}
      </p>
    @endforeach
  </div>
@endif

@endsection
