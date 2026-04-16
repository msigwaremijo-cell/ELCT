@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Register Online</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">Become a Member Today</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Join ELCT ND SACCOS and access exclusive banking benefits. Complete your membership application online in just a few minutes.
            </p>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Membership Application</h2>
                <p class="text-gray-600 text-lg">Fill in your details to become an ELCT ND SACCOS member</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg shadow-lg p-8">
                <form class="space-y-6">
                    <!-- Personal Information -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-4 text-secondary">Personal Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstname" class="block text-sm font-medium text-gray-900 mb-2">First Name *</label>
                                <input type="text" id="firstname" name="firstname" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your first name" required>
                            </div>
                            <div>
                                <label for="lastname" class="block text-sm font-medium text-gray-900 mb-2">Last Name *</label>
                                <input type="text" id="lastname" name="lastname" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your last name" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-900 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your email address" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-900 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your phone number" required>
                            </div>
                            <div>
                                <label for="dob" class="block text-sm font-medium text-gray-900 mb-2">Date of Birth *</label>
                                <input type="date" id="dob" name="dob" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" required>
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-900 mb-2">Gender *</label>
                                <select id="gender" name="gender" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Address Information -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-4 text-secondary">Address Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-900 mb-2">Physical Address *</label>
                                <input type="text" id="address" name="address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your physical address" required>
                            </div>
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-900 mb-2">City *</label>
                                <input type="text" id="city" name="city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter your city" required>
                            </div>
                            <div>
                                <label for="region" class="block text-sm font-medium text-gray-900 mb-2">Region *</label>
                                <select id="region" name="region" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" required>
                                    <option value="">Select Region</option>
                                    <option value="arusha">Arusha</option>
                                    <option value="dar">Dar es Salaam</option>
                                    <option value="dodoma">Dodoma</option>
                                    <option value="iringa">Iringa</option>
                                    <option value="kagera">Kagera</option>
                                    <option value="kilimanjaro">Kilimanjaro</option>
                                    <option value="manyara">Manyara</option>
                                    <option value="mara">Mara</option>
                                    <option value="mbeya">Mbeya</option>
                                    <option value="morogoro">Morogoro</option>
                                    <option value="moshi">Moshi</option>
                                    <option value="mwanza">Mwanza</option>
                                    <option value="singida">Singida</option>
                                    <option value="tabora">Tabora</option>
                                    <option value="tanga">Tanga</option>
                                </select>
                            </div>
                            <div>
                                <label for="postal" class="block text-sm font-medium text-gray-900 mb-2">Postal Code</label>
                                <input type="text" id="postal" name="postal" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter postal code">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Employment Information -->
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-4 text-secondary">Employment Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="occupation" class="block text-sm font-medium text-gray-900 mb-2">Occupation *</label>
                                <select id="occupation" name="occupation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" required>
                                    <option value="">Select Occupation</option>
                                    <option value="entrepreneur">Entrepreneur</option>
                                    <option value="businessman">Businessman</option>
                                    <option value="employee">Employee</option>
                                    <option value="farmer">Farmer</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="healthcare">Healthcare Worker</option>
                                    <option value="civilservant">Civil Servant</option>
                                    <option value="student">Student</option>
                                    <option value="retired">Retired</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="employer" class="block text-sm font-medium text-gray-900 mb-2">Employer Name</label>
                                <input type="text" id="employer" name="employer" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter employer name">
                            </div>
                            <div>
                                <label for="income" class="block text-sm font-medium text-gray-900 mb-2">Monthly Income (TSh)</label>
                                <input type="number" id="income" name="income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter monthly income">
                            </div>
                            <div>
                                <label for="workexperience" class="block text-sm font-medium text-gray-900 mb-2">Years of Experience</label>
                                <input type="number" id="workexperience" name="workexperience" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter years of experience">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Membership Details -->
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-secondary">Membership Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="shares" class="block text-sm font-medium text-gray-900 mb-2">Number of Shares *</label>
                                <input type="number" id="shares" name="shares" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter number of shares" required>
                            </div>
                            <div>
                                <label for="monthlysavings" class="block text-sm font-medium text-gray-900 mb-2">Monthly Savings Target (TSh)</label>
                                <input type="number" id="monthlysavings" name="monthlysavings" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter monthly savings target">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Terms and Submit -->
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" class="h-4 w-4 text-primary-500 focus:ring-primary-500 border-gray-300 rounded mt-1" required>
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                I agree to the <a href="#" class="text-primary-500 hover:text-primary-600 font-medium">Terms and Conditions</a> and <a href="#" class="text-primary-500 hover:text-primary-600 font-medium">Privacy Policy</a> *
                            </label>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="bg-primary text-white font-semibold py-4 px-8 rounded-lg hover:bg-primary-600 transition-colors duration-200 shadow-md text-lg">
                                Submit Application
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Why Join ELCT ND SACCOS?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Enjoy exclusive benefits as a valued member</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8c0-.114.07-.34.433-.582zm1.134 3.164c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C9.07 11.34 9 11.114 9c0-.114.07-.34.433-.582zm-2.567-.267v1.698a2.305 2.305 0 01-.567-.267C6.07 8.34 6 8.114 6c0-.114.07-.34.433-.582z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Competitive Interest</h3>
                <p class="text-gray-600">Earn competitive interest rates on your savings and enjoy affordable loan rates.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 3.976 3.066 3.066 0 001.745.723 3.066 3.066 0 003.976-3.976 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 00-3.976-3.976A3.066 3.066 0 006.267 3.455zM3 10a7 7 0 017-7 7 7 0 01-7 7zm7-4a1 1 0 100 2 0 1 1 0 100-2h-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Member Dividends</h3>
                <p class="text-gray-600">Share in profits through annual dividends distributed to members.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary">Financial Education</h3>
                <p class="text-gray-600">Access financial literacy programs and investment guidance.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Join?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Start your journey to financial freedom with ELCT ND SACCOS today.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0800750301" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Call for Assistance</a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">Visit Branch</a>
        </div>
    </div>
</section>
@endsection
