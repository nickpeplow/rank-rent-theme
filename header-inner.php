<?php

/**
 * The header for inner pages
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rank_Rent_Static
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- ===================== Header Start ================== -->
  <header class="sticky top-0 bg-whiteColor shadow-md md:shadow-none md:static z-40">

    <!-- ---------------- Logo & Trust & CTA ------------- -->
    <div class="py-2.5 md:py-2">
      <div class="wrapper flex items-center">
        <!-- Logo -->
        <a
          href="#"
          class="flex items-center gap-2 pe-4 border-e border-gray-200 md:gap-3 lg:gap-4">
          <img
            class="flex-shrink-0 max-w-6 h-auto md:max-w-8 lg:max-w-10"
            src="<?php echo THEME_ICON_URL; ?>/logo.png"
            alt="Locksmith Logo" />
          <h2
            class="flex-1 flex flex-col text-lg font-bold leading-none md:text-xl md:leading-none lg:text-2xl lg:leading-none">
            <span class="text-base text-primary md:text-lg lg:text-xl">Aberdeen</span>
            <span class="text-blackColor">Locksmith</span>
          </h2>
        </a>

  <!-- ===================== Nav Menu Start ================== -->
  <nav class="hidden sticky top-0 z-50 md:block">
    <div class="relative bg-primary pt-px shadow-md">
      <div class="wrapper">
        <ul class="flex items-center font-raleway text-whiteColor">
          <li>
            <a
              href="#"
              class="inline-block py-2.5 px-4 transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Locksmith</a>
          </li>
          <li class="group">
            <div
              class="flex items-center gap-2 cursor-pointer py-2.5 px-4 transition-all duration-200 group-hover:bg-whiteColor group-hover:text-blackColor">
              <span>Locksmith Services</span>
              <span class="text-base">
                <i class="fa-solid fa-caret-down"></i>
              </span>
            </div>

            <!-- ---------- Mega Menu ------------ -->
            <div
              class="absolute top-full bg-whiteColor left-0 w-full py-4 hidden group-hover:block shadow-md z-50">
              <div class="wrapper">
                <div class="grid grid-cols-3">
                  <!-- Genetal Links -->
                  <div class="col-span-2 text-blackColor pt-2.5">
                    <p class="font-bold mb-2.5">General Locksmith Services</p>
                    <ul class="grid grid-cols-2 gap-y-1 gap-x-4">
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>All Locksmith Services</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Non Destructive Entry</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Lock Changes & Repairs</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Burglary Repairs</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Get a Quote</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Smart Locks</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Alarm Installation</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>HD CCTV Installation</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Security Surveys</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>How Safe is Your Neighbourhood?</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>All Locksmith Services</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Non Destructive Entry</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Lock Changes & Repairs</span>
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="inline-flex items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                          <span class="text-xs"><i class="fa-solid fa-arrow-right"></i></span>
                          <span>Burglary Repairs</span>
                        </a>
                      </li>
                    </ul>
                  </div>

                  <div class="flex items-center">
                    <img class="w-full h-auto" src="https://placehold.co/300x150" alt="Image" />
                  </div>
                </div>
              </div>
              <div class="wrapper font-sans border border-gray-200 py-4 mt-5 mb-2.5">
                <h3 class="text-center text-2xl font-semibold mb-3 text-blackColor">
                  Need a locksmith in Highcliffe right now? Call us for 24/7 locksmith response
                </h3>

                <div class="flex items-center justify-center gap-0.5">
                  <a
                    href="tel:01125125125"
                    class="text-2xl font-bold text-primary leading-none p-1 transition duration-200 hover:text-primary">01125125125</a>
                  <span class="text-gray-200 text-xl leading-none">&#9474;</span>

                  <a
                    href="tel:01125125125"
                    class="text-2xl font-bold text-primary leading-none p-1 transition duration-200 hover:text-primary">01125125125</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a
              href="#about"
              class="inline-block py-2.5 px-4 font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">About</a>
          </li>
          <li>
            <a
              href="#services"
              class="inline-block py-2.5 px-4 font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Services</a>
          </li>
          <li>
            <a
              href="#location"
              class="inline-block py-2.5 px-4 font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Locations</a>
          </li>
          <li>
            <a
              href="#contact"
              class="inline-block py-2.5 px-4 font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ===================== Nav Menu End ================== -->

        <button class="text-2xl text-blackColor lg:hidden" id="menu-toggler">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- ------ Mobile Menu -------- -->
    <nav
      class="nav-menu max-w-[340px] w-full max-h-dvh fixed top-[67px] bottom-0 right-0 py-5 px-6 bg-whiteColor border-t border-gray-200 overflow-y-auto z-40 md:hidden"
      id="nav-menu">
      <ul class="flex flex-col gap-1 font-raleway text-blackColor pb-4">
        <li>
          <a href="#" class="menu-link block py-px">Locksmith</a>
        </li>
        <li>
          <a href="#about" class="menu-link block py-px">About</a>
        </li>
        <li>
          <a href="#services" class="menu-link block py-px">Services</a>
        </li>
        <li>
          <a href="#location" class="menu-link block py-px">Locations</a>
        </li>
        <li>
          <a href="#contact" class="menu-link block py-px">Contact Us</a>
        </li>

        <li class="ps-3">
          <ul class="flex flex-col gap-1">
            <p class="font-bold mt-2.5 mb-1.5 -ms-3">General Locksmith Services</p>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>All Locksmith Services</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Non Destructive Entry</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Lock Changes & Repairs</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Burglary Repairs</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Get a Quote</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Smart Locks</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Alarm Installation</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>HD CCTV Installation</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>Security Surveys</span>
              </a>
            </li>
            <li>
              <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                <span>How Safe is Your Neighbourhood?</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <div class="backdrop fixed inset-0 bg-overlay md:hidden z-30" id="backdrop"></div>
  <!-- ===================== Header End ================== -->

