

<x-navbar> </x-navbar>

<div>
    <div class="carousel w-full h-[600px]">
        <div id="item1" class="carousel-item w-full relative">
          <img
            src="{{asset('assets/library2.jpeg')}}"
            class="w-full" />
            <div class="absolute text-gray-200 top-[300px] md:left-[100px] sm:left-[0px] w-[400px] bg-gray-700/80 p-4">
              <h2 class="text-2xl text-shadow-sm text-sky-400 font-semibold"> One Title Here </h2>
              <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quisquam soluta et nostrum quam doloremque, vero eveniet molestiae modi earum.</p>
            </div>
            
        </div>
        <div id="item2" class="carousel-item w-full  relative">
          <img
            src="{{asset('assets/library1.jpg')}}"
            class="w-full" />
            <div class="absolute text-gray-200 top-[300px] md:left-[100px] sm:left-[0px] w-[400px] bg-gray-700/80 p-4">
              <h2 class="text-2xl text-shadow-sm text-sky-400 font-semibold"> Two Title Here </h2>
              <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quisquam soluta et nostrum quam doloremque, vero eveniet molestiae modi earum.</p>
            </div>

        </div>
        <div id="item3" class="carousel-item w-full relative">
          <img
            src="{{asset('assets/library3.jpg')}}"
            class="w-full" />

             <div class="absolute text-gray-200 top-[300px] md:left-[100px] sm:left-[0px] w-[400px] bg-gray-700/80 p-4">
              <h2 class="text-2xl text-shadow-sm text-sky-400 font-semibold"> Three Title Here </h2>
              <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quisquam soluta et nostrum quam doloremque, vero eveniet molestiae modi earum.</p>
            </div>

        </div>
        <div id="item4" class="carousel-item w-full relative">
          <img
            src="{{asset('assets/library4.jpg')}}"
            class="w-full" />

             <div class="absolute text-gray-200 top-[300px] md:left-[100px] sm:left-[0px] w-[400px] bg-gray-700/80 p-4">
              <h2 class="text-2xl text-shadow-sm text-sky-400 font-semibold"> Four Title Here </h2>
              <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quisquam soluta et nostrum quam doloremque, vero eveniet molestiae modi earum.</p>
            </div>

        </div>
      </div>
      <div class="flex w-full justify-center gap-2 py-2">
        <a href="#item1" class="btn btn-xs">1</a>
        <a href="#item2" class="btn btn-xs">2</a>
        <a href="#item3" class="btn btn-xs">3</a>
        <a href="#item4" class="btn btn-xs">4</a>
      </div>
</div>

<section id="summury" class=" mx-auto p-10 bg-sky-300">

  <div class="flex gap-1 justify-around my-10">
    <div class=" ">
      <p class="text-2xl text-white text-center">{{$students}}</p>
      <p class="text-xl">Total Students</p>
    </div>

    <div class=" ">
      <p class="text-2xl text-white text-center">{{$books}}</p>
      <p class="text-xl">Total Books</p>
    </div>

    <div class=" ">
      <p class="text-2xl text-white text-center">{{$authors}}</p>
      <p class="text-xl">Total Authors</p>
    </div>

    <div class=" ">
      <p class="text-2xl text-white text-center">{{$categories}}</p>
      <p class="text-xl">Total Category</p>
    </div>

  </div>

</section>

<section class=" bg-gray-100" id="features">
  <h2 class="text-center text-3xl font-semibold p-4"><Span class="text-sky-300">L</Span>ibrary <Span class="text-sky-300">F</Span>eatures</h2>
  <div class="flex items-center justify-center gap-4 m-4 pb-4">

    <div class="card box-shadow-md bg-white  h-[200px]" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-xl bg-sky-300 p-2"> It is cost effective</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>

    <div class="card box-shadow-md bg-white h-[200px]" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-xl bg-sky-300 p-2">Keep record of different categories</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>

    <div class="card box-shadow-md bg-white h-[200px]" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title text-xl bg-sky-300 p-2"> Simple interface for all users</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>
  </div>
</section>

<section class="about" id="about">

  <h2 class="text-center text-3xl font-semibold p-4"><Span class="text-sky-300">A</Span>bout <Span class="text-sky-300">U</Span>s</h2>
  
  <div class="flex md:flex-row sm:flex-col px-10">
      <div class="image flex-1">
          <img src="{{asset('assets/about.jpg')}}" alt="about">
      </div>
  
      <div class="content flex-1 pt-16">
          <h3 class="text-2xl text-sky-400 font-semibold">why choose us?</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo at quos incidunt suscipit voluptatibus ipsum, in corrupti obcaecati tenetur ab reiciendis dolorem ipsam perferendis. Ea eligendi illo quas soluta consectetur?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, architecto?</p>
          
         
      </div>
  </div>
 </section>

   <section class="review bg-sky-300" id="review">
        <h2 class="text-center text-3xl font-semibold p-4 m-4"><Span class="text-gray-50">R</Span>eview </h2>
        <div class="flex flex-wrap items-center justify-center gap-2 m-4 mb-4 p-10">

         <div class="card bg-base-100 w-96 shadow-lg">
            <figure class=" absolute top-[-20px] left-[150px]">
              <img class="h-[80px] w-[80px]  rounded-full border border-4 border-sky-300"
                src="{{asset('assets/usser.jpg')}}"
                alt="student" />
            </figure>
            <div class="card-body mt-10 h-[200px]">
              <h2 class="card-title text-xl text-sky-400">Jon Doe</h2>
              <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
              <div class="card-actions justify-end">
                
              </div>
            </div>
          </div>

            <div class="card bg-base-100 w-96 shadow-lg">
            <figure class=" absolute top-[-20px] left-[150px]">
              <img class="h-[80px] w-[80px]  rounded-full border border-4 border-sky-300"
                src="{{asset('assets/usser.jpg')}}"
                alt="student" />
            </figure>
            <div class="card-body mt-10 h-[200px]">
              <h2 class="card-title text-xl text-sky-400">Jon Doe</h2>
              <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
              <div class="card-actions justify-end">
                
              </div>
            </div>
          </div>
            <div class="card bg-base-100 w-96 shadow-lg">
            <figure class=" absolute top-[-20px] left-[150px]">
              <img class="h-[80px] w-[80px]  rounded-full border border-4 border-sky-300"
                src="{{asset('assets/usser.jpg')}}"
                alt="student" />
            </figure>
            <div class="card-body mt-10 h-[200px]">
              <h2 class="card-title text-xl text-sky-400">Jon Doe</h2>
              <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
              <div class="card-actions justify-end">
                
              </div>
            </div>
          </div>


        </div>
       </section>


<div>
    <x-footer></x-footer>
      
</div>


