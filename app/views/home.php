<?php
$desc = "Discover a stunning collection of beautiful websites in our web design inspiration gallery. Get inspired by innovative designs, creative layouts, and cutting-edge features that push the boundaries of web design. Explore our curated selection of beautiful websites and find the inspiration you need to create your own masterpiece.";
$title = "Web Design Inspiration Gallery: Beautiful Websites";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/includes/meta-tags.php'; ?>

  <?php include __DIR__ . '/includes/favicon.php'; ?>

</head>

<body>

  <?php include __DIR__ . '/includes/navigation.php'; ?>

  <main class="px-2">

    <!-- Main Heading -->
    <section class="mx-4 my-10 md:container md:mx-auto px-2 py-5 md:p-10 rounded-lg border-2 md:border-0 border-gray-900 text-center">
      <h1 class="font-extrabold text-3xl md:text-5xl">Beautiful Websites: Web Design Inspiration Gallery</h1>
      <p class="mt-5 text-gray-600">Discover a stunning collection of beautiful websites in our web design inspiration
        gallery. Get inspired by innovative designs, creative layouts, and cutting-edge features that push the
        boundaries of web design.</p>
    </section>

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
          include __DIR__ . '/includes/website-card.php';
          if ($item_index == 5 && $chunk_index % 2 == 0) {
            // Output the subscription form after the 6th item on every other chunk
            echo '</div>';
            include __DIR__ . '/includes/subscription-form.php';
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
        echo '<a href="?page=' . ($page + 1) . '" class="outline hover:bg-gray-100 font-bold py-2 px-4 rounded-lg">Load More</a>';
      }
      echo '</div>';

      echo '<div class="mx-4 mt-5 mb-10 text-gray-500 text-center">';
      $total_pages = ceil(count($data) / $items_per_page);
      echo 'Page ' . $page . ' of ' . $total_pages;
      echo '</div>';

      ?>
    </section>




  </main>

  <?php include __DIR__ . '/includes/scroll-up.php'; ?>

  <?php include __DIR__ . '/includes/footer.php'; ?>


  <script>
    // get the button element by its id
    const btn = document.querySelector(".scroll-btn");

    // hide the button on page load
    btn.style.display = "none";

    // show the button once scrolling has begun
    window.onscroll = function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.removeAttribute('style');
      } else {
        btn.style.display = "none";
      }
    };

    // smooth scroll to top on button click
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
  </script>


</body>

</html>