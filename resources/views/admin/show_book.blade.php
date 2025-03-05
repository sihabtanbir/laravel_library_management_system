    @extends('layouts.admin')

    @section('content')
  




        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">
            <thead>
                <tr>
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
                    <td>{{$book->id}}</td>
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

        <div class="">
            {{-- {{$books->Links()}} --}}
        </div>
        
   

    @endsection
 