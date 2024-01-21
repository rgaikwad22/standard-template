<?php
function enque_scripts()
{
    wp_enqueue_style("main_style", get_stylesheet_uri());
    wp_enqueue_style("style_file", get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_script("script.js", get_template_directory_uri() . "/assets/js/script.js");
}

add_action("wp_enqueue_scripts", "enque_scripts");
// add_theme_support('post-thumbnails');

function my_enqueue()
{
    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery'));

    wp_localize_script(
        'ajax-script',
        'my_ajax_object',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue');

function my_ajax_function()
{
    // Your server-side logic here

    // Example: Get a value from the AJAX request
    $data_from_ajax = $_POST['data_from_ajax'];

    // Example: Process the data (replace this with your own logic)
    $result = 'Processed data: ' . $data_from_ajax;

    // Send the result back to the JavaScript
    echo json_encode($result);

    // Always exit to prevent further execution
    wp_die();
}

// Hook for both logged in and non-logged in users
add_action('wp_ajax_my_ajax_function', 'my_ajax_function');
add_action('wp_ajax_nopriv_my_ajax_function', 'my_ajax_function');


function register_prixima()
{
    register_nav_menus(
        array(
            "primary-menu" => __("Primary Menu"),
            "header-menu" => __("Header Navigation Menu"),
            "footer-menu" => __("Footer Navigation Menu")
        )
    );
}
add_action("init", "register_prixima");

function remove_editor_from_pages()
{
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'comments');
    remove_post_type_support('page', 'author');
    remove_post_type_support('page', 'revisions');
}

add_action('init', 'remove_editor_from_pages');

function remove_editor_from_posts()
{
    remove_post_type_support('speaker', 'comments');
}

add_action('init', 'remove_editor_from_posts');

function register_my_post_type_project()
{
    register_post_type(
        'speaker',
        array(
            'labels' => array(
                'name' => __('Speaker'),
                'singular_name' => __('speaker'),
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 4,
            'supports' => array('title', 'editor', 'excerpt')
        )
    );
}

add_action('init', 'register_my_post_type_project');

function custom_taxonomy_sport()
{
    $labels = array(
        'name' => 'Sports',
        'singular_name' => 'Sports',
        'menu_name' => 'Sports'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_admin_column' => true,
        'show_in_quick_edit' => true,
    );

    register_taxonomy('sports', array('product'), $args);
}

add_action('init', 'custom_taxonomy_sport');

function custom_search_filter($query)
{
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'page', 'speaker'));
    }
    return $query;
}

add_filter('pre_get_posts', 'custom_search_filter');

function my_acf_google_map_api($api)
{
    $api['key'] = 'AIzaSyAEfnyXX1QVP5MH5m8zifEkHlSo7hVU8vU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>

<style type="text/css">
    .acf-map {
        width: 100%;
        height: 400px;
        border: #ccc solid 1px;
        margin: 20px 0;
    }

    // Fixes potential theme css conflict.
    .acf-map img {
        max-width: inherit !important;
    }
</style>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEfnyXX1QVP5MH5m8zifEkHlSo7hVU8vU&callback=Function.prototype"></script>
<script type="text/javascript">
    (function ($) {

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap($el) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            // Create gerenic map.
            var mapArgs = {
                zoom: $el.data('zoom') || 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map($el[0], mapArgs);

            // Add markers.
            map.markers = [];
            $markers.each(function () {
                initMarker($(this), map);
            });

            // Center map based on markers.
            centerMap(map);

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker($marker, map) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            };

            // Create marker instance.
            var marker = new google.maps.Marker({
                position: latLng,
                map: map
            });

            // Append to reference for later use.
            map.markers.push(marker);

            // If marker contains HTML, add it to an infoWindow.
            if ($marker.html()) {

                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap(map) {

            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function (marker) {
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });

            // Case: Single marker.
            if (map.markers.length == 1) {
                map.setCenter(bounds.getCenter());

                // Case: Multiple markers.
            } else {
                map.fitBounds(bounds);
            }
        }

        // Render maps on page load.
        $(document).ready(function () {
            $('.acf-map').each(function () {
                var map = initMap($(this));
            });
        });

    })(jQuery);
</script>