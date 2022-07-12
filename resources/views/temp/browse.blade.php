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
    {{-- <link rel="stylesheet" href="https://lismio.app/css/tailwind.css?id=791c75e2115311ded3ce619023946aa1">
    <link rel="stylesheet" href="https://lismio.app/css/vendor.css?id=010ca7e5fb7077fc6e0f0957aceb63e2">
    <link rel="stylesheet" href="https://lismio.app/css/app.css?id=1a4e95ca239017e6f8e5be2d84f2c885"> --}}
    @vite('resources/css/app.css')

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
    <script src="https://lismio.app/js/app.js?id=d8563ad972073f0560ef6c295456bdbb" defer></script>

    <!-- CSRF Token -->
    @csrf
</head>

<body class="flex flex-col h-screen">

    <header class="bg-white shadow " x-data="{ 'user_menu': false, 'mobile_menu': false }" x-cloak>
        <div class="max-w-full px-2 mx-auto sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
            <div class="relative flex justify-between h-16">
                <div class="relative z-10 flex px-2 lg:px-0">
                    <div class="flex items-center flex-shrink-0">
                        <a href="https://lismio.app">
                            <svg class="h-8 block w-auto text-primary-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 220.6 192.86">
                                <path class="b8da1755-0204-4f69-a8be-b41a34e548b3"
                                    d="M149.42,307.4c-14,0-16.84-17.51-18.92-30.3-2-12.07-3.56-27.41-5-41-1.2-11.56-2.33-22.48-3.34-27.74,0-.13,0-.27-.08-.41,0,.14,0,.27-.08.41-4.28,22.22-12.76,36.22-17.43,42.59A12.16,12.16,0,1,1,85,236.61c2.79-3.8,9.65-14.6,13.16-32.8,4.63-24,8.29-43,24-43s19.32,19,24,43c1.12,5.82,2.18,15.56,3.36,26.95,1.19-11.39,2.24-21.13,3.36-26.94,1-5.05,2.06-16.11,3.21-27.82,1.13-11.51,2.41-24.55,3.86-34.54a116,116,0,0,1,2.58-13.38c3.09-11.19,9.49-13.53,14.31-13.53s11.21,2.34,14.31,13.53a114.2,114.2,0,0,1,2.57,13.38c1.46,10,2.74,23,3.87,34.54,1.15,11.71,2.23,22.77,3.21,27.82.65,3.37,1.28,7,2,10.92.4,2.28.87,5,1.4,7.93.53-2.91,1-5.64,1.4-7.92.67-3.89,1.31-7.56,2-10.93l.14-.63c3.56-14.31,12.69-23.19,23.82-23.19,12.53,0,20.45,11.72,23.68,22.69l.18.67a34.45,34.45,0,0,0,1.83,5.82c2.17-4.73,6.38-12.19,15.69-12.19h18.32a12.16,12.16,0,1,1,0,24.32H278.28c-2.35,5.25-7.51,15.46-19.6,15.46-7.66,0-21.33-3.58-27-27.49-.1-.32-.2-.62-.31-.92,0,.14-.07.28-.11.42-.59,3-1.18,6.49-1.81,10.12-4.75,27.45-8.5,49.13-25.36,49.13s-20.61-21.69-25.36-49.14c-.65-3.77-1.27-7.33-1.87-10.47,0-.14-.06-.28-.08-.43,0,.15-.06.29-.08.44-1,5.25-2.15,16.17-3.35,27.73-1.41,13.54-3,28.88-5,41C166.26,289.89,163.41,307.4,149.42,307.4Z"
                                    transform="translate(-82.64 -114.54)" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative z-0 flex items-center justify-center flex-1 px-2 sm:absolute sm:inset-0">

                    <form action="https://lismio.app/search/audiobooks" method="get">

                        <div class="w-full xs:max-w-xs">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="keywords" name="keywords"
                                    class="block w-full py-2 pl-10 pr-3 text-sm placeholder-gray-500 bg-white border border-gray-300 rounded-md focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-primary-400 focus:border-primary-400 sm:text-sm"
                                    placeholder="Search" type="search">


                            </div>
                        </div>

                    </form>

                </div>
                <div class="relative z-10 flex items-center lg:hidden">

                    <div
                        x-data="{ show_modal_filter: window.Livewire.find('G6GvbFEO5UP8F3ZTZHb2').entangle('show_modal_filter') }" wire:key="filters_component">

                        <button @click="show_modal_filter = true" type="button"
                            class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="-ml-0.5 mr-2 h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            Filters
                            <span
                                class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                2 </span>
                        </button>


                        <!-- Edit Avatar Modal -->
                        <div x-show="show_modal_filter" class="relative z-50" aria-labelledby="modal-title"
                            role="dialog" aria-modal="true" id="edit_promise_modal">
                            <div x-show="show_modal_filter"
                                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                            <div class="fixed z-10 inset-0 overflow-y-auto">
                                <div x-show="show_modal_filter"
                                    class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                                    x-transition:enter="ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                    <div class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all w-full sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        @click.outside="show_modal_filter = false">
                                        <div class="">

                                            <div class="p-5 grid grid-cols-1 gap-4 bg-gray-50 rounded-lg">
                                                <div>
                                                    <label for="service"
                                                        class="block text-sm font-medium text-gray-700">Streaming
                                                        Service</label>
                                                    <select wire:model.defer="filters.service"
                                                        wire:key="select_filter_service" id="service"
                                                        name="service"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                        <option value="Spotify">Spotify</option>
                                                        <option value="Deezer">Deezer</option>
                                                        <option value="Napster">Napster</option>
                                                        <option value="AppleMusic">AppleMusic</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="language"
                                                        class="block text-sm font-medium text-gray-700">Language</label>
                                                    <select wire:model.defer="filters.language"
                                                        wire:key="select_filter_language" id="language"
                                                        name="language"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                        <option value="de">German</option>
                                                        <option value="en">English</option>
                                                        <option value="nl">Dutch</option>
                                                        <option value="es">Spanish</option>
                                                    </select>
                                                </div>


                                                <div>
                                                    <label for="runtime"
                                                        class="block text-sm font-medium text-gray-700">Runtime</label>
                                                    <select wire:model.defer="filters.runtime"
                                                        wire:key="select_filter_runtime" id="runtime"
                                                        name="runtime"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                        <option value="all">All</option>
                                                        <option value="30">&lt; 30 Minutes</option>
                                                        <option value="60">&lt; 1 Hour</option>
                                                        <option value="120">&lt; 2 Hours</option>
                                                        <option value="300">&lt; 5 Hours</option>
                                                    </select>
                                                </div>




                                            </div>

                                        </div>
                                        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">

                                            <button type="button" wire:click="filterChanged"
                                                @click="show_modal_filter = false"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                Save Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        /div>

                        <!-- Mobile menu button -->
                        <button
                            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                            aria-expanded="false" @click="mobile_menu=true">

                            <!-- Icon when menu is closed. -->
                            <!--
                                Heroicon name: outline/menu

                                Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!-- Icon when menu is open. -->
                            <!--
                                    Heroicon name: outline/x

                                    Menu open: "block", Menu closed: "hidden"
                                -->
                            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
                        <button
                            class="flex-shrink-0 p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->

                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative flex-shrink-0 ml-4">
                            <div>
                                <a href="https://lismio.app/login"
                                    class="flex bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tertiary-500">
                                    <img class="w-8 h-8 rounded-full" src="https://ab.cover.lism.io/no_cover.jpg"
                                        alt="">
                                </a>

                            </div>

                            <div class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                x-show="user_menu" @click.away="user_menu = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="ransform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">
                                <a href="https://lismio.app/user/profile"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Profile</a>



                                <a href="https://lismio.app/logout"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    Sign out
                                </a>

                                <form id="logout-form" action="https://lismio.app/logout" method="POST"
                                    style="display: none;">
                                    <input type="hidden" name="_token"
                                        value="sHfGWx23ritdOLRbi2lejCgx2MlzJIrKYuoH4hnP">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="hidden lg:py-2 lg:flex" aria-label="Global" x-cloak>
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
                    <div class="flex items-center justify-start space-x-8 w-1/2">


                        <a href="https://lismio.app"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-primary-400 hover:text-white bg-primary-400 text-white">
                            Browse
                        </a>

                        <a href="https://lismio.app/bestsellers"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-primary-400 hover:text-white text-primary-500">
                            Bestsellers
                        </a>

                        <a href="https://lismio.app/series"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-primary-400 hover:text-white text-primary-500">
                            series
                        </a>




                        <a href="https://lismio.app/previews"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium  rounded-md hover:bg-primary-400 hover:text-white text-primary-500">
                            Previews
                        </a>

                        <a href="https://lismio.app/library"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium  rounded-md hover:bg-primary-400 hover:text-white text-primary-500">
                            Library
                        </a>

                        <a href="https://lismio.app/community"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium  rounded-md hover:bg-primary-400 hover:text-white  text-primary-500">
                            Community
                        </a>
                    </div>
                    <div class="flex items-center justify-end w-1/2">
                        <div
                            x-data="{ show_modal_filter: window.Livewire.find('DT2ab0bhnsdKSfiCqmKc').entangle('show_modal_filter') }" wire:key="filters_component">

                            <button @click="show_modal_filter = true" type="button"
                                class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-0.5 mr-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                Filters
                                <span
                                    class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    2 </span>
                            </button>


                            <!-- Edit Avatar Modal -->
                            <div x-show="show_modal_filter" class="relative z-50" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true" id="edit_promise_modal">
                                <div x-show="show_modal_filter"
                                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div x-show="show_modal_filter"
                                        class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                        <div class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all w-full sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            @click.outside="show_modal_filter = false">
                                            <div class="">

                                                <div class="p-5 grid grid-cols-1 gap-4 bg-gray-50 rounded-lg">
                                                    <div>
                                                        <label for="service"
                                                            class="block text-sm font-medium text-gray-700">Streaming
                                                            Service</label>
                                                        <select wire:model.defer="filters.service"
                                                            wire:key="select_filter_service" id="service"
                                                            name="service"
                                                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                            <option value="Spotify">Spotify</option>
                                                            <option value="Deezer">Deezer</option>
                                                            <option value="Napster">Napster</option>
                                                            <option value="AppleMusic">AppleMusic</option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label for="language"
                                                            class="block text-sm font-medium text-gray-700">Language</label>
                                                        <select wire:model.defer="filters.language"
                                                            wire:key="select_filter_language" id="language"
                                                            name="language"
                                                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                            <option value="de">German</option>
                                                            <option value="en">English</option>
                                                            <option value="nl">Dutch</option>
                                                            <option value="es">Spanish</option>
                                                        </select>
                                                    </div>


                                                    <div>
                                                        <label for="runtime"
                                                            class="block text-sm font-medium text-gray-700">Runtime</label>
                                                        <select wire:model.defer="filters.runtime"
                                                            wire:key="select_filter_runtime" id="runtime"
                                                            name="runtime"
                                                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500 sm:text-sm rounded-md">
                                                            <option value="all">All</option>
                                                            <option value="30">&lt; 30 Minutes</option>
                                                            <option value="60">&lt; 1 Hour</option>
                                                            <option value="120">&lt; 2 Hours</option>
                                                            <option value="300">&lt; 5 Hours</option>
                                                        </select>
                                                    </div>




                                                </div>

                                            </div>
                                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">

                                                <button type="button" wire:click="filterChanged"
                                                    @click="show_modal_filter = false"
                                                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                    Save Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </nav>
            </div>

            <!--
            Mobile menu, toggle classes based on menu state.

            Menu open: "block", Menu closed: "hidden"
          -->
            <nav class="border-b border-gray-100 lg:hidden" x-show="mobile_menu" @click.away="mobile_menu = false"
                aria-label="Global" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform height-0" x-transition:enter-end="transform height-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform height-100"
                x-transition:leave-end="transform height-0">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
                    <a href="https://lismio.app"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">Browse</a>

                    <a href="https://lismio.app/bestsellers"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">Bestsellers</a>

                    <a href="https://lismio.app/series"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">series</a>

                    <a href="https://lismio.app/previews"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">Previews</a>

                    <a href="https://lismio.app/library"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">Library</a>

                    <a href="https://lismio.app/community"
                        class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50 hover:text-gray-900">Community</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200">

                    <div class="px-2 mt-3 space-y-1">
                        <a href="https://lismio.app/login"
                            class="block px-3 py-2 text-base font-medium text-gray-500 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            Sign in</a>

                        <a href="https://lismio.app/register"
                            class="block px-3 py-2 text-base font-medium text-gray-500 rounded-md hover:bg-gray-50 hover:text-gray-900">
                            create Account</a>
                    </div>

                </div>
            </nav>
    </header>


    <div class="flex-grow relative">

        <div>
            <div class="bg-white">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-base font-semibold text-primary-400 tracking-wide uppercase">Browse</h2>
                        <p
                            class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                            Look around</p>
                        <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Browse through the lismio library and
                            find your new adventure.</p>
                    </div>
                </div>
            </div>

            <div
                class="p-4 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">

                <div
                    class="p-4 w-full rounded-xl  hover:bg-gray-100" x-data="">


                    <div class="relative w-full min-w-full rounded-xl bg-gray-500">
                        <a href="https://lismio.app/audiobook/55108/h-g-wells-the-new-machiavelli-book-the-fourth-isabel"
                            class="block">
                            <img src="https://ab.cover.lism.io/864db52577c09dae2b0f274ea4923d64_500.jpg"
                                onerror="this.src='https://ab.cover.lism.io/no_cover.jpg'" loading="lazy"
                                class="rounded-xl fade-in w-full ransform transition duration-300" draggable="false"
                                title="H. G. Wells - The New Machiavelli - Book the Fourth: Isabel"
                                alt="Cover von H. G. Wells - The New Machiavelli - Book the Fourth: Isabel">
                        </a>





                    </div>


                    <div class="items-center mt-2">

                        <div class="inline-flex justify-start items-center w-full text-gray-700">
                            <div class="text-sm truncate">
                                <div class="font-medium truncate w-full">
                                    <a href="https://lismio.app/audiobook/55108/h-g-wells-the-new-machiavelli-book-the-fourth-isabel"
                                        class="hover:underline">
                                        The New Machiavelli - Book the Fourth: Isabel
                                    </a>
                                </div>
                                <div class="text-gray-500">
                                    <a href="https://lismio.app/artist/h-g-wells-4277" class="hover:underline">
                                        H. G. Wells
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

                <div
                    class="p-4 w-full rounded-xl  hover:bg-gray-100" x-data="">


                    <div class="relative w-full min-w-full rounded-xl bg-gray-500">
                        <a href="https://lismio.app/audiobook/55089/h-g-wells-first-and-last-things-book-1-metaphysics"
                            class="block">
                            <img src="https://ab.cover.lism.io/1fa1e4dfc414710a0760db8c5c70774f_500.jpg"
                                onerror="this.src='https://ab.cover.lism.io/no_cover.jpg'" loading="lazy"
                                class="rounded-xl fade-in w-full ransform transition duration-300" draggable="false"
                                title="H. G. Wells - First and Last Things - Book 1: Metaphysics"
                                alt="Cover von H. G. Wells - First and Last Things - Book 1: Metaphysics">
                        </a>





                    </div>


                    <div class="items-center mt-2">

                        <div class="inline-flex justify-start items-center w-full text-gray-700">
                            <div class="text-sm truncate">
                                <div class="font-medium truncate w-full">
                                    <a href="https://lismio.app/audiobook/55089/h-g-wells-first-and-last-things-book-1-metaphysics"
                                        class="hover:underline">
                                        First and Last Things - Book 1: Metaphysics
                                    </a>
                                </div>
                                <div class="text-gray-500">
                                    <a href="https://lismio.app/artist/h-g-wells-4277" class="hover:underline">
                                        H. G. Wells
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

                <div
                    class="p-4 w-full rounded-xl  hover:bg-gray-100" x-data="">


                    <div class="relative w-full min-w-full rounded-xl bg-gray-500">
                        <a href="https://lismio.app/audiobook/55171/edgar-rice-burroughs-the-witch-doctor-seeks-vengeance-a-tarzan-story"
                            class="block">
                            <img src="https://ab.cover.lism.io/0131b16d8be82709f3cadb4dea6ebbb7_500.jpg"
                                onerror="this.src='https://ab.cover.lism.io/no_cover.jpg'" loading="lazy"
                                class="rounded-xl fade-in w-full ransform transition duration-300" draggable="false"
                                title="Edgar Rice Burroughs - The Witch-Doctor Seeks Vengeance - A Tarzan Story"
                                alt="Cover von Edgar Rice Burroughs - The Witch-Doctor Seeks Vengeance - A Tarzan Story">
                        </a>





                    </div>


                    <div class="items-center mt-2">

                        <div class="inline-flex justify-start items-center w-full text-gray-700">
                            <div class="text-sm truncate">
                                <div class="font-medium truncate w-full">
                                    <a href="https://lismio.app/audiobook/55171/edgar-rice-burroughs-the-witch-doctor-seeks-vengeance-a-tarzan-story"
                                        class="hover:underline">
                                        The Witch-Doctor Seeks Vengeance - A Tarzan Story
                                    </a>
                                </div>
                                <div class="text-gray-500">
                                    <a href="https://lismio.app/artist/edgar-rice-burroughs-1095"
                                        class="hover:underline">
                                        Edgar Rice Burroughs
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

                <div
                    class="p-4 w-full rounded-xl  hover:bg-gray-100" x-data="">

                    <div class="relative w-full min-w-full rounded-xl bg-gray-500">
                        <a href="https://lismio.app/audiobook/55171/edgar-rice-burroughs-the-witch-doctor-seeks-vengeance-a-tarzan-story"
                            class="block">
                            <img src="https://ab.cover.lism.io/0131b16d8be82709f3cadb4dea6ebbb7_500.jpg"
                                onerror="this.src='https://ab.cover.lism.io/no_cover.jpg'" loading="lazy"
                                class="rounded-xl fade-in w-full ransform transition duration-300" draggable="false"
                                title="Edgar Rice Burroughs - The Witch-Doctor Seeks Vengeance - A Tarzan Story"
                                alt="Cover von Edgar Rice Burroughs - The Witch-Doctor Seeks Vengeance - A Tarzan Story">
                        </a>





                    </div>


                    <div class="items-center mt-2">

                        <div class="inline-flex justify-start items-center w-full text-gray-700">
                            <div class="text-sm truncate">
                                <div class="font-medium truncate w-full">
                                    <a href="https://lismio.app/audiobook/55171/edgar-rice-burroughs-the-witch-doctor-seeks-vengeance-a-tarzan-story"
                                        class="hover:underline">
                                        The Witch-Doctor Seeks Vengeance - A Tarzan Story
                                    </a>
                                </div>
                                <div class="text-gray-500">
                                    <a href="https://lismio.app/artist/edgar-rice-burroughs-1095"
                                        class="hover:underline">
                                        Edgar Rice Burroughs
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>


            </div>

            <div x-data="{
                observe() {
                    let observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                window.livewire.find('xOOIsTife0iAC47iKIny').call('loadMore')
                            }
                        })
                    }, {
                        root: null
                    })

                    observer.observe(this.$el)
                }
            }" x-init="observe"></div>

            <div class="p-8 inline-flex items-center justify-center w-full" wire:loading.flex
                wire:target="getAudiobooks">
                <svg class="w-5 h-5 mr-3 -ml-1 text-primary-500 animate-spin" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10"
                        stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
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

    @vite('resources/js/app.js')

    <livewire:scripts />

</body>

</html>
