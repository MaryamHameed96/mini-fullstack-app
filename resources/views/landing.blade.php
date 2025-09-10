<!-- resources/views/hero.blade.php -->
@extends('layouts.app')

@section('content')
<section class="relative bg-[#FEF7F2] min-h-screen flex items-center">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-6 lg:px-16 gap-12">
        <!-- Left Content -->
        <div class="md:w-1/2 space-y-6">
            <h1 class="text-[68px] md:text-[68px] font-extrabold text-[#2B1B12] leading-tight font-[Montserrat]">
                Find Your <br> Dream Home
            </h1>
            <p class="text-lg text-[#4F3527] font-bold max-w-md">
                Explore our curated selection of exquisite properties meticulously tailored 
                to your unique dream home vision.
            </p>
            <a href="{{ url('/register') }}" 
               class="inline-block bg-[#2B1B12] text-white px-8 py-3 rounded-md font-semibold hover:bg-[#2B1B12] transition">
                Sign up
            </a>
        </div>

<!-- Right Image -->
<div class="md:w-1/2 flex justify-center items-center">
  <img src="{{ asset('images/hero.png') }}" 
     alt="Dream Home" 
     class="w-[160%] h-[100vh] object-cover ">

</div>

    </div>

    <!-- Search Bar -->
    <div class="absolute left-1/2 bottom-0 transform -translate-x-1/2 translate-y-1/2 w-10/12 md:w-3/4">
        <div class="bg-[#DDC7BB] rounded-xl shadow-lg flex flex-col md:flex-row items-center justify-between gap-4 px-8 py-10">
            <!-- Location -->
           <div class="flex items-center justify-between bg-white rounded-md px-4 py-3 w-full md:w-1/4">
             <span class="text-[#695346] font-semibold">Location</span>
             <i class="fa-solid fa-location-dot text-[#695346] text-lg"></i>
        </div>

            <!-- Type -->
            <div class="flex items-center justify-between bg-white rounded-md px-4 py-3 w-full md:w-1/4">
                 <span class="text-[#695346] font-semibold">Type</span>
                 <i class="fa-solid fa-house text-[#695346] text-lg"></i>
            </div>
            
            <!-- Price -->
           <div class="flex items-center justify-between bg-white rounded-md px-4 py-3 w-full md:w-1/4">
             <span class="text-[#695346] font-semibold">Price</span>
             <i class="fa-solid fa-dollar-sign text-[#695346] text-lg"></i>
            </div>
            <!-- Button -->
            <button class="bg-[#2B1B12] text-white px-10 py-4 rounded-md font-semibold hover:bg-[#2B1B12] transition w-full md:w-auto">
                Sign up
            </button>
        </div>
    </div>
</section>
<!--about-->
<section class="bg-white pt-48 pb-20">
  <div class="container mx-auto flex flex-col md:flex-row items-center gap-12 px-6 lg:px-16">
    
    <!-- Left Image -->
    <div class="md:w-1/2 flex justify-center">
      <img src="{{ asset('images/house 1.png') }}" 
           alt="Dream Home" 
           class="rounded-2xl shadow-lg w-full md:w-[100%] h-[400px] object-cover">
    </div>

    <!-- Right Content -->
    <div class="md:w-1/2 space-y-6 ps-4">
      <h2 class="text-[40px] font-extrabold text-[#2c1e17] font-[Montserrat]">
        We Help You To Find <br> Your Dream Home
      </h2>
      <p class="text-[#4F3527] font-semibold text-lg leading-relaxed">
        From cozy cottages to luxurious estates, our dedicated team guides you through every step of the journey, 
        ensuring your dream home becomes a reality.
      </p>

      <!-- Stats -->
      <div class="grid grid-cols-3 gap-6 pt-6">
        <div class="text-center md:text-left">
          <h3 class="text-[48px] font-extrabold text-[#4F3527]">8K+</h3>
          <p class="text-[#4F3527] font-semibold">Houses Available</p>
        </div>
        <div class="text-center md:text-left">
          <h3 class="text-[48px] font-extrabold text-[#4F3527]">6K+</h3>
          <p class="text-[#4F3527] font-semibold">Houses Sold</p>
        </div>
        <div class="text-center md:text-left">
          <h3 class="text-[48px] font-extrabold text-[#4F3527]">2K+</h3>
          <p class="text-[#4F3527] font-semibold">Trusted Agents</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- choose -->
