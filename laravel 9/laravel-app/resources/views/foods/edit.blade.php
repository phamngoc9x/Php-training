@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Edit Foods page</h1>

<form action="/foods/{{ $food-> id }}" method="post">
  @csrf
  @method('PUT')
  <input 
    type="text" 
    class="form-control mb-3"
    name="name"
    value="{{ $food -> name }}"
    placeholder="Enter food's name">
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
  <button class="btn btn-primary mb-3" type="submit">Update</button>
</form>

@endsection
