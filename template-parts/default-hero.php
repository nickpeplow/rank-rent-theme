<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rank_Rent_Static
 */

?>

<section class="-mt-px">
  <div class="relative bg-banner bg-cover bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-overlay"></div>
        <!-- ------ breadcrumb  -------- -->
        <nav aria-label="breadcrumb" class="wrapper relative z-20 text-whiteColor">
            <ol class="flex w-full flex-wrap items-center rounded-md bg-slate-50 py-8 xs:justify-center sm:justify-center">
                <?php
                // Check if not on the homepage
                if (!is_front_page()) {
                    // Home link
                    echo '<li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">';
                    echo '<a href="' . home_url() . '">Home</a>';
                    echo '<span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                        </svg>
                    </span>';
                    echo '</li>';

                    // Loop through parent pages
                    if (is_category() || is_single()) {
                        $category = get_the_category();
                        if ($category) {
                            echo '<li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">';
                            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                            echo '<span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c-12.5-12.5-12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </span>';
                            echo '</li>';
                        }
                    } elseif (is_page()) {
                        $ancestors = get_post_ancestors(get_the_ID());
                        $ancestors = array_reverse($ancestors);
                        foreach ($ancestors as $ancestor) {
                            echo '<li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">';
                            echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
                            echo '<span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c-12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                                </svg>
                            </span>';
                            echo '</li>';
                        }
                    }

                    // Current Page
                    echo '<li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">';
                    echo '<span>' . get_the_title() . '</span>';
                    echo '</li>';
                }
                ?>
            </ol>
        </nav>
        <!-- ------ breadcrumb  -------- -->

        <div class="wrapper pt-12 pb-8 relative z-20 md:pb-4 md:pt-8 lg:pb-0">
        <div
            class="flex flex-col-reverse items-center text-center w-full text-whiteColor lg:text-left lg:items-start lg:w-1/2">
            <h1 class="text-lg max-w-xl lg:text-xl">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae similique sequi
            doloremque magnam praesentium dolore, laudantium quasi fuga veniam molestiae?
            </h1>
            <h2 class="flex flex-col text-3xl font-bold mb-4 sm:text-4xl lg:text-5xl">
            <span class="font-semibold text-lg mb-2 md:text-xl lg:text-2xl">Lorem ipsum</span>
            <span> <?php echo get_the_title(); ?> </span>
            </h2>
        </div>

        <!-- CTA -->
        <div class="flex justify-center mt-8 lg:hidden">
            <a
            href="tel:01125125125"
            class="flex items-center gap-3 bg-primary px-6 py-2 rounded-full shadow-sm xss:py-3">
            <div class="hidden bg-size-100 bg-24-seven w-16 h-16 bg-no-repeat xss:block"></div>
            <div class="flex-1 text-center">
                <p class="text-2xl font-bold text-whiteColor xss:text-3xl">01125 125 125</p>
                <p class="uppercase text-yellowColor text-xs whitespace-nowrap">
                24/7 Locksmith Service Dedicated Line
                </p>
                <p class="uppercase font-bold text-xl text-center text-whiteColor">
                Click To Call
                </p>
            </div>
            </a>
        </div>

        <div class="hidden lg:flex items-center gap-2.5 mt-8 sm:gap-4">
            <a
            href="tel:01125125125"
            class="inline-block py-2 px-4 text-lg font-medium text-whiteColor capitalize border border-orangeColor bg-orangeColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor">Call (011) 2512-5125</a>
            <a
            href="#services"
            class="inline-block py-2 px-4 text-lg font-medium text-orangeColor capitalize border border-orangeColor bg-transparent rounded-md transition-all duration-200 hover:bg-orangeColor hover:text-whiteColor">Our Services</a>
        </div>
        </div>

        <!-- Hero Shape -->
        <div class="relative z-10">
            <div class="flex justify-end overflow-hidden">
                <svg
                class="-mb-1 min-w-[150%] w-full max-h-[110px] hero-shape"
                data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z"
                    class="fill-primary"></path>
                </svg>
            </div>

        </div>
  </div>
</section>