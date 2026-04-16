@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">e-Services</h1>
            <p class="text-xl opacity-95">Access our banking services anytime, anywhere through our secure digital platforms.</p>
        </div>
    </div>
</section>

<!-- Digital Banking Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-secondary">Banking at Your Fingertips</h2>
                <p class="text-gray-600 mb-4">
                    Experience the convenience of modern banking with our comprehensive digital services. Manage your accounts, transfer funds, pay bills, and access loans from the comfort of your home or on the go.
                </p>
                <p class="text-gray-600 mb-6">
                    Our e-services are designed to provide you with secure, fast, and reliable banking solutions that fit your busy lifestyle. Available 24/7, our digital platforms ensure you're always connected to your finances.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#mobile-app" class="btn-primary">Download Mobile App</a>
                    <a href="#online-banking" class="btn-outline-secondary">Try Online Banking</a>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg p-8">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">24/7</div>
                        <div class="text-gray-600">Service Availability</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">100%</div>
                        <div class="text-gray-600">Secure Transactions</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">50K+</div>
                        <div class="text-gray-600">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">4.8</div>
                        <div class="text-gray-600">App Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile Banking App -->
<section id="mobile-app" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Mobile Banking App</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Download our mobile app for the ultimate banking convenience on your smartphone.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Instant Transfers</h3>
                            <p class="text-gray-600">Send money instantly to any bank account or mobile wallet in Tanzania.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Bill Payments</h3>
                            <p class="text-gray-600">Pay utilities, school fees, and other bills directly from your phone.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 100 4h2a2 2 0 100 4h2a1 1 0 100 2 2 2 0 01-2 2H4a2 2 0 01-2-2V7a2 2 0 012-2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Loan Applications</h3>
                            <p class="text-gray-600">Apply for loans and receive instant approval on your mobile device.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-secondary">Secure & Protected</h3>
                            <p class="text-gray-600">Bank-grade security with biometric authentication and encryption.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <h4 class="text-lg font-semibold mb-4 text-secondary">Download Now</h4>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-black text-white px-6 py-3 rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                            </svg>
                            App Store
                        </button>
                        <button class="bg-black text-white px-6 py-3 rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 20.5v-17c0-.83.67-1.5 1.5-1.5h15c.83 0 1.5.67 1.5 1.5v17c0 .83-.67 1.5-1.5 1.5h-15c-.83 0-1.5-.67-1.5-1.5zm7.5-11.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5zm-3 0c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5zm6 0c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5z"/>
                            </svg>
                            Google Play
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="order-1 md:order-2">
                <div class="bg-gray-200 rounded-lg p-8 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-32 h-32 text-primary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-gray-600">Mobile App Screenshot</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Online Banking -->
<section id="online-banking" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Online Banking Portal</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Access comprehensive banking services from your computer or tablet.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Account Management -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Account Management</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>Check balances</li>
                    <li>View transaction history</li>
                    <li>Download statements</li>
                    <li>Update personal information</li>
                </ul>
            </div>
            
            <!-- Fund Transfers -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Fund Transfers</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>Internal transfers</li>
                    <li>External bank transfers</li>
                    <li>Mobile wallet transfers</li>
                    <li>Scheduled transfers</li>
                </ul>
            </div>
            
            <!-- Bill Payments -->
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Bill Payments</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>Utility bills</li>
                    <li>School fees</li>
                    <li>Insurance premiums</li>
                    <li>Subscription services</li>
                </ul>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="btn-secondary">Access Online Banking</a>
        </div>
    </div>
</section>

<!-- USSD Banking -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">USSD Banking</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Bank without internet using our USSD service. Available on all mobile networks.</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-primary-100 rounded-full mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-2 text-secondary">Dial *149*96#</h3>
                <p class="text-gray-600">Simple, fast, and secure banking without internet</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold mb-3 text-secondary">Available Services</h4>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>Check balance</li>
                        <li>Mini statements</li>
                        <li>Fund transfers</li>
                        <li>Airtime top-up</li>
                        <li>Bill payments</li>
                        <li>Loan applications</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3 text-secondary">How to Use</h4>
                    <ol class="space-y-2 text-gray-600 text-sm">
                        <li>1. Dial *149*96#</li>
                        <li>2. Enter your PIN</li>
                        <li>3. Select service</li>
                        <li>4. Follow instructions</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Features -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Security Features</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Your security is our top priority. We use advanced technology to protect your financial information.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Two-Factor Authentication</h3>
                <p class="text-gray-600 text-sm">Extra layer of security with OTP verification</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">End-to-End Encryption</h3>
                <p class="text-gray-600 text-sm">All transactions encrypted with SSL technology</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Fraud Monitoring</h3>
                <p class="text-gray-600 text-sm">24/7 monitoring for suspicious activities</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Biometric Login</h3>
                <p class="text-gray-600 text-sm">Fingerprint and face recognition support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Banking Digitally Today</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">Join thousands of members enjoying the convenience of digital banking.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md">Register Now</a>
            <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">Learn More</a>
        </div>
    </div>
</section>
@endsection
