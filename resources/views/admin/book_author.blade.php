    @extends('layouts.admin')

    @section('content')

    <x-message></x-message>

    <form action="/book_author" method="POST">
        @csrf
          <div class=" flex items-center justify-start">
            <div class="">
             
        
              <div class=" flex flex-col ml-4 items-center justify-center">
                <div class="sm:col-span-4">
                  <label for="category" class="block text-sm/6 font-medium text-gray-900"></label>
                  <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                     
                      <input type="text" name="author_name" id="name" class="block min-w-0 p-2  text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Author name" >
                    </div>
                  </div>
                </div>
                
               
      
              
        
               
              </div>
            </div>
        
            <div class="m-6  gap-x-6">
            
                <button type="submit" class="rounded-md bg-sky-300  text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 p-2 mt-4">Add Author</button>
              </div>
        
            
          </div>
      
        
        
       
        </form>


        <div class="w-full p-4  mx-0">

        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Author Name</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="">
                        
                        <div class="">
                            <p class="body-title-2">{{$author->author_name}}</p>
                        </div>
                    </td>
                   
                   
                    <td>
                        <div class="list-icon-function">
                            
                           
                            <form action="{{route('delete_author',parameters: ['id' => $author->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete">
                                    <button type="submit">delete</button>
                                </div>
                            </form> 
                        </div> 

                       
                        <div class="item text-success" >
                            <a href="{{route('edit_author', parameters:['id' => $author->id])}}">edit</a>
                        </div>

                       
                    </td>
                </tr>

                @endforeach
            </tbody>

           
        </table>

    </div>

        <div class="">
            {{$authors->Links()}}
        </div>

      
        
   

    @endsection
 