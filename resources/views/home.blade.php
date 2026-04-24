@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('images/people-office-analyzing-checking-finance-graphs.jpg') }}" alt="Financial Services" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">ELCT ND SACCOS</h1>
            <p class="text-2xl md:text-3xl mb-8 opacity-95">Giving everyone an opportunity to achieve financial security</p>
            <p class="text-lg md:text-xl mb-8 opacity-90 max-w-3xl">
                People in United Republic of Tanzania are hard working and have dreams to fulfill in life. In their course of their work, they need a financial partner and friend who supports them to save, invest and grow - in pursuit of their dreams and aspirations. ELCT ND SACCOS is a financial partner and friend.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}" class="btn-primary text-lg py-4 px-8">Become a Member</a>
                <a href="{{ route('products') }}" class="btn-outline-secondary text-lg py-4 px-8">Our Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Hello Section -->
<section class="py-16 bg-gradient-to-br from-primary-50 to-secondary-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <span class="text-sm font-semibold text-primary-600 tracking-wider uppercase">|| WELCOME TO ELCT ND SACCOS ||</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Hello! We're Here to Help You Grow</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Your trusted financial partner for over 28 years, dedicated to empowering Tanzanian communities through cooperative banking excellence
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Welcome Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Member-Centered Approach</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    We put our members first in everything we do. Your financial success is our success, and we're committed to helping you achieve your dreams.
                </p>
            </div>
            
            <!-- Welcome Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 2V2m0 16V2m0 16l-3 3m3-3l3 3"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Financial Empowerment</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    We provide the tools, resources, and support you need to take control of your financial future and build lasting wealth for your family.
                </p>
            </div>
            
            <!-- Welcome Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Community Trust</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Built on trust, transparency, and mutual respect. We're not just a financial institution – we're your neighbors and partners in growth.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <div class="inline-flex items-center space-x-4 bg-white rounded-full px-8 py-4 shadow-lg border border-gray-100">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <span class="text-gray-700 font-medium">Call us: 080 075 0301</span>
                </div>
                <div class="w-px h-6 bg-gray-300"></div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    <span class="text-gray-700 font-medium">info@elctndsaccos.org</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="text-6xl md:text-7xl font-bold text-primary mb-4">28+</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">Years of Experience</h2>
                <p class="text-gray-600 text-lg mb-6">
                    ELCT ND SACCOS was established in 1994 and was officially registered on 27/07/1995 under Cooperative Society Act number 15 of 1991.
                </p>
                <p class="text-gray-600">
                    With more than 28 years of experience serving the community, we have built a reputation for trust, reliability, and member-focused financial services.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/young-businessman-analyzing-data-holding-magnifying-glass-generated-by-ai.jpg') }}" alt="28+ Years Experience" class="rounded-lg shadow-xl w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">WHY SHOULD YOU JOIN ELCT ND SACCOS?</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Member-Owned</h4>
                        <p class="text-gray-600">Owned by Members and all decisions of operations are made from Annual General Meeting (AGM).</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Regulated & Secure</h4>
                        <p class="text-gray-600">Regulated and audited in accordance with Cooperative Society Act 2013 and Microfinance Act 2018.</p>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zm1.134 3.164c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C9.07 11.34 9 11.114 9 11c0-.114.07-.34.433-.582zm-2.567-.267v1.698a2.305 2.305 0 01-.567-.267C6.07 8.34 6 8.114 6 8c0-.114.07-.34.433-.582z"/>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Not for Profit</h4>
                        <p class="text-gray-600">Not for profit making, works on members financial needs, and gives dividends to members from profits.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-1">Digital Services</h4>
                        <p class="text-gray-600">Distance is not a barrier, transact at your convenience with ATM Card and Mobile (App & USSD).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Our Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Comprehensive financial solutions designed to meet your personal and business needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Membership -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zm17 6a5 5 0 00-4.546-4.916 5.986 5.986 0 00-4.908 4.908c-.583.058-.918.058-1.464.058V16a1 1 0 001 1h2a1 1 0 001-1v-1.954c.546 0 .881 0 1.464-.058a5.986 5.986 0 004.908-4.908A5 5 0 0016 12z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Membership</h3>
                <p class="text-gray-600 text-center mb-4">
                    ELCT ND SACCOS membership are an Entrepreneur, Businessman and all employees from United Republic of Tanzania.
                </p>
                <div class="text-center">
                    <a href="#" class="btn-secondary">Join Now</a>
                </div>
            </div>
            
            <!-- Savings and Deposits -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm7-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Savings and Deposits</h3>
                <p class="text-gray-600 text-center mb-4">
                    ELCT ND SACCOS allows her Members to pay for SHARE, make regular SAVINGS and DEPOSITS at their convenient.
                </p>
                <div class="text-center">
                    <a href="{{ route('products') }}#savings" class="btn-secondary">Learn More</a>
                </div>
            </div>
            
            <!-- Loans -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Loans</h3>
                <p class="text-gray-600 text-center mb-4">
                    ELCT ND SACCOS gives and issue loans to her Members in affordable interest rate in order to fulfill their financial needs.
                </p>
                <div class="text-center">
                    <a href="{{ route('products') }}#loans" class="btn-secondary">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best SACCOS Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/woman-interacting-with-money.jpg') }}" alt="ELCT ND SACCOS Services" class="rounded-lg shadow-xl w-full h-auto">
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">ELCT ND SACCOS Is BEST SACCOS To Join</h2>
                <p class="text-gray-600 text-lg mb-6">
                    We will customize a loan based on amount of cash you need. Contact Now and experience the difference.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-primary-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">28+ Years of Trusted Service</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-primary-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 3.976 3.066 3.066 0 001.745.723 3.066 3.066 0 003.976-3.976 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 00-3.976-3.976A3.066 3.066 0 006.267 3.455zM3 10a7 7 0 017-7 7 7 0 01-7 7zm7-4a1 1 0 100 2 0 1 1 0 000-2z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Member-Focused Approach</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-primary-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Affordable Interest Rates</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-primary-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span class="text-lg font-medium">Digital Banking Solutions</span>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="{{ route('contact') }}" class="btn-primary text-lg py-3 px-6">Become a Member</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-block">
                <span class="text-sm font-semibold text-primary-600 tracking-wider uppercase mb-3 block">|| OUR TESTIMONIALS ||</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What they're talking about ELCT ND SACCOS</h2>
        </div>
        
        <!-- Testimonial Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Joyce K Mushi -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <!-- User Image -->
                <div class="flex flex-col items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-full flex items-center justify-center mb-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('images/Wanachama/mama-kuku.png') }}" alt="Joyce K Mushi" class="w-full h-full rounded-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <svg class="w-10 h-10 text-white" style="display:none;" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <!-- 5-Star Rating -->
                    <div class="flex items-center mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <!-- Name and Role -->
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Joyce K Mushi</h3>
                    <p class="text-sm text-gray-600 font-medium uppercase tracking-wide">MWANACHAMA (MAMA KUKU)</p>
                </div>
                <!-- Testimonial Text -->
                <blockquote class="text-gray-700 leading-relaxed text-center">
                    "Ni ukweli hapa ndipo mahali ninapokimbilia, Nimeweza kufanya mengi kwa njia hii ya SACCOS. Nikiwa sina hela ya kuchukua kuku huwa nakuja SACCOS na kuchukua Mkopo wa Chapchap."
                </blockquote>
            </div>
            
            <!-- Joe N Nkya -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <!-- User Image -->
                <div class="flex flex-col items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-full flex items-center justify-center mb-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('images/Wanachama/MWANCHAM1.png') }}" alt="Joe N Nkya" class="w-full h-full rounded-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <svg class="w-10 h-10 text-white" style="display:none;" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <!-- 5-Star Rating -->
                    <div class="flex items-center mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <!-- Name and Role -->
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Joe N Nkya</h3>
                    <p class="text-sm text-gray-600 font-medium uppercase tracking-wide">MWANACHAMA</p>
                </div>
                <!-- Testimonial Text -->
                <blockquote class="text-gray-700 leading-relaxed text-center">
                    "Ninajua kwamba kumekuwa na SACCOS nyingi, na nyingi zimekufa. Lakini kwa kweli kwaajili ya ELCT ND SACCOS, NIMEIONA NURU NA MWANGA MKUBWA SANA WENYE MAFANIKIO."
                </blockquote>
            </div>
            
            <!-- Prospar Mlay -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <!-- User Image -->
                <div class="flex flex-col items-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-full flex items-center justify-center mb-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('images/Wanachama/PROPSAR.png') }}" alt="Prospar Mlay" class="w-full h-full rounded-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <svg class="w-10 h-10 text-white" style="display:none;" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <!-- 5-Star Rating -->
                    <div class="flex items-center mb-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <!-- Name and Role -->
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Prospar Mlay</h3>
                    <p class="text-sm text-gray-600 font-medium uppercase tracking-wide">MWANACHAMA</p>
                </div>
                <!-- Testimonial Text -->
                <blockquote class="text-gray-700 leading-relaxed text-center">
                    "Kwa miaka ya nyuma nilikuwa nakopa Taasisi zingine. Lakini nilipojiunga ELCT ND SACCOS ndipo nikapata mafanikio makubwa sana. Nawashauri watanzania wajiunge na ELCT ND SACCOS watapata mafanikio sana."
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Hello Section 2 - Services & Benefits -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #10b981 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-sm font-semibold text-secondary-600 tracking-wider uppercase">|| DISCOVER OUR EXCELLENCE ||</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Hello! Experience Banking That Cares</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Join thousands of Tanzanians who have transformed their financial lives through our cooperative banking excellence and personalized service
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <div class="space-y-8">
                    <!-- Service Feature 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Quick Loan Processing</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Get fast access to funds when you need them most. Our streamlined loan approval process ensures you receive financial support within 24-48 hours.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service Feature 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Secure Banking</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Your money is safe with us. We use advanced security measures and are regulated by Tanzanian authorities to ensure complete protection of your funds.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service Feature 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Member Community</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Join a thriving community of over 10,000 members. Share experiences, learn from others, and grow together with fellow Tanzanians.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Stats & CTA -->
            <div class="space-y-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-xl p-6 text-center border border-gray-100">
                        <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">10,000+</div>
                        <p class="text-gray-700 font-medium">Happy Members</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 text-center border border-gray-100">
                        <div class="text-3xl md:text-4xl font-bold text-green-600 mb-2">15+</div>
                        <p class="text-gray-700 font-medium">Branch Locations</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 text-center border border-gray-100">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">24/7</div>
                        <p class="text-gray-700 font-medium">Digital Access</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 text-center border border-gray-100">
                        <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-2">98%</div>
                        <p class="text-gray-700 font-medium">Satisfaction Rate</p>
                    </div>
                </div>
                
                <!-- Join CTA -->
                <div class="bg-gradient-to-r from-primary-500 to-secondary-500 rounded-2xl p-8 text-white text-center shadow-xl">
                    <h3 class="text-2xl font-bold mb-4">Ready to Start Your Journey?</h3>
                    <p class="text-lg mb-6 opacity-95">
                        Join ELCT ND SACCOS today and experience the difference of cooperative banking excellence
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg transition-colors duration-200 shadow-md">Join Now</a>
                        <a href="{{ route('products') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-semibold py-3 px-6 rounded-lg transition-colors duration-200">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Join Our Community?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Experience the difference with ELCT ND SACCOS - your trusted financial partner for over 28 years.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Become a Member</a>
            <a href="{{ route('products') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">View Our Services</a>
        </div>
    </div>
</section>
@endsection
