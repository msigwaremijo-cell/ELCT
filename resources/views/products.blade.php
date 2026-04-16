@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Products</h1>
            <p class="text-xl opacity-95">Comprehensive financial solutions designed to meet your personal and business needs.</p>
        </div>
    </div>
</section>

<!-- Savings Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Savings Products</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Grow your wealth with our competitive savings accounts and investment options.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Regular Savings -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-primary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Regular Savings</h3>
                    <div class="text-3xl font-bold">5%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Minimum balance: Tsh 10,000
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Free withdrawals up to 3 per month
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Monthly interest payments
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            ATM card available
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Fixed Deposit -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Fixed Deposit</h3>
                    <div class="text-3xl font-bold">8-12%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Terms: 3, 6, 12, 24 months
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Minimum deposit: Tsh 100,000
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Guaranteed returns
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Auto-renewal option
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-secondary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Junior Savings -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-primary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Junior Savings</h3>
                    <div class="text-3xl font-bold">6%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            For children under 18
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            No minimum balance
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Educational bonuses
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Parent/guardian control
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loan Products -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Loan Products</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Flexible loan solutions to finance your personal and business needs.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Personal Loan -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Personal Loan</h3>
                    <div class="text-3xl font-bold">15%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Amount: Tsh 50,000 - 5M
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Repayment: 6-36 months
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Quick approval
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Minimal documentation
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-secondary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Business Loan -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-primary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Business Loan</h3>
                    <div class="text-3xl font-bold">18%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Amount: Tsh 100,000 - 20M
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Repayment: 12-60 months
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Business expansion support
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Flexible collateral options
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Loan -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Emergency Loan</h3>
                    <div class="text-3xl font-bold">20%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Amount: Tsh 20,000 - 500,000
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Same day processing
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Repayment: 1-6 months
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            No collateral required
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-secondary w-full text-center">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investment Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Investment Products</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Grow your wealth with our secure and profitable investment options.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Treasury Bills -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-primary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Treasury Bills</h3>
                    <div class="text-3xl font-bold">10-15%<span class="text-lg font-normal"> p.a.</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Government-backed securities
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Low risk investment
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Terms: 91, 182, 364 days
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Minimum: Tsh 500,000
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-primary w-full text-center">Invest Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Share Capital -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Share Capital</h3>
                    <div class="text-3xl font-bold">Dividend<span class="text-lg font-normal"> Based</span></div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Become a co-owner
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Annual dividends
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Voting rights
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Minimum: Tsh 50,000
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="btn-secondary w-full text-center">Invest Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Find the Perfect Product for You</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">Our financial experts are here to help you choose the right products for your needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md">Talk to an Advisor</a>
            <a href="{{ route('eservices') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">Apply Online</a>
        </div>
    </div>
</section>
@endsection
