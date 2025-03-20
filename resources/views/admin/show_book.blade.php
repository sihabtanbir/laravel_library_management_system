    @extends('layouts.admin')

    @section('content')
  
       <div class="m-4 p-2 ">
        <form action="" method="get">
            <input type="text" name="search" id="" placeholder="search" class="border border-2 w-[300px] p-2 bg-white rounded-sm relative">
            <button type="submit" class=" absolute left-[280px] pt-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
       </div>
        <h2 class="m-4 text-2xl font-semibold">Show all books</h2>


        <div class="w-full p-4  mx-0">
        <table class="table table-striped table-bordered ">
            <thead>
                <tr >
                    <th>#</th>
                    <th>Name</th>
                    <th>Author Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Total Page</th>
                    <th>Price</th>
                    <th>Publish Date</th>


                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->name}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->author_name}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->category}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->quantity}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->total_page}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->price}}</p>
                        </div>
                    </td>


                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$book->publish_date}}</p>
                        </div>
                    </td>


                  
                   
                   
                    <td>
                        <div class="item text-success" >
                            <a href="{{route('edit_book', parameters:['id' => $book->id])}}">edit</a>
                        </div>
                        <div class="list-icon-function">
                            
                           
                            <form action="{{route('delete_book',parameters: ['id' => $book->id])}}" method="POST">
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
        </div>

        <div class="">
            {{-- {{$books->Links()}} --}}
        </div>
        
   

    @endsection
 