<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Movies List</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
 <div class="flex  bg-[#000000] w-full h-auto flex-col ">
    {{-- navbar --}}
    @include('components.navbar')
    {{-- rows --}}
    @include('components.lister', ['title' => 'Movies'])
     
 </div>




</body>
</html>
