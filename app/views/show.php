<?php
$desc = "View stunning screenshots of " . $item['title'] . " in our web design inspiration gallery. Explore the innovative designs, creative layouts, and cutting-edge features that make this website stand out. Get inspired and discover new web design ideas for your next project";
$title = $item['title'] . " | Web Design Inspiration";
$img = 'https://beautifulwebsites.dev/assets/imgs/' . $item['img_folder'] . '/' . $item['img_cover'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/includes/meta-tags.php'; ?>
    <?php include __DIR__ . '/includes/favicon.php'; ?>
</head>

<body>

    <?php include __DIR__ . '/includes/navigation.php'; ?>



    <section class="py-10 px-4 md:mx-24">

        <h1 class="text-5xl font-bold text-gray-900 mb-5 tracking-tight leading-tight"><?php echo $item['title']; ?> | Website Design Inspiration</h1>

        <div class="flex items-center mb-5">
            <?php foreach ($item["stack"] as $stack) : ?>
                <span class="px-2 py-1 rounded-full bg-gray-200 text-gray-800 text-sm font-medium mr-2 mb-2">
                    <?php echo $stack; ?>
                </span>
            <?php endforeach ?>
            <span class="px-2 py-1 rounded-full bg-green-200 text-gray-800 text-sm font-medium mr-2 mb-2">
                <?php echo $item['category']; ?>
            </span>
        </div>

        <?php if ($item['description'] != null) { ?>
            <p class="font-extralight text-4xl mb-10 border rounded-lg p-3"><?php echo $item['description']; ?></p>
        <?php } ?>

        <?php if ($item['content'] != null) { ?>
            <h2 class="text-2xl font-light text-gray-900 mb-5 tracking-tight leading-tight">Website Highlights</h2>
            <ul class="list-disc font-light list-inside space-y-4 mb-10">
                <?php foreach ($item["content"] as $line) : ?>
                    <li class=""><?php echo $line; ?></li>
                <?php endforeach ?>
            </ul>
        <?php } ?>


        <a target="_blank" href="<?php echo $item['url']; ?>" class="rounded-lg bg-gray-900 text-white hover:bg-gray-800 font-extralight tracking-wide px-2 py-1 border hover:border-gray-200 border-gray-400 inline-flex external-link">
            Visit Website
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-3 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
        </a>
    </section>


    <!-- Images -->
    <section class="mx-2 md:mx-24 grid grid-cols-1 md:grid-cols-2 gap-2 mb-10" id="images">
        <?php foreach ($item["img_mobile"] as $img) : ?>
            <img src="/assets/imgs/<?php echo $item['img_folder']; ?>/<?php echo $img; ?>" class="rounded-lg scale-95 hover:scale-100 duration-300" alt="Screenshot of <?php echo $item['title']; ?> website" />
        <?php endforeach ?>
        <?php foreach ($item["img_desktop"] as $img) : ?>
            <img src="/assets/imgs/<?php echo $item['img_folder']; ?>/<?php echo $img; ?>" class="rounded-lg scale-95 hover:scale-100 duration-300" alt="Screenshot of <?php echo $item['title']; ?> website" />
        <?php endforeach ?>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <?php include __DIR__ . '/includes/scroll-up.php'; ?>


    <!-- Fixed Button: View Website -->
    <a target="_blank" href="<?php echo $item['url']; ?>" class="rounded-lg bg-gray-900 text-white hover:bg-gray-800 font-extralight tracking-wide px-2 py-1 flex border hover:border-gray-200 border-gray-400 fixed bottom-2 left-2 scroll-btn external-link">
        Visit Website
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-3 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
        </svg>
    </a>


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