<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ELCT ND SACCOS') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Top Bar -->
    <div class="bg-secondary text-white py-2 text-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="hidden md:flex items-center space-x-4">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        info@elctndsaccos.org
                    </span>
                </div>
                    <div class="flex items-center space-x-2">
                        <a href="#" class="hover:text-primary-200 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Area -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        
                        <div class="flex items-center">
                            <img src="{{ asset('images/Logo new.png') }}" alt="ELCT ND SACCOS" class="h-12 w-auto">
                            <div class="ml-6">
                                <h1 class="text-2xl font-bold text-secondary">ELCT ND SACCOS</h1>
                                <p class="text-xs text-gray-600">Our unity is our progress</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Navigation -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <!-- Home -->
                    <a href="{{ route('home') }}" class="nav-item text-gray-900 hover:text-secondary px-4 py-2 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200 flex items-center">
                        Home
                    </a>
                    
                    <!-- About Dropdown -->
                    <div class="nav-dropdown relative">
                        <button class="nav-item text-gray-900 hover:text-secondary px-4 py-2 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200 flex items-center">
                            About Us
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="nav-dropdown-menu absolute top-full left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible transform scale-95 transition-all duration-200">
                            <div class="py-2">
                                <a href="{{ route('about') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <div class="font-medium">Our Story</div>
                                    <div class="text-xs text-gray-500">Learn about our history and mission</div>
                                </a>
                                <a href="{{ route('about') }}#leadership" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <div class="font-medium">Leadership Team</div>
                                    <div class="text-xs text-gray-500">Meet our dedicated professionals</div>
                                </a>
                                <a href="{{ route('about') }}#values" class="block px-4 py-3 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    <div class="font-medium">Core Values</div>
                                    <div class="text-xs text-gray-500">Our guiding principles</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Products Dropdown -->
                    <div class="nav-dropdown relative">
                        <button class="nav-item text-gray-900 hover:text-secondary px-4 py-2 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200 flex items-center">
                            Our Products
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="nav-dropdown-menu absolute top-full left-0 mt-1 w-96 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible transform scale-95 transition-all duration-200">
                            <div class="p-6">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Savings Column -->
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Savings</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('products') }}#savings" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Regular Savings</div>
                                                <div class="text-xs text-gray-500">Flexible savings with 5% interest</div>
                                            </a>
                                            <a href="{{ route('products') }}#savings" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Fixed Deposits</div>
                                                <div class="text-xs text-gray-500">Higher returns for fixed terms</div>
                                            </a>
                                            <a href="{{ route('products') }}#savings" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Junior Savings</div>
                                                <div class="text-xs text-gray-500">Specially for children</div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Loans Column -->
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Loans</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('products') }}#loans" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Personal Loans</div>
                                                <div class="text-xs text-gray-500">For your personal needs</div>
                                            </a>
                                            <a href="{{ route('products') }}#loans" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Business Loans</div>
                                                <div class="text-xs text-gray-500">Grow your business</div>
                                            </a>
                                            <a href="{{ route('products') }}#loans" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Emergency Loans</div>
                                                <div class="text-xs text-gray-500">Quick access to funds</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- e-Services Dropdown -->
                    <div class="nav-dropdown relative">
                        <button class="nav-item text-gray-900 hover:text-secondary px-4 py-2 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200 flex items-center">
                            e-Services
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="nav-dropdown-menu absolute top-full left-0 mt-1 w-96 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible transform scale-95 transition-all duration-200">
                            <div class="p-6">
                                <div class="grid grid-cols-2 gap-8">
                                    <!-- Digital Services -->
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Digital Services</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('mobile') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">SACCOS Mobile</div>
                                                <div class="text-xs text-gray-500">Mobile banking app</div>
                                            </a>
                                            <a href="{{ route('atm') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">ATM Services</div>
                                                <div class="text-xs text-gray-500">24/7 cash access</div>
                                            </a>
                                            <a href="{{ route('online') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Online Banking</div>
                                                <div class="text-xs text-gray-500">Web portal access</div>
                                            </a>
                                            <a href="{{ route('ussd') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">USSD Banking</div>
                                                <div class="text-xs text-gray-500">Dial *150*45#</div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Member Services -->
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Member Services</h3>
                                        <div class="space-y-3">
                                            <a href="{{ route('portal') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Members Portal</div>
                                                <div class="text-xs text-gray-500">Account management</div>
                                            </a>
                                            <a href="{{ route('register') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Register Online</div>
                                                <div class="text-xs text-gray-500">Become a member</div>
                                            </a>
                                            <a href="{{ route('forms') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Forms</div>
                                                <div class="text-xs text-gray-500">Download forms</div>
                                            </a>
                                            <a href="{{ route('calculator') }}" class="block group">
                                                <div class="font-medium text-gray-900 group-hover:text-primary-600 transition-colors">Loan Calculator</div>
                                                <div class="text-xs text-gray-500">Calculate payments</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact -->
                    <a href="{{ route('contact') }}" class="nav-item text-gray-900 hover:text-secondary px-4 py-2 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200 flex items-center">
                        Contact
                    </a>
                </nav>
                
                <!-- Right Side Actions -->
                <div class="flex items-center space-x-4">
                    <!-- User Account -->
                    <div class="hidden lg:flex items-center space-x-3">
                        <a href="#" class="text-gray-600 hover:text-secondary font-medium text-sm">Login</a>
                        <a href="#" class="btn-primary text-sm py-2 px-4">Become a member</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button type="button" class="mobile-menu-button text-gray-600 hover:text-gray-900 focus:outline-none p-2">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden lg:hidden bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 py-4">
                <!-- Mobile Logo -->
                <div class="flex items-center justify-center mb-6">
                    <div class="flex items-center">
                        <img src="{{ asset('images/Logo new.png') }}" alt="ELCT ND SACCOS" class="h-10 w-auto">
                        <div class="ml-4">
                            <h1 class="text-xl font-bold text-secondary">ELCT ND SACCOS</h1>
                            <p class="text-xs text-gray-600">Our unity is our progress</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-2">
                <!-- Mobile Navigation Links -->
                <a href="{{ route('home') }}" class="block px-4 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-lg">Home</a>
                
                <!-- Mobile About Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full px-4 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-lg flex justify-between items-center">
                        About Us
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu hidden pl-4 space-y-1">
                        <a href="{{ route('about') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-primary-600">Our Story</a>
                        <a href="{{ route('about') }}#leadership" class="block px-4 py-2 text-sm text-gray-600 hover:text-primary-600">Leadership Team</a>
                        <a href="{{ route('about') }}#values" class="block px-4 py-2 text-sm text-gray-600 hover:text-primary-600">Core Values</a>
                    </div>
                </div>
                
                <!-- Mobile Products Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full px-4 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-lg flex justify-between items-center">
                        Our Products
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu hidden pl-4">
                        <div class="grid grid-cols-1 gap-4 p-4">
                            <!-- Savings Column -->
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Savings</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('products') }}#savings" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Regular Savings</div>
                                        <div class="text-xs text-gray-500">Flexible savings with 5% interest</div>
                                    </a>
                                    <a href="{{ route('products') }}#savings" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Fixed Deposits</div>
                                        <div class="text-xs text-gray-500">Higher returns for fixed terms</div>
                                    </a>
                                    <a href="{{ route('products') }}#savings" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Junior Savings</div>
                                        <div class="text-xs text-gray-500">Specially for children</div>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Loans Column -->
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Loans</h4>
                                <div class="space-y-2">
                                    <a href="{{ route('products') }}#loans" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Personal Loans</div>
                                        <div class="text-xs text-gray-500">For your personal needs</div>
                                    </a>
                                    <a href="{{ route('products') }}#loans" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Business Loans</div>
                                        <div class="text-xs text-gray-500">Grow your business</div>
                                    </a>
                                    <a href="{{ route('products') }}#loans" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                        <div class="font-medium">Emergency Loans</div>
                                        <div class="text-xs text-gray-500">Quick access to funds</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile e-Services Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full px-4 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-lg flex justify-between items-center">
                        e-Services
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu hidden pl-4">
                        <div class="space-y-2">
                            <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Digital Services</h4>
                            <a href="{{ route('mobile') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">SACCOS Mobile</div>
                                <div class="text-xs text-gray-500">Mobile banking app</div>
                            </a>
                            <a href="{{ route('atm') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">ATM Services</div>
                                <div class="text-xs text-gray-500">24/7 cash access</div>
                            </a>
                            <a href="{{ route('online') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">Online Banking</div>
                                <div class="text-xs text-gray-500">Web portal access</div>
                            </a>
                            <a href="{{ route('ussd') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">USSD Banking</div>
                                <div class="text-xs text-gray-500">Dial *150*45#</div>
                            </a>
                        </div>
                        <div class="space-y-2 mt-4">
                            <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Member Services</h4>
                            <a href="{{ route('portal') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">Members Portal</div>
                                <div class="text-xs text-gray-500">Account management</div>
                            </a>
                            <a href="{{ route('register') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">Register Online</div>
                                <div class="text-xs text-gray-500">Become a member</div>
                            </a>
                            <a href="{{ route('forms') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">Forms</div>
                                <div class="text-xs text-gray-500">Download forms</div>
                            </a>
                            <a href="{{ route('calculator') }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                                <div class="font-medium">Loan Calculator</div>
                                <div class="text-xs text-gray-500">Calculate payments</div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="block px-4 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-lg">Contact</a>
                
                <!-- Mobile User Actions -->
                <div class="pt-4 border-t border-gray-200 space-y-2">
                    <a href="#" class="block w-full px-4 py-3 text-center text-secondary font-medium border border-secondary rounded-lg hover:bg-secondary hover:text-white transition-colors">Login</a>
                    <a href="#" class="block w-full px-4 py-3 text-center text-white bg-primary font-medium rounded-lg hover:bg-primary-600 transition-colors">Become a member</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold mb-4">ELCT ND SACCOS</h3>
                    <p class="text-gray-400 mb-4">
                        KNCU Building - Kibo Road, P.O.Box 7779 - Moshi.
                    </p>
                    <p class="text-gray-400">
                        ELCT ND SACCOS was established in 1994 and was officially registered on 27/07/1995 under Cooperative Society Act number 15 of 1991.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-white">Our Products</a></li>
                        <li><a href="{{ route('eservices') }}" class="text-gray-400 hover:text-white">e-Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Become a Member</a></li>
                    </ul>
                </div>
                
                <!-- Services & Tools -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Services & Tools</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Members Portal Login</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ajira Portal</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Calculator</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mobile App Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Forms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">User Account Deletion</a></li>
                    </ul>
                </div>
                
                <!-- Contact & Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact & Info</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            info@elctndsaccos.org
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            080 075 0301
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0 1 1 0 002 0zm-1 9a1 1 0 01-1-1v-4a1 1 0 112 0v4a1 1 0 01-1 1z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <div class="font-semibold mb-1">Business Hours</div>
                                <div class="text-sm">Mon - Fri: 8:30am - 4:30pm</div>
                                <div class="text-sm">Saturday: 9:00am - 2:00pm</div>
                                <div class="text-sm">Sunday: 11:00am - 2:00pm</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Coop Stakeholders -->
            <div class="border-t border-gray-800 mt-8 pt-8">
                <div class="mb-6">
                    <h3 class="text-lg font-bold mb-4">Coop Stakeholders</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Ministry of Agriculture</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">TCDC</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Bank of Tanzania</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">COASCO</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">MoCU</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">WOCCU</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">ACCOSCA</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">SCCULT (1992) LTD</a>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-400">
                    <div>
                        <a href="#" class="hover:text-white">Terms</a> | 
                        <a href="#" class="hover:text-white">Our Accessibility</a>
                    </div>
                    <div class="text-center md:text-right">
                        &copy; {{ date('Y') }} ELCT ND SACCOS. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Desktop dropdown menus
        const dropdowns = document.querySelectorAll('.nav-dropdown');
        
        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const menu = dropdown.querySelector('.nav-dropdown-menu');
            
            if (button && menu) {
                // Show dropdown on hover
                dropdown.addEventListener('mouseenter', function() {
                    menu.classList.remove('opacity-0', 'invisible', 'scale-95');
                    menu.classList.add('opacity-100', 'visible', 'scale-100');
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    menu.classList.add('opacity-0', 'invisible', 'scale-95');
                    menu.classList.remove('opacity-100', 'visible', 'scale-100');
                });
                
                // Handle keyboard navigation
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const isVisible = !menu.classList.contains('invisible');
                    
                    // Close all other dropdowns
                    document.querySelectorAll('.nav-dropdown-menu').forEach(otherMenu => {
                        if (otherMenu !== menu) {
                            otherMenu.classList.add('opacity-0', 'invisible', 'scale-95');
                            otherMenu.classList.remove('opacity-100', 'visible', 'scale-100');
                        }
                    });
                    
                    // Toggle current dropdown
                    if (isVisible) {
                        menu.classList.add('opacity-0', 'invisible', 'scale-95');
                        menu.classList.remove('opacity-100', 'visible', 'scale-100');
                    } else {
                        menu.classList.remove('opacity-0', 'invisible', 'scale-95');
                        menu.classList.add('opacity-100', 'visible', 'scale-100');
                    }
                });
            }
        });
        
        // Mobile dropdown menus
        const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
        
        mobileDropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const menu = dropdown.querySelector('.mobile-dropdown-menu');
            
            if (button && menu) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    menu.classList.toggle('hidden');
                    
                    // Rotate chevron icon
                    const chevron = button.querySelector('svg');
                    if (chevron) {
                        chevron.classList.toggle('rotate-180');
                    }
                });
            }
        });
        
                
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.nav-dropdown')) {
                document.querySelectorAll('.nav-dropdown-menu').forEach(menu => {
                    menu.classList.add('opacity-0', 'invisible', 'scale-95');
                    menu.classList.remove('opacity-100', 'visible', 'scale-100');
                });
            }
        });
        
        // Sticky header shadow on scroll
        const header = document.querySelector('header.sticky');
        if (header) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    header.classList.add('shadow-xl');
                } else {
                    header.classList.remove('shadow-xl');
                }
            });
        }
    </script>
</body>
</html>
