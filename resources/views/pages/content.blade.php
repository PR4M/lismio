@extends('layout.content')

@section('image')
<img src="{{ $audiobook->image }}" loading="lazy"
    alt="Cover" title="Cover" onerror="this.src='https://cover.ab.lism.io/no_cover.jpg'"
    class="shadow-2xl rounded-md max-w-96 fade-in-image">
@endsection

@section('title')
{{ $audiobook->title }}
@endsection

@section('author')
(Scraped Author)
@endsection

@section('preview')
<audio controls="" class="w-full " __idm_id__="2744321">
    <source src="https://preview.lismio.link/9783991094883_192231681223.mp3"
        type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
@endsection

@section('summary')
{{ $audiobook->description }}
@endsection

@section('artists')
<div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg">
            <a href="https://lismio.app/artist/h-p-lovecraft-4247"
                class="text-primary-300 hover:text-primary-500">
                (Scraped Author)
            </a>
        </div>
        <div class="text-gray-500 text-sm ">Author</div>
    </div>

    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg">
            <a href="https://lismio.app/artist/bryan-godwin-62"
                class="text-primary-300 hover:text-primary-500">
                (Scraped Narrator)
            </a>
        </div>
        <div class="text-gray-500 text-sm ">Speaker</div>
    </div>

</div>
@endsection

@section('additional-details')
<div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg">
            <a href="https://lismio.app/label/bookstream-audiobooks-527"
                class="text-primary-300 hover:text-primary-500">
                Bookstream Audiobooks
            </a>
        </div>
        <div class="text-gray-500 text-sm ">Label</div>
    </div>

    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg">10.07.2022</div>
        <div class="text-gray-500 text-sm ">Release Date</div>
    </div>

    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg"> Unabridged </div>
        <div class="text-gray-500 text-sm">Abridgement</div>
    </div>

    <div class="py-2 bg-gray-100 rounded-lg items-center justify-center text-center">
        <div class="font-medium text-lg">14</div>
        <div class="text-gray-500 text-sm ">Minutes</div>
    </div>
</div>
@endsection

@section('shops')

@forelse ($audiobook->directories as $directory)
<div class="p-8 bg-white rounded-lg my-4 ">
    <div class="hidden">54603</div>
    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-primary-600">
        <a href="{{ $directory->url }}" class="flex items-center justify-between px-5 py-3 transition-colors bg-indigo-600 border border-indigo-600 rounded-lg hover:bg-transparent group focus:outline-none focus:ring" href="/download">
            <span class="font-medium text-white transition-colors group-active:text-indigo-500 group-hover:text-indigo-600">
              Audible
            </span>

            <span class="flex-shrink-0 p-2 ml-4 text-indigo-600 bg-white border border-current rounded-full group-active:text-indigo-500">
                <svg class="h-5 w-5 block w-auto text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220.6 192.86">
                    <path class="b8da1755-0204-4f69-a8be-b41a34e548b3" d="M149.42,307.4c-14,0-16.84-17.51-18.92-30.3-2-12.07-3.56-27.41-5-41-1.2-11.56-2.33-22.48-3.34-27.74,0-.13,0-.27-.08-.41,0,.14,0,.27-.08.41-4.28,22.22-12.76,36.22-17.43,42.59A12.16,12.16,0,1,1,85,236.61c2.79-3.8,9.65-14.6,13.16-32.8,4.63-24,8.29-43,24-43s19.32,19,24,43c1.12,5.82,2.18,15.56,3.36,26.95,1.19-11.39,2.24-21.13,3.36-26.94,1-5.05,2.06-16.11,3.21-27.82,1.13-11.51,2.41-24.55,3.86-34.54a116,116,0,0,1,2.58-13.38c3.09-11.19,9.49-13.53,14.31-13.53s11.21,2.34,14.31,13.53a114.2,114.2,0,0,1,2.57,13.38c1.46,10,2.74,23,3.87,34.54,1.15,11.71,2.23,22.77,3.21,27.82.65,3.37,1.28,7,2,10.92.4,2.28.87,5,1.4,7.93.53-2.91,1-5.64,1.4-7.92.67-3.89,1.31-7.56,2-10.93l.14-.63c3.56-14.31,12.69-23.19,23.82-23.19,12.53,0,20.45,11.72,23.68,22.69l.18.67a34.45,34.45,0,0,0,1.83,5.82c2.17-4.73,6.38-12.19,15.69-12.19h18.32a12.16,12.16,0,1,1,0,24.32H278.28c-2.35,5.25-7.51,15.46-19.6,15.46-7.66,0-21.33-3.58-27-27.49-.1-.32-.2-.62-.31-.92,0,.14-.07.28-.11.42-.59,3-1.18,6.49-1.81,10.12-4.75,27.45-8.5,49.13-25.36,49.13s-20.61-21.69-25.36-49.14c-.65-3.77-1.27-7.33-1.87-10.47,0-.14-.06-.28-.08-.43,0,.15-.06.29-.08.44-1,5.25-2.15,16.17-3.35,27.73-1.41,13.54-3,28.88-5,41C166.26,289.89,163.41,307.4,149.42,307.4Z" transform="translate(-82.64 -114.54)"></path>
                </svg>
            </span>
        </a>
    </div>
</div>
@empty
<h3 class="text-center text-xl text-gray-600">
    No directory
</h3>
@endforelse


@endsection
