<x-navbar> </x-navbar>

<div class="bg-gray-100">
  <div class="h-[600px] mx-10  pt-10 ">
<form action="/register" method="POST">
  @csrf
    <div class="space-y-12">
      <div class=" p-4 mx-auto border border-1 w-[500px] mx-auto bg-white shadow-lg pl-10">
        <h2 class="text-3xl text-sky-300 border-b">Register</h2>
        <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mx-auto">
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm/6 font-medium text-gray-900">name</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
               
                <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="janesmith">
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

    <div>
      <p class="pt-2 text-gray-700 ">
        You have account? Please <a href="/login" class="text-blue-500">sign In</a>
      </p>
    </div>
  
    <div class="m-6 flex items-center justify-center gap-x-6">
      <button type="reset" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-sky-300 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
    </div>

  </div>
</div>
  </form>

</div>
</div>

  <x-footer></x-footer>
  