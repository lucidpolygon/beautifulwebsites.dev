<?php
$desc = "Your handy tool for addressing SEO and user experience challenges. Simply click on the extension and receive an instant snapshot of meta information, word count, images, broken links, rich previews, favicons, and more.";
$title = "Webpage Sherlock: Your Ultimate Page Insights Chrome Extension";
$img = "https://beautifulwebsites.dev/assets/imgs/website-sherlock/og-image.png";
$url = "https://beautifulwebsites.dev";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include __DIR__ . '/../includes/meta-tags.php'; ?>

    <?php include __DIR__ . '/../includes/favicon.php'; ?>

</head>

<body>

    <?php include __DIR__ . '/../includes/navigation.php'; ?>

    <div class="bg-gray-50">

    <main class="px-2 my-16 max-w-screen-xl mx-auto">

        <section>
            <div class="py-8 px-4 text-center lg:py-16 lg:px-12">
                <a href="https://chrome.google.com/webstore/detail/webpage-sherlock-page-ins/fgcokeipnkbcjndbhcmdcjpigplhfkbk" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200" role="alert" target="_blank">
                    <span class="text-xs bg-black rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Now Available in Chrome Webstore</span>
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <h1 class="mb-4 text-4xl tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Webpage Sherlock: Page insights in a single click</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">The idea is to make website analysis a breeze, without the need to inspect the page, run complex tools, or visit a website to check rich previews. Simply press a keyboard shortcut and obtain a snapshot of the webpage you're on. And that's precisely what I've built.</p>
                <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="https://chrome.google.com/webstore/detail/webpage-sherlock-page-ins/fgcokeipnkbcjndbhcmdcjpigplhfkbk" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-black hover:bg-gray-800 focus:ring-4 focus:ring-gray-300" target="_blank">
                        Get Chrome Extension
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://www.producthunt.com/posts/webpage-sherlock-2?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-webpage&#0045;sherlock&#0045;2" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=421618&theme=light" alt="Webpage&#0032;Sherlock - Page&#0032;insights&#0032;in&#0032;a&#0032;single&#0032;click | Product Hunt" class="w-full" /></a>
                </div>
            </div>
        </section>

        <section>
            <div class="flex justify-center max-w-screen-md mx-auto">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/cover-image.png" alt="Webpage Sherlock OG Image" class="rounded-2xl border border-black" />
            </div>
        </section>

        <section>
            <div class="flex justify-center max-w-screen-md mx-auto">
            <h2 class="mb-8 mt-16 text-4xl tracking-tight text-gray-900">Analysis from the Extension</h2>
            </div>
        </section>
        
        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/meta-information.png" class="border border-black rounded-2xl w-full" alt="Website Sherlock Meta Information Screenshot" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">1. Meta Information</h2>
                    <p class="mb-2 font-light">The extension will grab all the meta info from your page and let you know if something's missing or not quite right. These are the 13 meta tags I've got covered: </p>
                    <p class="mb-6 font-light">Title (<a href="https://developers.google.com/search/docs/appearance/title-link" target="_blank" class="text-blue-600">Google guidelines on title</a>), Meta Ttitle, Meta Description, Open Graph Title, OG Description, OG Type, OG URL, OG Image, Twitter Card, Twitter Title, Twitter Description, Twitter URL, and Twitter Image</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/speed-checker.png" class="border border-black rounded-md w-full md:order-last" alt="Website Sherlock Speed Checker Screenshot" />

                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">2. Speed Check</h2>
                    <p class="mb-6 font-light">The Speed Check button takes you to Google's <a href="https://pagespeed.web.dev" target="_blank" class="text-blue-600">pagespeed.web.dev</a>, where you can gather all the speed insights for your page.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/word-counter.png" class="border border-black rounded-md w-full" alt="Website Sherlock Word Counter Screenshot" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">3. Word Count</h2>
                    <p class="mb-2 font-light">The word Counter tool grabs all the content from your website and counts the number of words in it. Of course, this includes all the words, not just the content. So, consider it an approximation rather than an exact count to get the most out of it.</p>
                    <p class="mb-6 font-light">This is going to be a handy tool for content creators, bloggers, and SEO enthusiasts. It lets you plan and optimize your content strategy effectively.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/favicons.png" class="border border-black rounded-md w-full md:order-last" alt="Website Sherlock Favicons Screenshot" />

                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">4. Favicons</h2>
                    <p class="mb-2 font-light">At this point, the extension looks for any favicons. If one or more is found, it will be displayed; if not, an alert will be shown. For more information, you can refer to this <a href="https://developers.google.com/search/docs/appearance/favicon-in-search" target="_blank" class="text-blue-600">Google writeup</a> on correctly implementing favicons.</p>
                    <p class="mb-6 font-light">Also, keep an eye out for broken image links, just like you see in the screenshot above. The extension comes in handy for spotting these issues and getting them fixed.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/images.png" class="border border-black rounded-md w-full" alt="Website Sherlock Images Screenshot" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">5. Images</h2>
                    <p class="mb-2 font-light">When it comes to images, the extension primarily checks for those without alt tags. It provides you with the total number of images and the count of images that lack alt tags.</p>
                    <p class="mb-2 font-light">Additionally, it shows you the images without alt tags, making it easy for you to go ahead and fix them. It considers both simple image tags with single src and those with srcsets as well.</p>
                    <p class="mb-2 font-light">Just like with favicons, be on the lookout for broken image links. The extension is a handy tool for spotting these issues and getting them fixed.</p>
                    <p class="mb-6 font-light">Here's <a href="https://developers.google.com/search/docs/appearance/google-images" target="_blank" class="text-blue-600">Google's guide</a> on how to get the most out of your images.</p>

                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/links.png" class="border border-black rounded-md w-full md:order-last" alt="Website Sherlock Links Screenshot" />

                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">6. Links</h2>
                    <p class="mb-2 font-light">In this section, the extension looks for link issues within the page. It gathers all the links and provides a total count. Then, it attempts to check their validity. If a link receives a proper 200 response code, it's marked as valid. If it returns an error code, it's marked as broken, and if the website doesn't respond (Response code 0), it's labeled as blocked.</p>
                    <p class="mb-6 font-light">It's worth noting that many popular websites don't allow direct access to their links from another page, which is what our extension does. Therefore, they send a 0 response code. This doesn't necessarily mean the link is bad; it simply indicates that you may need to manually check and confirm its validity.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/headings.png" class="border border-black rounded-md w-full" alt="Website Sherlock Headings Screenshot" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">7. Heading</h2>
                    <p class="mb-6 font-light">In this section, our extension grabs all the headings from the page structure. Ensuring a proper page structure is crucial for SEO and user navigation. Then, the extension checks for H1s and gives you a heads-up if there's no H1 heading or if there are more than one H1s.</p>

                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/schema.png" class="border border-black rounded-md w-full md:order-last" alt="Website Sherlock Schema Screenshot" />

                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">8. Links</h2>
                    <p class="font-light mb-2">In the next section, let us dive into Schema. Here, the extension actively check for the presence of schema markup on your page and display all the available structured data. It's a crucial part of enhancing your website's search engine visibility and providing valuable information to both users and search engines.</p>
                    <p class="font-light mb-6">Here's <a href="https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data" target="_blank" class="text-blue-600">Google's guide</a> on structured data.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/social-preview.png" class="border border-black rounded-md w-full" alt="Website Sherlock Social Preview Screenshot" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight text-gray-900">9. Social Preview</h2>
                    <p class="mb-2 font-light">The last stop is the Schema Preview. Here, our extension gives you a sneak peek at how your website looks on Google, Facebook, Twitter, and LinkedIn. It's the same deal for other social sites like Instagram and WhatsApp.</p>
                    <p class="mb-2 font-light">You can switch between options to check out how your site is shown. If the images or social data are missing or messed up, it's probably got something to do with those OG tags and Twitter Tags we talked about in the meta information section.</p>
                    <p class="mb-2 font-light">Here's <a href="https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started" target="_blank" class="text-blue-600">Twitter's guide</a> on cards.</p>
                    <p class="mb-6 font-light">Here's <a href="https://ogp.me/" target="_blank" class="text-blue-600">Open Graph guide</a> on OG Tags.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="py-8 px-4 lg:py-16 lg:px-6">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900">SEO Optimization at Your Fingertips</h2>
                    <p class="mb-4 font-light">Webpage Sherlock isn't just a useful tool; it's your partner in SEO success. It gives you all the info and insights you need to make smart decisions and boost your site's rankings and user experience.</p>
                    <p class="mb-4 font-medium">Getting started is a breeze.</p>
                    <p class="mb-4 font-light">Find Webpage Sherlock on the Chrome Web Store and download it for FREE.</p>
                    <p class="mb-4 font-light">Simply click on the extension icon or press <strong>Ctrl / Cmd + B</strong> to run it on any web page.</p>
                    <a href="https://chrome.google.com/webstore/detail/webpage-sherlock-page-ins/fgcokeipnkbcjndbhcmdcjpigplhfkbk" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800" target="_blank">
                        Download Webpage Sherlock Chrome Extension
                        <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="py-8 px-4 lg:py-16 lg:px-6">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900">In Closing</h2>
                    <p class="mb-4 font-light">I've created this extension to cater to my own SEO needs, and it's been a valuable tool. I've gone the extra mile to ensure it's user-friendly for general SEO tasks. I hope it proves useful to you as well. If you run into any bugs, encounter issues, or have suggestions for new features, please reach out via <a href="mailto:chromeextension@beautifulwebsites.dev" class="text-blue-600">email</a>.</p>
                </div>
            </div>
        </section>

    </main>

    </div>

    <?php include __DIR__ . '/../includes/scroll-up.php'; ?>

    <?php include __DIR__ . '/../includes/footer.php'; ?>


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