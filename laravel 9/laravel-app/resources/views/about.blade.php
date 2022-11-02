@extends('layouts.app')

@section('content')
<h1>this is about page</h1>

{{ $x = 2; }}
@if ($x < 2)
  <h3> X is less than 2</h3>
@elseif($x > 2)
  <h3>X is greater than 2</h3>

@else 
  <h3>X = 2</h3>
@endif

{{-- @unless (empty($name)) {
  <h3>Name is not empty ->> {{ $name }}</h3>
} --}}
    
{{-- @if (!empty($name))
<h3>Name is not empty ---------->> {{ $name }}</h3>
@endif --}}

{{-- @empty(!$name)
<h3>Name is ->> {{ $name }}</h3>
@endempty

@switch($name)
    @case('Hoang')
        <h3>This í mr Hoang</h3>
        @break
    @case('Ngoc')
        <h3>Thí í mr Ngoc</h3>
        @break
    @default
      <h3>no one</h3>
        
@endswitch --}}

{{-- @for ($i = 0; $i < 10; $i++)
  <h3> i = {{ $i }} </h3>
    
@endfor --}}

@foreach ($names as $name)
    <h3>each name: {{ $name }}</h3>
@endforeach

@endsection
