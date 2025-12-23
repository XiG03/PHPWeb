<header class="fixed top-0 left-0 right-0 z-50 bg-[#1a1a1a]">
    <!-- Bar 1: Topmost Bar (Booking with Date Inputs) -->
    <div class="bg-[#1a1a1a] py-2 px-4 hidden md:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Left: Booking Text -->
            <p class="text-white text-xs uppercase font-sans" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">ĐẶT LỊCH VỚI GIÁ TỐT NHẤT</p>
            <!-- Right: Date Inputs and Button -->
            <div class="flex items-center gap-3">
                <!-- Date Input 1 -->
                <div class="relative">
                    <input type="text" placeholder="mm/dd/yyyy" class="bg-white text-black text-sm px-3 py-2 rounded border border-gray-300 w-32 placeholder-gray-500 focus:outline-none focus:border-gray-400">
                    <svg class="absolute right-2 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-600 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <!-- Date Input 2 -->
                <div class="relative">
                    <input type="text" placeholder="mm/dd/yyyy" class="bg-white text-black text-sm px-3 py-2 rounded border border-gray-300 w-32 placeholder-gray-500 focus:outline-none focus:border-gray-400">
                    <svg class="absolute right-2 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-600 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <!-- Button -->
                <button class="bg-white text-black px-4 py-2 rounded text-sm font-sans hover:bg-gray-100 transition-colors" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">
                    BUTTON TEXT →
                </button>
            </div>
        </div>
    </div>

    <!-- Bar 2: Logo Bar (Language, Logo, Phone) -->
    <div class="bg-[#1a1a1a] py-4 hidden md:block relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Left: Language Switch Button -->
                <button class="bg-white text-black px-4 py-2 rounded text-sm font-sans font-normal hover:bg-gray-100 transition-colors" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">
                    EN
                </button>

                <!-- Center: Logo (Absolutely Centered) -->
                <div class="flex flex-col items-center absolute left-1/2 transform -translate-x-1/2">
                    <!-- Floral Icon Above (Rosebud) -->
                    <div class="mb-1">
                        <svg class="w-4 h-5 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <!-- Rosebud - Top center petal -->
                            <path d="M12 2C11.2 2 10.5 2.3 10 2.8C9.5 3.3 9.2 4 9.2 4.8C9.2 5.3 9.4 5.8 9.7 6.1C10 6.4 10.5 6.6 11 6.6C11.5 6.6 12 6.4 12.3 6.1C12.6 5.8 12.8 5.3 12.8 4.8C12.8 4 12.5 3.3 12 2.8C11.5 2.3 10.8 2 10 2H12Z" fill="currentColor"/>
                            <!-- Left outer petal -->
                            <path d="M7.5 4.5C7 5 6.5 5.8 6.5 6.5C6.5 7.2 7 8 7.8 8.5C8.2 8.7 8.7 8.8 9.2 8.7C9.7 8.6 10.2 8.3 10.5 7.8L12 2L10 4.5H7.5Z" fill="currentColor" opacity="0.9"/>
                            <!-- Right outer petal -->
                            <path d="M16.5 4.5C17 5 17.5 5.8 17.5 6.5C17.5 7.2 17 8 16.2 8.5C15.8 8.7 15.3 8.8 14.8 8.7C14.3 8.6 13.8 8.3 13.5 7.8L12 2L14 4.5H16.5Z" fill="currentColor" opacity="0.9"/>
                            <!-- Center bud base -->
                            <path d="M12 2L9.5 7.5L8 8C7.5 8.3 7 8.8 7 9.5C7 10.2 7.3 10.8 7.8 11.2C8.1 11.4 8.5 11.5 8.9 11.5C9.3 11.5 9.7 11.4 10 11.2L11.5 10.5L12 2L12.5 10.5L14 11.2C14.3 11.4 14.7 11.5 15.1 11.5C15.5 11.5 15.9 11.4 16.2 11.2C16.7 10.8 17 10.2 17 9.5C17 8.8 16.5 8.3 16 8L14.5 7.5L12 2Z" fill="currentColor"/>
                            <!-- Stem -->
                            <path d="M12 8L12 22" stroke="currentColor" stroke-width="1" stroke-linecap="round" fill="none"/>
                        </svg>
                    </div>
                    <!-- Main Logo Text -->
                    <h1 class="text-white font-serif text-lg md:text-xl lg:text-2xl font-normal text-center tracking-wide" style="font-family: 'Playfair Display', serif; font-weight: 400;">THE WANDERING ROSE</h1>
                    <!-- Subtitle with EST, Ba Vì, and 2025 -->
                    <div class="flex items-center gap-2 text-white text-[10px] md:text-xs text-center mt-1">
                        <span class="font-sans uppercase" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">EST.</span>
                        <span class="font-script italic text-xs md:text-sm" style="font-family: 'Allura', 'Pinyon Script', cursive;">Ba Vì</span>
                        <span class="font-sans" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">2025</span>
                    </div>
                </div>

                <!-- Right: Phone Number -->
                <div class="flex items-center gap-2 text-white text-sm font-sans" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>092 981 6699</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bar 3: Navigation Links Bar (Centered at Bottom) -->
    <nav class="bg-[#1a1a1a] py-3 hidden md:block">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-center gap-4 lg:gap-6">
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">TRANG CHỦ</a>
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">VỀ CHÚNG TÔI</a>
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">HẠNG PHÒNG</a>
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">DỊCH VỤ SỰ KIỆN</a>
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">TRẢI NGHIỆM & TOUR</a>
                <a href="#" class="text-white uppercase text-xs lg:text-sm font-sans hover:text-white/80 transition-colors whitespace-nowrap" style="font-family: 'UTM Avo', Arial, sans-serif; font-weight: 400; font-size: 14px; letter-spacing: 0.12em;">LIÊN HỆ</a>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-[#1a1a1a] py-3">
        <div class="flex items-center justify-between px-4">
            <button class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <div class="flex flex-col items-center">
                <h1 class="text-white font-serif text-base font-normal" style="font-family: 'Playfair Display', serif; font-weight: 400;">THE WANDERING ROSE</h1>
                <p class="text-white text-xs font-sans" style="font-family: 'Allura', 'Pinyon Script', cursive; font-style: italic;">Ba Vì</p>
            </div>
            <div class="w-6"></div>
        </div>
    </div>
</header>


