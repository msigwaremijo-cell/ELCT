@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Members Portal</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">Manage Your Account Online</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Access your ELCT ND SACCOS account securely online. Check balances, view transactions, apply for loans, and manage your membership details 24/7.
            </p>
        </div>
    </div>
</section>

<!-- Login Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Member Login</h2>
                <p class="text-gray-600 text-lg">Access your account with your credentials</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg shadow-lg p-8">
                <form class="space-y-6">
                    <!-- Membership Number -->
                    <div>
                        <label for="membership" class="block text-sm font-medium text-gray-900 mb-2">Membership Number</label>
                        <input type="text" id="membership" name="membership" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your membership number" required>
                    </div>
                    
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900 mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your password" required>
                    </div>
                    
                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-primary-500 focus:ring-primary-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-primary-500 hover:text-primary-600 font-medium">Forgot password?</a>
                    </div>
                    
                    <!-- Login Button -->
                    <button type="submit" class="w-full bg-primary text-white font-semibold py-3 px-6 rounded-lg hover:bg-primary-600 transition-colors duration-200 shadow-md">
                        Login to Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Portal Features</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Everything you need to manage your ELCT ND SACCOS account</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Account Overview -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Account Overview</h3>
                <p class="text-gray-600 text-center mb-4">
                    View all your accounts, balances, and transaction history in one place.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Real-time balances
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Transaction history
                    </li>
                </ul>
            </div>
            
            <!-- Loan Management -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Loan Management</h3>
                <p class="text-gray-600 text-center mb-4">
                    Apply for new loans, check loan status, and manage existing loans.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Online applications
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Payment schedules
                    </li>
                </ul>
            </div>
            
            <!-- Statements -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Statements</h3>
                <p class="text-gray-600 text-center mb-4">
                    Download account statements and tax documents anytime.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        PDF downloads
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Email statements
                    </li>
                </ul>
            </div>
            
            <!-- Profile Settings -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3a1 1 0 01-1-1v-2a1 1 0 112 0v2a1 1 0 01-1 1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Profile Settings</h3>
                <p class="text-gray-600 text-center mb-4">
                    Update personal information, contact details, and security settings.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Update details
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Change password
                    </li>
                </ul>
            </div>
            
            <!-- Notifications -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 003 14h14a1 1 0 00.707-1.707L17 11.586V8a6 6 0 00-6-6z"/>
                        <path d="M10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Notifications</h3>
                <p class="text-gray-600 text-center mb-4">
                    Receive alerts for transactions, loan approvals, and account activities.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        SMS alerts
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Email notifications
                    </li>
                </ul>
            </div>
            
            <!-- Support -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 000 1l.004.004A1 1 0 008 8.004V7a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">24/7 Support</h3>
                <p class="text-gray-600 text-center mb-4">
                    Get help with portal access, technical issues, and account queries.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Live chat
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Help center
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Secure Banking</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Your security is our top priority</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">256-bit Encryption</h3>
                <p class="text-gray-600">All data transmissions are encrypted with industry-standard security protocols.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.967l-6.565-6.565a5.5 5.5 0 00-.747.353l-6.565 6.565A5.5 5.5 0 00-.654.629 5.5 5.5 0 018.335 0H12a1 1 0 110-2h7a1 1 0 110 2v6a1 1 0 01-1 1h-7a1 1 0 01-1-1V9a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Two-Factor Authentication</h3>
                <p class="text-gray-600">Extra security layer with OTP verification for sensitive operations.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 2-2v-2a2 2 0 00-2-2H5a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Session Timeout</h3>
                <p class="text-gray-600">Automatic logout after inactivity to protect your account.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Help Accessing Your Account?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Our support team is available 24/7 to help you with any portal access issues.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0800750301" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Call Support</a>
            <a href="mailto:info@elctndsaccos.org" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">Email Support</a>
        </div>
    </div>
</section>
@endsection
