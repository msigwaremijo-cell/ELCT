@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl opacity-95">Visit any of our branches or reach out for personalized assistance</p>
        </div>
    </div>
</section>

<!-- Branch Locations Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Branch Locations</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Find us at a branch near you. We have 15+ locations across Northern Tanzania.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Arusha Main Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Arusha Main Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Boma Road, Arusha City</h4>
                            <p class="text-gray-600">P.O. Box 1234, Arusha</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 250 1234</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>

            <!-- Moshi Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Moshi Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Rindi Lane, Moshi</h4>
                            <p class="text-gray-600">P.O. Box 5678, Moshi</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 275 5678</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>

            <!-- Karatu Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Karatu Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Karatu Town Center</h4>
                            <p class="text-gray-600">P.O. Box 9012, Karatu</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 253 9012</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>

            <!-- Babati Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Babati Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Babati Town, Manyara</h4>
                            <p class="text-gray-600">P.O. Box 3456, Babati</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 254 3456</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>

            <!-- Mbulu Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Mbulu Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Mbulu Town Center</h4>
                            <p class="text-gray-600">P.O. Box 7890, Mbulu</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 256 7890</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>

            <!-- Ngorongoro Branch -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary">Ngorongoro Branch</h3>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Ngorongoro Conservation</h4>
                            <p class="text-gray-600">P.O. Box 1122, Ngorongoro</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Phone</h4>
                            <p class="text-gray-600">+255 27 252 1122</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-4">
                        <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                        <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="btn-secondary">View All Branches</a>
        </div>
    </div>
</section>

<!-- Contact Information & Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-secondary">Get in Touch</h2>
                
                <div class="space-y-6">
                    <!-- Main Office -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12l-4.243 4.243a1 1 0 00-1.414 1.414L2 5.657a1 1 0 01.414.707.293l2.828 2.828a1 1 0 01.414 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a1 1 0 110 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1V3a1 1 0 011-1z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">KNCU Building Moshi</h3>
                            <p class="text-gray-600">
                                ELCT ND SACCOS Headquarters<br>
                                Arusha City, Tanzania<br>
                                P.O. Box 1234, Arusha
                            </p>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012 2v7a2 2 0 01-2 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l14 0"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Phone</h3>
                            <p class="text-gray-600">
                                Toll Free: 080 075 0301<br>
                                Mobile: +255 754 123 456
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0l7.89-5.26a2 2 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Email</h3>
                            <p class="text-gray-600">
                                General: info@elctndsaccos.org<br>
                                Support: support@elctndsaccos.org<br>
                                Loans: loans@elctndsaccos.org
                            </p>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m0-4l-3 3m-3-4v4m0 4h6m-6 0v4m0-4l3 3m3-3l-3-3"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Business Hours</h3>
                            <p class="text-gray-600">
                                Monday - Friday: 8:30am - 4:30pm<br>
                                Saturday: 9:00am - 2:00pm<br>
                                Sunday: 11:00am - 2:00pm
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4 text-secondary">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-secondary-100 rounded-full flex items-center justify-center hover:bg-secondary-200 transition-colors">
                            <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-100 rounded-full flex items-center justify-center hover:bg-secondary-200 transition-colors">
                            <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-100 rounded-full flex items-center justify-center hover:bg-secondary-200 transition-colors">
                            <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-100 rounded-full flex items-center justify-center hover:bg-secondary-200 transition-colors">
                            <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-secondary">Send Us a Message</h2>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="account">Account Services</option>
                            <option value="loan">Loan Information</option>
                            <option value="complaint">Complaint</option>
                            <option value="feedback">Feedback</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required></textarea>
                    </div>
                    
                    <div class="flex items-start">
                        <input type="checkbox" id="consent" name="consent" class="mt-1 mr-2" required>
                        <label for="consent" class="text-sm text-gray-600">
                            I consent to ELCT ND SACCOS processing my personal data in accordance with the privacy policy.
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Branch Locations -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Branch Locations</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Find us at a branch near you. We have 15+ locations across Northern Tanzania.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Branch 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Arusha Main Branch</h3>
                <p class="text-gray-600 mb-4">
                    Boma Road, Arusha City<br>
                    P.O. Box 1234, Arusha<br>
                    Phone: +255 27 250 1234
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
            
            <!-- Branch 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Moshi Branch</h3>
                <p class="text-gray-600 mb-4">
                    Rindi Lane, Moshi<br>
                    P.O. Box 5678, Moshi<br>
                    Phone: +255 27 275 5678
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
            
            <!-- Branch 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Karatu Branch</h3>
                <p class="text-gray-600 mb-4">
                    Karatu Town Center<br>
                    P.O. Box 9012, Karatu<br>
                    Phone: +255 27 253 9012
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
            
            <!-- Branch 4 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Babati Branch</h3>
                <p class="text-gray-600 mb-4">
                    Babati Town, Manyara<br>
                    P.O. Box 3456, Babati<br>
                    Phone: +255 27 254 3456
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
            
            <!-- Branch 5 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Mbulu Branch</h3>
                <p class="text-gray-600 mb-4">
                    Mbulu Town Center<br>
                    P.O. Box 7890, Mbulu<br>
                    Phone: +255 27 256 7890
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
            
            <!-- Branch 6 -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <h3 class="text-xl font-semibold mb-3 text-secondary">Ngorongoro Branch</h3>
                <p class="text-gray-600 mb-4">
                    Ngorongoro Conservation<br>
                    P.O. Box 1122, Ngorongoro<br>
                    Phone: +255 27 252 1122
                </p>
                <div class="flex space-x-4">
                    <button class="text-primary hover:text-primary-600 font-medium">Get Directions</button>
                    <button class="text-primary hover:text-primary-600 font-medium">Call Branch</button>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="btn-secondary">View All Branches</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Frequently Asked Questions</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Find answers to common questions about our services and membership.</p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-4">
            <div class="border border-gray-200 rounded-lg">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50">
                    <span class="font-medium text-secondary">How do I become a member of ELCT ND SACCOS?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    To become a member, you need to visit any of our branches with valid identification, fill out a membership form, and purchase a minimum share capital of Tsh 50,000. The process typically takes 24-48 hours.
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50">
                    <span class="font-medium text-secondary">What are the requirements for getting a loan?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    Loan requirements include: being an active member for at least 6 months, having regular savings, providing collateral or guarantors, and submitting a completed loan application form with supporting documents.
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50">
                    <span class="font-medium text-secondary">How can I access mobile banking?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    You can access mobile banking by downloading our ELCT ND SACCOS mobile app from Google Play Store or App Store, or by dialing *149*96# for USSD banking. You'll need to register at any branch first.
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50">
                    <span class="font-medium text-secondary">What are your interest rates?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    Our interest rates vary by product type: Savings accounts earn 5-12% annually, while loan interest rates range from 15-20% depending on the loan type and amount. Fixed deposits offer the highest returns.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Have any question?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">Our dedicated team is here to assist you with all your banking needs.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0800750301" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md">
                Call Now
            </a>
            <a href="mailto:info@elctndsaccos.org" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200">
                Write us email
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200">
                Visit anytime
            </a>
        </div>
    </div>
</section>
@endsection
