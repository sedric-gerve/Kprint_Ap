<section class="relative h-60  flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel-logo.png')"></div>

  <div class="z-10 border-4 bg-laravel border-white py-2 px-4 rounded-xl ">
    <h1 class="text-6xl font-bold uppercase text-white">
      K<span class="text-black">PRINT</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
      BIENVENU CHEZ KPRINT IMPRIMERIE & SERVICES GRAPHIQUES
    </p>
    <div>
      @auth
      @else
      <a href="/images/Cours 5 - Print.pdf"
        class="inline-block border-2 border-white 
        text-white py-2 px-4 rounded-xl uppercase mt-2
         hover:text-black hover:border-black" download>Telecharger notre catalogue</a>
      @endauth
    </div>
  </div>
</section>
