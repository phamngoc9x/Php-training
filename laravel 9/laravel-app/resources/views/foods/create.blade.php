@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Create Foods page</h1>

<form action="/foods" method="POST">
  @csrf
  <input 
    type="text" 
    class="form-control mb-3"
    name="name"
    placeholder="Enter food's name">
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
  <button class="btn btn-primary mb-3" type="submit">Submit</button>
</form>

@endsection
