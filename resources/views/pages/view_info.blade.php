<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>View Info</title>
  <link rel="icon" type="image/svg+xml" href="{{asset('assets/icons/Tracker.svg')}}"/>
</head>
<body>
 <div class="h-auto md:h-screen bg-[#000000] w-full flex-col  overflow-hidden ">
   @include('components.navbar')
   {{-- large container --}}
    <div class="px-4  w-full h-[700px]">
    {{-- main container --}}
    <div class="w-full h-[700px] bg-gray-700 rounded-lg overflow-hidden md:flex md:flex-row">
        {{-- image --}}
        <img src="https://image.tmdb.org/t/p/original/1XDDXPXGiI8id7MrUxK36ke7gkX.jpg" alt="" class="h-auto md:w-[50%] md:h-full object-cover">
        {{-- information --}}
        <div class="w-full h-full space-y-10 md:space-y-0  md:pl-10 md:pt-10">
            <h1 class="font-bold text-white md:text-5xl">Details</h1>
            <p class="text-sm text-white md:pr-20 md:pt-5 md:text-lg">some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                  some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                  some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                  some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                  some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                  some thing radome text are after the files to be short if they dont want to be short what can u do my friend all we
                </p>
            <form class="flex flex-row gap-3 w-full justify-center py-10" action="">
             <button class="bg-red-400 px-7 py-6 rounded-full text-white text-lg font-bold hover:bg-red-700">-</button>
             <input  class="text-white bg-slate-300 font-bold w-40 text-center rounded-3xl "  type="text" placeholder="1">
             <button class="bg-green-400 px-7 py-6 rounded-full text-white text-lg font-bold hover:bg-green-700">+</button>
            </form>    
        </div>
    </div>
    </div> 
</div>
</body>
</html>

