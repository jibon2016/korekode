<x-layout>
  <header class="bg-cover bg-center w-full h-screen" style="background-image: url({{asset('images/header_bg.jpg')}})">
    <x-navbar></x-navbar>
    <div class="flex items-center justify-center h-full overflow-hidden" >
        <h1 class="absolute lg:left-20 bottom-28 lg:bottom-20 lg:text-[4rem] text-[2rem] uppercase font-bold">
            <span class="">Think Big, <br></span>
            <span class="">We Will Make IT.<br></span>
            <span class="">Possible!<br></span>
        </h1>
    </div>
  </header>
  <section class="p-5 text-black">
    <x-heading>What We Do</x-heading>
    <div class="flex flex-row content-center items-center flex-wrap">
      <x-service icon="{{ asset('icon/gd.svg') }}">Graphic Design</x-service>
      <x-service icon="{{ asset('icon/ui-ux.svg') }}">UI/UX Design </x-service>
      <x-service icon="{{ asset('icon/video-edit.svg') }}">Video Editing</x-service>
      <x-service icon="{{ asset('icon/web-development.svg') }}">Website Development</x-service>
      <x-service icon="{{ asset('icon/app-development.svg') }}">Apps Development</x-service>
      <x-service icon="{{ asset('icon/digital-marketing.svg') }}">Digital Marketing</x-service>
      <x-service icon="{{ asset('icon/seo.svg') }}">SEO</x-service>
      <x-service icon="{{ asset('icon/dev-ops.svg') }}">DevOps Service</x-service>
      <x-service icon="{{ asset('icon/cyber-security.svg') }}">Cyber Security</x-service>
      <x-service icon="{{ asset('icon/it-professional.svg') }}">IT Consultancy</x-service>
    </div>
  </section>
  <section class="p-5 text-black">
    <div class="flex justify-between gap-3 lg:gap-0 flex-wrap  px-5 lg:px-10 max-lg:flex-col">
      <div class="basis-1/2 flex flex-col justify-center">
        <x-heading>Who We Are?</x-heading>
        <p class="text-justify text-sm lg:text-xl">Welcome To Kore Kode <br>
          We’re a team of designers, developers, security specialists and project managers who are committed to developing successful IT services & solutions to help businesses thrive in the digital landscape. With our expertise in design, development, and security, we empower our clients to unlock their full potential and achieve their strategic objectives.</p>
      </div>
      <div class="basis-1/2 flex justify-center">
        <img class="h-[300px] lg:h-[400px]" src="{{ asset('images/about-us.jpg')}}" alt="">
      </div>
    </div>
  </section>
  <section class="m-10 text-black max-w-[100%]">
    <x-heading>Our Partners</x-heading>
      <div id="brand-image" class="owl-carousel mr-10 w-full">
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-32" src="{{ asset('images/brands/aci.jpg')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-32" src="{{ asset('images/brands/d21.jpg')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-32" src="{{ asset('images/brands/ict-division.png')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-32" src="{{ asset('images/brands/Jago_FM_94.4.png')}}" alt="">
          </div>
          <div class="mx-3 border p-2 border-gray-400">
            <img class="w-28 h-32" src="{{ asset('images/brands/Maasranga_Television.jpg')}}" alt="">
          </div>
      </div>
  </section>

  <section class="m-10 text-black">
    <x-heading>Articles</x-heading>
    <div class="flex items-start flex-wrap">
      @foreach ($blogs as $blog )
        <x-blog :$blog />
      @endforeach
    </div>
  </section>

</x-layout>
