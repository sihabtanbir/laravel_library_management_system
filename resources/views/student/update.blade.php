    @extends('layouts.student')

    @section('content')

  

    @foreach ($students as $student)
    
    <form action="{{route('update_student')}}" method="POST">
      @csrf
      @method('PUT')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 p-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Edit Profile</h2>
            
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <input type="hidden" name="id" id="" value="{{$student->id}}">
              <div class="sm:col-span-4">
                <label for="name" class="block text-sm/6 font-medium text-gray-900">name</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="{{$student->name}}" >
                  </div>
                </div>
              </div>
              
             
    
              <div class="sm:col-span-4">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">email</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input type="email" name="email" id="email" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="jabc@xyz.com">
                  </div>
                </div>
              </div>
      
              <div class="sm:col-span-4">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">password</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input type="password" name="password" id="password" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="*******">
                  </div>
                </div>
              </div>
      
             
            </div>
          </div>
      
        
      
          
        </div>
    
      
      
        <div class="m-6 flex items-center justify-center gap-x-6">
          <button type="reset" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
      </form>

    @endforeach
      

    @endsection
 