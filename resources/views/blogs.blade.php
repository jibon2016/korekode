<x-layout>
    <x-navbar />
    <x-page-heading>Blogs</x-page-heading>

    <section class="m-10 text-black">
        <div class="flex flex-wrap items-start">
            @foreach ($blogs as $blog )
                <x-blog :$blog />
            @endforeach
        </div>
    </section>
</x-layout>