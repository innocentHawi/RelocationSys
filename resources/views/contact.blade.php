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
  <body class="bg-[#f5f5f5] relative">
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
    <section class="p-10 md:px-16 md:py-10">
      <h2 class="text-3xl font-bold text-center">Contact Us</h2>
      <p class="text-center">
        Any Questions or Remarks?
      </p>
      <div
        class="md:w-4/5 mt-16 mx-auto p-0 flex gap-10 bg-white rounded-md flex-col md:flex-row"
      >
        <div
          class="md:m-2 px-10 py-6 text-white w-full bg-clifford rounded-md md:w-1/2"
        >
          <h2 class="text-2xl font-bold">Contact Info</h2>
          <p class="mb-5">
            Fill up the form and we will reach out as soon as possible.
          </p>
          <!-- Phone -->
          <div class="flex gap-5">
            <i class="uil uil-phone"></i>
            <span>0710000000</span>
          </div>
          <!-- Email -->
          <div class="flex gap-5 mt-6">
            <i class="uil uil-envelope-edit"></i>
            <a href="mailto:abrelocationservices@gmail.com"
              >elite.movers@gmail.com</a
            >
          </div>
          <!-- Email -->
          <div class="flex gap-5 mt-6">
            <i class="uil uil-location-point"></i>
            <span>67 Karuna Rd, Westlands, Nairobi</span>
          </div>
          <!-- Social Media -->
          <div class="mt-6">
            <h2>Follow us on social media</h2>
            <div class="flex gap-3 mt-3">
              <i class="uil uil-facebook"></i>
              <i class="uil uil-instagram"></i>
              <i class="uil uil-twitter"></i>
              <i class="uil uil-tiktok"></i>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form method="POST" class="w-full md:w-1/2 mx-auto p-5 md:pr-6">
          <!-- First Name and Last Name -->
          <div class="flex gap-10 my-5">
            <div class="w-1/2">
              <label class="font-bold"
                >First Name <font color="red">*</font></label
              >
              <input
                type="text"
                name=""
                id=""
                required
                class="w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed"
              />
            </div>
            <div class="w-1/2">
              <label class="font-bold"
                >Last Name <font color="red">*</font></label
              >
              <input
                type="text"
                name=""
                id=""
                required
                class="w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed"
              />
            </div>
          </div>
          <!-- Email and Phone -->
          <div class="flex gap-10 mt-5">
            <div class="w-1/2">
              <label class="font-bold">Email <font color="red">*</font></label>
              <input
                type="email"
                name=""
                id=""
                required
                class="w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed"
              />
            </div>
            <div class="w-1/2">
              <label class="font-bold">Phone <font color="red">*</font></label>
              <input
                type="tel"
                name=""
                id=""
                required
                class="w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed"
              />
            </div>
          </div>
          <!-- Message -->
          <div class="mt-5">
            <label class="font-bold">Message <font color="red">*</font></label>
            <textarea
              name=""
              id=""
              class="w-full border-b-2 h-7 outline-none mt-2 focus:border-primaryRed"
            ></textarea>
          </div>
          <!-- Button -->
          <div class="text-right">
            <button
              class="bg-primaryRed text-white py-2 px-4 mt-5 rounded-md border hover:bg-white hover:text-primaryRed hover:border-grey"
            >
              Send Message <i class="uil uil-message"></i>
            </button>
          </div>
        </form>
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
    <script src="{% static 'main.js' %}"></script>
  </body>
</html>
