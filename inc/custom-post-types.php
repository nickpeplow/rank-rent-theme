<?php
class CustomPostTypes {

    public function __construct() {
        add_action('init', [$this, 'register_service_post_type']);
        add_action('add_meta_boxes', [$this, 'upload_service_image']);
        add_action('save_post', [$this, 'save_custom_meta']);
    }

    // Register post type
    public function register_service_post_type() {
        $labels = [
            'name'               => 'Services',
            'singular_name'      => 'Service',
            'menu_name'          => 'Services',
            'name_admin_bar'     => 'Service',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Service',
            'new_item'           => 'New Service',
            'edit_item'          => 'Edit Service',
            'view_item'          => 'View Service',
            'all_items'          => 'All Services',
            'search_items'       => 'Search Services',
            'parent_item_colon'  => 'Parent Services:',
            'not_found'          => 'No services found.',
            'not_found_in_trash' => 'No services found in Trash.'
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'has_archive'        => true,
            'supports'           => ['title', 'editor', 'thumbnail'], 
            'menu_icon'          => 'dashicons-admin-tools',
            'show_in_rest'       => true, 
        ];

        register_post_type('service', $args);
    }

    // Add custom field for image upload
    public function upload_service_image() {
        add_meta_box(
            'service_image',
            'Service Image',
            [$this, 'render_meta_box'],
            'service',
            'side',
            'default'
        );
    }

    // Render the meta box
    public function render_meta_box($post) {
        wp_nonce_field('save_service_image', 'service_image_nonce');
        
        $value = get_post_meta($post->ID, '_service_image', true);
        ?>
<p>
    <label for="service_image">Upload Image</label><br>
    <input type="text" id="service_image" name="service_image" value="<?php echo esc_attr($value); ?>"
        style="width: calc(100% - 110px);" />
    <button type="button" class="button" id="upload_service_image_button">Upload Image</button>
</p>
<?php if ($value): ?>
<p>Current Image: <a href="<?php echo esc_url($value); ?>" target="_blank"><?php echo basename($value); ?></a></p>
<img src="<?php echo esc_url($value); ?>" style="max-width: 100%; height: auto;" id="service_image_preview" />
<?php endif; ?>
<script>
jQuery(document).ready(function($) {
    $('#upload_service_image_button').click(function(e) {
        e.preventDefault();
        var mediaUploader;

        mediaUploader = wp.media({
            title: 'Upload Image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('input#service_image').val(attachment.url);
            console.log(attachment.url);
            $('#service_image_preview').attr('src', attachment.url).css('display', 'block');
        }).open();
    });
});
</script>
<?php
    }

    // Save the uploaded image
    public function save_custom_meta($post_id) {
        if (
            !isset($_POST['service_image_nonce']) ||
            !wp_verify_nonce($_POST['service_image_nonce'], 'save_service_image') ||
            (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
            !current_user_can('edit_post', $post_id)
        ) {
            return;
        }
        if (isset($_POST['service_image']) && !empty($_POST['service_image'])) {
            update_post_meta($post_id, '_service_image', esc_url($_POST['service_image']));
        } else {
            delete_post_meta($post_id, '_service_image');
        }
    }
}

// Initialize the class
new CustomPostTypes();
?>