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

<!-- About Us Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-secondary">About ELCT ND SACCOS</h2>
                <p class="text-gray-600 mb-4">
                    ELCT ND SACCOS is a premier financial cooperative institution established under the Evangelical Lutheran Church in Tanzania - Northern Diocese. With over 28 years of excellence in financial services, we have grown to become one of the most trusted SACCOS in Tanzania, serving thousands of members across multiple regions.
                </p>
                <p class="text-gray-600 mb-4">
                    Our institution is built on the foundation of cooperative principles, combining traditional values with modern banking technology to deliver exceptional financial solutions. We are committed to empowering our members through accessible, affordable, and sustainable financial services.
                </p>
                <p class="text-gray-600">
                    As a regulated financial institution, we operate under the Cooperative Societies Act 2013 and the Microfinance Act 2018, ensuring compliance with all regulatory requirements while maintaining our member-focused approach.
                </p>
            </div>
            <div class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-lg p-8">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">28+</div>
                        <div class="text-gray-600">Years of Excellence</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">10,247+</div>
                        <div class="text-gray-600">Active Members</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">15+</div>
                        <div class="text-gray-600">Branch Locations</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">3,842+</div>
                        <div class="text-gray-600">Active Loans</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Membership Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Membership</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Join our growing community of empowered members and access comprehensive financial solutions.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-primary-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Who Can Join</h3>
                <p class="text-gray-600 text-center">
                    ELCT ND SACCOS membership is open to Entrepreneurs, Businessmen, and all employees from the United Republic of Tanzania who share our vision of financial empowerment.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hand-holding-usd text-primary-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Membership Benefits</h3>
                <p class="text-gray-600 text-center">
                    Access to affordable loans, competitive savings rates, financial advisory services, and participation in cooperative decision-making processes.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-primary-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary text-center">Secure & Regulated</h3>
                <p class="text-gray-600 text-center">
                    Fully regulated under Tanzanian law, member deposits are protected, and operations are transparent with regular audits and reporting.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Leadership</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Meet our experienced leadership team committed to excellence and member satisfaction.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-secondary-500 to-primary-500 rounded-lg p-6 text-white">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-center">Board of Directors</h3>
                <p class="text-white/90 text-center mb-4">
                    Led by experienced professionals with diverse backgrounds in finance, business, and community development.
                </p>
                <ul class="text-sm space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Strategic Oversight</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Policy Development</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Risk Management</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-primary-500 to-secondary-500 rounded-lg p-6 text-white">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-briefcase text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-center">Management Team</h3>
                <p class="text-white/90 text-center mb-4">
                    Professional management team with extensive experience in banking, finance, and cooperative operations.
                </p>
                <ul class="text-sm space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Daily Operations</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Service Delivery</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Innovation & Technology</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-secondary-500 to-primary-500 rounded-lg p-6 text-white">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users-cog text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-center">Committee Members</h3>
                <p class="text-white/90 text-center mb-4">
                    Dedicated committees ensuring transparency, accountability, and member representation in all decisions.
                </p>
                <ul class="text-sm space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Audit & Compliance</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Credit Committee</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Member Relations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Hierarchy Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Organizational Hierarchy</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Our structured approach ensures efficient operations and member-focused decision making.</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="space-y-6">
                <!-- Top Level -->
                <div class="text-center">
                    <div class="inline-block bg-gradient-to-r from-primary-500 to-secondary-500 text-white px-6 py-3 rounded-lg font-semibold">
                        Annual General Meeting (AGM)
                    </div>
                    <p class="text-gray-600 mt-2">Supreme Authority - All Members</p>
                </div>
                
                <div class="flex justify-center">
                    <div class="w-1 h-8 bg-gray-300"></div>
                </div>
                
                <!-- Second Level -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                    <div class="text-center">
                        <div class="bg-primary-100 text-primary-700 px-4 py-2 rounded-lg font-semibold">
                            Board of Directors
                        </div>
                        <p class="text-gray-600 text-sm mt-1">Elected by Members</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-secondary-100 text-secondary-700 px-4 py-2 rounded-lg font-semibold">
                            Supervisory Committee
                        </div>
                        <p class="text-gray-600 text-sm mt-1">Member Oversight</p>
                    </div>
                </div>
                
                <div class="flex justify-center">
                    <div class="w-1 h-8 bg-gray-300"></div>
                </div>
                
                <!-- Third Level -->
                <div class="text-center">
                    <div class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-semibold">
                        Management Team
                    </div>
                    <p class="text-gray-600 mt-2">CEO, Department Heads, Branch Managers</p>
                </div>
                
                <div class="flex justify-center">
                    <div class="w-1 h-8 bg-gray-300"></div>
                </div>
                
                <!-- Fourth Level -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-3xl mx-auto">
                    <div class="text-center">
                        <div class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold">
                            Operations
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold">
                            Finance & Admin
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold">
                            Member Services
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center">
                    <div class="w-1 h-8 bg-gray-300"></div>
                </div>
                
                <!-- Base Level -->
                <div class="text-center">
                    <div class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-semibold">
                        Staff Members & Branch Operations
                    </div>
                    <p class="text-gray-600 mt-2">Frontline Service Delivery</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Accessibility Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Our Accessibility</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We're committed to making our services accessible to all members across Tanzania.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-primary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Physical Locations</h3>
                        <p class="text-gray-600">15+ strategically located branches across Northern Tanzania with extended business hours and weekend services at select locations.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-mobile-alt text-primary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Digital Banking</h3>
                        <p class="text-gray-600">24/7 access through our mobile app, USSD services (*150*45#), and online banking platform for convenient transactions anytime, anywhere.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-headset text-primary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Customer Support</h3>
                        <p class="text-gray-600">Dedicated customer service team available via phone, email, and social media to assist with all your banking needs.</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-secondary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-universal-access text-secondary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Inclusive Services</h3>
                        <p class="text-gray-600">Wheelchair-accessible branches, simplified documentation processes, and services designed for all members including elderly and differently-abled individuals.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-secondary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-language text-secondary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Multi-Language Support</h3>
                        <p class="text-gray-600">Services available in Swahili, English, and local languages to ensure clear communication with all our members.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-secondary-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-secondary-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-secondary">Flexible Hours</h3>
                        <p class="text-gray-600">Extended banking hours, weekend services, and emergency support to accommodate our members' diverse schedules and needs.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="mt-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-lg p-8 text-white text-center">
            <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div>
                    <i class="fas fa-phone text-2xl mb-2"></i>
                    <p class="font-semibold">Call Us</p>
                    <p>080 075 0301</p>
                </div>
                <div>
                    <i class="fas fa-envelope text-2xl mb-2"></i>
                    <p class="font-semibold">Email</p>
                    <p>info@elctndsaccos.org</p>
                </div>
                <div>
                    <i class="fas fa-clock text-2xl mb-2"></i>
                    <p class="font-semibold">Business Hours</p>
                    <p>Mon-Fri: 8:30am-4:30pm</p>
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
