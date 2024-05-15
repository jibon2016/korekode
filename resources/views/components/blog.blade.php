@props(['blog'])
<div class="lg:basis-[32.33%] max-lg:basis-[100%] max-lg:max-w-[100%]">
    <div href="" class="px-4 py-3 border-2 border-gray-300 shadow-lg m-3">
            <a href="/blog/{{$blog->id}}">
                <img class="lg:h-64 h-48 w-full" src="{{ asset('storage/'. $blog->image)}}" alt="">
            </a>
            <div class="my-4">
                <a href="/blog/{{$blog->id}}"><h4 class="my-2 text-xl font-semibold hover:text-blue-500 hover:underline">{{ \Illuminate\Support\Str::limit($blog->title, 60, ' ...') }}</h4></a>
                <p class="py-2">{{'- '.$blog->author }}</p>
                <p class="text-justify">{!!  \Illuminate\Support\Str::limit(strip_tags($blog->description), 200, '...') !!}</p>
                <div class="mt-4">
                    <a href="/blog/{{$blog->id}}" class=" bg-black text-white px-3 py-2 hover:bg-white hover:text-black hover:border hover:border-gray-600">Read More</a>
                </div>
        </div>
    </div>
</div>
