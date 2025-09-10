<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-[#FEF7F2]  shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-4">
        
        <!-- Left: Hamburger (Mobile Only) -->
        <div class="md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <svg class="w-7 h-7 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Center: Logo (mobile center, desktop left) -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800 absolute left-1/2 transform -translate-x-1/2 md:static md:translate-x-0">
            Dwello
        </a>

        <!-- Desktop Menu (centered links) -->
        <div class="hidden md:flex space-x-12 mx-auto">
            <a href="{{ url('/') }}" class="text-black-700 hover:text-black font-semibold">Home</a>
            <a href="{{ url('/service') }}" class="text-black-700 hover:text-black font-semibold">Service</a>
            <a href="{{ url('/agents') }}" class="text-black-700 hover:text-black font-semibold">Agents</a>
            <a href="{{ url('/contact') }}" class="text-black-700 hover:text-black font-semibold">Contact</a>
        </div>

        <!-- Right Section -->
        <div class="flex items-center space-x-6">
            <button>
                <img src="{{ asset('images/search.png') }}" alt="Search" class="w-6 h-6">
            </button>
            
            <button>
                <img src="{{ asset('images/user.png') }}" alt="Profile" class="w-6 h-6">
            </button>
            <!-- Sign Up Button (desktop only styled) -->
            <a href="{{ url('/register') }}" 
               class="hidden md:inline-block bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
                Sign up
            </a>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#FEF7F2] border-t border-gray-200">
        <div class="flex flex-col space-y-4 px-4 py-6">
            <a href="{{ url('/') }}" class="text-#2A1B12 hover:text-[#2A1B12] font-semibold">Home</a>
            <a href="{{ url('/service') }}" class="text-[#2A1B12] hover:text-[#2A1B12] font-semibold">Service</a>
            <a href="{{ url('/agents') }}" class="text-[#2A1B12] hover:text-[#2A1B12] font-semibold">Agents</a>
            <a href="{{ url('/contact') }}" class="text-[#2A1B12] hover:text-[#2A1B12] font-semibold">Contact</a>
            <a href="{{ url('/register') }}" class="text-[#2B1B12] hover:text-[#2A1B12] font-semibold">
                Sign up
            </a>
        </div>
    </div>
</nav>

<!-- JS Toggle -->
<script>
    document.getElementById("menu-btn").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
