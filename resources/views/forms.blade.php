@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Forms & Documents</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">Download Important Documents</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Access and download all necessary ELCT ND SACCOS forms and documents. Get everything you need for membership, loans, and account management.
            </p>
        </div>
    </div>
</section>

<!-- Forms Categories -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Available Forms</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Download forms for all your banking needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Membership Forms -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3a1 1 0 01-1-1v-2a1 1 0 112 0v2a1 1 0 01-1 1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Membership Forms</h3>
                <p class="text-gray-600 text-center mb-4">
                    Forms for joining and managing your ELCT ND SACCOS membership.
                </p>
                <div class="space-y-3">
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Membership Application</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Share Purchase Form</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Membership Withdrawal</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Loan Forms -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Loan Forms</h3>
                <p class="text-gray-600 text-center mb-4">
                    Application forms for various loan products and services.
                </p>
                <div class="space-y-3">
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Personal Loan Application</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Business Loan Application</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Emergency Loan Application</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Account Forms -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 000 2h2a1 1 0 000 2H9z"/>
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1A1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Account Forms</h3>
                <p class="text-gray-600 text-center mb-4">
                    Forms for account management and changes.
                </p>
                <div class="space-y-3">
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Account Update Form</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Nominee Update Form</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Account Closure Form</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Legal Forms -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1A1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Legal Forms</h3>
                <p class="text-gray-600 text-center mb-4">
                    Legal documents and compliance forms.
                </p>
                <div class="space-y-3">
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">KYC Form</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Terms & Conditions</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-primary-50 transition-colors group">
                        <span class="font-medium text-gray-900 group-hover:text-primary-600">Privacy Policy</span>
                        <svg class="w-4 h-4 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0l9 9a1 1 0 001.414 0l-9-9a1 1 0 00-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instructions Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">How to Use These Forms</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Simple steps to complete and submit your forms</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-primary-500">1</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Download</h3>
                    <p class="text-gray-600">Click on any form to download it to your device</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-primary-500">2</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Complete</h3>
                    <p class="text-gray-600">Fill in all required fields accurately and completely</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-primary-500">3</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Submit</h3>
                    <p class="text-gray-600">Submit at any ELCT ND SACCOS branch or email to us</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Need Help with Forms?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Our team is here to assist you</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Phone Support</h3>
                <p class="text-gray-600 mb-4">Call us for assistance with form completion</p>
                <a href="tel:0800750301" class="btn-secondary">Call Now</a>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h14a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Email Support</h3>
                <p class="text-gray-600 mb-4">Send us your questions via email</p>
                <a href="mailto:info@elctndsaccos.org" class="btn-secondary">Email Us</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Can't Find What You Need?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Visit any ELCT ND SACCOS branch for personalized assistance with all your form requirements.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Visit Branch</a>
            <a href="tel:0800750301" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">Call Hotline</a>
        </div>
    </div>
</section>
@endsection
