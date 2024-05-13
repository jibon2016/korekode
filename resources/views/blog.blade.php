<x-layout>
    <x-navbar />
    <x-page-heading>Blog Heading</x-page-heading>
    <section>
        <div class="flex max-lg:flex-col text-black">
            <div class="max-lg:basis-full lg:basis-[70%] p-10 ">
                <div class="mb-4">
                    <img class="lg:w-full lg:h-[500px]" src="{{ asset('images/blog/blog-1.jpg')}}" alt="">
                </div>
                <div>
                    <p class="mb-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate voluptas, recusandae quos ullam nisi sequi quidem provident minus magnam tempora expedita deleniti vitae deserunt temporibus molestiae unde consequatur vero omnis!
                    </p>

                    <p class="mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium atque tempora magni minus natus impedit ut repellendus! Repudiandae eos cumque expedita, maiores vitae cupiditate aut obcaecati provident soluta hic accusamus.
                    </p>

                    <p class="mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium atque tempora magni minus natus impedit ut repellendus! Repudiandae eos cumque expedita, maiores vitae cupiditate aut obcaecati provident soluta hic accusamus.
                    </p>

                    <p class="mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium atque tempora magni minus natus impedit ut repellendus! Repudiandae eos cumque expedita, maiores vitae cupiditate aut obcaecati provident soluta hic accusamus.
                    </p>
                </div>
                <div class="mt-4">
                    <a href="/blogs" class=" bg-black text-white px-3 py-2 hover:bg-white hover:text-black hover:border hover:border-gray-600"><i class="fa-solid fa-arrow-left"></i> Back Blogs</a>
                </div>
            </div>
            <div class="max-lg:basis-full lg:basis-[30%] px-5 py-10">
                <h4 class="text-xl mb-4 underline">Recent Blogs:</h4>
                <x-recent-blog />
                <x-recent-blog />
            </div>
        </div>
    </section>
    
</x-layout>