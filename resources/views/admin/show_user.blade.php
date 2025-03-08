    @extends('layouts.admin')

    @section('content')
  

 

 


        <table class="table table-striped table-bordered mx-4 overflow-hidden mr-4">

            <tr>
                <th>Name :</th>
                <td>{{ old('name', auth()->user()->name) }}</td>
            </tr>

            <tr>
                <th>email :</th>
                <td>{{ old('email', auth()->user()->email) }}</td>
            </tr>
           
           

           
        </table>

        <div class="item text-success bg-gray-200 p-2 rounded-sm" >
            <a href="{{route('edit_user', parameters:['id' => $user->id])}}">Update your profile</a>
        </div>

        

     
        
   

    @endsection
 