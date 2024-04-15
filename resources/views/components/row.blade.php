<div class="relative w-full h-[400px] p-3">
    <h1 class="text-white text-3xl">{{ $title }}</h1>
    <div id="{{ $containerId }}" class="flex flex-row overflow-x-scroll scroll-smooth whitespace-nowrap scrollbar-hide relative">
        <!-- Card divs -->
        @foreach($movies as $movie)
        <div class="relative w-[200px] h-[300px] rounded-lg mx-5 my-5 overflow-hidden flex-shrink-0">
            <img src="https://image.tmdb.org/t/p/original/{{$movie['poster_path']}}" alt="" class="w-full h-full object-cover">
            <div class="absolute flex flex-col top-[75%]  opacity-0 hover:opacity-100 w-full">
                <h1 class="text-white w-[50%] font-bold ">
                    @if (isset($movie['title']))
                    {{ $movie['title'] }}
                   @elseif (isset($movie['name']))
                    {{ $movie['name'] }}
                   @else
                    Unknown Title
                   @endif
                </h1>
                <a href="" class="text-white rounded bg-black/45 border-2 border-gray-400 p-4 w-full text-center">View More</a>
            </div>    
        </div>
        
        @endforeach
       
        
        <!-- Your card divs here -->
    </div>
    <div class="absolute top-[50%] left-0 transform -translate-y-1/2">
        <svg id="scroll-left" class="w-6 h-6  md:w-12 md:h-12 text-white hover:text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </div>
    <div class="absolute top-[50%] right-0 transform -translate-y-1/2">
        <svg id="scroll-right" class="w-6 h-6  md:w-12 md:h-12 hover:text-gray-500 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
        </svg>
    </div>
</div>
