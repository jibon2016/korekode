<x-layout>
    <x-navbar />
    <x-blog-page-heading>{{ $blog->title }}</x-blog-page-heading>
    <section>
        <div class="flex max-lg:flex-col text-black">
            <div class="max-lg:basis-full lg:basis-[70%] p-10 ">
                <div class="mb-4">
                    <img class="lg:w-full lg:h-[500px]" src="{{ asset('storage/'. $blog->image)}}" alt="">
                </div>
                <div>
                    {!! $blog->description !!}
                </div>
                <div class="mt-4">
                    <a href="/blogs" class=" bg-black text-white px-3 py-2 hover:bg-white hover:text-black hover:border hover:border-gray-600"><i class="fa-solid fa-arrow-left"></i> Back to Articles</a>
                </div>
            </div>
            <div class="max-lg:basis-full lg:basis-[30%] px-5 py-10">
                <h4 class="text-xl mb-4 underline">Recent Articles:</h4>
                @foreach ($blogs as $blog )
                    <x-recent-blog :$blog />
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
