<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Light Service</title>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <link rel="icon" href="img/logoweb.png">
    @vite('resources/css/app.css')
    
</head>
<body>
    {{-- navbar --}}
    <section>
      <div class="navbar bg-gray-600 text-white fixed w-full z-20 top-0 left-0">
          <div class="navbar-start">
            <div class="dropdown">
              <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
              </label>
              <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Home</a></li>
                <li tabindex="0">
                  <a class="justify-between">
                    Layanan
                  </a>
                </li>
                <li class="dropdown dropdown-bottom dropdown-end m-1"><a>Tentang Kami</a>
                  <ul tabindex="0" class="dropdown-content bg-gray-600 menu p-2 shadow rounded-box w-52">
                    <li><a>Sejarah</a></li>
                    <li><a>Team</a></li>
                    <li><a>FAQ</a></li>
                </li>
              </ul>
            </div>
            <a href="" class="btn btn-ghost normal-case hover:bg-slate-500 text-xl text-white"><span class="text-[#FCE22A]">Light</span> Service</a>
          </div>
          <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
              <li><a>Home</a></li>
              <li tabindex="0">
                <a>
                  Layanan
                </a>
              </li>
              <li class="dropdown dropdown-hover m-1"><a>Tentang Kami</a>
                <ul tabindex="0" class="dropdown-content bg-gray-600 menu p-2 shadow rounded-box w-52">
                  <li><a>Sejarah</a></li>
                  <li><a>Team</a></li>
                  <li><a>FAQ</a></li>
              </li>
            </ul>
          </div>
        </div>
      </section>
      {{-- navbar --}}

      {{-- Main content home --}}
      <div class="relative flex max-h-screen-lg bg-contain bg-no-repeat overflow-hidden lg:w-full bg-blue-300 justify-center items-center">
          <img src="img/coba.jpg" class="h-screen w-full object-cover brightness-50 blur-sm backdrop-blur-none" alt="">
        
          <div class="absolute flex flex-col pl-8 lg:pl-24 pt-8 w-screen">
            <h2 id="text" class="lightservice absolute text-4xl md:text-5xl lg:text-5xl font-bold text-white uppercase" style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);">Opsi Anak Muda</h2>
            <p id="" class="pt-12 md:pt-14 lg:pt-16 w-4/5 md:w-2/5 lg:w-2/5 text-md md:text-xl lg:text-xl">Light Service dijalankan oleh anak muda yang selalu berusaha evaluasi dan berinovasi dari data statistik yang menerapkan prinsip Trial and Error.</p>
          </div>

      </div>

      {{-- second content home --}}
      <div class="h-96">

        <div class="flex justify-center items-center text-4xl mt-8">
          Our Service
        </div>
        
      </div>



      <script>
        let text = new SplitType('#text');
        let characters = document.querySelectorAll('.char');

        for(i=0; i<characters.length; i++){
          characters[i].classList.add('translate-y-full');
        }

        gsap.to('.char', {
          y:0,
          stagger: 0.05,
          delay: 0.02,
          duration:0.5
        })


      </script>


</body>
</html>