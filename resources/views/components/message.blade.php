@if(session()->has('message'))
    <div class=" text-yellow-500 m-4">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('success'))
    <div class=" text-success m-4">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class=" text-danger m-4">
        {{ session()->get('error') }}
    </div>
@endif