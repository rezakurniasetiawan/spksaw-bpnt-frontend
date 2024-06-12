<?php
if (!function_exists('is_active')) {
    function is_active($route)
    {
        $CI = &get_instance(); // Mengambil instance dari CodeIgniter
        return strpos($CI->uri->uri_string(), $route) !== false ? 'active' : ''; // Mengecek apakah $route ada dalam uri_string
    }
}
