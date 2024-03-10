<footer class="bg-white border-t-2 border-dotted border-gray-200 mx-auto max-w-7xl px-4 py-12">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://beautifulwebsites.dev" class="flex items-center">
                    <img src="/assets/imgs/logo.png" class="mr-3 h-8" alt="Beautiful Websites Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Beautiful Websites</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Indie Tools</h2>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <a href="https://writefastai.com" class="hover:underline">Write Fast AI</a>
                        </li>
                        <li>
                            <a href="https://printyourcopy.com/" class="hover:underline">Print Your Copy</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Follow us</h2>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <a href="https://twitter.com/TheHighSecond" class="hover:underline ">𝕏</a>
                        </li>
                    </ul>
                </div>            
            </div>
        </div>
        <hr class="my-6 border-t-2 border-dotted sm:mx-auto lg:my-8" />
        <div class="text-center">
            <span class="text-sm text-gray-500 sm:text-center">© 2022 <a href="https://beautifulwebsites.dev" class="hover:underline">Beautiful Websites</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navMenu = document.getElementById('menu');
        const menuToggleButton = document.getElementById('menuToggleButton');

        menuToggleButton.addEventListener('click', function() {
            const isOpen = navMenu.classList.contains('flex');

            navMenu.classList.toggle('flex', !isOpen);
            navMenu.classList.toggle('fixed', !isOpen);
            navMenu.classList.toggle('hidden', isOpen);
            navMenu.classList.toggle('closed', isOpen);

            menuToggleButton.querySelector('.burger-icon').style.display = isOpen ? 'block' : 'none';
            menuToggleButton.querySelector('.close-icon').style.display = isOpen ? 'none' : 'block';
        });
    });
</script>

</body>

</html>