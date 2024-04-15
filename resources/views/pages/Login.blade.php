<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Login</title>
  <link rel="icon" type="image/svg+xml" href="{{asset('assets/icons/Tracker.svg')}}"/>
</head>
<body>
 <div class="flex items-center justify-center h-screen bg-[#000000] w-full flex-col  overflow-hidden ">
    <img  class="absolute w-full h-screen object-cover overflow-hidden"  src="https://mebincdn.themebin.com/1664271579476.jpg"
    alt="">
    <div class="w-[400px] h-[700px] pt-20 md:pt-20  md:w-[500px] md:h-[800px] bg-black/80 z-10 mt-6">
      <h1 class="text-white text-5xl pb-20 pl-5  md:pl-10 font-bold md:pb-20 ">Login</h1>    
      <form action="" class="flex flex-col p-2 space-y-8 md:px-10">
            <input class="rounded-lg py-5 text-white bg-gray-400 placeholder:text-lg  focus:underline-none text-2xl" type="text" name="" id="" placeholder="email">
            <input class="rounded-lg py-5 text-white bg-gray-400 placeholder:text-lg  focus:underline-none text-2xl" type="text" name="" id="" placeholder="email">
            <div class="mt-20"></div>
            <button class="bg-red-600  rounded-full p-4 text-2xl font-bold  text-white hover:bg-red-800">Login</button>
          </form>
    </div>
</div>
</body>
</html>

