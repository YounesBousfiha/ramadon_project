@extends('layout.app')

@section('herosection')
    <section class="container mx-auto px-4 py-20 text-center">
        <h1 class="text-5xl font-bold mb-6">Ramadan Kareem</h1>
        <p class="text-xl mb-8">Celebrate the holy month with joy and blessings</p>
        <a href="#" class="bg-gold text-deep-blue px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition-colors">
            Explore Ramadan Offers
        </a>
    </section>
@endsection

@section('ramadanEssetials')
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Ramadan Essentials</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-10 p-6 rounded-lg text-center">
                <div class="text-gold mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Prayer Mats</h3>
                <p class="text-gray-300">Discover our selection of high-quality prayer mats</p>
            </div>
            <div class="bg-white bg-opacity-10 p-6 rounded-lg text-center">
                <div class="text-gold mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Dates</h3>
                <p class="text-gray-300">Discover our selection of high-quality dates</p>
            </div>
            <div class="bg-white bg-opacity-10 p-6 rounded-lg text-center">
                <div class="text-gold mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Lanterns</h3>
                <p class="text-gray-300">Discover our selection of high-quality lanterns</p>
            </div>
        </div>
    </section>
@endsection
