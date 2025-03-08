    @extends('layouts.student')

    @section('content')
  

 @foreach($students as $student)

 


        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">

            <tr>
                <th>Name :</th>
                <td>{{$student->name}}</td>
            </tr>

            <tr>
                <th>email :</th>
                <td>{{$student->email}}</td>
            </tr>
            <tr>
                <th>phone</th> :</th>
                <td>{{$student->phone}}</td>
            </tr>
            <tr>
                <th>session :</th>
                <td>{{$student->session}}</td>
            </tr>
            <tr>
                <th>semester :</th>
                <td>{{$student->semester}}</td>
            </tr>
            <tr>
                <th>class_roll :</th>
                <td>{{$student->class_roll}}</td>
            </tr>
            <tr>
                <th>section :</th>
                <td>{{$student->section}}</td>
            </tr>
           

           
        </table>

        <div class="item text-success bg-gray-200 p-2 rounded-sm" >
            <a href="{{route('edit.student', parameters:['id' => $student->id])}}">Update your profile</a>
        </div>

        @endforeach

     
        
   

    @endsection
 