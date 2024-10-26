<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rank_Rent_Static
 */

?>
      <!-- ===================== Contact Start ================== -->
      <section class="py-8 lg:py-14" id="contact">
        <div class="wrapper">
          <div class="max-w-5xl mx-auto text-center">
            <div class="flex flex-col-reverse">
              <h2 class="text-2xl text-center font-bold mb-3 md:text-3xl">
                Lorem ipsum dolor sit amet.
              </h2>
              <p class="uppercase text-lg font-bold text-orangeColor">Contact US</p>
            </div>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem hic commodi dolore
              dolorem esse!
            </p>
          </div>

          <div
            class="mt-8 grid grid-cols-1 gap-3 xs:grid-cols-2 lg:grid-cols-3 lg:mt-10 md:gap-4 lg:gap-5"
          >
            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-location-dot"></i>
              </span>
              <address>
                241 Badminton Road, <br />
                Downend, Bristol, BS166NR
              </address>
            </div>

            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-phone"></i>
              </span>
              <div class="flex flex-col">
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="tel:01125125125"
                  >01125 125 125</a
                >
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="tel:01125125125"
                  >01125 125 125</a
                >
              </div>
            </div>

            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 xs:col-span-2 sm:col-span-1 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <div class="flex flex-col">
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="mailto:info@locksmithlock.co.uk"
                >
                  info@locksmithlock.co.uk
                </a>
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="mailto:support@locksmithlock.co.uk"
                >
                  support@locksmithlock.co.uk
                </a>
              </div>
            </div>
          </div>

          <div
            class="mt-3 flex flex-col gap-4 bg-grayLight rounded-md shadow-md p-4 md:flex-row md:gap-0 md:mt-4 lg:mt-5"
          >
            <div class="w-full md:w-1/2 md:pe-2">
              <iframe
                class="border border-gray-200 rounded-md min-h-60 h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7687.115623138421!2d-0.0723871134293148!3d51.49504916499399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sid!4v1729478758432!5m2!1sen!2sid"
                width="100%"
                height="100%"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>

            <div class="w-full md:w-1/2 md:ps-2">
              <form class="w-full">
                <div
                  class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 sm:gap-2 md:grid-cols-1 md:gap-4 lg:grid-cols-2 lg:gap-2"
                >
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="name">Name</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="name"
                      name="name"
                    />
                  </div>
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="email">E-Mail</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="email"
                      name="email"
                    />
                  </div>
                </div>
                <div
                  class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 sm:gap-2 md:grid-cols-1 md:gap-4 lg:grid-cols-2 lg:gap-2"
                >
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="phone">Phone</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="tel"
                      id="phone"
                      name="phone"
                    />
                  </div>
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="subject">Subject</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="subject"
                      name="subject"
                    />
                  </div>
                </div>
                <div class="flex flex-col gap-1 mb-4">
                  <label class="text-sm" for="message">Message</label>
                  <textarea
                    class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor resize-y min-h-40"
                    name="message"
                    id="message"
                  ></textarea>
                </div>

                <div class="mb-4">
                  <input class="w-4" type="checkbox" id="updates" name="updates" />
                  <label class="text-sm" for="updates"
                    >I consent to Williams Locks contacting me in the future with news, service
                    information and other updates</label
                  >
                </div>

                <div>
                  <button
                    type="submit"
                    class="py-1.5 px-4 border border-orangeColor bg-orangeColor text-whiteColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== Contact End ================== -->
    </main>

    <!-- ===================== Footer Start ================== -->
    <footer class="bg-primary text-whiteColor">
      <div class="wrapper">
        <div class="grid grid-cols-2 gap-4 py-10 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7">
          <div
            class="col-span-2 flex flex-col items-center text-center sm:col-span-3 md:col-span-3 md:items-start md:text-start lg:col-span-3"
          >
            <a href="#" class="flex items-center gap-4 mb-3">
              <!-- <img
                class="flex-shrink-0 max-w-8 w-full h-auto lg:max-w-10"
                src="./assets/icons/logo.png"
                alt="Locksmith Logo"
              /> -->
              <h2
                class="flex-1 flex flex-col text-xl text-start font-bold leading-none lg:text-2xl"
              >
                <span class="text-lg text-orangeColor lg:text-xl">Aberdeen</span>
                <span>Locksmith</span>
              </h2>
            </a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae blanditiis expedita
              praesentium provident sapiente cum, molestias ipsam adipisci iste labore.
            </p>

            <div class="w-full flex flex-col gap-2 mt-4 text-left self-start lg:gap-0">
              <div class="flex flex-col gap-2 xs:flex-row">
                <div class="flex items-center gap-2.5 xs:w-1/2">
                  <span class="tex-lg text-orangeColor">
                    <i class="fa-solid fa-phone"></i>
                  </span>
                  <a
                    href="tel:01125125125"
                    class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                    >01125 125 125</a
                  >
                </div>

                <div class="flex items-center gap-2.5 xs:w-1/2">
                  <span class="text-lg text-orangeColor">
                    <i class="fa-solid fa-envelope"></i>
                  </span>
                  <a
                    href="mailto:info@locksmith.com"
                    class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                    >info@locksmith.com</a
                  >
                </div>
              </div>

              <div class="flex flex-col gap-2 xs:flex-row">
                <div class="flex gap-2.5 xs:w-1/2">
                  <span class="text-lg text-orangeColor">
                    <i class="fa-solid fa-location-dot"></i>
                  </span>
                  <address class="text-base text-gray-400">
                    241 Badminton Road, <br />
                    Downend, Bristol, BS166NR
                  </address>
                </div>

                <div class="flex gap-2.5 xs:w-1/2">
                  <span class="text-lg text-orangeColor">
                    <i class="fa-solid fa-clock"></i>
                  </span>
                  <ul class="text-base text-gray-400">
                    <li class="">24 hours for emergency</li>
                    <li class="flex gap-4"><span>Mon - Fri </span> <span>8am - 6pm</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <ul class="flex flex-col gap-1">
            <h4 class="text-lg font-semibold mb-1">Navigation</h4>
            <li>
              <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Home</a
              >
            </li>
            <li>
              <a
                href="#about"
                class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >About</a
              >
            </li>
            <li>
              <a
                href="#services"
                class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Services</a
              >
            </li>
            <li>
              <a
                href="#location"
                class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Locations</a
              >
            </li>
            <li>
              <a
                href="#contact"
                class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Contact</a
              >
            </li>
          </ul>

          <div class="col-span-2 md:col-span-5 lg:col-span-3">
            <h4 class="text-lg font-semibold mb-2">General Locksmith Services</h4>
            <ul class="grid grid-cols-1 gap-x-4 gap-y-1 xs:grid-cols-2">
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 1</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 2</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 3</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 4</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 5</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 6</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 7</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 8</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 9</a
                >
              </li>
              <li>
                <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                  >Services 10</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div
          class="flex flex-wrap items-center gap-x-3 gap-y-2.5 justify-center py-4 border-t border-secondary md:gap-4 lg:justify-between"
        >
          <p class="text-center text-gray-400 text-sm">
            &copy; <span id="full-year">2025</span> Locksmith. All rights reserved.
          </p>
          <div class="text-xs leading-tight flex items-center gap-2 xs:text-sm">
            <span class="block text-yellowColor tracking-tighter">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <p class="block font-medium">Average of <b>5</b> based on <b>104</b> Ratings</p>
          </div>
          <ul class="flex items-center gap-4 text-sm">
            <li>
              <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Privacy Policy</a
              >
            </li>
            <li>
              <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Terms of Use</a
              >
            </li>
            <li>
              <a href="#" class="text-gray-400 transition-all duration-200 hover:text-orangeColor"
                >Sitemap</a
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- ===================== Footer End ================== -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
