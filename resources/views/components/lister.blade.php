<h1 class="text-white">{{$title}}</h1>
<div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-4 text-center  ">
    {{-- cards view --}}
    @foreach($movies as $movie)
     <div class="w-full h-[300px] md:w-[400px] md:h-[500px] rounded-lg relative overflow-hidden">
        <img src="https://image.tmdb.org/t/p/original/{{$movie['poster_path']}}" alt="" class="w-full h-full object-cover">
     <div class="absolute top-[90%] w-full bg-black/50 h-[50px] duration-300 opacity-0 hover:opacity-100  flex items-center justify-center">
        <h1 class="text-white font-bold text-2xl w-full">{{$movie['original_title']}}</h1> 
        <a class="text-white font-bold  " href="#">View More</a>
    </div>   
    </div>
    
    @endforeach
    
    
    
   
    <div class="w-full h-[300px] md:w-[400px] md:h-[500px] rounded-lg relative overflow-hidden">
        <img src="https://image.tmdb.org/t/p/original/1XDDXPXGiI8id7MrUxK36ke7gkX.jpg" alt="" class="w-full h-full object-cover">
     <div class="absolute top-[90%] w-full bg-black/50 h-[50px] duration-300 opacity-0 hover:opacity-100  flex items-center justify-center">
    <a class="text-white font-bold  " href="#">View More</a>
    </div>   
    </div>
    
</div>