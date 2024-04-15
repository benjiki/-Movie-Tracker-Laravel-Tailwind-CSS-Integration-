<div class="flex p-3 flex-col w-full md:h-[100px] md:items-center md:flex-row  md:px-4 md:justify-between">
   {{-- title --}}
    <h1 class="font-ubuntu text-5xl  font-bold text-red-700">Tracker</h1>
   {{-- search bar --}}
    <div class="mt-10 md:mt-0  ">
      <form action="" class="flex flex-row items-start md:items-end gap-2">
        <input class=" py-7 pr-[80px] md:mb-3 pl-[15px] rounded-2xl bg-slate-300 focus:outline-none md:py-3 md:pr-[350px]" type="text"  placeholder="Search for movie tvshow ......">
        <button class="text-white  rounded-full p-4 bg-red-600 ">
          <svg fill="#ffffff"  height="44px" width="44px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 488.4 488.4" xml:space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.9303999999999997"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z"></path> </g> </g> </g></svg>
        </button>
       
    </form> 
   </div>
   {{-- navigation --}}
   <ul class="text-white text-3xl flex flex-col  items-center gap-4 mt-5 md:flex-row md:mt-0 md:text-2xl">
    <li  class="font-bebas w-full text-center   border-b duration-500 hover:text-red-500 hover:border-red-500">Movies</li>
    <li class="font-bebas w-full text-center   border-b duration-500 hover:text-red-500 hover:border-red-500">Series</li>
    <li class="font-bebas w-full text-center   border-b duration-500 hover:text-red-500 hover:border-red-500">Animi</li>
    <li class="font-bebas w-full text-center   border-b duration-500 hover:text-red-500 hover:border-red-500">Manhwa</li>
    <li class="font-bebas w-full text-center bg-red-700   rounded-full duration-500  hover:bg-red-500 md:px-5 md:py-3 md:ml-[100px]">Logout</li>  
</ul>
</div>