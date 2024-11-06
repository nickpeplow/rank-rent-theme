<?php
/**
 * The template for displaying all service single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rank_Rent_Static
 */

 get_header(); ?>

 <main id="primary" class="site-main">
 
	 <?php
	 while (have_posts()) :
		 the_post();
	 ?>
	 <?php get_template_part( 'template-parts/default', 'hero' ); ?>
	 <div class="wrapper mx-auto px-4 py-8 lg:py-14">
		 <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
			 <div class="lg:col-span-8 py-4">
				 <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			 </div>
			 <div class="lg:col-span-4 py-4">
 
				 <h3 class="text-xl mb-2 font-semibold lg:text-2xl lg:mb-3">
					 Search
				 </h3>
 
				 <!--- -------- Search Form --- -------------->
				 <?php get_template_part('template-parts/search-form'); ?>
				 <!--- -------- Search Form --- -------------->
 
				 <h3 class="text-xl mt-4 mb-2 font-semibold lg:text-2xl lg:mb-3">
					 Categories
				 </h3>
				 <ul class="mt-2 list-disc list-inside">
					 <li>No hidden fees guarantee</li>
					 <li>Best price guarantee</li>
					 <li>Insurance work acceptance</li>
				 </ul>
				 <h3 class="text-xl mt-4 mb-2 font-semibold lg:text-2xl lg:mb-3">
					 Tags
				 </h3>
				 <ul class="mt-2 list-disc list-inside">
					 <li>No hidden fees guarantee</li>
					 <li>Best price guarantee</li>
					 <li>Insurance work acceptance</li>
				 </ul>
			 </div>
		 </div>
	 </div>
	 <section class="py-8 lg:py-14 bg-secondary" id="services">
		 <div class="wrapper">
			 <div class="max-w-5xl mx-auto text-center text-whiteColor">
				 <div class="flex flex-col-reverse">
					 <h2 class="text-2xl text-center font-bold mb-3 md:text-3xl">
						 Lorem ipsum dolor sit amet consectetur.
					 </h2>
					 <p class="uppercase text-lg font-bold text-orangeColor">Services</p>
				 </div>
				 <p>
					 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem hic commodi dolore
					 dolorem esse!
				 </p>
			 </div>
 
			 <div class="mt-8 grid grid-cols-1 gap-4 mb-4 xs:grid-cols-2 md:grid-cols-3 lg:mt-10 lg:gap-5 lg:mb-5">
				 <!-- Item 1 -->
				 <?php
					
					 $services = apply_filters('get_services', []);
 
					 if (!empty($services)) :
						 foreach ($services as $service) :
							 ?>
				 <a href="<?php echo esc_url($service['link']); ?>"
					 class="flex flex-col items-center text-center bg-whiteColor rounded-md py-5 px-4 shadow-md transition-all duration-200 hover:bg-tertiary">
 
					 <div class="text-4xl text-primary mb-3 md:mb-4">
						 <?php if (!empty($service['image'])) : ?>
						 <img src="<?php echo esc_url($service['image']); ?>"
							 alt="<?php echo esc_attr($service['title']); ?>" class="w-16 h-16 object-cover" />
						 <?php else : ?>
						 <i class="fa-solid fa-image"></i>
						 <?php endif; ?>
					 </div>
 
					 <h4 class="text-xl text-primary font-semibold mb-2.5 md:mb-3">
						 <?php echo esc_html($service['title']); ?>
					 </h4>
					 <p>
						 <?php echo esc_html($service['excerpt']); ?>
					 </p>
					 <p class="text-orangeColor font-semibold underline underline-offset-2 mt-3">
						 Get Quote &rarr;
					 </p>
				 </a>
				 <?php endforeach;
					 endif;
					 ?>
 
 
			 </div>
 
		 </div>
	 </section>
	 <?php
		 // If comments are open or we have at least one comment, load up the comment template.
		 if (comments_open() || get_comments_number()) :
			 comments_template();
		 endif;
 
	 endwhile; // End of the loop.
	 ?>
 
 </main><!-- #main -->
 
 <?php
 get_footer();