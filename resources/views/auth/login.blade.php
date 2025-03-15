<x-navbar> </x-navbar>
<script src="https://cdn.tailwindcss.com"></script>

<div class="h-[600px] mx-10 ">
<form action="/login" method="POST">
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 p-12">
       
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm/6 font-medium text-gray-900">email</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                
                <input type="email" name="email" id="email" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="abc@xyz.com">
              </div>
              @error('email')
              <p class="text-sm text-red-400">{{$message}}</p>
          @enderror
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">password</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="password" name="password" id="password" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="******">
              </div>
              @error('password')
              <p class="text-sm text-red-400">{{$message}}</p>
          @enderror
            </div>

          
          </div>
  
        
  
         
        </div>
      </div>
  
    
  
      
    </div>
    <div>
      <p class="pt-2 text-gray-700 ">
        Don't have account? Please <a href="/register" class="text-blue-500">sign up</a>
      </p>
    </div>
    
    <div class="m-6 flex items-center justify-center gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
    </div>
  </form>
</div>

  <footer class="app-footer mx-10">
    <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">Anything you want</div>
    <!--end::To the end-->
    <!--begin::Copyright-->
    <strong>
      Copyright &copy; 2025&nbsp;
      Tanbir Ahmmed Sihab
    </strong>
    All rights reserved.
    <!--end::Copyright-->
  </footer>
  