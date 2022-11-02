@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Foods page</h1>
<a href="foods/create" class="btn btn-primary mb-4">Add a new Food</a>
<ul class="list-group mb-5">
@foreach ($foods as $item)
  <li class="list-group-item"><h3>{{ $item -> name }}</h3>{{ $item -> description }}</li>
@endforeach
</ul>
@endsection
