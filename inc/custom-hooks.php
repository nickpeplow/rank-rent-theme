<?php
class CustomHooks {
    public function __construct() {
        add_filter('get_services', [$this, 'get_services']);
    }

    private function get_services_array() {
        $service_query = new WP_Query([
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        ]);

        $services = [];

        if ($service_query->have_posts()) {
            while ($service_query->have_posts()) {
                $service_query->the_post();

                $id = get_the_ID();
                $excerpt = get_the_excerpt(); 
                $content = get_the_content();
                $content_snippet = wp_trim_words($excerpt ? $excerpt : $content, 20, '...');

                $services[] = [
                    'id'      => $id,
                    'title'   => get_the_title(),
                    'link'    => get_permalink(),
                    'image'   => get_post_meta($id, '_service_image', true), 
                    'excerpt' => $content_snippet, 
                ];
            }
            wp_reset_postdata();
        }

        return $services;
    }

    public function get_services() {
        return apply_filters('get_services_array', $this->get_services_array());
    }
}

// Initialize
$custom_hooks = new CustomHooks();