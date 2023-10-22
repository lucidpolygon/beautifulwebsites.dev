      <div class="mx-4 my-10 md:container md:mx-auto px-2 py-5 md:p-10 rounded-lg border-2 border-gray-900 text-center" id="subscribe">
        <h2 class="font-extrabold text-2xl md:text-4xl">Discover the Best Website Designs Each Week</h2>
        <p class="mt-5 text-gray-600">A weekly dose of stunning web design inspiration, handpicked just for you. No Spam.</p>
        <form method="POST" action="subscribe">

          <?php if (isset($_GET['success'])) { ?>
            <div class="text-center text-green-800 mb-3 px-3 mt-5" role="alert">
              <strong class="font-bold">Welcome aboard! We're excited to have you as part of our family. Look out for our emails in your inbox, packed with amazing website designs.</strong>
            </div>
          <?php } elseif (isset($_GET['error'])) { ?>
            <div class="text-center text-red-800 mb-3 mt-5" role="alert">
              <strong class="font-bold"><?php echo $_GET['error']; ?></strong>
            </div>
          <?php } ?>

          <!-- CSRF token -->
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

          <div class="mt-10">
            <input type="text" id="email" name="email" class="border-2 border-gray-900 px-2 py-2 rounded-lg md:rounded-r-none w-full md:w-96 outline-0" placeholder="Your Email">

            <button class="border-2 border-gray-900 px-2 py-2 rounded-lg md:rounded-l-none inline-flex items-center bg-gray-900 text-white hover:bg-gray-800 font-extralight tracking-wide mt-2 md:mt-0 md:-mx-1">
              Subscribe
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
            </button>
          </div>
        </form>
      </div>