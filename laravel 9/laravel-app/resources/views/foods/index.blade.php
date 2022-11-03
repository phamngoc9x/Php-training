@extends('layouts.app')

@section('content')
<h1 class="my-5">This is Foods page</h1>
<a href="foods/create" class="btn btn-primary mb-4">Add a new Food</a>
<ul class="list-group mb-5">
@foreach ($foods as $food)
  <li class="list-group-item d-flex align-items-center justify-content-between">
    <div class="ms-2">
      <h3> <a href="foods/{{$food->id  }}">{{ $food -> name }}</a></h3>{{ $food -> description }}
    </div>
    <div>
      <span class="badge bg-primary rounded-pill">{{ $food -> count }}</span>
    </div>
    <div>
      <a href="foods/{{$food->id  }}/edit" class="btn btn-primary ms-2">Edit</a>
      <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger ms-2" type="submit">Delete</button>
      </form>
    </div>
  </li>
@endforeach
</ul>
@endsection
