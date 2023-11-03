<?php
$desc = "View stunning screenshots of " . $item['title'] . " in our web design inspiration gallery. Explore the innovative designs, creative layouts, and cutting-edge features that make this website stand out. Get inspired and discover new web design ideas for your next project";
$title = $item['title'] . " | Web Design Inspiration";
$img = 'https://beautifulwebsites.dev/assets/imgs/' . $item['img_folder'] . '/' . $item['img_cover'];
$url = 'https://beautifulwebsites.dev/websites/'.$item['slug'];
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

        <!-- Header Block -->
        <section class="md:container mx-4 my-10 md:mx-auto px-4 py-5 md:p-10 md:mt-28 border-2 border-gray-900">
            <h1 class="font-bold text-3xl md:text-5xl text-[#69CF95] mb-5"><?php echo $item['title']; ?> Website</h1>
            <div class="flex items-center mb-5">
                <?php foreach ($item["stack"] as $stack) : ?>
                    <span class="px-2 py-1 border border-gray-700 text-white hover:bg-[#FFd700] hover:text-black text-sm mr-2 mb-2">
                        <?php echo $stack; ?>
                    </span>
                <?php endforeach ?>
                <span class="px-2 py-1 border border-gray-700 text-white hover:bg-[#FFd700] hover:text-black text-sm mr-2 mb-2">
                    <?php echo $item['category']; ?>
                </span>
            </div>
            <p class="font-light mt-5 md:text-2xl text-gray-300 mb-5"><?php echo $item['description']; ?></p>
            <a href="<?php echo $item['url']; ?>" target="_blank" class="text-[#FFd700] hover:underline underline-offset-4 inline-flex items-center">
                <span>Visit <?php echo $item['title']; ?> Website</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </section>

        <!-- Image Block -->
        <section class="md:container mx-4 md:mx-auto my-10 px-2 py-5 md:p-10 grid grid-cols-1 md:grid-cols-2 gap-2 border-2 border-gray-900" id="images">
            <?php foreach ($item["img_mobile"] as $img) : ?>
                <img src="/assets/imgs/<?php echo $item['img_folder']; ?>/<?php echo $img; ?>" class="rounded-lg scale-95 hover:scale-100 duration-300" alt="Screenshot of <?php echo $item['title']; ?> website" />
            <?php endforeach ?>
            <?php foreach ($item["img_desktop"] as $img) : ?>
                <img src="/assets/imgs/<?php echo $item['img_folder']; ?>/<?php echo $img; ?>" class="rounded-lg scale-95 hover:scale-100 duration-300" alt="Screenshot of <?php echo $item['title']; ?> website" />
            <?php endforeach ?>
        </section>

        <!-- Description Block -->
        <?php if ($item['content'] != null) { ?>
            <section class="md:container mx-4 md:mx-auto my-10 px-4 py-5 md:p-10 border-2 border-gray-900">
            
                <h2 class="text-2xl font-light text-[#69CF95] mb-5 tracking-tight leading-tight">Website Highlights</h2>
                <ul class="text-gray-300 list-disc font-light list-inside space-y-4 mb-10">
                    <?php foreach ($item["content"] as $line) : ?>
                        <li class=""><?php echo $line; ?></li>
                    <?php endforeach ?>
                </ul>
        
            </section>
        <?php } ?>


        <!-- CTA -->
        <div class="md:container mx-4 md:mx-auto my-10 px-4 py-5 md:p-10 border-2 border-gray-900">
            <a href="<?php echo $item['url']; ?>" target="_blank" class="text-[#FFd700] hover:underline underline-offset-4 inline-flex items-center">
                <span>Visit <?php echo $item['title']; ?> Website</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </div>

    </main>


    <?php include __DIR__ . '/includes/footer.php'; ?>
    <?php include __DIR__ . '/includes/scroll-up.php'; ?>

    <script>
        /* ========== Javascript for Buttons ========== */

        // get all the buttons with the class "scroll-btn"
        const buttons = document.querySelectorAll(".scroll-btn");

        // hide the buttons on page load
        buttons.forEach((btn) => {
            btn.style.display = "none";
        });

        // show the buttons once scrolling has begun
        window.onscroll = function() {
            buttons.forEach((btn) => {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    btn.removeAttribute('style');
                } else {
                    btn.style.display = "none";
                }
            });
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