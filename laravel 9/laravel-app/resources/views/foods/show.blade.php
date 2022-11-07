@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Foods detail</h1>
<h3>Name: {{ $food-> name }}</h3>
<img src="{{ asset('images/'.$food->image_path) }}" width="250">
<h3>Count: {{ $food-> count}}</h3>
<h3>Description: {{ $food->description}}</h3>
<h3>Category_id: {{ $food->category_id}}</h3>
<h3>Category Name: {{ $food->category->name}}</h3>
@endsection
