@extends('layouts.admin')

@section('content')

<x-message></x-message>


    
@foreach ($books as $book)


<form action="{{route('update_book')}}" method="POST">
  @csrf
  @method('PUT')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 p-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Book Update</h2>
        
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <input type="hidden" name="id"  value="{{$book->id}}">
        
          
            <div class="sm:col-span-4">
             
                <label for="name" class="block text-sm/6 font-medium text-gray-900 capitalize">name</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$book->name}}" >
                    
                  </div>
                </div>
              </div>
              
              <div class="sm:col-span-4">
            <label for="author_name" class="block text-sm/6 font-medium text-gray-900 capitalize">author_name</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <select type="text" name="author_name" id="author_name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="" >
                  @foreach($authors as $author)
                  <option value="{{$author->author_name}}">{{$author->author_name}}</option>
                  @endforeach
                 
              </select>

              </div>
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="category" class="block text-sm/6 font-medium text-gray-900 capitalize">category</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <select type="text" name="category" id="category" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="" >
                  @foreach($categories as $category)
                  <option value="{{$category->category}}">{{$category->category}}</option>
                  @endforeach
                 
              </select>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="quantity" class="block text-sm/6 font-medium text-gray-900 capitalize">quantity</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="text" name="quantity" id="quantity" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$book->quantity}}" >
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="total_page" class="block text-sm/6 font-medium text-gray-900 capitalize">total_page</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="text" name="total_page" id="total_page" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$book->total_page}}" >
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="price" class="block text-sm/6 font-medium text-gray-900 capitalize">price</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="text" name="price" id="price" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$book->price}}" >
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="publish_date" class="block text-sm/6 font-medium text-gray-900 capitalize">publish_date</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="date" name="publish_date" id="publish_date" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$book->publish_date}}" >
               
              </div>

             
            </div>
          </div>

          
         
          
      
  
         
        </div>
      </div>
  
    
  
      
    </div>

  
  
    <div class="m-6 flex items-center justify-center gap-x-6">
      <button type="reset" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Book</button>
    </div>
  </form>
  @endforeach


  


  
  @endsection
