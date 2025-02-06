<?php
// Gets the absolute server path to your project root
define('ROOT_PATH', realpath(dirname(__FILE__)));

// Directory name for your project
$base_path = '/crmc';

// Gets the full domain URL (http://localhost or https://your-domain.com)
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
?>