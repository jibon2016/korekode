<x-layout>
  <header class="bg-header-bg bg-cover bg-center w-full h-screen">
    <x-navbar></x-navbar>
    <div class="flex items-center justify-center h-full overflow-hidden" >
        <h1 class="ml15 text-center">
            <span class="word">Think Big,</span>
            <span class="word">We Will Make IT.</span>
            <span class="word bg-blue-800 p-2">Possible!</span>
        </h1>
    </div>
  </header>
  <section class="p-5 text-black">
    <x-heading>Our Services</x-heading>
    <div class="flex flex-row content-center items-center flex-wrap">
      <x-service>Graphic Design</x-service>
      <x-service>UI/UX Design </x-service>
      <x-service>Video Editing</x-service>
      <x-service>Website Development</x-service>
      <x-service>Apps Development</x-service>
      <x-service>Digital Marketing</x-service>
      <x-service>Search Engine Optimization</x-service>
      <x-service>DevOps Service</x-service>
      <x-service>Cyber Security</x-service>
      <x-service>IT Consultancy</x-service>
    </div>
  </section>
  <section class="p-5 text-black">
    <div class="flex justify-between flex-wrap px-10 max-lg:flex-col">
      <div class="basis-1/2 flex flex-col justify-center">
        <x-heading>Who We Are?</x-heading>
        <p class="text-justify">Welcome To Kore Kode <br>
          We’re a team of designers, developers, security specialists and project managers who are committed to developing successful IT services & solutions to help businesses thrive in the digital landscape. With our expertise in design, development, and security, we empower our clients to unlock their full potential and achieve their strategic objectives.</p>
      </div>
      <div class="basis-1/2 flex justify-center">
        <img class="h-[500px]" src="{{ asset('images/about-us.jpg')}}" alt="">
      </div>
    </div>
  </section>
  <section class="m-10 text-black max-w-[100%]">
    <x-heading>Our Partners</x-heading>
      <div id="brand-image" class="owl-carousel mr-10 w-full">
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-28" src="{{ asset('images/brands/aci.jpg')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-28" src="{{ asset('images/brands/d21.jpg')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-28" src="{{ asset('images/brands/ict-division.png')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-28" src="{{ asset('images/brands/Jago_FM_94.4.png')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-28" src="{{ asset('images/brands/Maasranga_Television.jpg')}}" alt="">
          </div>
      </div>
  </section>

  <section class="m-10 text-black">
    <x-heading>Blogs</x-heading>
    <div class="flex items-start">
      @foreach ($blogs as $blog )
        <x-blog :$blog />
      @endforeach
    </div>
  </section>

</x-layout>