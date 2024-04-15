<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
{{-- {{dd($movies['discover']);}}     --}}
{{-- {{dd($mangaData)}} --}}

 <div class="flex h-auto bg-[#000000] w-full flex-col relative">
    {{-- navbar --}}
    @include('components.navbar')
    {{-- slider --}}
    @include('components.slider', ['movies' => $sliderMovies])
    {{-- rows --}}
    @include('components.row', ['title' => 'Movies', 'containerId' => 'movie-container', 'movies' => $sliderMovies])
    @include('components.row', ['title' => 'Series', 'containerId' => 'series-container','movies' => $seriesMovies])
    @include('components.anime_row', ['title' => 'latest Episode Animes', 'containerId' => 'anima-container','movies' => $animeData])
    @include('components.row', ['title' => 'Manwha', 'containerId' => 'manwha-container','movies' => $sliderMovies])
    <div class="absolute top-0 left-0  bg-black/75 z-10"></div>  
 </div>
 <script>
  $(document).ready(function(){
      const scrollStep = 500; // Adjust as needed for scrolling distance
      
      // Scroll left
      $(document).on('click', '#scroll-left', function(e) {
          e.preventDefault();
          const containerId = $(this).closest('.relative').find('.flex-row').attr('id');
          $('#' + containerId).animate({
              scrollLeft: '-=' + scrollStep
          }, 500);
      });
      
      // Scroll right
      $(document).on('click', '#scroll-right', function(e) {
          e.preventDefault();
          const containerId = $(this).closest('.relative').find('.flex-row').attr('id');
          $('#' + containerId).animate({
              scrollLeft: '+=' + scrollStep
          }, 500);
      });
  });
</script>




</body>
</html>
