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

    <main class="px-2">

        <article class="prose prose-slate mx-auto my-32">
            <h1 class="text-center">Webpage Sherlock: Your Ultimate Webpage Analysis Companion</h1>

            <p>
                The idea is to make website analysis a breeze, without the need to inspect the page, run complex tools, or visit a website to check rich previews. Simply press a keyboard shortcut and obtain a snapshot of the webpage you're on. And that's precisely what I've built.
            </p>

            <h2 class="font-medium text-2xl text-center p-5 mt-0 border rounded-xl bg-black text-white">Install the Extension. <br class="mt-3" /> Click on the extension icon or press CMD / CTRL + B. <br class="mt-3" /> Watch your page's analysis in a popup. 🎉 </h2>


            <h2>Why Webpage Sherlock?</h2>
            <p>I've always struggled to obtain a straightforward page analysis that encompassed everything - meta tags, images, links, social previews, and more, all in one place. So, I decided to create a tool myself. In the process, I learned how to build a Chrome extension. It’s like getting double the espresso shot in a single cup. 🤠</p>

            <h2>What is analyzed?</h2>

            <ol>
                <li>
                    <h3>Meta Information</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/meta-information.png" class="border rounded-2xl p-5" alt="Website Sherlock Meta Information Screenshot" />
                    <p>The extension will grab all the meta info from your page and let you know if something's missing or not quite right. These are the meta tags I've got covered.</p>
                    <ol>
                        <li><strong>Title</strong> 
                        <ul>
                            <li><a href="https://developers.google.com/search/docs/appearance/title-link" target="_blank">Google guidelines on title</a></li>
                        </ul></li>
                        <li><strong>Meta Title</strong></li>
                        <li><strong>Meta Description</strong></li>
                        <li><strong>OG Title</strong></li>
                        <li><strong>OG Description</strong></li>
                        <li><strong>OG Type</strong></li>
                        <li><strong>OG Image</strong></li>
                        <li><strong>OG URL</strong></li>
                        <li><strong>Twitter Title</strong></li>
                        <li><strong>Twitter Description</strong></li>
                        <li><strong>Twitter Card</strong></li>
                        <li><strong>Twitter Image</strong></li>
                        <li><strong>Twitter URL</strong></li>
                    </ol>
                    <p>Having this information at your fingertips allows you to fine-tune your SEO strategy, ensuring your content aligns perfectly with your target audience's expectations.</p>
                </li>
                <li>
                    <h3>Speed Check</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/speed-checker.png" class="border rounded-2xl p-5" alt="Website Sherlock Speed Checker Screenshot" />
                    <p>The Speed Check button takes you to Google's <a href="https://pagespeed.web.dev" target="_blank">pagespeed.web.dev</a>, where you can gather all the speed insights for your page.</p>
                </li>
                <li>
                    <h3>Word Count</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/word-counter.png" class="border rounded-2xl p-5" alt="Website Sherlock Word Counter Screenshot" />
                    <p>The word Counter tool grabs all the content from your website and counts the number of words in it. Of course, this includes all the words, not just the content. So, consider it an approximation rather than an exact count to get the most out of it.</p>
                    <p>This is going to be a handy tool for content creators, bloggers, and SEO enthusiasts. It lets you plan and optimize your content strategy effectively.</p>
                </li>
                <li>
                    <h3>Favicons</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/favicons.png" class="border rounded-2xl p-5" alt="Website Sherlock Favicons Screenshot" />
                    <p>At this point, the extension looks for any favicons. If one or more is found, it will be displayed; if not, an alert will be shown. For more information, you can refer to this <a href="https://developers.google.com/search/docs/appearance/favicon-in-search" target="_blank">Google writeup</a> on correctly implementing favicons.</p>
                    <p>Also, keep an eye out for broken image links, just like you see in the screenshot above. The extension comes in handy for spotting these issues and getting them fixed.</p>
                </li>
                <li>
                    <h3>Images</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/images.png" class="border rounded-2xl p-5" alt="Website Sherlock Images Screenshot" />
                    <p>When it comes to images, the extension primarily checks for those without alt tags. It provides you with the total number of images and the count of images that lack alt tags.</p> 
                    <p>Additionally, it shows you the images without alt tags, making it easy for you to go ahead and fix them. It considers both simple image tags with single src and those with srcsets as well.</p>
                    <p>Just like with favicons, be on the lookout for broken image links. The extension is a handy tool for spotting these issues and getting them fixed.</p>
                    <p>Here's <a href="https://developers.google.com/search/docs/appearance/google-images" target="_blank">Google's guide</a> on how to get the most out of your images.</p>
                </li>
                <li>
                    <h3>Links</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/links.png" class="border rounded-2xl p-5" alt="Website Sherlock Links Screenshot" />
                    <p>In this section, the extension looks for link issues within the page. It gathers all the links and provides a total count. Then, it attempts to check their validity. If a link receives a proper 200 response code, it's marked as valid. If it returns an error code, it's marked as broken, and if the website doesn't respond (Response code 0), it's labeled as blocked.</p>
                    <p>It's worth noting that many popular websites don't allow direct access to their links from another page, which is what our extension does. Therefore, they send a 0 response code. This doesn't necessarily mean the link is bad; it simply indicates that you may need to manually check and confirm its validity.</p>
                </li>
                <li>
                    <h3>Heading</h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/headings.png" class="border rounded-2xl p-5" alt="Website Sherlock Headings Screenshot" />
                    <p>In this section, our extension grabs all the headings from the page structure. Ensuring a proper page structure is crucial for SEO and user navigation. Then, the extension checks for H1s and gives you a heads-up if there's no H1 heading or if there are more than one H1s.</p>
                    <p></p>
                </li>
                <li>
                    <h3>Schema </h3>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/schema.png" class="border rounded-2xl p-5" alt="Website Sherlock Schema Screenshot" />
                    <p>In the next section, we dive into Schema. Here, we actively check for the presence of schema markup on your page and display all the available structured data. It's a crucial part of enhancing your website's search engine visibility and providing valuable information to both users and search engines.</p>
                    <p>Here's <a href="https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data" target="_blank">Google's guide</a> on structured data.</p>

                </li>
                <li>
                    <h2>Social Preview</h2>
                    <img src="https://beautifulwebsites.dev/assets/imgs/website-sherlock/social-preview.png" class="border rounded-2xl p-5" alt="Website Sherlock Social Preview Screenshot" />
                    <p>
                    The last stop is the Schema Preview. Here, our extension gives you a sneak peek at how your website looks on Google, Facebook, Twitter, and LinkedIn. It's the same deal for other social sites like Instagram and WhatsApp.</p>
                    <p>You can switch between options to check out how your site is shown. If the images or social data are missing or messed up, it's probably got something to do with those OG tags and Twitter Tags we talked about in the meta information section.</p>
                    <p>Here's <a href="https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started" target="_blank">Twitter's guide</a> on cards.</p>
                    <p>Here's <a href="https://ogp.me/" target="_blank">Open Graph guide</a> on OG Tags.</p>
                </li>
            </ol>
            <h2>SEO Optimization at Your Fingertips</h2>
            <p>Webpage Sherlock isn't just a useful tool; it's your partner in SEO success. It gives you all the info and insights you need to make smart decisions and boost your site's rankings and user experience.</p>
            <h2>How to Get Started</h2>
            <p>Ready to harness the power of Webpage Sherlock? Getting started is a breeze:</p>
            <ul>
                <li><strong>Download</strong>: Find Webpage Sherlock on the Chrome Web Store and download it for FREE.</li>
                <li>Simply click on the extension icon or press <strong>Ctrl / Cmd + B</strong> to run it.</li>
            </ul>
            <h2>In Closing</h2>
            <p>I've created this extension to cater to my own SEO needs, and it's been a valuable tool. I've gone the extra mile to ensure it's user-friendly for general SEO tasks. I hope it proves useful to you as well. If you run into any bugs, encounter issues, or have suggestions for new features, please reach out via email.</p>

        </article>


    </main>

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