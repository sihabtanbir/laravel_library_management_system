    @extends('layouts.admin')

    @section('content')
  




        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Session</th>
                    <th>Semester</th>
                    <th>Class Roll</th>
                    <th>section</th>


                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                
               
                <tr>
                    <td>{{$student->id}}</td>
                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->name}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->email}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->phone}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->session}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->semester}}</p>
                        </div>
                    </td>

                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->class_roll}}</p>
                        </div>
                    </td>


                    <td>
                        
                        <div class="">
                            <p class="body-title-2">{{$student->section}}</p>
                        </div>
                    </td>


                  
                   
                   
                    <td>
                        <div class="item text-success" >
                            <a href="{{route('edit_book', parameters:['id' => $student->id])}}">edit</a>
                        </div>
                        <div class="list-icon-function">
                            
                           
                            <form action="{{route('delete_book',parameters: ['id' => $student->id])}}" method="POST">
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
            {{-- {{$students->Links()}} --}}
        </div>
        
   

    @endsection
 