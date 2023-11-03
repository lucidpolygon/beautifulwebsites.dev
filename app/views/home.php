<?php
$desc = "Our gallery of beautiful websites features innovative designs, creative layouts, and cutting-edge features. Explore our curated selection and find the inspiration you need to create your own masterpiece.";
$title = "Web Design Inspiration Gallery: Beautiful Websites";
$img = "https://beautifulwebsites.dev/assets/imgs/og-image.png";
$url = "https://beautifulwebsites.dev";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/includes/meta-tags.php'; ?>

  <?php include __DIR__ . '/includes/favicon.php'; ?>

</head>

<body class="bg-black">
  <?php include __DIR__ . '/includes/navigation.php'; ?>

  <main class="px-2 mt-32 md:mt-20">

    <!-- Main Heading -->
    <section class="md:container mx-4 my-10 md:mx-auto px-2 py-5 md:p-10 md:mt-28 border-2 border-gray-900 md:text-center">
      <h1 class="font-bold text-3xl md:text-5xl text-[#69CF95]">A list of <span class="text-[#FFd700]">beautiful websites</span> on the internet</h1>
      <p class="font-light mt-5 md:text-2xl text-gray-300">This is a handpicked collection of the most visually stunning and creatively designed websites from across the internet. You want inspiration? cool designs, creative layouts, and the latest web design trends, you'll find it all here.</p>
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
        echo '<a href="?page=' . ($page - 1) . '"class="outline outline-white text-white hover:bg-[#FFd700] hover:text-black py-2 px-4">Previous</a>';
      }

      // Output the next page button for all pages except the last one
      if ($page < ceil(count($data) / $items_per_page)) {
        echo '<a href="?page=' . ($page + 1) . '" class="outline outline-white text-white hover:bg-[#FFd700] hover:text-black py-2 px-4">Next</a>';
      }
      echo '</div>';

      echo '<div class="mx-4 mt-5 mb-10 text-gray-300 text-center">';
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