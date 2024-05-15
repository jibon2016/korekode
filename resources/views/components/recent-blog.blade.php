@props(['blog'])
<div class="flex gap-3 lg:flex-col lg:justify-start max-lg:items-center mb-4 ">
  <a>
      <img class="lg:w-64 lg:h-48 w-16 h-16" src="{{ asset('storage/'. $blog->image)}}" alt="">
  </a>
  <div class="lg:w-64 ">
      <a href="" class="text-base lg:text-xl  hover:text-blue-500">{{ \Illuminate\Support\Str::limit($blog->title, 40, ' ...') }}</a>
  </div>
</div> 