<section class="bg-white py-20">
  <div class="container mx-auto px-6 lg:px-16 text-center">
    <!-- Heading -->
    <h2 class="text-[40px] font-extrabold text-[#2B1B12] mb-4 font-[Montserrat]">
      Why Choose Us
    </h2>
    <p class="text-lg text-[#4F3527] font-bold max-w-2xl mx-auto mb-12">
      Elevating Your Home Buying Experience with Expertise, Integrity, <br>
      and Unmatched Personalized Service
    </p>

    <!-- Feature Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Card 1 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-md p-6 flex flex-col items-start text-start">
        <div class="bg-[#FBF5F1]  w-16 h-16 rounded-lg flex items-center justify-center flex-shrink-0 mb-4">
          <i class="fa-solid fa-location-dot text-[#2c1e17] text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text[#2B1B12] mb-2">Expert Guidance</h3>
        <p class="text-[#4F3527] font-semibold  text-sm">
          Benefit from our team's seasoned expertise for a smooth buying experience
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-md p-6 flex flex-col items-start text-start">
        <div class="bg-[#FBF5F1] w-16 h-16 rounded-lg flex items-center justify-center flex-shrink-0 mb-4 ">
          <i class="fa-solid fa-user-pen text-[#2c1e17] text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-[#2B1B12] mb-2">Personalized Service</h3>
        <p class="text-[#4F3527] text-sm font-semibold">
          Our services adapt to your unique needs, making your journey stress-free
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-md p-6 flex flex-col items-start text-start">
        <div class="bg-[#FBF5F1]  w-16 h-16 rounded-lg flex items-center justify-center flex-shrink-0 mb-4">
          <i class="fa-solid fa-clipboard-list text-[#2c1e17] text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-[#2B1B12] mb-2">Transparent Process</h3>
        <p class="text-[#4F3527] font-semibold text-sm">
          Stay informed with our clear and honest approach to buying your home
        </p>
      </div>

      <!-- Card 4 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-md p-6 flex flex-col items-start text-start">
        <div class="bg-[#FBF5F1]  w-16 h-16 rounded-lg flex items-center justify-center flex-shrink-0 mb-4">
          <i class="fa-solid fa-handshake text-[#2c1e17] text-3xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-[#2B1B12] mb-2">Exceptional Support</h3>
        <p class="text-[#4F3527] font-semibold text-sm">
          Providing peace of mind with our responsive and attentive customer service
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Popular Residences Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <!-- Heading -->
    <h2 class="text-[32px] md:text-4xl font-bold text-center text-[#2c1e17] mb-12">
      Our Popular Residences
    </h2>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Card 1 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <img src="images/house 2.png" alt="San Francisco Home" class="object-cover w-full h-[250px] md:h-[300px] lg:h-[356px]">
        <div class="p-6">
          <h3 class="text-lg font-bold text-[20px] text-[#2B1B12] flex items-center mb-3">
            <i class="fa-solid fa-location-dot mr-2"></i> San Francisco, California
          </h3>
          <div class="flex flex-wrap items-center text-sm text-gray-700 gap-6 mb-4">
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-bed text-[#2c1e17]"></i>
              </span> 4 Rooms
            </div>
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-ruler-combined text-[#2c1e17]"></i>
              </span> 3,500 sq ft
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-[#2c1e17] text-white px-5 py-2 rounded-lg font-medium shadow-md hover:bg-[#3b2a22] transition">
              Sign up
            </button>
            <span class="text-xl font-bold text-[#2c1e17]">$2,500,000</span>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <img src="images/house 3.jpg" alt="Beverly Hills Home" class="object-cover w-full h-[250px] md:h-[300px] lg:h-[356px]">
        <div class="p-6">
          <h3 class="text-lg font-bold text-[20px] text-[#2B1B12] flex items-center mb-3">
            <i class="fa-solid fa-location-dot mr-2"></i> Beverly Hills, California
          </h3>
          <div class="flex flex-wrap items-center text-sm text-gray-700 gap-6 mb-4">
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-bed text-[#2c1e17]"></i>
              </span> 3 Rooms
            </div>
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-ruler-combined text-[#2c1e17]"></i>
              </span> 1,500 sq ft
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-[#2c1e17] text-white px-5 py-2 rounded-lg font-medium shadow-md hover:bg-[#3b2a22] transition">
              Sign up
            </button>
            <span class="text-xl font-bold text-[#2c1e17]">$850,000</span>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <img src="images/house 4.png" alt="Palo Alto Home" class="object-cover w-full h-[250px] md:h-[300px] lg:h-[356px]">
        <div class="p-6">
          <h3 class="text-lg font-bold text-[20px] text-[#2B1B12] flex items-center mb-3">
            <i class="fa-solid fa-location-dot mr-2"></i> Palo Alto, California
          </h3>
          <div class="flex flex-wrap items-center text-sm text-gray-700 gap-6 mb-4">
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-bed text-[#2c1e17]"></i>
              </span> 6 Rooms
            </div>
            <div class="flex items-center">
              <span class="bg-white p-2 rounded-md shadow-sm mr-2">
                <i class="fa-solid fa-ruler-combined text-[#2c1e17]"></i>
              </span> 4,000 sq ft
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-[#2c1e17] text-white px-5 py-2 rounded-lg font-medium shadow-md hover:bg-[#3b2a22] transition">
              Sign up
            </button>
            <span class="text-xl font-bold text-[#2c1e17]">$3,700,000</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Testimonials Section -->
<section class="bg-[#FEF7F2] py-20">
  <div class="container mx-auto text-center px-6">
    <!-- Heading -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#2B1B12] mb-4">
      What People Say <br> About Dwello
    </h2>

    <!-- Cards Wrapper -->
    <div class="grid md:grid-cols-3 gap-8 mt-12">
      
      <!-- Card 1 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <!-- Image -->
        <img src="{{ asset('images/bedroom.png') }}" alt="Room" class="w-full h-56 object-cover">
        
        <!-- Content -->
        <div class="bg-[#DDC7BB] p-6 text-left">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <img src="{{ asset('images/user 1.jpg') }}" alt="Micheal" class="w-[62px] h-[62px] rounded-full object-cover mr-3">
              <div>
                <h4 class="font-bold text-[#2B1B12]">Michael Rodriguez</h4>
                <p class="text-sm text-gray-700">San Francisco</p>
              </div>
            </div>
            <span class="bg-white text-black px-2 py-1 rounded-md text-sm font-bold">⭐ 5.0</span>
          </div>
          <p class="text-[#4F3527] font-semibold">
            Dwello truly cares about their clients. They listened to my needs and preferences and helped me find the perfect home in the Bay Area. Their professionalism and attention to detail are unmatched.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <img src="{{ asset('images/bedroom 2.png') }}" alt="Room" class="w-full h-56 object-cover ">
        <div class="bg-[#DDC7BB] p-6 text-left">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <img src="{{ asset('images/user 2.jpg') }}" alt="Sara" class="w-[62px] h-[62px] rounded-full object-cover mr-3">
              <div>
                <h4 class="font-bold text-[#2B1B12]">Sara Nguyen</h4>
                <p class="text-sm text-gray-700">San Diego</p>
              </div>
            </div>
            <span class="bg-white text-black px-2 py-1 rounded-md text-sm font-bold">⭐ 4.5</span>
          </div>
          <p class="text-[#4F3527] font-semibold">
            I had a fantastic experience working with Dwello. Their expertise and personalized service exceeded my expectations. I found my dream home quickly and smoothly. Highly recommended!
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-[#DDC7BB] rounded-2xl shadow-lg overflow-hidden">
        <img src="{{ asset('images/bedroom 3.png') }}" alt="Room" class="w-full h-56 object-cover">
        <div class="bg-[#DDC7BB] p-6 text-left">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <img src="{{ asset('images/user3.jpg') }}" alt="Emily" class="w-[62px] h-[62px] rounded-full object-cover mr-3">
              <div>
                <h4 class="font-bold text-[#2B1B12]">Emily Johnson</h4>
                <p class="text-sm text-gray-700">Los Angeles</p>
              </div>
            </div>
            <span class="bg-white text-black px-2 py-1 rounded-md text-sm font-bold">⭐ 5.0</span>
          </div>
          <p class="text-[#4F3527] font-semibold">
            Dwello made my dream of owning a home a reality! Their team provided exceptional support and guided me through every step of the process. I couldn't be happier with my new home!
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Help Section -->
<section class="bg-white py-20">
  <div class="container mx-auto text-center px-6">
    
    <!-- Heading -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#2B1B12] mb-10">
      Do You Have Any Questions? <br> Get Help From Us
    </h2>

    <!-- Options -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-10 mb-10">
      <div class="flex items-center gap-3 text-[#2B1B12]">
        <i class="fa-solid fa-comments text-xl"></i>
        <span class="font-medium">Chat live with our support team</span>
      </div>
      <div class="flex items-center gap-3 text-[#2B1B12]">
        <i class="fa-solid fa-circle-question text-xl"></i>
        <span class="font-medium">Browse our FAQ</span>
      </div>
    </div>

    <!-- Email Form -->
    <form class="flex items-center justify-center max-w-2xl mx-auto">
      <!-- Input Box -->
      <div class="flex items-center bg-[#DDC7BB] px-4 w-full h-[56px] rounded-md">
        <i class="fa-solid fa-envelope text-[#2B1B12] mr-3"></i>
    <input type="email" 
       placeholder="Enter your email address..." 
       class="bg-[#DDC7BB] text-[#2B1B12] placeholder-[#2B1B12] 
              rounded-md px-4 py-3 w-full
              border-0 outline-none appearance-none
              focus:outline-none focus:ring-0 focus:border-0" />


      </div>

      <!-- Button -->
      <button type="submit" 
              class="ml-4 h-[56px] px-8 bg-[#2B1B12] text-white rounded-md font-semibold hover:bg-[#4F3527] transition">
        Submit
      </button>
    </form>
  </div>
</section>


@endsection
