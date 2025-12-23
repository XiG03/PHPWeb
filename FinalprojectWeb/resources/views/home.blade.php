
@extends('layouts.app')

@section('title', 'The Wandering Rose Ba Vì - Trang Chủ')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center -mt-28 md:-mt-44" style="background-image: url('/images/hero-bg.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40"></div>
    </section>

    <!-- Location & Space Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-end">
                <div>
                    <img src="/images/location-space.jpg" alt="Vị trí & Không gian" class="w-full h-auto rounded-lg">
                </div>
                <div class="text-left">
                    <h2 class="section-title text-left mb-6" style="font-family: 'SVN-Bon Voyage', serif;">Vị trí & Không gian</h2>
                    <p class="text-body mb-6">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                    </p>
                    <button class="btn-outline">Tìm hiểu thêm →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Harmony with Nature Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-end">
                <div class="md:order-2">
                    <img src="/images/nature-harmony.jpg" alt="Hoà mình vào thiên nhiên" class="w-full h-auto rounded-lg">
                </div>
                <div class="md:order-1 text-right">
                    <h2 class="section-title text-right mb-6" style="font-family: 'SVN-Bon Voyage', serif;">Hoà mình vào thiên nhiên</h2>
                    <p class="text-body mb-6 text-right">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                    </p>
                    <div class="text-right">
                        <button class="btn-outline">Tìm hiểu thêm →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="min-h-screen flex items-center justify-center relative" style="background-image: url('/images/benefits-bg.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 py-12 w-full">
            <h2 class="text-4xl md:text-5xl font-serif text-white text-center mb-6 md:mb-8">Quyền lợi khi đặt phòng</h2>
            <div class="grid md:grid-cols-4 gap-4">
                <!-- Wifi Card -->
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-wandering-rose-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                        </svg>
                    </div>
                    <h3 class="text-wandering-rose-brown font-semibold mb-2">Wifi 24/7</h3>
                    <p class="text-gray-600 text-sm">Body text 3 dòng</p>
                </div>

                <!-- Pool Card -->
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-wandering-rose-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-wandering-rose-brown font-semibold mb-2">Hồ bơi</h3>
                    <p class="text-gray-600 text-sm">Body text 3 dòng</p>
                </div>

                <!-- Bicycle Card -->
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-wandering-rose-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-wandering-rose-brown font-semibold mb-2">Xe đạp miễn phí</h3>
                    <p class="text-gray-600 text-sm">Body text 3 dòng</p>
                </div>

                <!-- BBQ Card -->
                <div class="bg-white rounded-lg p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-wandering-rose-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                        </svg>
                    </div>
                    <h3 class="text-wandering-rose-brown font-semibold mb-2">BBQ ngoài trời</h3>
                    <p class="text-gray-600 text-sm">Body text 3 dòng</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Categories Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="section-title mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Các hạng phòng</h2>
            <div class="text-center mb-12">
                <button class="bg-wandering-rose-brown text-white px-6 py-3 rounded-lg font-medium hover:bg-wandering-rose-brown-dark transition-colors">XEM CHI TIẾT →</button>
            </div>

            <!-- Room Cards Carousel -->
            <div class="relative">
                <div class="grid md:grid-cols-4 gap-6 overflow-x-auto pb-4" id="roomCarousel">
                    <!-- Forest Room -->
                    <div class="min-w-[280px]">
                        <img src="/images/forest-room.jpg" alt="Forest Room" class="w-full h-64 object-cover mb-4">
                        <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Forest room</h3>
                        <div class="space-y-2 mb-4 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                <span>16 người lớn</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                <span>48 m²</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <span>02 phòng</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                                <span>08 đệm 1m6 x 1m8</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="bg-wandering-rose-brown text-white px-4 py-2 rounded text-sm hover:bg-wandering-rose-brown-dark transition-colors flex-1">ĐẶT PHÒNG →</button>
                            <button class="btn-outline flex-1 text-sm">XEM CHI TIẾT</button>
                        </div>
                    </div>

                    <!-- Deluxe Room -->
                    <div class="min-w-[280px]">
                        <img src="/images/deluxe-room.jpg" alt="Deluxe Room" class="w-full h-64 object-cover mb-4">
                        <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Deluxe room</h3>
                        <div class="space-y-2 mb-4 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                <span>02 người lớn</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                <span>18 m²</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <span>01 phòng</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                                <span>01 giường 1m8 x 2m</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="bg-wandering-rose-brown text-white px-4 py-2 rounded text-sm hover:bg-wandering-rose-brown-dark transition-colors flex-1">ĐẶT PHÒNG →</button>
                            <button class="btn-outline flex-1 text-sm">XEM CHI TIẾT</button>
                        </div>
                    </div>

                    <!-- Family Room -->
                    <div class="min-w-[280px]">
                        <img src="/images/family-room.jpg" alt="Family Room" class="w-full h-64 object-cover mb-4">
                        <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Family Room</h3>
                        <div class="space-y-2 mb-4 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                <span>04 người lớn</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                <span>25 m²</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <span>04 phòng</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                                <span>02 giường 1m6 x 2m</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="bg-wandering-rose-brown text-white px-4 py-2 rounded text-sm hover:bg-wandering-rose-brown-dark transition-colors flex-1">ĐẶT PHÒNG →</button>
                            <button class="btn-outline flex-1 text-sm">XEM CHI TIẾT</button>
                        </div>
                    </div>

                    <!-- Pink Room -->
                    <div class="min-w-[280px]">
                        <img src="/images/pink-room.jpg" alt="Pink Room" class="w-full h-64 object-cover mb-4">
                        <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Pink</h3>
                        <div class="space-y-2 mb-4 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                <span>04 người lớn</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                <span>30 m²</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                <span>01 phòng</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                                <span>02 giường</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button class="bg-wandering-rose-brown text-white px-4 py-2 rounded text-sm hover:bg-wandering-rose-brown-dark transition-colors flex-1">ĐẶT PHÒNG →</button>
                            <button class="btn-outline flex-1 text-sm">XEM CHI TIẾT</button>
                        </div>
                    </div>
                </div>

                <!-- Carousel Navigation -->
                <div class="flex justify-center gap-4 mt-8">
                    <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="prevRoom">
                        ←
                    </button>
                    <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="nextRoom">
                        →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Areas Section -->
    <section class="py-16 md:py-24 bg-[#1a1a1a]">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-serif text-white text-center mb-4">Các khu tại The Wandering Rose</h2>
            <div class="text-center mb-12">
                <a href="#" class="text-white hover:underline text-sm">XEM TẤT CẢ</a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Rose House -->
                <div class="text-center">
                    <img src="/images/rose-house.jpg" alt="Khu Rose House" class="w-full h-96 object-cover rounded-lg mb-4">
                    <h3 class="text-white text-xl mb-4">KHU ROSE HOUSE</h3>
                    <button class="border border-white text-white px-6 py-2 rounded hover:bg-white hover:text-[#1a1a1a] transition-colors">
                        TÌM HIỂU THÊM →
                    </button>
                </div>

                <!-- Wooden House -->
                <div class="text-center">
                    <img src="/images/wooden-house.jpg" alt="Khu Wooden House" class="w-full h-96 object-cover rounded-lg mb-4">
                    <h3 class="text-white text-xl mb-4">KHU WOODEN HOUSE</h3>
                    <button class="border border-white text-white px-6 py-2 rounded hover:bg-white hover:text-[#1a1a1a] transition-colors">
                        TÌM HIỂU THÊM →
                    </button>
                </div>

                <!-- Villa -->
                <div class="text-center">
                    <img src="/images/villa.jpg" alt="Khu Villa" class="w-full h-96 object-cover rounded-lg mb-4">
                    <h3 class="text-white text-xl mb-4">KHU VILLA</h3>
                    <button class="border border-white text-white px-6 py-2 rounded hover:bg-white hover:text-[#1a1a1a] transition-colors">
                        TÌM HIỂU THÊM →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Services Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="section-title mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Dịch vụ sự kiện</h2>
            <div class="text-center mb-12">
                <button class="bg-wandering-rose-brown text-white px-6 py-3 rounded-lg font-medium hover:bg-wandering-rose-brown-dark transition-colors">XEM CHI TIẾT →</button>
            </div>

            <div class="grid md:grid-cols-4 gap-6 overflow-x-auto pb-4" id="eventCarousel">
                <!-- Birthday -->
                <div class="min-w-[280px]">
                    <img src="/images/birthday-event.jpg" alt="Tổ chức sinh nhật" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Tổ chức sinh nhật</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Teambuilding -->
                <div class="min-w-[280px]">
                    <img src="/images/teambuilding.jpg" alt="Teambuilding" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Teambuilding</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Small Wedding -->
                <div class="min-w-[280px]">
                    <img src="/images/wedding.jpg" alt="Tiệc cưới nhỏ" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Tiệc cưới nhỏ</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Event Card 4 -->
                <div class="min-w-[280px]">
                    <img src="/images/birthday-event.jpg" alt="Tiệc kỷ niệm" class="w-full h-48 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Tiệc kỷ niệm</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-8">
                <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="prevEvent">
                    ←
                </button>
                <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="nextEvent">
                    →
                </button>
            </div>
        </div>
    </section>

    <!-- Experiences & Tours Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="section-title mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Trải nghiệm và tour</h2>
            <div class="text-center mb-12">
                <button class="btn-outline text-sm">XEM CHI TIẾT →</button>
            </div>

            <div class="grid md:grid-cols-4 gap-6 overflow-x-auto pb-4" id="tourCarousel">
                <!-- Tour 1 -->
                <div class="min-w-[280px]">
                    <img src="/images/tour-bavi.jpg" alt="Tour khám phá Vườn Quốc gia Ba Vì" class="w-full h-80 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Tour khám phá Vườn Quốc gia Ba Vì</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Tour 2 -->
                <div class="min-w-[280px]">
                    <img src="/images/tour-aovua.jpg" alt="Tour Ao Vua" class="w-full h-80 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Tour Ao Vua</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Tour 3 -->
                <div class="min-w-[280px]">
                    <img src="/images/tour-khoangxanh.jpg" alt="Khoang Xanh - Suối Tiên" class="w-full h-80 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Khoang Xanh - Suối Tiên</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>

                <!-- Tour 4 -->
                <div class="min-w-[280px]">
                    <img src="/images/tour-experiences.jpg" alt="Các trải nghiệm" class="w-full h-80 object-cover mb-4">
                    <h3 class="text-wandering-rose-brown text-xl mb-4" style="font-family: 'SVN-Bon Voyage', serif;">Các trải nghiệm</h3>
                    <button class="btn-outline text-sm">ĐẶT LỊCH →</button>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-8">
                <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="prevTour">
                    ←
                </button>
                <button class="w-12 h-12 rounded-full bg-wandering-rose-brown text-white flex items-center justify-center hover:bg-wandering-rose-brown-dark transition-colors" id="nextTour">
                    →
                </button>
            </div>
        </div>
    </section>

    <!-- Booking CTA Section -->
    <section class="py-16 md:py-24 bg-[#FAF6F0]">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="section-title mb-8">Đặt lịch với The Wandering Rose</h2>
            <button class="btn-primary text-lg px-8 py-4">BOOK PHÒNG →</button>
        </div>
    </section>

    <!-- News & Events Section -->
    <section class="py-8 md:py-10 bg-[#8C6A4F]">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-serif text-white text-center mb-4 md:mb-6">Tin tức và sự kiện</h2>

            <!-- Event Posters -->
            <div class="grid md:grid-cols-3 gap-3 md:gap-4 mb-4 md:mb-6">
                <!-- Event Poster 1: Special Night Music Concert -->
                <div class="bg-[#1a1a1a] rounded-lg overflow-hidden relative shadow-lg">
                    <div class="absolute top-3 left-3 bg-yellow-400 text-black px-2.5 py-1 rounded-full text-xs font-bold z-10">ONLY $15</div>
                    <img src="/images/news-1.jpg" alt="Special Night Music Concert" class="w-full h-56 md:h-60 object-cover">
                    <div class="p-3 md:p-4">
                        <h3 class="text-white text-lg md:text-xl font-bold mb-1.5 line-clamp-2">Special Night MUSIC CONCERT</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-3 h-3 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-gray-400 text-xs">SATURDAY 20 OCT 23</p>
                        </div>
                        <p class="text-gray-400 text-xs mb-3">OPEN GATE 08.00 PM</p>
                        <button class="bg-yellow-400 text-black px-4 py-2 rounded font-semibold hover:bg-yellow-500 transition-colors w-full text-xs">
                            BUY TICKET NOW
                        </button>
                    </div>
                </div>

                <!-- Event Poster 2: Concert Music -->
                <div class="bg-[#1a1a1a] rounded-lg overflow-hidden relative shadow-lg">
                    <div class="absolute top-3 left-3 bg-blue-500 text-white px-2.5 py-1 rounded-full text-xs font-bold z-10">LOGO</div>
                    <img src="/images/news-2.jpg" alt="Concert Music" class="w-full h-56 md:h-60 object-cover">
                    <div class="p-3 md:p-4">
                        <h3 class="text-blue-400 text-lg md:text-xl font-bold mb-1.5 line-clamp-2">Concert Music</h3>
                        <div class="space-y-1 mb-2">
                            <p class="text-white text-xs">02 May, 2021</p>
                            <p class="text-green-400 text-xs font-semibold">FREE ENTRY</p>
                            <p class="text-white text-xs">8:00 PM</p>
                        </div>
                        <div class="text-gray-400 text-xs mb-3 space-y-0.5">
                            <p class="truncate">+123-456-7890</p>
                            <p class="truncate">www.reallygreatsite.com</p>
                        </div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-600 transition-colors w-full text-xs">
                            ĐẶT VÉ NGAY
                        </button>
                    </div>
                </div>

                <!-- Event Poster 3: POP MUSIC CONCERT -->
                <div class="bg-[#1a1a1a] rounded-lg overflow-hidden relative shadow-lg">
                    <div class="bg-red-600 text-white px-3 py-1.5 flex items-center justify-between text-xs">
                        <span>STARTS AT 8:00 PM</span>
                        <span class="font-bold">SPECTRUM</span>
                    </div>
                    <div class="absolute top-10 right-3 bg-red-600 text-white px-2.5 py-1 rounded font-bold text-xs z-10">$40</div>
                    <img src="/images/news-3.jpg" alt="POP MUSIC CONCERT" class="w-full h-52 md:h-56 object-cover">
                    <div class="p-3 md:p-4">
                        <h3 class="text-white text-lg md:text-xl font-bold mb-1.5 line-clamp-2">POP MUSIC CONCERT</h3>
                        <p class="text-red-400 text-xs mb-2">NOVEMBER 12TH, 2027 NEW YORK</p>
                        <p class="text-gray-400 text-xs mb-2 line-clamp-2">Experience the ultimate... electrifying performances, vibrant energy, and incredible sky all night long!</p>
                        <div class="bg-white p-1.5 rounded text-center mb-2">
                            <div class="w-10 h-10 bg-gray-200 mx-auto mb-1"></div>
                            <p class="text-xs text-gray-600 leading-tight">SCAN THE QR CODE TO BOOK YOUR TICKET!</p>
                        </div>
                        <button class="bg-red-600 text-white px-4 py-2 rounded font-semibold hover:bg-red-700 transition-colors w-full text-xs">
                            MUA VÉ
                        </button>
                    </div>
                </div>
            </div>

            <!-- News Content Blocks -->
            <div class="flex md:grid md:grid-cols-3 gap-4 md:gap-4 mb-4 overflow-x-auto pb-4 md:overflow-x-visible scrollbar-hide" id="newsCarousel">
                <!-- News Block 1 -->
                <div class="bg-[#1a1a1a]/30 rounded-lg p-4 text-center min-w-[280px] md:min-w-0 flex-shrink-0 md:flex-shrink">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-gray-300 text-xs">15/10/2024</p>
                    </div>
                    <p class="text-gray-300 text-xs mb-2 uppercase tracking-wide">Sự kiện âm nhạc</p>
                    <h3 class="text-white text-lg md:text-xl font-semibold mb-2 line-clamp-2">Đêm nhạc đặc biệt tại The Wandering Rose</h3>
                    <p class="text-gray-300 text-xs mb-3 line-clamp-3">Trải nghiệm đêm nhạc đầy cảm xúc với các nghệ sĩ tài năng trong không gian thiên nhiên tuyệt đẹp của Ba Vì.</p>
                    <button class="border border-white text-white px-4 py-1.5 rounded hover:bg-white hover:text-[#8C6A4F] transition-colors text-xs w-full">
                        TÌM HIỂU →
                    </button>
                </div>

                <!-- News Block 2 -->
                <div class="bg-[#1a1a1a]/30 rounded-lg p-4 text-center min-w-[280px] md:min-w-0 flex-shrink-0 md:flex-shrink">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-gray-300 text-xs">12/10/2024</p>
                    </div>
                    <p class="text-gray-300 text-xs mb-2 uppercase tracking-wide">Tin tức khuyến mãi</p>
                    <h3 class="text-white text-lg md:text-xl font-semibold mb-2 line-clamp-2">Ưu đãi đặc biệt tháng 10</h3>
                    <p class="text-gray-300 text-xs mb-3 line-clamp-3">Giảm giá 20% cho tất cả các phòng và dịch vụ khi đặt phòng trong tháng 10. Áp dụng cho đặt phòng từ 2 đêm trở lên.</p>
                    <button class="border border-white text-white px-4 py-1.5 rounded hover:bg-white hover:text-[#8C6A4F] transition-colors text-xs w-full">
                        TÌM HIỂU →
                    </button>
                </div>

                <!-- News Block 3 -->
                <div class="bg-[#1a1a1a]/30 rounded-lg p-4 text-center min-w-[280px] md:min-w-0 flex-shrink-0 md:flex-shrink">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-gray-300 text-xs">08/10/2024</p>
                    </div>
                    <p class="text-gray-300 text-xs mb-2 uppercase tracking-wide">Tin tức dịch vụ</p>
                    <h3 class="text-white text-lg md:text-xl font-semibold mb-2 line-clamp-2">Dịch vụ spa mới tại resort</h3>
                    <p class="text-gray-300 text-xs mb-3 line-clamp-3">Khám phá không gian thư giãn mới với các liệu pháp spa thiên nhiên, mang đến trải nghiệm thư giãn tuyệt vời.</p>
                    <button class="border border-white text-white px-4 py-1.5 rounded hover:bg-white hover:text-[#8C6A4F] transition-colors text-xs w-full">
                        TÌM HIỂU →
                    </button>
                </div>
            </div>

            <!-- Additional News Items (Compact) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-4">
                <!-- Compact News 1 -->
                <div class="bg-[#1a1a1a]/20 rounded-lg p-3 hover:bg-[#1a1a1a]/30 transition-colors cursor-pointer">
                    <div class="flex items-start gap-2">
                        <div class="w-12 h-12 bg-gray-700 rounded flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-300 text-xs mb-1 line-clamp-1">Tour du lịch</p>
                            <h4 class="text-white text-sm font-medium line-clamp-2">Khám phá Ba Vì</h4>
                        </div>
                    </div>
                </div>

                <!-- Compact News 2 -->
                <div class="bg-[#1a1a1a]/20 rounded-lg p-3 hover:bg-[#1a1a1a]/30 transition-colors cursor-pointer">
                    <div class="flex items-start gap-2">
                        <div class="w-12 h-12 bg-gray-700 rounded flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-300 text-xs mb-1 line-clamp-1">Ẩm thực</p>
                            <h4 class="text-white text-sm font-medium line-clamp-2">Menu mùa thu</h4>
                        </div>
                    </div>
                </div>

                <!-- Compact News 3 -->
                <div class="bg-[#1a1a1a]/20 rounded-lg p-3 hover:bg-[#1a1a1a]/30 transition-colors cursor-pointer">
                    <div class="flex items-start gap-2">
                        <div class="w-12 h-12 bg-gray-700 rounded flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-300 text-xs mb-1 line-clamp-1">Hoạt động</p>
                            <h4 class="text-white text-sm font-medium line-clamp-2">Teambuilding</h4>
                        </div>
                    </div>
                </div>

                <!-- Compact News 4 -->
                <div class="bg-[#1a1a1a]/20 rounded-lg p-3 hover:bg-[#1a1a1a]/30 transition-colors cursor-pointer">
                    <div class="flex items-start gap-2">
                        <div class="w-12 h-12 bg-gray-700 rounded flex-shrink-0"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-300 text-xs mb-1 line-clamp-1">Sự kiện</p>
                            <h4 class="text-white text-sm font-medium line-clamp-2">Tiệc cưới</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Controls -->
            <div class="flex justify-center gap-3">
                <button class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#A88F7B] text-white flex items-center justify-center hover:bg-[#9A806A] transition-colors" id="prevNews">
                    ←
                </button>
                <button class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#A88F7B] text-white flex items-center justify-center hover:bg-[#9A806A] transition-colors" id="nextNews">
                    →
                </button>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Room Carousel
    const roomCarousel = document.getElementById('roomCarousel');
    const prevRoom = document.getElementById('prevRoom');
    const nextRoom = document.getElementById('nextRoom');

    if (prevRoom && nextRoom) {
        prevRoom.addEventListener('click', () => {
            roomCarousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
        nextRoom.addEventListener('click', () => {
            roomCarousel.scrollBy({ left: 300, behavior: 'smooth' });
        });
    }

    // Event Carousel
    const eventCarousel = document.getElementById('eventCarousel');
    const prevEvent = document.getElementById('prevEvent');
    const nextEvent = document.getElementById('nextEvent');

    if (prevEvent && nextEvent) {
        prevEvent.addEventListener('click', () => {
            eventCarousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
        nextEvent.addEventListener('click', () => {
            eventCarousel.scrollBy({ left: 300, behavior: 'smooth' });
        });
    }

    // Tour Carousel
    const tourCarousel = document.getElementById('tourCarousel');
    const prevTour = document.getElementById('prevTour');
    const nextTour = document.getElementById('nextTour');

    if (prevTour && nextTour) {
        prevTour.addEventListener('click', () => {
            tourCarousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
        nextTour.addEventListener('click', () => {
            tourCarousel.scrollBy({ left: 300, behavior: 'smooth' });
        });
    }

    // News Carousel (for mobile scrolling)
    const newsCarousel = document.getElementById('newsCarousel');
    const prevNews = document.getElementById('prevNews');
    const nextNews = document.getElementById('nextNews');

    if (prevNews && nextNews && newsCarousel) {
        prevNews.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                newsCarousel.scrollBy({ left: -300, behavior: 'smooth' });
            }
        });
        nextNews.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                newsCarousel.scrollBy({ left: 300, behavior: 'smooth' });
            }
        });
    }
</script>
@endsection
