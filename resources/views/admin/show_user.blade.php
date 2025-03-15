    @extends('layouts.admin')

    @section('content')
  

 

 
     @foreach ($users as $user )
     
    

        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">

            <tr>
                <th>Name :</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>email :</th>
                <td>{{ $user->email }}</td>
            </tr>
           
           

           
        </table>

        <div class="item text-success bg-gray-200 p-2 rounded-sm" >
            <a href="{{route('edit_user', parameters:['id' => $user->id])}}">Update your profile</a>
        </div>

        @endforeach

     
        
   

    @endsection
 