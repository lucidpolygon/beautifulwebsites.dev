<?php
$meta_title = "Indie Hacker's Hub: Essential Tools and Insights for Solo Innovators";
$meta_description = "Explore the best tools, find smart alternatives, and gain insights to power your independent development journey.";
?>

<main class="max-w-7xl mx-auto">
  <section class="bg-white">
    <div class="pt-8 pb-4 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Indie Hacker's Hub: Essential Tools and Insights for Solo Innovators</h1>
      <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl">Explore the best tools, find smart alternatives, and gain insights to power your independent development journey.</p>
    </div>
  </section>

  <section class="bg-white border-b-2 border-dotted py-8">
    <div class="py-2 px-4 mx-auto max-w-screen-xl lg:px-6">
      <div class="grid gap-8 lg:grid-cols-2">
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
          <div class="flex justify-between items-center mb-5 text-gray-500">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="mr-1 w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
              </svg>
              Article
            </span>
            <span class="text-sm">Comparison</span>
          </div>
          <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/blog/laravel-boilerplates">Top Laravel SaaS Boilerplates for 2024</a></h2>
          <p class="mb-5 font-light text-gray-500 dark:text-gray-400">This article provides an overview of various Laravel SaaS boilerplates, detailing their features, Laravel version compatibility, pricing, and links for more information.</p>
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
              <img class="w-7 h-7 rounded-full" src="assets/imgs/photo.jpeg" alt="Thaha Wahid avatar" />
              <span class="font-medium dark:text-white">
                Thaha Wahid
              </span>
            </div>
            <a href="/blog/laravel-boilerplates" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
              Read more
              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="py-8">
    <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
      <div class="mx-auto lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Beautiful Websites for your design inspiration</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Here's a gallery of beautiful websites features innovative designs, creative layouts for you to find the inspiration you need to create your own masterpiece.</p>
      </div>
      <?php
      $data = json_decode(file_get_contents(BASE_PATH . '/data/data.json'), true);
      usort($data, function ($a, $b) {
        return strtotime($b['created_at']) - strtotime($a['created_at']);
      });
      $data = array_filter($data, function ($item) {
        return $item['id'] > 0;
      });
      $items_per_page = 4;
      $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
      $offset = ($page - 1) * $items_per_page;
      $data_slice = array_slice($data, $offset, $items_per_page);
      $chunks = array_chunk($data_slice, 6);

      // Loop through each chunk
      foreach ($chunks as $chunk_index => $chunk) {
        // Output the websites for the chunk
        echo '<div class="my-10 md:container md:mx-auto grid grid-cols-1 gap-10 md:grid-cols-4">';
        foreach ($chunk as $item_index => $item) {
          include BASE_PATH . '/partials/website-card.php';
          if ($item_index == 4) {
            echo '</div>';
          }
        }
      }

      ?>
    </div>
    <div class="flex justify-end">
      <a href="/websites" class="outline hover:bg-gray-100 font-bold py-2 px-4 rounded-lg flex items-center">View More
        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </section>


</main>