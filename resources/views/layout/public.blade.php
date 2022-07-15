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
        <div
          class="flex items-center justify-between h-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8"
        >
          <div class="flex items-center">
            <button type="button" class="p-2 sm:mr-4 lg:hidden">
              <svg
                class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
            </button>

            <a href="#" class="flex logo">
                <svg class="h-8 block w-auto text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220.6 192.86">
                    <path class="b8da1755-0204-4f69-a8be-b41a34e548b3" d="M149.42,307.4c-14,0-16.84-17.51-18.92-30.3-2-12.07-3.56-27.41-5-41-1.2-11.56-2.33-22.48-3.34-27.74,0-.13,0-.27-.08-.41,0,.14,0,.27-.08.41-4.28,22.22-12.76,36.22-17.43,42.59A12.16,12.16,0,1,1,85,236.61c2.79-3.8,9.65-14.6,13.16-32.8,4.63-24,8.29-43,24-43s19.32,19,24,43c1.12,5.82,2.18,15.56,3.36,26.95,1.19-11.39,2.24-21.13,3.36-26.94,1-5.05,2.06-16.11,3.21-27.82,1.13-11.51,2.41-24.55,3.86-34.54a116,116,0,0,1,2.58-13.38c3.09-11.19,9.49-13.53,14.31-13.53s11.21,2.34,14.31,13.53a114.2,114.2,0,0,1,2.57,13.38c1.46,10,2.74,23,3.87,34.54,1.15,11.71,2.23,22.77,3.21,27.82.65,3.37,1.28,7,2,10.92.4,2.28.87,5,1.4,7.93.53-2.91,1-5.64,1.4-7.92.67-3.89,1.31-7.56,2-10.93l.14-.63c3.56-14.31,12.69-23.19,23.82-23.19,12.53,0,20.45,11.72,23.68,22.69l.18.67a34.45,34.45,0,0,0,1.83,5.82c2.17-4.73,6.38-12.19,15.69-12.19h18.32a12.16,12.16,0,1,1,0,24.32H278.28c-2.35,5.25-7.51,15.46-19.6,15.46-7.66,0-21.33-3.58-27-27.49-.1-.32-.2-.62-.31-.92,0,.14-.07.28-.11.42-.59,3-1.18,6.49-1.81,10.12-4.75,27.45-8.5,49.13-25.36,49.13s-20.61-21.69-25.36-49.14c-.65-3.77-1.27-7.33-1.87-10.47,0-.14-.06-.28-.08-.43,0,.15-.06.29-.08.44-1,5.25-2.15,16.17-3.35,27.73-1.41,13.54-3,28.88-5,41C166.26,289.89,163.41,307.4,149.42,307.4Z" transform="translate(-82.64 -114.54)"></path>
                </svg>
            </a>

          </div>

          <div class="flex items-center justify-end flex-1">
            <nav
              class="hidden lg:uppercase lg:text-gray-500 lg:tracking-wide lg:font-bold lg:text-xs lg:space-x-4 lg:flex"
            >
              <a
                href="/about"
                class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current"
              >
                About
              </a>

              <a
                href="/news"
                class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current"
              >
                News
              </a>

              <a
                href="/products"
                class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current"
              >
                Products
              </a>

              <a
                href="/contact"
                class="block h-16 leading-[4rem] border-b-4 border-transparent hover:text-red-700 hover:border-current"
              >
                Contact
              </a>
            </nav>

            <div class="flex items-center ml-8">
              <div
                class="flex items-center border-gray-100 divide-x divide-gray-100 border-x"
              >
                <span>
                  <a
                    href="/cart"
                    class="block p-6 border-b-4 border-transparent hover:border-red-700"
                  >
                    <svg
                      class="w-4 h-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                      />
                    </svg>

                    <span class="sr-only">Cart</span>
                  </a>
                </span>

                <span>
                  <a
                    href="/account"
                    class="block p-6 border-b-4 border-transparent hover:border-red-700"
                  >
                    <svg
                      class="w-4 h-4"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>

                    <span class="sr-only"> Account </span>
                  </a>
                </span>

                <span class="hidden sm:block">
                  <a
                    href="/search"
                    class="block p-6 border-b-4 border-transparent hover:border-red-700"
                  >
                    <svg
                      class="w-4 h-4"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
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

                @yield('audiobooks')

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

    <script src="{{ mix('js/app.js') }}" defer></script>

    <livewire:scripts />

</body>

</html>
