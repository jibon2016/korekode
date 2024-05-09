<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Korekode</title>

        <!-- Fonts -->

        <!-- Font Awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-white">
        <div>
            <header class="bg-header-bg bg-cover bg-center w-full h-screen">
                <nav class="bg-white/30 flex items-center justify-between px-12 h-16">
                    <a href="" class="basis-auto">
                        <img class="w-64 border-2 p-2" src="{{ asset('images/korekode_logo.png') }}" alt="">
                    </a>

                    <div class="dropdown-menu -top-full absolute left-0 max-lg:bg-white/30 w-full flex flex-col gap-6 py-2 items-center text-lg font-bold transition-all duration-300 lg:static lg:flex-row lg:justify-between">
                        <ul class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8">
                            <li class="hover:text-gray-300"><a href="">Home</a></li>
                            <li  class="hover:text-gray-300"><a href="">Services</a></li>
                            <li  class="hover:text-gray-300"><a href="">About Us</a></li>
                        </ul>
                        <div class="flex flex-col items-center gap-6">
                            <a href="" class="bg-slate-900 px-2 py-1 border-2 border-white hover:bg-white hover:text-black">Get a Question</a>
                        </div>
                    </div>
                    <div class="toggle-btn lg:hidden">
                        <i class="fa-solid fa-bars fa-lg"></i>
                    </div>
                </nav>

            </header>
        </div>

        <!-- Custom Js -->
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
