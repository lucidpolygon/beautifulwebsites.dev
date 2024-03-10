<header class="w-full px-6 antialiased bg-white">
    <nav class="relative z-50 h-16 select-none mx-auto max-w-7xl">
        <div class="container relative flex flex-wrap items-center justify-between h-16 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
            <div class="flex items-center justify-start w-3/4 md:w-1/4 h-full pr-4">
                <a href="<?php echo ($base_url) ?>" class="flex items-center py-4 space-x-2 font-extrabold text-gray-900 md:py-0">
                    <img src="<?php echo ($base_url . 'assets/imgs/logo.png') ?>" alt="Beautiful Websites Logo" class="h-8 ml-1 outline">
                    <span><?php echo ($project_name) ?></span>
                </a>
            </div>
            <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex closed" id="menu">
                <div class="flex-col justify-end w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row pb-10 md:pb-0">
                    <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 space-x-2 font-black leading-none text-gray-900 md:hidden">
                        <img src="<?php echo ($base_url . 'assets/imgs/logo.png') ?>" alt="Beautiful Websites Logo" class="w-auto h-7 -translate-y-px outline">
                        <span><?php echo ($project_name) ?></span>
                    </a>
                    <div class="flex flex-col items-start justify-end w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                        <a href="<?php echo ($base_url) . 'websites' ?>" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Beautiful Websites</a>
                        <a href="<?php echo ($base_url) . 'blog' ?>" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Indie Hacker Resources</a>
                        <a href="<?php echo ($base_url) . 'webpage-sherlock-chrome-extension' ?>" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Webpage Sherlock</a>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 flex flex-col items-center justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100" id="menuToggleButton">
                <svg class="w-6 h-6 text-gray-700 burger-icon" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg class="w-6 h-6 text-gray-700 close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </div>
    </nav>
</header>