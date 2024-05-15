<nav class="bg-navbar-bg flex items-center justify-between px-12 h-16 lg:gap-8 lg:fixed lg:top-0 lg:w-full z-[99]">
    <a href="/" class="">
        <img class="w-64 p-2" src="{{ asset('images/korekode_logo.png') }}" alt="">
    </a>

    <div class="dropdown-menu -top-full absolute left-0 text-blue-950 max-lg:bg-blue-900/50 w-full flex flex-col gap-6 py-2 items-center text-lg font-bold lg:static lg:flex-row lg:justify-end">
        <ul class="flex flex-col items-center gap-2 lg:flex-row lg:gap-8 max-lg:w-full">
            <li class="hover:text-gray-300 "><a href="/">Home</a></li>
            <li  class="group hover:text-gray-300 flex max-lg:flex-col max-lg:text-center lg:justify-between items-center py-5 cursor-pointer max-lg:w-full">
                <a href="">Services</a>
                <i class="fa-solid fa-chevron-down lg:ml-3 fa-xs mt-1"></i>
                <ul class="lg:absolute lg:top-[64px] max-lg:w-full max-lg:mt-5 bg-blue-900/50 -ml-3 group-hover:block hidden">
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Graphic Design </a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">UI/UX Design </a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Video Editing</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Website Development</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Apps Development</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Digital Marketing</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Search Engine Optimization</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">DevOps Service</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">Cyber Security</a></li>
                    <li class="text-white hover:text-gray-200 px-5 py-2 hover:bg-black border-b border-white/30"><a href="/services">IT Consultancy</a></li>
                </ul>
            </li>
            <li  class="hover:text-gray-300 "><a href="/blogs">Articles</a></li>
            <li  class="hover:text-gray-300 "><a href="/about-us">About Us</a></li>
        </ul>
        <div class="flex flex-col items-center gap-6 ">
            <a href="#contact-us" class="text-blue-700 px-2 py-1 rounded animate-pulse bg-white">Contact</a>
        </div>
    </div>
    <div class="toggle-btn lg:hidden">
        <i class="fa-solid fa-bars fa-lg"></i>
    </div>
</nav>
