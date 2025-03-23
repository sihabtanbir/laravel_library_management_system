@extends('layouts.admin')

@section('content')
    
<x-message></x-message>

<div class="flex gap-1 flex-wrap justify-around my-10">
    <div class="bg-green-400 p-10">
      <p class="text-2xl text-white text-center">{{$students}}</p>
      <p class="text-xl border-t p-4">Total Students</p>
    </div>

    <div class="bg-yellow-400 p-10">
      <p class="text-2xl text-white text-center">{{$books}}</p>
      <p class="text-xl border-t p-4">Total Books</p>
    </div>

    <div class=" bg-red-400 p-10">
      <p class="text-2xl text-white text-center">{{$authors}}</p>
      <p class="text-xl border-t p-4">Total Authors</p>
    </div>

    <div class=" bg-blue-400 p-10">
      <p class="text-2xl text-white text-center">{{$categories}}</p>
      <p class="text-xl border-t p-4">Total Category</p>
    </div>

  </div>


@endsection
