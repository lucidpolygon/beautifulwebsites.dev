<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/src/functions.php';

$envPath = realpath(__DIR__ . '/.env');
loadEnvVars($envPath);

$project_name = $_ENV['PROJECT_NAME'];
$meta_title = $_ENV['META_TITLE'];
$meta_description = $_ENV['META_DESCRIPTION'];
$og_image_url = $_ENV['OG_IMAGE_URL'];
$no_index = false;

// Detect and handle form submission
if (isset($_POST['submit'])) {
    handleFormSubmission(); 
}

define('BASE_PATH', realpath(__DIR__));
list($base_url, $current_url) = getUrlInfo();
$contentFilePath = getContentFilePath();

ob_start();
$page_path = BASE_PATH . '/' . $contentFilePath;
file_exists($page_path) ? include $page_path : include BASE_PATH . '/content/404.php';
$content = ob_get_clean();

include BASE_PATH . '/partials/head.php';
include BASE_PATH . '/partials/header.php';
echo $content;
include BASE_PATH . '/partials/footer.php';

?>
