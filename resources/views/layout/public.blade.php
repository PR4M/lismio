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
    @vite('resources/css/app.css')

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

                    <div wire:id="G6GvbFEO5UP8F3ZTZHb2"
                        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;G6GvbFEO5UP8F3ZTZHb2&quot;,&quot;name&quot;:&quot;filters.filters-audiobooks&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;671cd054&quot;,&quot;data&quot;:{&quot;filters&quot;:{&quot;service&quot;:&quot;Spotify&quot;,&quot;language&quot;:&quot;en&quot;,&quot;type&quot;:&quot;all&quot;,&quot;runtime&quot;:&quot;all&quot;,&quot;rating&quot;:&quot;all&quot;},&quot;show_modal_filter&quot;:false,&quot;filters_active&quot;:2},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;filters&quot;:{&quot;class&quot;:&quot;App\\Models\\UserFilter&quot;,&quot;id&quot;:211,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;8075b26928f64a80164f44bdc25b6d8257fe647d1a77994a47f55d7fb11bcfff&quot;}}"
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

                        <!-- Livewire Component wire-end:G6GvbFEO5UP8F3ZTZHb2 -->
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
                        <div wire:id="DT2ab0bhnsdKSfiCqmKc"
                            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;DT2ab0bhnsdKSfiCqmKc&quot;,&quot;name&quot;:&quot;filters.filters-audiobooks&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2f146bfa&quot;,&quot;data&quot;:{&quot;filters&quot;:{&quot;service&quot;:&quot;Spotify&quot;,&quot;language&quot;:&quot;en&quot;,&quot;type&quot;:&quot;all&quot;,&quot;runtime&quot;:&quot;all&quot;,&quot;rating&quot;:&quot;all&quot;},&quot;show_modal_filter&quot;:false,&quot;filters_active&quot;:2},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;filters&quot;:{&quot;class&quot;:&quot;App\\Models\\UserFilter&quot;,&quot;id&quot;:211,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;70c3041e5a99fbc97ac671aaafe60f7ef72bf9efb728b3a743d78dc25999d019&quot;}}"
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

                        <!-- Livewire Component wire-end:DT2ab0bhnsdKSfiCqmKc -->
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


        <div wire:id="xOOIsTife0iAC47iKIny"
            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;xOOIsTife0iAC47iKIny&quot;,&quot;name&quot;:&quot;pages.page-browse&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;filterChanged&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:{&quot;8012&quot;:{&quot;id&quot;:&quot;0wxO2rIBHTjWCWIjX0gM&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8014&quot;:{&quot;id&quot;:&quot;avi5jrHUKvFcwN0rplDH&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8016&quot;:{&quot;id&quot;:&quot;XMTVdBDwIgqoKZxUBgzr&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8018&quot;:{&quot;id&quot;:&quot;lweu5XVYZ54elNXX9gos&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8019&quot;:{&quot;id&quot;:&quot;PJtaB1R9OH2aHtU43Wni&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8020&quot;:{&quot;id&quot;:&quot;wPITzYFqSE7qxYLWiZJP&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8021&quot;:{&quot;id&quot;:&quot;Q7XIE0bN6ilOls6A5JnJ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8022&quot;:{&quot;id&quot;:&quot;lV6El2BmQyyxD3gZAZBi&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8023&quot;:{&quot;id&quot;:&quot;vsu1cnrHBIEmhXmmn0jZ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8025&quot;:{&quot;id&quot;:&quot;oNb3h3sYltR6XLVYQF51&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8027&quot;:{&quot;id&quot;:&quot;1zTC0gnGATOtiE2zI4qY&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;8030&quot;:{&quot;id&quot;:&quot;LMeHTI7VsLVsMo4HAPPT&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;53706&quot;:{&quot;id&quot;:&quot;cGAzsXs6YGuIZdhhwODJ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54152&quot;:{&quot;id&quot;:&quot;gkSlUQXMsf0q3SOiOVVL&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54206&quot;:{&quot;id&quot;:&quot;SIw0qKlTjhVYRE7vvD84&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54210&quot;:{&quot;id&quot;:&quot;R2CmyWd4oLu1CUWzKxvI&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54211&quot;:{&quot;id&quot;:&quot;jTk55LNhndpMfc9tMsAr&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54250&quot;:{&quot;id&quot;:&quot;HW7U6HLWOjwDPe3xBJtI&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54254&quot;:{&quot;id&quot;:&quot;4kXRmSGTD3dBOJTQMDq4&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54255&quot;:{&quot;id&quot;:&quot;bZ7temSvAVSh7JEpJQgw&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54256&quot;:{&quot;id&quot;:&quot;5gLdyKyaP6TAeLLB1ILL&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54257&quot;:{&quot;id&quot;:&quot;WFKz2z1IaFpiysc2m6M6&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54258&quot;:{&quot;id&quot;:&quot;9CgPexx6LPSmOPmBvVDf&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54259&quot;:{&quot;id&quot;:&quot;hUByQ9kytkTqikhCCOpH&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54260&quot;:{&quot;id&quot;:&quot;gXMR1TQPMcobFyM4bwKz&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54261&quot;:{&quot;id&quot;:&quot;78zxfXAdQRsuEIP0rbXP&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54262&quot;:{&quot;id&quot;:&quot;hl7eXlKlBMxdZ07DpnBy&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54371&quot;:{&quot;id&quot;:&quot;t0tHVX3cdnh8ecUPzoMs&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;54373&quot;:{&quot;id&quot;:&quot;qjVg75HfI5JB5SHBJDtH&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55086&quot;:{&quot;id&quot;:&quot;s2mO66FBvtlrmxHMYuqY&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55087&quot;:{&quot;id&quot;:&quot;5NwlgAo77qEGmQe52P8p&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55088&quot;:{&quot;id&quot;:&quot;C86qJ5DzzcfrVNLw2F2H&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55089&quot;:{&quot;id&quot;:&quot;hvtkBeH7jUw22bwV6CWI&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55090&quot;:{&quot;id&quot;:&quot;hKnNB1anv1DRVIHwu0bC&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55091&quot;:{&quot;id&quot;:&quot;Yg3zu0PVfbMFuMTDAO81&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55092&quot;:{&quot;id&quot;:&quot;1BJGBrNcTW3E2ihPx2CI&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55093&quot;:{&quot;id&quot;:&quot;YoLdKQEmVjRYNgYWXai5&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55108&quot;:{&quot;id&quot;:&quot;yVTJPg9xas18ZdW255h3&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55109&quot;:{&quot;id&quot;:&quot;QBfkkvBhb85VnCHvCFFn&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55110&quot;:{&quot;id&quot;:&quot;vgHDhlvF5c1EfltW14m0&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55111&quot;:{&quot;id&quot;:&quot;oMpzJM0HrhwLhvCFBlbm&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55132&quot;:{&quot;id&quot;:&quot;hlebV9FLzix0ZyeaSgEu&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55165&quot;:{&quot;id&quot;:&quot;yvWoU5F6Ek8OpP21fSqh&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55166&quot;:{&quot;id&quot;:&quot;tyk80w09VwO9jQE08ypT&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55167&quot;:{&quot;id&quot;:&quot;iZH3kuGBr6dRu2X4D5z3&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55168&quot;:{&quot;id&quot;:&quot;7iCpqP2DOGJrOUliahSe&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55169&quot;:{&quot;id&quot;:&quot;RslYNJwiOQNLkJfS6AHJ&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55170&quot;:{&quot;id&quot;:&quot;dwEh1rJvUEVISuU3yv0q&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55171&quot;:{&quot;id&quot;:&quot;5Ejk7tXgP2vQooheuWVR&quot;,&quot;tag&quot;:&quot;div&quot;},&quot;55181&quot;:{&quot;id&quot;:&quot;ebHSR2qUQSDfXJhRyCST&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;7f58e9b0&quot;,&quot;data&quot;:{&quot;audiobooks&quot;:[],&quot;filters&quot;:[],&quot;perPage&quot;:50},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;audiobooks&quot;:{&quot;class&quot;:&quot;App\\Models\\Audiobook&quot;,&quot;id&quot;:[55108,8014,8012,55109,55110,54254,55111,54255,55181,55086,54256,54211,55087,54258,54257,55088,55089,54259,8016,55090,55091,54260,55092,8020,8018,55093,54210,54206,53706,8022,8021,8019,54373,55165,55166,55167,8025,8023,55168,54261,55169,55132,54250,8030,54262,8027,55170,54371,54152,55171],&quot;relations&quot;:[&quot;versions&quot;,&quot;versions.variants&quot;,&quot;label&quot;,&quot;serie&quot;,&quot;row&quot;,&quot;artists&quot;,&quot;artists.artist&quot;],&quot;connection&quot;:&quot;mysql&quot;}},&quot;models&quot;:{&quot;filters&quot;:{&quot;class&quot;:&quot;App\\Models\\UserFilter&quot;,&quot;id&quot;:211,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;15adcb866b9abbc6ee0f98428bb308193fe943a7c4bde971a594095a0e0a7f8c&quot;}}">

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

        <!-- Livewire Component wire-end:xOOIsTife0iAC47iKIny -->

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

</body>

</html>
