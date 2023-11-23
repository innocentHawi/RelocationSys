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
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    /> -->
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
    <!-- Hero Section -->
    <section
      class="h-[80vh] grid place-items-center relative px-3 md:h-[70vh]"
      id="hero"
    >
      <div
        class="overlay absolute w-full h-full bg-black opacity-30 z-10"
      ></div>
      <div class="imageDiv image-4"></div>
      <div class="imageDiv image-5 fadeInClass"></div>
      <div class="w-full mx-auto z-10 text-white md:w-7/12">
        <h1 class="text-2xl my-heading font-bold my-4">
          ELITE MOVERS KENYA.
        </h1>
        <p>
          Welcome to Your New Horizon! 🌍

          At Elite Movers, we believe in embracing change as an adventure waiting to unfold. Whether you're relocating across cities, states, or continents, your journey begins here. Our platform is more than just a relocation service; it's a compass guiding you toward your next chapter.

          Imagine a seamless transition, where packing boxes signify new beginnings, and unfamiliar streets lead to exciting discoveries. From finding the perfect neighborhood to settling into a new community, we're here to turn your relocation into a personalized, stress-free experience.

          So, take a deep breath and let the anticipation of a fresh start fill you. Let's embark on this journey together, where every step brings you closer to a place you'll proudly call 'home.' Welcome aboard, fellow adventurer!
        </p>
      </div>
    </section>
    <!-- Service Section -->
    <section class="py-16 px-10">
      <div class="text-center">
        <h1 class="text-3xl font-bold">What we Offer</h1>
        <p class="text-xl">Our Services</p>
        <p class="mt-5 mx-auto">
          <p>At Elite Movers, we redefine relocation by transforming the moving process into an unforgettable experience. Our comprehensive suite of services isn't just about transporting belongings; it's about guiding you toward a smooth transition, ensuring every step feels like a confident stride toward your new beginning.</p>

          <P>Discover the Ease of Relocation with Us:</p>
          <p>Personalized Guidance: Tailored solutions to match your unique needs and preferences.</p>
          <p>Efficient Packing & Handling: Careful attention to every item, ensuring a safe journey to your new destination.</p>
          <p>Neighborhood Expertise: Uncover the ideal community that feels like home even before you arrive.</p>
          <p>Seamless Transitions: From logistics to settling in, we're here to make your move effortless.</p>
          <p>Dedicated Support: Our team provides unwavering support, making your satisfaction our top priority.</p>

          <p>Say farewell to moving stress and hello to a new adventure! Trust Elite Movers to turn your relocation into an exciting, well-coordinated journey. Welcome to a future where moving feels like an accomplishment, not a hassle!</p>
        </p>
      </div>
    </section>
    <!-- FAQ -->
    <section class="py-16 px-8 md:py-10 md:px-4">
          <div>
            <h2 class="text-center text-2xl mb-8">Frequently Asked Questions</h2>
            <div
              class="w-full md:w-5/12 mx-auto border border-1 border-borderGrey cursor-pointer"
            >
              <div
                class="faqs p-2 border-b border-borderGrey"
                onclick="toggleFAQ(event)"
              >
                <span>
                  How much do your services cost?
                  <i
                    class="we uil uil-angle-down text-2xl faqIcon"
                    id="faqIcon"
                  ></i>
                </span>
                <p class="hidden py-2 faqAnswer" id="faqAnswer">
                  Our services are tailored to meet your unique needs, and the cost can vary based on several factors such as the distance of the relocation, the volume of belongings, specific services required, and any additional personalized assistance.
                </p>
              </div>
              <!-- second FAQ -->
              <div
                class="faqs p-2 border-b border-borderGrey"
                onclick="toggleFAQ(event)"
              >
              <div
                class="faqs p-2 border-b border-borderGrey"
                onclick="toggleFAQ(event)"
              >
                <span>
                  Do you work on weekends and holidays?
                  <i
                    class="we uil uil-angle-down text-2xl faqIcon"
                    id="faqIcon"
                  ></i>
                </span>
                <p class="hidden py-2 faqAnswer" id="faqAnswer">
                  Absolutely! We understand that relocation often happens at your convenience. Our dedicated team is available to assist you seven days a week, including holidays. Flexibility is key in ensuring your move is seamless and stress-free. We're here whenever you need us, even on weekends and holidays, to make your transition smooth and effortless.
                </p>
              </div>
              <div
                class="faqs p-2 border-b border-borderGrey"
                onclick="toggleFAQ(event)"
              >
                <span
                  >Do you provide packing materials?
                  <i
                    class="we uil uil-angle-down text-2xl faqIcon"
                    id="faqIcon"
                  ></i>
                </span>
                <p class="hidden py-2 faqAnswer" id="faqAnswer">
                  Our comprehensive services include top-quality packing materials tailored to safeguard your belongings during the journey. From sturdy boxes to protective wraps, we've got everything you need to ensure your items arrive at your new destination safe and sound. Leave the packing to us. We've got you covered!
                </p>
              </div>
            </div>
          </div>
    </section>
    <!-- Testimonials -->
    <section class="px-10 py-10 md:px-16 text-white bg-primaryBlack">
      <p class="text-4xl font-bold">Random Response from our Esteemed Clients</p>
      <div class="swiper mySwiper mt-10">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide text-center bg-white text-primaryBlack rounded-md p-2"
            style="width: 200px"
          >
            <p>
              Moving has always been a chaotic ordeal for me, but ET company changed the game entirely! Their team orchestrated a seamless relocation that felt more like a well-choreographed dance than a move. From packing fragile items with utmost care to navigating through unforeseen challenges, they handled it all effortlessly. Thanks to them, what I anticipated as a stressful experience turned into a smooth, stress-free transition. I'm truly grateful for their professionalism and dedication.
            </p>
            <h3 class="font-bold">~Tom</h3>
          </div>
          <div
            class="swiper-slide w-3/5 md:w-1/5 text-center bg-white text-primaryBlack rounded-md p-2"
          >
            <p>
              I can't sing enough praises for Elite Movers! Their commitment to excellence was evident from the get-go. Not only did they provide exceptional packing materials, but their attention to detail while handling my belongings was remarkable. The movers were not just efficient; they were friendly and accommodating throughout the entire process. Their expertise in navigating logistics and ensuring a timely move was beyond impressive.
            </p>
            <h3 class="font-bold">~Adrian</h3>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- your preference -->
    <section class="px-10 py-10 md:px-16">
      <div>
        <h2 class="text-xl my-3 font-bold">
          Your Preferred Relocation Company
        </h2>
        <p>
          <span>Ready to Turn Relocation into an Adventure?</span>
          At Elite Movers, we're not just about moving boxes; we're about moving lives forward. Say goodbye to the stress and hassle of relocation and say hello to a seamless, personalized experience tailored just for you.

          Why settle for a standard move when you can embark on a journey? Our team doesn't just relocate you; we map out a new chapter in your life, guiding you to the doorstep of endless possibilities.
          
          Discover neighborhoods that feel like home before you even arrive. Uncover hidden gems, local hotspots, and the pulse of your new community through our comprehensive relocation expertise.
          
          Whether you're relocating solo, with family, or a furry friend in tow, we're here to transform your move into a smooth, exciting transition. Trust us to turn the unknown into an unforgettable adventure.
          
          Join us and let's craft your relocation story together. Welcome to a relocation experience that transcends boundaries and redefines moving.
        </p>
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
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
