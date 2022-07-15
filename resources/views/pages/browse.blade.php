@extends('layout.public')

@section('audiobooks')

    @forelse ($audiobooks as $audiobook)
    <div class="p-4 w-full rounded-xl  hover:bg-gray-100" x-data="">

        <div class="relative w-full min-w-full rounded-xl bg-gray-500">
            <a href="{{ route('detail_page', [$audiobook]) }}"
                class="block">
                <img src="{{ $audiobook->image }}"
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
                        <a href="{{ route('detail_page', [$audiobook]) }}"
                            class="hover:underline">
                            {{ $audiobook->title }}
                        </a>
                    </div>
                    <div class="text-gray-500">
                        <a href="{{ route('detail_page', [$audiobook]) }}" class="hover:underline">
                            (Scraped Author)
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @empty

    @endforelse


@endsection
