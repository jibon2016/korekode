<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Korekode</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">                           
        <!-- Font Awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

        <!-- Anime JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-white">
        <div>
            {{ $slot }}
        </div>
                
        {{-- Footer Section Start--}}
        <section class="px-16 py-5 bg-footer-bg">
            <div class="flex flex-wrap max-lg:flex-col max-lg:items-center justify-between">
                <div class="basis-[33.33%] px-5">
                    <div class="flex flex-col max-lg:items-center gap-2">
                    <h5 class="text-2xl font-semibold py-2">Get In Touch</h5>
                    <span><i class="fa-solid fa-phone mr-2"></i> +880 2-48813053</span>
                    <span><i class="fa-solid fa-envelope mr-2"></i> info@korekode.net</span>
                    <span><i class="fa-solid fa-business-time mr-2"></i> Sunday - Thursday (9:00am - 5:00pm)</span>
                    <span><i class="fa-solid fa-location-dot mr-2"></i> House 24, Road 1, Block B, Unit A-1, Niketon, Gulshan 1, Dhaka, Bangladesh</span>

                    <div class="mt-5">
                        <span class="p-1 border border-gray-400 mr-2"><i class="fa-brands fa-square-facebook fa-lg"></i></span>
                        <span class="p-1 border border-gray-400 mr-2"><i class="fa-brands fa-linkedin fa-lg"></i></span>
                        <span class="p-1 border border-gray-400 mr-2"><i class="fa-brands fa-youtube fa-lg"></i></span>
                    </div>
                    </div>
                </div>
                <div class="basis-[33.33%] px-5">
                    <div class="flex flex-col items-start gap-2">
                    <h5 class="text-2xl font-semibold py-2">Quick Links</h5>
                    <a href="https://korefacilitation.com/"><i class="fa-solid fa-link mr-2"></i> Kore Facilitation </a>
                    <a href="https://koresearch.net/"><i class="fa-solid fa-link mr-2"></i> Kore Search </a>
                    <a href="http://digiworldltd.com/"><i class="fa-solid fa-link mr-2"></i> DG World </a>
                    </div>
                </div>
                <div class="basis-[33.33%] px-5">
                    <h5 class="text-2xl font-semibold py-2">Request A Call Back</h5>
                    <p class="text-xs">Leave your contact details and we will contact you shortly.</p>
                    <form action="" method="post">
                    <div>
                        <div class="py-2">
                        <label for="">Email</label>
                        </div>
                        <input type="text" class="py-2 px-3 rounded w-[300px] bg-blue-950" placeholder="Email">
                    </div>
                    <div>
                        <div class="py-2">
                        <label for="">Title</label>
                        </div>
                        <input type="email" class="py-2 px-3 rounded w-[300px] bg-blue-950" placeholder="Title">
                    </div>
                    <div>
                        <div class="py-2">
                        <label for="">Description</label>
                        </div>
                        <textarea class="py-2 px-3 rounded w-[300px] bg-blue-950" cols="10"></textarea>
                    </div>
                    <button class="mt-4 bg-blue-950 rounded font-semibold text-white p-2">Let's Talk</button>
                    </form>
                </div>
            </div>
        </section>
        {{-- Footer Section End--}}
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" ></script>
        <!-- Custom Js -->
        <script src="{{ asset('js/custom.js') }}"></script>

        <script>
            //Anime JS
            anime.timeline({loop: true})
            .add({
                targets: '.ml15 .word',
                scale: [14,1],
                opacity: [0,1],
                easing: "easeOutCirc",
                duration: 1000,
                delay: (el, i) => 1000 * i
            }).add({
                targets: '.ml15',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 2000
            });
        </script>
        
    </body>
</html>
