<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-5">
            {{-- Financials --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <span class="block h-4 text-lg font-bold text-black w-auto">Financials</span>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <p class="mt-4 text-sm">
                            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700 text-base">
                                Reports
                                <img src="{{ asset('images/arrow-right.png') }}" alt="" srcset="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Tours --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <span class="block h-4 text-lg font-bold text-black w-auto">Tours</span>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <p class="mt-4 text-sm">
                            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700 text-base">
                                Tours
                                <img src="{{ asset('images/arrow-right.png') }}" alt="" srcset="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Bookings --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <span class="block h-4 text-lg font-bold text-black w-auto">Bookings</span>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <p class="mt-4 text-sm">
                            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700 text-base">
                                Bookings
                                <img src="{{ asset('images/arrow-right.png') }}" alt="" srcset="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Users --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <span class="block h-4 text-lg font-bold text-black w-auto">Users</span>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <p class="mt-4 text-sm">
                            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700 text-base">
                                Users
                                <img src="{{ asset('images/arrow-right.png') }}" alt="" srcset="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Tour operators --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <span class="block h-4 text-lg font-bold text-black w-auto">Tour operators</span>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <p class="mt-4 text-sm">
                            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700 text-base">
                                Tour operators
                                <img src="{{ asset('images/arrow-right.png') }}" alt="" srcset="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
