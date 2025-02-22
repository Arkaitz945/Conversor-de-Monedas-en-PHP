<?php
// Load environment variables
$env = parse_ini_file(dirname(__DIR__) . '/api.env');

// Define the API URL with the key from environment variables
define("API_URL", "https://v6.exchangerate-api.com/v6/" . $env['API_KEY'] . "/latest/");
?>