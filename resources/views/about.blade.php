<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/tailwindcss" href="" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="main.css" />
    <!-- Iconscout -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- Swiper Slider -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <!-- Tailwind CSS Config File -->
    <script src="config.js"></script>
    <title>Elite Movers</title>
  </head>
  <body class="relative">
    <!-- Navigation Menu -->
    <nav>
      <div class="flex nav-bar justify-between p-3">
        <a href="">
          <img class="elite-logo" src="elite logo.jpg">
        </a>
        <p class="justify-between head inline-block my-auto hidden md:flex listsa">ELITE MOVERS KENYA</p>
        <ul
          class="justify-between gap-6 inline-block my-auto hidden md:flex listsa"
        >
          <li class="my-auto"><a href="{{ route('index.dashboard') }}">Home</a></li>
          <li class="my-auto"><a href="{{ route('relocation.dashboard') }}">Relocation</a></li>
          <li class="my-auto"><a href="{{ route('contact.dashboard') }}">Contact</a></li>
          <li class="my-auto"><a href="{{ route('about.dashboard') }}">About</a></li>
          <li class="my-auto">
            <a
              href="{{ route('quotes.show') }}"
              class="px-3 py-2 bg-primaryRed text-white rounded-md"
              >Get a Quote</a
            >
          </li>
        </ul>
        <button class="my-auto md:hidden flex gap-2 toggleBtn">
          <i class="uil uil-list-ul my-auto text-2xl"></i
          ><span class="my-auto">Menu</span>
        </button>
      </div>
    </nav>
    <!-- Side Bar -->
    <div
      class="sidebar w-3/5 h-full fixed top-0 right-[-570px] px-5 z-30 bg-white md:hidden"
    >
      <ul>
        <li class="my-2 text-right">
          <button
            class="px-4 py-2 bg-primaryRed text-white rounded-md toggleBtn"
          >
            Close <i class="uil uil-arrow-from-right"></i>
          </button>
        </li>
        <li class="mb-2 mt-4"><a href="{{ route('index.dashboard') }}">Home</a></li>
        <li class="my-2"><a href="{{ route('about.dashboard') }}">About</a></li>
        <li class="my-2">
          <a href="{{ route('relocation.dashboard') }}"
            >Relocation <i class="uil uil-angle-down"></i
          ></a>
        </li>
        <li class="my-2"><a href="{{ route('contact.dashboard') }}">Contact</a></li>
        <li class="my-2"><a href="{{ route('quotes.show') }}">Get a quote</a></li>
      </ul>
    </div>
    <!-- About -->
    <section class="p-10 md:px-16 md:py-10">
      <div>
        <h1 class="text-3xl font-bold my-10">About Us</h1>
        <div>
          <p class="mb-6">
            Welcome to Your New Horizon! 🌍
          </p>
          <p class="mb-6">
            At Elite Movers, we believe in embracing change as an adventure waiting to unfold. Whether you're relocating across cities, states, or continents, your journey begins here. Our platform is more than just a relocation service; it's a compass guiding you toward your next chapter.
          </p>
          <p class="mb-6">
            Imagine a seamless transition, where packing boxes signify new beginnings, and unfamiliar streets lead to exciting discoveries. From finding the perfect neighborhood to settling into a new community, we're here to turn your relocation into a personalized, stress-free experience.
          </p>
          <p>
            So, take a deep breath and let the anticipation of a fresh start fill you. Let's embark on this journey together, where every step brings you closer to a place you'll proudly call 'home.' Welcome aboard, fellow adventurer!
          </p>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="px-10 py-10 nav-bar footer md:px-16">
      <div>
        <div class="flex gap-5 justify-between flex-col md:flex-row">
          <!-- First DIV -->
          <div class="w-full md:w-4/12">
            <h3 class="font-bold">ELITE MOVERS</h3>
            <p>Elite Movers - Where Every Move is a Symphony of Excellence.</p>
            <p>Our commitment: Relocating you, not just your belongings.</p>
            <p>Welcome to a journey where 'elite' isn't just a word; it's our promise.</p>
          </div>
          <!-- Second Div -->
          <div class="w-full md:w-1/5">
            <ul>
              <li><span class="font-bold">QUICK LINKS</span></li>
              <li><a href="">Moving Service</a></li>
              <li><a href="">About Us</a></li>
            </ul>
          </div>
          <!-- Third DIV -->
          <div class="w-full md:w-1/5">
            <ul>
              <li><span class="font-bold">COMPANY</span></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Terms and Conditions</a></li>
              <li><a href="">Refund Policy</a></li>
            </ul>
          </div>
          <!-- Fourth DIV -->
          <div class="w-full md:w-1/5">
            <ul>
              <li><span class="font-bold">CONTACT US</span></li>
              <li><span>67, Karuna Rd, Westlands, Nairobi</span></li>
              <li><a href="Telephone No:+254 710 000000">0710000000</a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
            </ul>
          </div>
        </div>
        <div class="mt-5">
          <span>COPYRIGHT 2023 ELITE MOVERS. ALL RIGHTS RESERVED.</span>
        </div>
      </div>
    </footer>
    <script src="main.js"></script>
  </body>
</html>
