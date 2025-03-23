    @extends('layouts.admin')

    @section('content')
  
    <x-message></x-message>

    <div class="m-4 p-2 ">
        <form action="/search_student" method="get">
            <input type="text" name="search" id="" placeholder="search" class=" border-2 w-[300px] p-2 bg-white rounded-sm relative">
            <button type="submit" class=" absolute left-[280px] pt-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
       </div>

    <h2 class="text-xl mx-10 m-4">Show student list</h2>


    <div class="mx-10">
        <table class="table table-striped table-bordered ">
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
                    <td>{{ $loop->iteration }}</td>
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
                            <a href="{{route('convert_admin', parameters:['id' => $student->id])}}">admin</a>
                        </div>
                        <div class="list-icon-function">
                            
                           
                            <form action="{{route('delete_student',parameters: ['id' => $student->id])}}" method="POST">
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

        {{-- <div class="">
             {{$students->Links()}}
        </div> --}}
        
   

    @endsection
 