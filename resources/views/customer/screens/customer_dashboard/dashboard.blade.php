@extends('layouts.app')

@section('content')
    <section class="relative left-1/2 right-1/2 -mb-10 -mt-10 w-screen -translate-x-1/2 bg-[#efefef] text-[#2f3432]">
        <header class="bg-[#009877] text-white">
            <div class="mx-auto w-full max-w-[1040px] px-8 pt-6 md:px-12">
                <div class="flex items-center justify-between gap-4 text-sm">
                    <div class="flex items-center gap-6">
                        <a href="#" class="flex items-center gap-2 text-sm font-bold text-white">
                            <span class="text-xl">&#10022;</span>
                            <span class="text-[34px] leading-none">Bikroy</span>
                        </a>
                        <a href="#" class="font-semibold text-white">All ads</a>
                        <button type="button" class="rounded-md border border-white/35 px-3 py-1 text-[11px] font-medium text-white">Bangla</button>
                    </div>
                    <div class="flex items-center gap-5 text-sm font-semibold">
                        <a href="#" class="inline-flex items-center gap-1.5 text-white/95">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M17 10c1.66 0 2.99-1.34 2.99-3S18.66 4 17 4s-3 1.34-3 3 1.34 3 3 3zm-10 0c1.66 0 2.99-1.34 2.99-3S8.66 4 7 4 4 5.34 4 7s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V18h14v-2.5C14 13.17 9.33 12 7 12zm10 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V18h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                            Chat
                        </a>
                        <a href="#" class="inline-flex items-center gap-1.5 text-white/95">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.34 0-10 1.67-10 5v3h20v-3c0-3.33-6.66-5-10-5z"/></svg>
                            Account
                        </a>
                        <a href="#" class="rounded bg-[#f7c600] px-4 py-3 text-xs font-extrabold tracking-wide text-[#202020] hover:bg-[#ffd522]">POST FREE AD</a>
                    </div>
                </div>

                <div class="flex flex-col items-center py-14">
                    <button type="button" class="mb-7 inline-flex items-center gap-1 rounded-full bg-[#007f65] px-5 py-1.5 text-xs font-medium text-white/95">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a8 8 0 00-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 00-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/></svg>
                        All of Bangladesh
                    </button>
                    <form class="flex w-full max-w-[900px] items-center rounded-full bg-white px-3 py-1 shadow-sm">
                        <input type="text" placeholder="What are you looking for?" class="w-full border-0 px-7 py-4 text-base text-[#707676] placeholder:text-[#9ca3af] focus:outline-none" />
                        <button type="submit" class="grid h-14 w-14 shrink-0 place-items-center rounded-full border-4 border-white bg-[#f8ca0a] text-[#2f3432]">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><circle cx="11" cy="11" r="6"/><path d="m20 20-4.2-4.2"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <div class="mx-auto max-w-[1040px] px-8 pb-14 pt-8 md:px-12">
            <section>
                <h2 class="mb-7 text-2xl font-bold text-[#2f3432]">Browse items by category</h2>
                <div class="grid gap-x-10 gap-y-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($categories as $category)
                        <a href="#" class="group flex items-start gap-3">
                            <span class="mt-0.5 flex h-11 w-11 items-center justify-center rounded-lg bg-white text-[#02997d] shadow-sm">
                                @if ($category['icon'] === 'mobile')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M17 1H7C5.9 1 5 1.9 5 3v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm-5 21c-.83 0-1.5-.67-1.5-1.5S11.17 19 12 19s1.5.67 1.5 1.5S12.83 22 12 22zm5-4H7V4h10v14z"/></svg>
                                @elseif ($category['icon'] === 'monitor')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M21 3H3a1 1 0 00-1 1v12a1 1 0 001 1h7v2H8v2h8v-2h-2v-2h7a1 1 0 001-1V4a1 1 0 00-1-1zm-1 12H4V5h16v10z"/></svg>
                                @elseif ($category['icon'] === 'car')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.53 5h-11c-.63 0-1.19.42-1.38 1.01L3 12v8h2v-2h14v2h2v-8l-2.08-5.99zM6.85 7h10.29l1.04 3H5.81l1.04-3zM6 15.5A1.5 1.5 0 117.5 14 1.5 1.5 0 016 15.5zm10.5 1.5A1.5 1.5 0 1118 15.5 1.5 1.5 0 0116.5 17z"/></svg>
                                @elseif ($category['icon'] === 'home')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="m12 3-9 8h3v10h5v-6h2v6h5V11h3z"/></svg>
                                @elseif ($category['icon'] === 'sofa')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M4 10a3 3 0 016 0v2h4v-2a3 3 0 116 0v6h-2v-2H6v2H4v-6zm2 2h12v-2a1 1 0 10-2 0v2H8v-2a1 1 0 10-2 0v2z"/></svg>
                                @elseif ($category['icon'] === 'paw')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M8.5 11A2.5 2.5 0 106 8.5 2.5 2.5 0 008.5 11zm7 0A2.5 2.5 0 1013 8.5a2.5 2.5 0 002.5 2.5zM5.5 16A2.5 2.5 0 103 13.5 2.5 2.5 0 005.5 16zm13 0a2.5 2.5 0 10-2.5-2.5A2.5 2.5 0 0018.5 16zM12 22c3 0 5-1.8 5-4s-2.5-4-5-2.5C9.5 14 7 15.8 7 18s2 4 5 4z"/></svg>
                                @elseif ($category['icon'] === 'shirt')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M7 4 4 7l3 3v10h10V10l3-3-3-3-3 2h-4z"/></svg>
                                @elseif ($category['icon'] === 'ball')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm6.93 8H15.9a15.9 15.9 0 00-1.24-4.33A8.03 8.03 0 0118.93 10zM12 4c.84 1.22 1.5 3.18 1.79 6h-3.58C10.5 7.18 11.16 5.22 12 4zM4.07 14H7.1c.2 1.55.66 3.02 1.24 4.33A8.03 8.03 0 014.07 14zm0-4a8.03 8.03 0 014.27-4.33A15.9 15.9 0 007.1 10H4.07zM12 20c-.84-1.22-1.5-3.18-1.79-6h3.58c-.29 2.82-.95 4.78-1.79 6zm2.66-1.67A15.9 15.9 0 0015.9 14h3.03a8.03 8.03 0 01-4.27 4.33z"/></svg>
                                @elseif ($category['icon'] === 'dress')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a2 2 0 100 4 2 2 0 000-4zm-2 5-1 3-5 9h16l-5-9-1-3z"/></svg>
                                @elseif ($category['icon'] === 'factory')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M2 21h20V10l-6 3V10l-6 3V5L2 9v12z"/></svg>
                                @elseif ($category['icon'] === 'cap')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="m12 3-10 6 10 6 8-4.8V17h2V9L12 3zm-6 9v4l6 3 6-3v-4l-6 3-6-3z"/></svg>
                                @elseif ($category['icon'] === 'bag')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M6 7V6a6 6 0 1112 0v1h2v14H4V7h2zm2 0h8V6a4 4 0 10-8 0v1z"/></svg>
                                @elseif ($category['icon'] === 'briefcase')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M10 4h4a2 2 0 012 2v1h4v12H4V7h4V6a2 2 0 012-2zm0 3h4V6h-4v1z"/></svg>
                                @elseif ($category['icon'] === 'tools')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="m22.7 19.3-5.4-5.4a6 6 0 01-7.7-7.7l3 3 2.1-2.1-3-3a6 6 0 007.7 7.7l5.4 5.4a1.5 1.5 0 102.1-2.1zM2 22l6.6-6.6 2.1 2.1L4.1 24 2 22z"/></svg>
                                @elseif ($category['icon'] === 'wheat')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c3 2 3 5 0 7 3 2 3 5 0 7v6h-2v-6c-3-2-3-5 0-7-3-2-3-5 0-7h2z"/></svg>
                                @else
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M20 7h-3V4h-2v3H9V4H7v3H4v13h16V7zM6 18v-7h12v7H6zm2-5h8v3H8v-3z"/></svg>
                                @endif
                            </span>
                            <span>
                                <span class="block text-base font-semibold leading-tight text-[#3b4441] group-hover:text-[#067f68]">{{ $category['label'] }}</span>
                                <span class="mt-0.5 block text-sm text-[#8b9397]">{{ $category['count'] }}</span>
                            </span>
                        </a>
                    @endforeach
                </div>
            </section>

            <section class="mt-14">
                <h2 class="mb-4 text-2xl font-bold text-[#2f3432]">Featured Ads</h2>
                <div class="grid gap-4 md:grid-cols-2">
                    @foreach ($featuredAds as $ad)
                        <article class="overflow-hidden rounded border border-[#f0ce7b] bg-white">
                            <div class="grid grid-cols-3 gap-1 border-b border-[#edecec] px-1 pt-1">
                                @foreach ($ad['thumbs'] as $thumb)
                                    <img src="{{ $thumb }}" alt="{{ $ad['title'] }}" class="h-28 w-full object-cover" />
                                @endforeach
                            </div>
                            <div class="px-4 py-3">
                                <h3 class="text-xl font-bold leading-tight text-[#2f3432]">{{ $ad['title'] }}</h3>
                                <p class="mt-1 text-sm text-[#737b80]">{{ $ad['location'] }}</p>
                                <p class="mt-2 text-2xl font-extrabold text-[#009877]">{{ $ad['price'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="mt-12 overflow-hidden rounded-xl border border-[#dbdbdb] bg-white">
                <div class="grid md:grid-cols-2">
                    <div class="border-b border-[#e9e9e9] p-7 md:border-b-0 md:border-r">
                        <h3 class="text-3xl font-bold text-[#2f3432]">Start making money!</h3>
                        <p class="mt-2 text-lg text-[#61696c]">Do you have something to sell?<br>Post your first ad and start making money!</p>
                        <a href="#" class="mt-5 inline-flex items-center rounded-full bg-[#f8ca0a] px-7 py-3 text-base font-bold text-[#2f3432]">Post your ad for free</a>
                    </div>
                    <div class="p-7">
                        <h3 class="text-3xl font-bold text-[#1b6ea9]">BikroyJOBS</h3>
                        <p class="mt-2 text-lg text-[#61696c]">Looking to hire or get hired in Bangladesh?<br>Get access to 800k+ CVs or browse through 800+ job vacancies!</p>
                        <a href="#" class="mt-5 inline-flex items-center rounded-full bg-[#0e86cf] px-7 py-3 text-base font-bold text-white">Explore more</a>
                    </div>
                </div>
            </section>

            <section class="mt-12">
                <h2 class="mb-4 text-2xl font-bold text-[#2f3432]">Quick links</h2>
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($quickLinks as $link)
                        <article class="rounded bg-[#e4e7e7] p-4">
                            <h3 class="text-lg font-bold leading-tight text-[#2f3432]">{{ $link['title'] }}</h3>
                            <p class="mt-3 text-sm leading-6 text-[#4e5659]">{{ implode(' | ', $link['items']) }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="mt-12">
                <h2 class="text-2xl font-bold text-[#2f3432]">About Bikroy, The Largest Marketplace in Bangladesh!</h2>
                <p class="mt-2 text-base leading-7 text-[#5f666a]">
                    Bikroy is a platform on which you can buy and sell almost everything! We help people buy and sell vehicles,
                    find properties, get jobs or recruit employees, buy and sell mobile phones, purchase electronic products,
                    and much more. With more than 50 categories our solutions are built to be safe, smart, and convenient for our customers.
                </p>
                <button type="button" class="mt-4 text-base font-semibold text-[#61696c]">Show more</button>
            </section>
        </div>

        <footer class="bg-[#e6e8e8] py-10">
            <div class="mx-auto grid max-w-[1040px] gap-8 px-8 text-base text-[#475055] md:grid-cols-2 md:px-12 lg:grid-cols-5">
                <div>
                    <h3 class="mb-3 text-xl font-bold text-[#2f3432]">More from Bikroy</h3>
                    <ul class="space-y-2">
                        <li><a href="#">Sell Fast</a></li>
                        <li><a href="#">Membership</a></li>
                        <li><a href="#">Banner Ads</a></li>
                        <li><a href="#">Boost Ad</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-bold text-[#2f3432]">Help & Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Stay safe</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-bold text-[#2f3432]">About Bikroy</h3>
                    <ul class="space-y-2">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-bold text-[#2f3432]">Blog & Guides</h3>
                    <ul class="space-y-2">
                        <li><a href="#">MotorGuide BD</a></li>
                        <li><a href="#">PropertyGuide BD</a></li>
                        <li><a href="#">Official Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-bold text-[#2f3432]">Download our app</h3>
                    <div class="space-y-2">
                        <a href="#" class="inline-block rounded bg-black px-4 py-2 text-sm text-white">Get it on Google Play</a>
                        <a href="#" class="inline-block rounded bg-black px-4 py-2 text-sm text-white">Download on the App Store</a>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-10 max-w-[1040px] border-t border-[#cdd0d1] px-8 pt-6 text-sm text-[#7a8185] md:px-12">
                &copy; 2026. All rights reserved. Saltside Technologies
            </div>
        </footer>
    </section>
@endsection
