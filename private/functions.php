<?php

    // Function for URLs
    function url_for($script_path) {
        // add the the leading '/' if not present
        if($script_path[0] != '/') {
            $script_path = '/' . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    // Function for url encode

    function u_enc($string="") {
        return urlencode($string);
    }

    function raw_u_enc($string="") {
        return rawurlencode($string);
    }

    // Function for encoding HTML
    function h_enc($string="") {
        return htmlspecialchars($string);
    }

    // Function Modify Headers
    function error_404 () {
        header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');#
        exit();
    }

    function error_500() {
        header($_SERVER['SERVER_PROTOCOL'] . '500 Internal Server Error');
        exit();
    }

    function redirect_to($location) {
        header("Location: " . $location);
        exit;
    }

    // Function Form handling
    function is_post_request() {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
    function is_get_request() {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

