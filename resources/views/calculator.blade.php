@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Loan Calculator</h1>
            <p class="text-xl md:text-2xl mb-6 opacity-95">Calculate Your Loan</p>
            <p class="text-lg opacity-90 max-w-3xl">
                Use our interactive loan calculator to estimate your monthly payments, total interest, and repayment schedule. Plan your borrowing with confidence.
            </p>
        </div>
    </div>
</section>

<!-- Calculator Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Loan Details</h2>
                <p class="text-gray-600 text-lg">Enter your loan requirements to calculate payments</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg shadow-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Loan Amount -->
                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-900 mb-2">Loan Amount (TSh)</label>
                        <input type="number" id="amount" name="amount" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter loan amount" min="100000" step="10000">
                        <div class="mt-2">
                            <input type="range" id="amountSlider" name="amountSlider" class="w-full" min="100000" max="10000000" step="10000" value="1000000">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>100,000</span>
                                <span>10,000,000</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Loan Term -->
                    <div>
                        <label for="term" class="block text-sm font-medium text-gray-900 mb-2">Loan Term (Months)</label>
                        <select id="term" name="term" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200">
                            <option value="6">6 Months</option>
                            <option value="12" selected>12 Months</option>
                            <option value="18">18 Months</option>
                            <option value="24">24 Months</option>
                            <option value="36">36 Months</option>
                            <option value="48">48 Months</option>
                            <option value="60">60 Months</option>
                        </select>
                    </div>
                    
                    <!-- Interest Rate -->
                    <div>
                        <label for="rate" class="block text-sm font-medium text-gray-900 mb-2">Interest Rate (%)</label>
                        <input type="number" id="rate" name="rate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200" placeholder="Enter interest rate" min="1" max="30" step="0.1" value="15">
                    </div>
                    
                    <!-- Loan Type -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-900 mb-2">Loan Type</label>
                        <select id="type" name="type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-200">
                            <option value="personal">Personal Loan</option>
                            <option value="business">Business Loan</option>
                            <option value="emergency">Emergency Loan</option>
                            <option value="education">Education Loan</option>
                        </select>
                    </div>
                </div>
                
                <!-- Calculate Button -->
                <div class="mt-8 text-center">
                    <button type="button" onclick="calculateLoan()" class="bg-primary text-white font-semibold py-4 px-8 rounded-lg hover:bg-primary-600 transition-colors duration-200 shadow-md text-lg">
                        Calculate Loan
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-16 bg-gray-50" id="results" style="display: none;">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Loan Calculation Results</h2>
                <p class="text-gray-600 text-lg">Your estimated monthly payment and loan details</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Monthly Payment -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8c0-.114.07-.34.433-.582zm1.134 3.164c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C9.07 11.34 9 11.114 9c0-.114.07-.34.433-.582zm-2.567-.267v1.698a2.305 2.305 0 01-.567-.267C6.07 8.34 6 8.114 6c0-.114.07-.34.433-.582z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Monthly Payment</h3>
                    <p class="text-3xl font-bold text-primary" id="monthlyPayment">TSh 0</p>
                    <p class="text-gray-600 text-sm">Per month</p>
                </div>
                
                <!-- Total Interest -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110 2h5a1 1 0 110-2h-5a1 1 0 110 2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Total Interest</h3>
                    <p class="text-3xl font-bold text-primary" id="totalInterest">TSh 0</p>
                    <p class="text-gray-600 text-sm">Over loan term</p>
                </div>
                
                <!-- Total Repayment -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h14a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2h1a1 1 0 110-2H5a1 1 0 01-1 1zm7-1a1 1 0 100 2h1a1 1 0 100-2h-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">Total Repayment</h3>
                    <p class="text-3xl font-bold text-primary" id="totalRepayment">TSh 0</p>
                    <p class="text-gray-600 text-sm">Principal + Interest</p>
                </div>
                
                <!-- APR -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-8a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2h-12z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-secondary">APR</h3>
                    <p class="text-3xl font-bold text-primary" id="apr">15%</p>
                    <p class="text-gray-600 text-sm">Annual Percentage Rate</p>
                </div>
            </div>
            
            <!-- Apply for Loan Button -->
            <div class="mt-12 text-center">
                <h3 class="text-xl font-bold mb-4 text-secondary">Ready to Apply?</h3>
                <p class="text-gray-600 mb-6">Proceed with your loan application based on these calculations</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="btn-secondary">Apply Now</a>
                    <a href="#" onclick="resetCalculator()" class="btn-outline-secondary">New Calculation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loan Types Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-secondary">Available Loan Products</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Choose the right loan product for your needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Personal Loan -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Personal Loan</h3>
                <p class="text-gray-600 text-center mb-4">
                    Flexible personal loans for various personal needs and emergencies.
                </p>
                <div class="space-y-2 text-gray-600">
                    <div class="flex justify-between">
                        <span>Amount:</span>
                        <span class="font-medium">Up to TSh 10M</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Term:</span>
                        <span class="font-medium">6-60 months</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Rate:</span>
                        <span class="font-medium">15% APR</span>
                    </div>
                </div>
            </div>
            
            <!-- Business Loan -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Business Loan</h3>
                <p class="text-gray-600 text-center mb-4">
                    Grow your business with our competitive business loan products.
                </p>
                <div class="space-y-2 text-gray-600">
                    <div class="flex justify-between">
                        <span>Amount:</span>
                        <span class="font-medium">Up to TSh 50M</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Term:</span>
                        <span class="font-medium">12-60 months</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Rate:</span>
                        <span class="font-medium">12% APR</span>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Loan -->
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-secondary text-center">Emergency Loan</h3>
                <p class="text-gray-600 text-center mb-4">
                    Quick access to funds for urgent financial needs.
                </p>
                <div class="space-y-2 text-gray-600">
                    <div class="flex justify-between">
                        <span>Amount:</span>
                        <span class="font-medium">Up to TSh 5M</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Term:</span>
                        <span class="font-medium">3-12 months</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Rate:</span>
                        <span class="font-medium">18% APR</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Personalized Advice?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-95">
            Visit any ELCT ND SACCOS branch to speak with our loan officers about your specific needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-500 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 shadow-md text-lg">Visit Branch</a>
            <a href="tel:0800750301" class="border-2 border-white text-white hover:bg-white hover:text-primary-500 font-semibold py-4 px-8 rounded-lg transition-colors duration-200 text-lg">Call Loan Officer</a>
        </div>
    </div>
