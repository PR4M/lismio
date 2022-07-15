<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Browse through 70.000 Audiobooks - lismio</title>
    <meta property="og:title" content="Browse through 70.000 Audiobooks - lismio" />
    <meta name="twitter:title" content="Browse through 70.000 Audiobooks - lismio" />
    <meta name="description" content="Find your titles for free on Spotify." />
    <meta property="og:description" content="Find your titles for free on Spotify." />
    <meta name="twitter:description" content="Find your titles for free on Spotify." />
    <meta name="copyright" content="lismio" />
    <meta name="author" content="lismio" />
    <meta name="twitter:card" content="Find your titles for free on Spotify." />
    <meta name="twitter:site" content="@lismio_de" />
    <meta name="twitter:creator" content="@lismio_de" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://lismio.fun/temp/vendor.css">
    <link rel="stylesheet" href="https://lismio.fun/temp/app.css">

    <livewire:styles />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/manucaralmo/GlowCookies@3.1.7/src/glowCookies.min.js"></script>
    <script>
        glowCookies.start('en', {
            style: 1,
            hideAfterClick: true,
            policyLink: 'https://lismio.com/privacy'
        });
    </script>

    <!-- CSRF Token -->
    @csrf
</head>

<body class="flex flex-col h-screen">

    <header class="border-b border-gray-100">
        <div class="flex items-center justify-between h-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
            <div class="flex items-center">
                <button type="button" class="p-2 sm:mr-4 lg:hidden">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <a href="#" class="flex logo">
                    <svg class="h-8 block w-auto text-primary-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 220.6 192.86">
                        <path class="b8da1755-0204-4f69-a8be-b41a34e548b3"
                            d="M149.42,307.4c-14,0-16.84-17.51-18.92-30.3-2-12.07-3.56-27.41-5-41-1.2-11.56-2.33-22.48-3.34-27.74,0-.13,0-.27-.08-.41,0,.14,0,.27-.08.41-4.28,22.22-12.76,36.22-17.43,42.59A12.16,12.16,0,1,1,85,236.61c2.79-3.8,9.65-14.6,13.16-32.8,4.63-24,8.29-43,24-43s19.32,19,24,43c1.12,5.82,2.18,15.56,3.36,26.95,1.19-11.39,2.24-21.13,3.36-26.94,1-5.05,2.06-16.11,3.21-27.82,1.13-11.51,2.41-24.55,3.86-34.54a116,116,0,0,1,2.58-13.38c3.09-11.19,9.49-13.53,14.31-13.53s11.21,2.34,14.31,13.53a114.2,114.2,0,0,1,2.57,13.38c1.46,10,2.74,23,3.87,34.54,1.15,11.71,2.23,22.77,3.21,27.82.65,3.37,1.28,7,2,10.92.4,2.28.87,5,1.4,7.93.53-2.91,1-5.64,1.4-7.92.67-3.89,1.31-7.56,2-10.93l.14-.63c3.56-14.31,12.69-23.19,23.82-23.19,12.53,0,20.45,11.72,23.68,22.69l.18.67a34.45,34.45,0,0,0,1.83,5.82c2.17-4.73,6.38-12.19,15.69-12.19h18.32a12.16,12.16,0,1,1,0,24.32H278.28c-2.35,5.25-7.51,15.46-19.6,15.46-7.66,0-21.33-3.58-27-27.49-.1-.32-.2-.62-.31-.92,0,.14-.07.28-.11.42-.59,3-1.18,6.49-1.81,10.12-4.75,27.45-8.5,49.13-25.36,49.13s-20.61-21.69-25.36-49.14c-.65-3.77-1.27-7.33-1.87-10.47,0-.14-.06-.28-.08-.43,0,.15-.06.29-.08.44-1,5.25-2.15,16.17-3.35,27.73-1.41,13.54-3,28.88-5,41C166.26,289.89,163.41,307.4,149.42,307.4Z"
                            transform="translate(-82.64 -114.54)"></path>
                    </svg>
                </a>

            </div>

            <div class="flex items-center justify-end flex-1">
                <nav
                    class="hidden lg:uppercase lg:text-gray-500 lg:tracking-wide lg:font-bold lg:text-xs lg:space-x-4 lg:flex">
                    <a href="/about"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current">
                        About
                    </a>

                    <a href="/news"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current">
                        News
                    </a>

                    <a href="/products"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current">
                        Products
                    </a>

                    <a href="/contact"
                        class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current">
                        Contact
                    </a>
                </nav>

                <div class="flex items-center ml-8">
                    <div class="flex items-center border-gray-100 divide-x divide-gray-100 border-x">
                        <span>
                            <a href="/cart" class="block p-6 border-b-4 border-transparent hover:border-red-700">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>

                                <span class="sr-only">Cart</span>
                            </a>
                        </span>

                        <span>
                            <a href="/account" class="block p-6 border-b-4 border-transparent hover:border-red-700">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>

                                <span class="sr-only"> Account </span>
                            </a>
                        </span>

                        <span class="hidden sm:block">
                            <a href="/search" class="block p-6 border-b-4 border-transparent hover:border-red-700">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>

                                <span class="sr-only"> Search </span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="flex-grow relative">

        <div class="flex-wrap w-full min-h-screen md:flex bg-gradient-to-tr from-gray-50 to-white">

            <div class="w-full h-72 bg-secondary-500"></div>

            <div class="px-4 mx-auto max-w-6xl sm:px-6 md:px-8 relative -top-52" x-data="{}">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8">
                    <div class="inline-flex w-full items-start justify-center">
                        @yield('image')
                    </div>

                    <div class="mt-8 sm:mt-0">
                        <h1 class="font-bold text-4xl text-primary text-center sm:text-left font-brand-headline">
                            @yield('title')
                        </h1>
                        <h2 class="mt-4 mb-8 text-2xl text-primary text-center sm:text-left font-brand-headline">
                            @yield('author')
                        </h2>

                        <div
                            class="bg-white relative p-6 rounded shadow my-4 text-base text-gray-500 text-left grid grid-cols-1 sm:grid-cols-3 gap-4">


                            <div class="mx-auto w-full col-span-3">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                        Like
                                    </div>

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Listen later
                                    </div>

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        Add to collection
                                    </div>

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                            </path>
                                        </svg>
                                        Finished
                                    </div>

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                            </path>
                                        </svg>
                                        Notes
                                    </div>

                                    <div wire:click="redirectLogin"
                                        class="cursor-pointer hover:border-primary-400 text-sm w-full p-2 inline-flex items-center justify-center border border-gray-300 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9">
                                            </path>
                                        </svg>
                                        Report
                                    </div>

                                </div>
                            </div>

                            <div class="h-1 border-b border-gray-100 w-full col-span-3 my-4"></div>


                            <div class="flex flex-wrap items-center justify-center col-span-3">

                                <a href="https://twitter.com/share?url=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods&amp;text=The Other Gods von H. P. Lovecraft&amp;via=lismio_de"
                                    class="mr-4" target="_blank"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'Twitter')">
                                    <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods&amp;t=The Other Gods von H. P. Lovecraft"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'Facebook')">
                                    <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                        </path>
                                    </svg>
                                </a>


                                <a href="https://reddit.com/submit?url=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods&amp;title=The Other Gods von H. P. Lovecraft"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'Reddit')">
                                    <svg class="w-6 h-6 text-red-500 fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z">
                                        </path>
                                    </svg>
                                </a>


                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'LinkedIn')">
                                    <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="whatsapp://send?text=The Other Gods von H. P. Lovecraft | https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'WhatsApp')">
                                    <svg class="w-6 h-6 text-green-400 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="https://telegram.me/share/url?url=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods&amp;text=The Other Gods von H. P. Lovecraft"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'Telegram')">
                                    <svg class="w-6 h-6 text-gray-400 text-blue-400 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path
                                            d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="mailto:?subject=The Other Gods von H. P. Lovecraft&amp;body=https://lismio.app/audiobook/54254/h-p-lovecraft-the-other-gods"
                                    target="_blank" class="mr-4"
                                    @click="addAnalytics('frontpage','share','audiobook',54254,'Email')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="py-6 mt-2">
                    <div class="">
                        <div class="mb-2 text-xl font-medium font-brand-headline">Preview</div>
                        @yield('preview')
                    </div>
                </div>

                <div class="mt-12 text-xl font-medium text-primary font-brand-headline">Summary</div>

                <div class="my-4 text-lg text-gray-500">
                    @yield('summary')
                </div>

                <div class="mt-12 text-xl font-medium text-primary font-brand-headline">Artists</div>

                @yield('artists')

                <div class="mt-12 text-xl font-medium text-primary font-brand-headline">Additional Details</div>

                @yield('additional-details')

                <div class="mt-12 text-xl font-medium text-primary font-brand-headline">Shops</div>

                @yield('shops')

            </div>

        </div>

    </div>

    <footer class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">

            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-center text-base text-gray-400">Copyright 2022 lismio. All rights reserved. |
                    <a href="https://lismio.com/privacy" target="_blank">Privacy</a> |
                    <a href="https://lismio.com/legal" target="_blank">Legal</a>
                </p>

            </div>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <livewire:scripts />

</body>

</html>
