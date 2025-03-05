    @extends('layouts.admin')

    @section('content')
    <form action="/category" method="POST">
        @csrf
          <div class=" flex items-center justify-start">
            <div class="">
             
        
              <div class="  gap-x-6 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="category" class="block text-sm/6 font-medium text-gray-900"></label>
                  <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                     
                      <input type="text" name="category" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Category name" >
                    </div>
                  </div>
                </div>
                
               
      
              
        
               
              </div>
            </div>
        
            <div class="m-6  gap-x-6">
            
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Category</button>
              </div>
        
            
          </div>
      
        
        
       
        </form>




        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                
               
                <tr>
                    <td>{{$category->id}}</td>
                    <td class="">
                        
                        <div class="">
                            <p class="body-title-2">{{$category->category}}</p>
                        </div>
                    </td>
                   
                   
                    <td>
                        <div class="list-icon-function">
                            
                           
                            <form action="{{route('delete_category',parameters: ['id' => $category->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete">
                                    <button type="submit">delete</button>
                                </div>
                            </form> 
                        </div> 
                    </td>
                </tr>

                @endforeach
            </tbody>

           
        </table>

        <div class="">
            {{$categories->Links()}}
        </div>
        
   

    @endsection
 