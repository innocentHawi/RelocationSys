<!-- {% load static %} -->
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
    <!-- Quote Section -->
    <section class="py-10 grid place-items-center">
      <div class="px-10 w-full md:w-5/12">
        <h2 class="font-bold text-xl">Moving Quote</h2>
        <h3 class="font-bold mb-4 mt-2">
          Fields marked with <font color="red">*</font> are required
        </h3>
        <div
          class="progress-container border border-terGrey h-4 rounded-3xl overflow-hidden"
        >
          <div class="progress w-0 bg-primaryRed h-full"></div>
        </div>
        <!-- Form -->
        <form action="{{ route('relocate-move') }}" method="POST"
              enctype="multipart/form-data">
          @csrf
          <!-- {% csrf_token %} -->
          <div id="form1" class="Form1">
            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="addressfrom" class="block">
                  Moving from Adress <font color="red">*</font></label
                >
                <input
                  autocomplete="address-line1"
                  id="addressfrom"
                  name="addressfrom"
                  placeholder="Enter a place"
                  type="text"
                  class="adj w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed mt-3"
                  required
                />
              </div>
              <div class="sub-div w-1/2">
                <label for="addressto">
                  Moving to Adress <font color="red">*</font></label
                >
                <input
                  autocomplete="address-line1"
                  name="addressto"
                  id="addressto"
                  placeholder="Enter a place"
                  type="text"
                  class="adj w-full border-b-2 border-secrGrey outline-none focus:border-primaryRed mt-3"
                  required
                />
              </div>
            </div>

            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="appartment_from" class="block">
                  Moving from Apartment <font color="red">*</font>
                </label>
                <select
                  name="appartment_from"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="Mini Flat">Mini Flat</option>
                  <option value="Flat">Flat</option>
                  <option value="Terrace">Terrace</option>
                  <option value="Office Space">Office Space</option>
                  <option value="Others">Others</option>
                </select>
              </div>

              <div class="sub-div w-1/2">
                <label for="appartment_to" class="block">
                  Moving to Apartment <font color="red">*</font></label
                >
                <select
                  name="appartment_to"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="Mini Flat">Mini Flat</option>
                  <option value="Flat">Flat</option>
                  <option value="Terrace">Terrace</option>
                  <option value="Office Space">Office Space</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>

            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="bedroom_from">Moving from Bedroom(s) </label>
                <select
                  name="bedroom_from"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5 and above">5 and above</option>
                </select>
              </div>
              <div class="sub-div w-1/2">
                <label for="bedroom_to">Moving to Bedroom(s) </label>
                <select
                  name="bedroom_to"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5 and above">5 and above</option>
                </select>
              </div>
            </div>

            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="floor_from"> Moving from Floor </label>
                <select
                  name="floor_from"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="Ground Floor">Ground Floor</option>
                  <option value="1st Floor">1st Floor</option>
                  <option value="2nd Floor">2nd Floor</option>
                  <option value="3rd Floor">3rd Floor</option>
                  <option value="4th Floor">4th Floor</option>
                  <option value="5th Floor and above">
                    5th Floor and above
                  </option>
                </select>
              </div>
              <div class="sub-div w-1/2">
                <label for="floor_to"> Moving to Floor </label>
                <select
                  name="floor_to"
                  class="adj w-full border outline-none mt-3"
                >
                  <option value="Ground Floor">Ground Floor</option>
                  <option value="1st Floor">1st Floor</option>
                  <option value="2nd Floor">2nd Floor</option>
                  <option value="3rd Floor">3rd Floor</option>
                  <option value="4th Floor">4th Floor</option>
                  <option value="5th Floor and above">
                    5th Floor and above
                  </option>
                </select>
              </div>
            </div>

            <div class="button mt-4">
              <button
                class="next1 btn rounded-md text-white bg-secRed py-2 px-4"
                type="button"
              >
                Next <i class="uil uil-step-forward"></i>
              </button>
            </div>
          </div>

          <div id="form2" class="Form2">
            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="Mfirst_name">
                  First Name <font color="red">*</font>
                </label>
                <input
                  class="adj w-full border-b-2 border-secrGrey py-1 outline-none focus:border-primaryRed"
                  id="first-name"
                  type="text"
                  name="Mfirst_name"
                />
              </div>
              <div class="sub-div w-1/2">
                <label for="Mlast_name">
                  Last Name <font color="red">*</font>
                </label>
                <input
                  class="adj w-full border-b-2 border-secrGrey py-1 outline-none focus:border-primaryRed"
                  id="last-name"
                  type="text"
                  name="Mlast_name"
                />
              </div>
            </div>

            <div class="form__div w-full flex gap-10 mt-4 mb-6">
              <div class="sub-div w-1/2">
                <label for="Memail"> Email <font color="red">*</font> </label>
                <input
                  class="adj w-full border-b-2 border-secrGrey py-1 outline-none focus:border-primaryRed"
                  id="first-name"
                  type="email"
                  name="Memail"
                />
              </div>
              <div class="sub-div w-1/2">
                <label for="Mphone"> Phone <font color="red">*</font> </label>
                <input
                  class="adj w-full border-b-2 border-secrGrey py-1 outline-none focus:border-primaryRed"
                  id="phone"
                  type="phone"
                  name="Mphone"
                />
              </div>
            </div>
            <div class="button flex justify-between">
              <button
                class="prev2 btn rounded-md text-white bg-secRed py-2 px-4"
                type="button"
              >
                <i class="uil uil-previous"></i> Previous
              </button>
              <button
                class="next2 btn rounded-md text-white bg-secRed py-2 px-4"
                type="button"
              >
                Next <i class="uil uil-step-forward"></i>
              </button>
            </div>
          </div>

          <div class="Form3">
            <div class="form__div mt-4 mb-6">
              <div class="sub-div this mt-5">
                <h4>
                  What services may we assist you with?
                  <font color="red">*</font>
                </h4>
                <div class="flex gap-5 flex-wrap">
                  <p class="flex gap-3 mt-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox1"
                      value="Local Move"
                      type="checkbox"
                    />
                    <span class="my-auto">Local Move</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox2"
                      value="Long distance move"
                      type="checkbox"
                    />
                    <span class="my-auto">Long distance move</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox3"
                      value="Office move"
                      type="checkbox"
                    />
                    <span class="my-auto">Office move</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox4"
                      value="Packing and Loading"
                      type="checkbox"
                    />
                    <span class="my-auto">Packing and Loading</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox5"
                      value="Unpacking and Rearranging"
                      type="checkbox"
                    />
                    <span class="my-auto">Unpacking and Rearranging</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox6"
                      value="Uninstallation And Installation of Electrical Appliances"
                      type="checkbox"
                    />
                    <span class="my-auto"
                      >Uninstallation And Installation of Electrical
                      Appliances</span
                    >
                  </p>
                  <p class="flex gap-3 mb-1 inline- my-auto">
                    <input name="myCheckbox7" value="Storage" type="checkbox" />
                    <span class="my-auto">Storage</span>
                  </p>
                  <p class="flex gap-3 mb-1 inline-block my-auto">
                    <input
                      name="myCheckbox8"
                      value="Truck rental"
                      type="checkbox"
                    />
                    <span class="my-auto">Truck rental</span>
                  </p>
                </div>
              </div>

              <div class="sub-div mt-5">
                <h4 class="font-bold">
                  Booking Date <font color="red">*</font>
                </h4>

                <div class="my-3">
                  <div class="flex gap-10 justify-between">
                    <input
                      name="Mdate"
                      type="date"
                      class="w-1/2 border p-2 rounded-md outline-none"
                      value="{{ old('Mdate', \Carbon\Carbon::now()->toDateString()) }}"
                    />
                    <input
                      name="Mtime"
                      type="time"
                      class="w-1/2 border p-2 rounded-md outline-none"
                    />
                  </div>
                </div>

                <div class="mt-5">
                  <h4 class="font-bold">Enter Additional Moving Information</h4>
                  <textarea
                    name="Mtextarea"
                    class="w-full h-7 mt-2 border-b-2 border-secrGrey py-1 outline-none focus:border-primaryRed"
                  ></textarea>
                </div>
              </div>

              <div class="mt-5">
                <p>Upload A Video/ Images Of Your Apartment</p>
                <input id="file-input" class="select-file mt-4 w-full border-2 border-dashed p-16 custom-file-label" name="file" type="file" />

              </div>
            </div>

            <div class="button flex justify-between">
              <button
                type="button"
                class="prev3 btn rounded-md text-white bg-secRed py-2 px-4"
              >
                <i class="uil uil-previous"></i>
                Previous
              </button>
              <button
                type="submit"
                class="submit btn rounded-md text-white bg-secRed py-2 px-4"
              >
                Submit <i class="uil uil-message"></i>
              </button>
            </div>
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
    <script src="main.js"></script>
  </body>
</html>
