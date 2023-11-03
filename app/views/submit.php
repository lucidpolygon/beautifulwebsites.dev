<?php
$desc = "We're always on the lookout for stunning website designs. If you know of any that deserve recognition, submit them to our gallery using the form below and we'll review them.";
$title = "Submit your site to our gallery of beautiful websites";
$url = "https://beautifulwebsites.dev/submit-your-website"
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
            <div>
                <h1 class="font-bold text-3xl text-[#69CF95]"><?php echo $title; ?></h1>
                <p class="font-light mt-5 text-gray-300"><?php echo $desc; ?></p>
            </div>
        </section>

        <section class="md:container mx-4 md:mx-auto my-10 px-4 py-5 md:p-10 border-2 border-gray-900">
            <form method="POST" action="submit-your-website" class="mx-auto">

                <?php if (isset($_GET['success'])) { ?>
                    <div class="text-center text-green-800 mb-3 px-3" role="alert">
                        <strong class="font-bold">Thank you for submitting your website. Our team will review it as soon as possible. If your website meets our guidelines, it will be added to our directory. We appreciate your contribution to our community.</strong>
                    </div>
                <?php } elseif (isset($_GET['error'])) { ?>
                    <div class="text-center text-red-800 mb-3" role="alert">
                        <strong class="font-bold">Error submitting form. Please try again later.</strong>
                    </div>
                <?php } ?>


                <!-- CSRF token -->
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                <input type="text" name="name" id="name" class="border px-2 py-2 w-full outline-0 placeholder:text-black block" placeholder="Your Name">
                <input type="text" name="email" id="email" class="border px-2 py-2 w-full outline-0 placeholder:text-black block mt-4" placeholder="Your Email">
                <input type="text" name="url" id="url" class="border px-2 py-2 w-full outline-0 placeholder:text-black block mt-4" placeholder="Website Link">

                <button class="inline-flex items-center outline outline-white px-4 py-2 mt-8 text-white">
                    <span>Submit</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>

            </form>
        </section>




    </main>


    <div class="bottom-0 fixed w-full -mb-12" id="footer-wrapper">
        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <script>
        // Added a wrapper to footer so it can stick to bottom when content is less. This JS code removes it on small screen where content is more.
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerHeight < document.body.scrollHeight + 10) {
                var footerWrapper = document.querySelector('#footer-wrapper');
                footerWrapper.classList.remove('bottom-0', 'fixed', 'w-full');
            }
        });
    </script>



</body>

</html>