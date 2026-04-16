@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">SACCOS Mobile</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">Banking at your fingertips</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Access your ELCT ND SACCOS account anytime, anywhere with our secure mobile banking application. Manage your finances, transfer funds, and stay connected to your money on the go.
            </p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Mobile Banking Features</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Everything you need for convenient banking on your mobile device</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Account Management -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-8a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2h-12z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Account Management</h3>
                <p class="text-gray-600 text-center mb-4">
                    Check balances, view transaction history, and manage your accounts securely from your mobile device.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Real-time balance updates
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Mini statements
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Account alerts
                    </li>
                </ul>
            </div>
            
            <!-- Fund Transfers -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8c0-.114.07-.34.433-.582zm1.134 3.164c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C9.07 11.34 9 11.114 9c0-.114.07-.34.433-.582zm-2.567-.267v1.698a2.305 2.305 0 01-.567-.267C6.07 8.34 6 8.114 6c0-.114.07-.34.433-.582z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Fund Transfers</h3>
                <p class="text-gray-600 text-center mb-4">
                    Transfer money instantly between ELCT ND SACCOS accounts and to other banks securely.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Instant transfers
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Scheduled transfers
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Bank transfers
                    </li>
                </ul>
            </div>
            
            <!-- Bill Payments -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Bill Payments</h3>
                <p class="text-gray-600 text-center mb-4">
                    Pay utility bills, mobile recharge, and other payments directly from the app.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Utility payments
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Mobile recharge
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 00-1.414 1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Payment history
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">Bank with Confidence</h2>
                <p class="text-gray-600 text-lg mb-6">
                    Our mobile banking app uses industry-leading security measures to protect your financial information and transactions.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">256-bit Encryption</h4>
                            <p class="text-gray-600">All transactions are encrypted end-to-end for maximum security.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.967l-6.565-6.565a5.5 5.5 0 00-.747.353l-6.565 6.565A5.5 5.5 0 00-.654.629 5.5 5.5 0 018.335 0H12a1 1 0 110-2h7a1 1 0 110 2v6a1 1 0 01-1 1h-7a1 1 0 01-1-1V9a1 1 0 011-1z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Two-Factor Authentication</h4>
                            <p class="text-gray-600">Extra layer of security with OTP verification for sensitive transactions.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 2-2v-2a2 2 0 00-2-2H5a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v2z"/>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Biometric Login</h4>
                            <p class="text-gray-600">Use fingerprint or face recognition for quick and secure access.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-xl p-8">
                <img src="{{ asset('images/photorealistic-money-with-plant (1).jpg') }}" alt="Mobile Banking Security" class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Get Started Today</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Download the ELCT ND SACCOS mobile app and start banking on your terms</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Google Play -->
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3.981 8.494c.0-.322.033-.635.09-.945.12-.945.992 0 1.227.07 1.865l1.279 5.727c.255.504.374.865.374 1.393 0 1.06-.274 1.53-.76.765-.765-1.759 0-2.899-.52-3.694-1.553-3.694-2.448 0-4.951.772-9.235 1.976-9.235 2.748 0 5.843 3.684 7.528 7.528 5.822 0 10.07-2.185 14.04-3.859 14.04-6.525 0-7.877-1.018-15.424-3.043-15.424-5.404 0-7.981 1.226-16.954 1.226-3.222 0-4.771-1.432-17.879-1.432-4.528 0-8.363 1.638-18.793 1.638-5.284 0-9.873 1.846-20.711 1.846-6.035 0-11.464 1.055-22.629 1.055-6.786 0-13.055 1.265-25.547 1.265-7.537 0-14.646 1.474-27.365 1.474-8.289 0-16.237 1.184-29.183 1.184-9.041 0-18.828 1.393-32.828 1.393-9.795 0-20.421 1.602-36.471 1.602-11.3 0-23.014 1.811-40.114 1.811-12.556 0-25.707 1.021-43.757 1.021-13.718 0-28.4 1.224-47.114 1.224-14.879 0-33.057 1.427-50.429 1.427-16.039 0-36.714 1.632-53.714 1.632-19.3 0-40.371 1.837-56.971 1.837-22.528 0-45.028 2.043-60.285 2.043-27.014 0-49.685 1.427-63.685 1.427-31.399 0-54.342 2.012-67.057 2.012-33.785 0-60 1.597-70.4 1.597-36.2 0-65.614 2.171-73.714 2.171-38.814 0-71.028 1.597-77 1.597-41.2 0-76.428 1.816-80.4 1.816-44.585 0-81.828 1.435-83.828 1.435-48 0-87.228 1.602-87.228 1.602-54.6 0-92.8 1.791-92.8 1.791-61.2 0-98.371 1.981-98.371 1.981z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Google Play Store</h3>
                <p class="text-gray-600 mb-4">Available for Android devices</p>
                <a href="#" class="btn-secondary">Download Now</a>
            </div>
            
            <!-- App Store -->
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.71 19.5c-.83 1.24-1.82 1.24H7.09c-1 0-1.82-.41-1.82-.83V4.5c0-.83.41-1.82.83-1.82h9.82c1 0 1.82.41 1.82.83v12.68c0 .83-.41 1.82-.83 1.82h-9.82c-1 0-1.82-.41-1.82-.83V4.5c0-.83.41-1.82.83-1.82h9.82c1 0 1.82.41 1.82.83v12.68c0 .83-.41 1.82-.83 1.82h-9.82zM12 11.5c.83 0 1.5.67 1.5 1.5v-3.5c0-.83-.67-1.5-1.5h-1.5c-.83 0-1.5.67-1.5v3.5c0 .83.67 1.5 1.5h1.5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">App Store</h3>
                <p class="text-gray-600 mb-4">Available for iPhone and iPad</p>
                <a href="#" class="btn-secondary">Download Now</a>
            </div>
        </div>
        
        <div class="mt-12 text-center">
            <h3 class="text-xl font-bold mb-4 text-secondary">Need Help?</h3>
            <p class="text-gray-600 mb-6">Contact our support team for assistance with mobile banking setup</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:0800750301" class="btn-secondary">Call Support</a>
                <a href="mailto:info@elctndsaccos.org" class="btn-outline-secondary">Email Support</a>
            </div>
        </div>
    </div>
</section>
@endsection
