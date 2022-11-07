@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Create Foods page</h1>

<form action="/foods" method="POST"
  enctype="multipart/form-data">
  @csrf
  <input 
    type="text" 
    class="form-control mb-3"
    name="name"
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
    placeholder="Enter food's description">
  <input 
    type="text" 
    class="form-control mb-3"
    name="count"
    placeholder="Enter food's count">
  <div>
    <label class="mb-1">Choose a categories:</label>
    <select class="form-select mb-3" name="category_id">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <button class="btn btn-primary mb-3" type="submit">Submit</button>
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
