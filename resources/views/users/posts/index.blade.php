<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 grid-flow-col gap-4">
                    @foreach($posts as $post)
{{--                        TODO: Make Posts Listings--}}
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
