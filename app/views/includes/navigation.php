
<nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
            </svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Beautiful Websites</span>
        </a>
        <div class="flex md:order-2">
            <a href="/submit-your-website" class="bg-gray-900 text-white hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-lg text-sm px-4 py-2 text-center mr-3 hidden md:flex">
                Submit Your Website
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                </svg>
            </a>
            <a href="/webpage-sherlock-chrome-extension" class="bg-gray-900 text-white hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-lg text-sm px-4 py-2 text-center mr-3 hidden md:flex">
                Website Sherlock
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
            </a>

            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="/submit-your-website" class="block py-2 pl-3 pr-4 text-gray-900 rounded md:p-0" aria-current="page">Submit Your Website</a>
                </li>
                <li>
                    <a href="/webpage-sherlock-chrome-extension" class="block py-2 pl-3 pr-4 text-gray-900 rounded md:p-0">Website Sherlock - Page Insights Made Easy</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Get the menu button and the menu itself
    const menuButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
    const menu = document.getElementById('navbar-sticky');

    // Set an initial state for the menu
    let isMenuOpen = false;

    // Function to toggle the menu
    function toggleMenu() {
        isMenuOpen = !isMenuOpen; // Toggle the state

        if (isMenuOpen) {
            menu.style.display = 'block'; // Display the menu
        } else {
            menu.style.display = 'none'; // Hide the menu
        }
    }

    // Add a click event listener to the menu button
    menuButton.addEventListener('click', toggleMenu);
</script>