<?php 
$meta_title ="Web Design Inspiration Gallery: Beautiful Websites";
$meta_description ="Our gallery of beautiful websites features innovative designs, creative layouts, and cutting-edge features. Explore our curated selection and find the inspiration you need to create your own masterpiece.";
$og_image_url ="assets/imgs/websites/og-image_1.png";
?>
    
    <!-- Main Heading -->
    <section class="mx-4 my-10 md:container md:mx-auto px-2 py-5 md:p-10 rounded-lg border-2 md:border-0 border-gray-900 text-center">
      <h1 class="font-extrabold text-3xl md:text-5xl">Beautiful Websites: Web Design Inspiration Gallery</h1>
      <p class="mt-5 text-gray-600">Check out our web design inspiration gallery. We've handpicked a bunch of awesome websites for you. You'll be amazed by their cool designs, creative layouts, and the latest web design trends.</p>
    </section>
    <?php
    $data = json_decode(file_get_contents(BASE_PATH . '/data/data.json'), true);

    // Sort data based on 'created_at' field in descending order
    usort($data, function ($a, $b) {
      return strtotime($b['created_at']) - strtotime($a['created_at']);
    });

    // Filter data to include only items with id > 1
    $data = array_filter($data, function ($item) {
      return $item['id'] > 0;
    });
    ?>
    <section id="content">
      <?php
      // Set the number of items to show per page
      $items_per_page = 12;

      // Get the current page from the query string, default to 1 if not set
      $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

      // Calculate the offset based on the current page and number of items per page
      $offset = ($page - 1) * $items_per_page;
      // Slice the data array to get only the items for the current page
      $data_slice = array_slice($data, $offset, $items_per_page);

      // Split the sliced data into chunks of 6
      $chunks = array_chunk($data_slice, 6);

      // Loop through each chunk
      foreach ($chunks as $chunk_index => $chunk) {
        // Output the websites for the chunk
        echo '<div class="mx-4 my-10 md:container md:mx-auto grid grid-cols-1 gap-10 md:grid-cols-3">';
        foreach ($chunk as $item_index => $item) {
          include BASE_PATH . '/partials/website-card.php';
          if ($item_index == 5 && $chunk_index % 2 == 0) {
            echo '</div>';
            echo '<div class="mx-4 my-10 md:container md:mx-auto grid grid-cols-1 gap-10 md:grid-cols-3">';
          }
        }
        echo '</div>';
      }

      echo '<div class="mx-4 mt-10 text-center flex space-x-4 justify-center">';
      // Output the previous page button for all pages except the first one
      if ($page > 1) {
        echo '<a href="?page=' . ($page - 1) . '" class="outline hover:bg-gray-100 font-bold py-2 px-4 rounded-lg">Previous</a>';
      }

      // Output the next page button for all pages except the last one
      if ($page < ceil(count($data) / $items_per_page)) {
        echo '<a href="?page=' . ($page + 1) . '" class="outline hover:bg-gray-100 font-bold py-2 px-4 rounded-lg">Next</a>';
      }
      echo '</div>';

      echo '<div class="mx-4 mt-5 mb-10 text-gray-500 text-center">';
      $total_pages = ceil(count($data) / $items_per_page);
      echo 'Page ' . $page . ' of ' . $total_pages;
      echo '</div>';

      ?>
    </section>