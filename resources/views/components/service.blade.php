@props(['icon' =>  asset('icon/web-development.svg') ])
<a href="#" class="basis-[20%] lg:max-w-[20%] max-lg:basis-[50%] max-lg:max-w-[50%]">
  <div class="m-5 border shadow-lg rounded-md hover:bg-blue-400 group p-5">
    <div class="flex flex-col justify-center items-center ">
      <div class="border-2 border-gray-500 rounded-full p-5">
        <img class="w-20 h-20 p-3" src="{{ $icon }}" alt="">
      </div>
      <h3 class="text-gray-800 text-base whitespace-nowrap font-semibold m-4 group-hover:text-white">{{$slot}}</h3>
    </div>
  </div>
</a>
