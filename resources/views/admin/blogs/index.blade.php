<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Blogs') }}
		</h2>
	</x-slot>
	<div class="">
		<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-white">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-4">All Blogs</h2>
                <a href="{{route('admin.blog.add')}}" class="p-2 mb-4 flex gap-2 items-center hover:bg-blue-500 cursor-pointer justify-start bg-blue-950 text-white">
                    <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20M12 4V20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                    <span class="" href=""> Add New</span>
                </a>
            </div>
            <table id="example" class="table-auto w-full">
                <thead class="bg-blue-500 text-white">
                    <tr class="">
                        <th class="px-4 py-2">SL</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog )
                    <tr class="text-left">
                        <td class="border text-center px-4 py-2">{{$loop->index + 1}}</td>
                        <td class="border px-4 py-2">{{$blog->title}}</td>
                        <td class="border px-4 py-2">
                            <img class="w-14 h-14" src="{{ asset('storage/'. $blog->image )}}" alt="">
                        </td>
                        <td class="border px-4 py-2">{{ $blog->author}}</td>
                        <td class="border text-center px-4 py-2">
                            <a class="text-sm text-blue-500 hover:underline" href="/admin/edit-blog/{{ $blog->id }}">Edit</a>
                            <a class="text-sm text-red-500 hover:underline" href="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	</div>
</x-app-layout>