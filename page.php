<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rank_Rent_Static
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
	while (have_posts()) :
		the_post();
	?>
    <?php get_template_part( 'template-parts/default', 'hero' ); ?>
    <div class="container mx-auto px-4 py-8 lg:py-14">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
            <div class="lg:col-span-8 bg-blue-500 p-4">
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            </div>
            <div class="lg:col-span-4 bg-green-500 p-4">
                <h3 class="text-xl mb-2 font-semibold lg:text-2xl lg:mb-3">
                Lorem ipsum dolor sit amet consectetur.
                </h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, aut perspiciatis
                reprehenderit cumque molestiae inventore. Nostrum ratione voluptatem minus velit
                amet molestiae debitis delectus consequatur sequi? Laborum architecto doloribus
                placeat impedit magni, dignissimos in deleniti provident explicabo rem officia
                quibusdam?
                </p>
                <ul class="mt-4 list-disc list-inside">
                    <li>No hidden fees guarantee</li>
                    <li>Best price guarantee</li>
                    <li>Insurance work acceptance</li>
                </ul>
          </div>
        </div>
    </div>
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