@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">ATM Services</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">24/7 Cash Access</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Access your ELCT ND SACCOS account anytime, anywhere with our extensive ATM network. Withdraw cash, check balances, and perform transactions securely.
            </p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">ATM Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Comprehensive ATM banking services for your convenience</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cash Withdrawal -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Cash Withdrawal</h3>
                <p class="text-gray-600 text-center mb-4">
                    Withdraw cash from your account 24/7 at any ELCT ND SACCOS ATM location.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        No withdrawal limits
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Instant processing
                    </li>
                </ul>
            </div>
            
            <!-- Balance Inquiry -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 000 2h2a1 1 0 000 2H9z"/>
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1A1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1A1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Balance Inquiry</h3>
                <p class="text-gray-600 text-center mb-4">
                    Check your account balance and mini statement instantly at any ATM.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Real-time updates
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Mini statements
                    </li>
                </ul>
            </div>
            
            <!-- Fund Transfer -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8c0-.114.07-.34.433-.582zm1.134 3.164c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C9.07 11.34 9 11.114 9c0-.114.07-.34.433-.582zm-2.567-.267v1.698a2.305 2.305 0 01-.567-.267C6.07 8.34 6 8.114 6c0-.114.07-.34.433-.582z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Fund Transfer</h3>
                <p class="text-gray-600 text-center mb-4">
                    Transfer funds between ELCT ND SACCOS accounts or to other bank accounts.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Instant transfers
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Low fees
                    </li>
                </ul>
            </div>
            
            <!-- PIN Change -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0h3a5 5 0 0110 0v3a1 1 0 110-2h-3a1 1 0 01-1 1v3a1 1 0 110 2h3a1 1 0 110-2v9a1 1 0 01-1 1v3a1 1 0 110 2h3a1 1 0 110-2V9a1 1 0 01-1 1zm1-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3-8a1 1 0 10-2 0 1 1 0 110-2h-1a1 1 0 110 2v8a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">PIN Change</h3>
                <p class="text-gray-600 text-center mb-4">
                    Change your ATM PIN securely at any ELCT ND SACCOS ATM location.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Secure process
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Quick activation
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ATM Locations Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Find an ATM Near You</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">ELCT ND SACCOS ATMs located across Tanzania for your convenience</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold mb-4 text-secondary">24/7 Access</h3>
                <p class="text-gray-600 mb-4">
                    Our ATMs are available round the clock for your banking convenience.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-primary-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Nationwide Coverage</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-primary-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Secure Transactions</span>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold mb-4 text-secondary">Easy to Use</h3>
                <p class="text-gray-600 mb-4">
                    Simple interface with multiple language support and accessibility features.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-primary-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-8a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2h-12z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Touch Screen Interface</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-primary-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 3.976 3.066 3.066 0 001.745.723 3.066 3.066 0 003.976-3.976 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 00-3.976-3.976A3.066 3.066 0 006.267 3.455zM3 10a7 7 0 017-7 7 7 0 01-7 7zm7-4a1 1 0 100 2 0 1 1 0 100-2h-1z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-lg font-medium">Multiple Language Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Your ELCT ND SACCOS ATM Card?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Visit any branch to get your ATM card and start enjoying 24/7 banking convenience.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Visit Branch</a>
            <a href="tel:0800750301" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">Call Now</a>
        </div>
    </div>
</section>
@endsection
