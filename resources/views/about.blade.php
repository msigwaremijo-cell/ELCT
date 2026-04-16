@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About ELCT ND SACCOS</h1>
            <p class="text-xl opacity-95">A trusted financial institution serving our community with excellence and integrity since 1995.</p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-secondary">Our Story</h2>
                <p class="text-gray-600 mb-4">
                    ELCT ND SACCOS was established in 1995 as part of the Evangelical Lutheran Church in Tanzania - Northern Diocese's vision to provide financial empowerment to its members and the surrounding community. What started as a small savings and credit cooperative has grown into a leading financial institution serving over 10,000 members across the Northern regions of Tanzania.
                </p>
                <p class="text-gray-600 mb-4">
                    Our journey has been marked by steady growth, innovation, and unwavering commitment to our members' financial well-being. We've evolved from traditional banking services to include modern digital solutions while maintaining the cooperative values that define us.
                </p>
                <p class="text-gray-600">
                    Today, we stand as a testament to what can be achieved when people come together with a common purpose of mutual prosperity and community development.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg p-8">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">1995</div>
                        <div class="text-gray-600">Year Established</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">10,000+</div>
                        <div class="text-gray-600">Active Members</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">15+</div>
                        <div class="text-gray-600">Branch Locations</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">$50M+</div>
                        <div class="text-gray-600">Total Assets</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-secondary text-center">Our Mission</h3>
                <p class="text-gray-600 text-center">
                    To provide exceptional financial services that empower our members to achieve their dreams, while fostering sustainable community development through cooperative banking principles.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-secondary text-center">Our Vision</h3>
                <p class="text-gray-600 text-center">
                    To be the leading cooperative financial institution in Tanzania, recognized for our innovation, member satisfaction, and positive impact on community development.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Our Core Values</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">The principles that guide everything we do and define who we are as an organization.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Integrity</h3>
                <p class="text-gray-600 text-sm">We conduct our business with honesty, transparency, and ethical principles.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Community</h3>
                <p class="text-gray-600 text-sm">We believe in the power of unity and collective growth.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Excellence</h3>
                <p class="text-gray-600 text-sm">We strive for excellence in everything we do, from service delivery to innovation.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-secondary">Care</h3>
                <p class="text-gray-600 text-sm">We genuinely care about our members' financial well-being and success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Leadership Team</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Meet the dedicated professionals leading ELCT ND SACCOS toward a brighter future.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary h-48 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-secondary">Rev. Dr. John M. Kimaro</h3>
                    <p class="text-primary font-medium mb-2">Chairman</p>
                    <p class="text-gray-600 text-sm">With over 20 years of experience in cooperative leadership and community development.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary h-48 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-secondary">Ms. Grace L. Mwangi</h3>
                    <p class="text-primary font-medium mb-2">CEO / General Manager</p>
                    <p class="text-gray-600 text-sm">Expert in financial management with 15+ years of experience in banking and microfinance.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <div class="bg-secondary h-48 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-secondary">Mr. Joseph K. Nyerere</h3>
                    <p class="text-primary font-medium mb-2">Finance Director</p>
                    <p class="text-gray-600 text-sm">Certified accountant with extensive experience in cooperative finance management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Our Growing Family</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">Become part of a community that values your financial growth and success.</p>
        <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md">Become a Member</a>
    </div>
</section>
@endsection
