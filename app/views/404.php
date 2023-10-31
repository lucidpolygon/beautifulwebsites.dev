<?php
$desc = "";
$title = "Beautiful Websites";
$url = "https://beautifulwebsites.dev"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/includes/meta-tags.php'; ?>
    <?php include __DIR__ . '/includes/favicon.php'; ?>
</head>

<body>

    <?php include __DIR__ . '/includes/navigation.php'; ?>

    <main class="my-32">
        
        <!-- Main Heading -->
        <section class="mx-6 md:px-20 my-10 md:container md:mx-auto text-center">
            <h1 class="font-medium text-3xl text-gray-400">
            Oops! 
            </h1>
            <p class="mt-5 text-gray-600 text-xl font-mono">
            <span">You've ventured into the Bermuda Triangle of our website. It seems like this page took a vacation, but don't worry, it'll be back from its cosmic adventure soon. In the meantime, why not enjoy some virtual stargazing and imagine what a pixelated black hole looks like?</span>    
            <span>🌌🚀😄</span>
            </p>
            <p class="mt-24 text-gray-400 border p-5 rounded-xl font-serif">
                <span class="block">❤️❤️❤️</span>
                <span>Remember there is one person atleast in this world who always love you. Hold on to that person for that is where meaning lies.</span>
            </p>
        </section>
    
    
        <!-- Content -->
        <section>

        </section>

    </main>


    <div class="bottom-0 fixed w-full -mb-12" id="footer-wrapper">
        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <script>
        // Added a wrapper to footer so it can stick to bottom when content is less. This JS code removes it on small screen where content is more.
        document.addEventListener('DOMContentLoaded', function() {
            if ( window.innerHeight < document.body.scrollHeight + 10) {
                var footerWrapper = document.querySelector('#footer-wrapper');
                footerWrapper.classList.remove('bottom-0', 'fixed', 'w-full');
            }
        });
    </script>



</body>

</html>