</section>

<script>
function calculateLoan() {
    const amount = parseFloat(document.getElementById('amount').value) || 0;
    const term = parseInt(document.getElementById('term').value) || 12;
    const rate = parseFloat(document.getElementById('rate').value) || 15;
    
    if (amount <= 0 || term <= 0 || rate <= 0) {
        alert('Please enter valid loan details');
        return;
    }
    
    const monthlyRate = rate / 100 / 12;
    const monthlyPayment = (amount * monthlyRate * Math.pow(1 + monthlyRate, term)) / (Math.pow(1 + monthlyRate, term) - 1);
    const totalRepayment = monthlyPayment * term;
    const totalInterest = totalRepayment - amount;
    
    document.getElementById('monthlyPayment').textContent = `TSh ${monthlyPayment.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
    document.getElementById('totalInterest').textContent = `TSh ${totalInterest.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
    document.getElementById('totalRepayment').textContent = `TSh ${totalRepayment.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
    document.getElementById('apr').textContent = `${rate}%`;
    
    document.getElementById('results').style.display = 'block';
    document.getElementById('results').scrollIntoView({ behavior: 'smooth' });
}

function resetCalculator() {
    document.getElementById('amount').value = '';
    document.getElementById('amountSlider').value = '1000000';
    document.getElementById('term').value = '12';
    document.getElementById('rate').value = '15';
    document.getElementById('results').style.display = 'none';
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Sync amount slider with input
document.getElementById('amountSlider').addEventListener('input', function() {
    document.getElementById('amount').value = this.value;
});

document.getElementById('amount').addEventListener('input', function() {
    document.getElementById('amountSlider').value = this.value;
});
</script>
@endsection
