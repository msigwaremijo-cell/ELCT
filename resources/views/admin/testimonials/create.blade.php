@extends('admin.layouts.app')

@section('title', 'Add Testimonial')

@section('breadcrumb')
    <li class="flex items-center">
        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
        <a href="{{ route('admin.testimonials.index') }}" class="text-gray-700 hover:text-gray-900">Testimonials</a>
    </li>
    <li class="flex items-center">
        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
        <span class="text-gray-700 font-medium">Add New</span>
    </li>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Add New Testimonial</h1>
            <p class="text-gray-500 mt-1">Create a new member testimonial</p>
        </div>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-gray">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Testimonials
        </a>
    </div>

    <!-- Form -->
    <div class="admin-form">
        <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data" id="testimonial-form">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Member Information -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Member Information</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-input" required value="old('name')">
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="role">Role/Title *</label>
                                <input type="text" id="role" name="role" class="form-input" required value="old('role')" placeholder="e.g., MWANACHAMA, Business Owner, Employee">
                                @error('role')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input" value="old('email')">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-input" value="old('phone')">
                            @error('phone')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Testimonial Content -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Testimonial Content</h3>
                        
                        <div class="form-group">
                            <label class="form-label" for="content">Testimonial Text *</label>
                            <textarea id="content" name="content" rows="6" class="form-textarea" required placeholder="Enter the testimonial content...">{{ old('content') }}</textarea>
                            <div class="flex items-center justify-between mt-2">
                                <span class="text-xs text-gray-500">Minimum 50 characters</span>
                                <span id="char-count" class="text-xs text-gray-500">0 / 500</span>
                            </div>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="rating">Rating *</label>
                            <div class="flex items-center space-x-2">
                                <div id="rating-stars" class="flex space-x-1">
                                    <button type="button" class="rating-star text-2xl text-gray-300 hover:text-yellow-400 transition-colors" data-rating="1">
                                        <i class="far fa-star"></i>
                                    </button>
                                    <button type="button" class="rating-star text-2xl text-gray-300 hover:text-yellow-400 transition-colors" data-rating="2">
                                        <i class="far fa-star"></i>
                                    </button>
                                    <button type="button" class="rating-star text-2xl text-gray-300 hover:text-yellow-400 transition-colors" data-rating="3">
                                        <i class="far fa-star"></i>
                                    </button>
                                    <button type="button" class="rating-star text-2xl text-gray-300 hover:text-yellow-400 transition-colors" data-rating="4">
                                        <i class="far fa-star"></i>
                                    </button>
                                    <button type="button" class="rating-star text-2xl text-gray-300 hover:text-yellow-400 transition-colors" data-rating="5">
                                        <i class="far fa-star"></i>
                                    </button>
                                </div>
                                <span id="rating-text" class="text-sm text-gray-500">Select rating</span>
                            </div>
                            <input type="hidden" id="rating" name="rating" value="0" required>
                            @error('rating')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Additional Information</h3>
                        
                        <div class="form-group">
                            <label class="form-label" for="service_used">Service Used</label>
                            <select id="service_used" name="service_used" class="form-select">
                                <option value="">Select a service...</option>
                                <option value="loan" {{ old('service_used') == 'loan' ? 'selected' : '' }}>Loan Services</option>
                                <option value="savings" {{ old('service_used') == 'savings' ? 'selected' : '' }}>Savings Account</option>
                                <option value="investment" {{ old('service_used') == 'investment' ? 'selected' : '' }}>Investment</option>
                                <option value="other" {{ old('service_used') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="duration">Duration with ELCT ND SACCOS</label>
                            <select id="duration" name="duration" class="form-select">
                                <option value="">Select duration...</option>
                                <option value="less-1-year" {{ old('duration') == 'less-1-year' ? 'selected' : '' }}>Less than 1 year</option>
                                <option value="1-3-years" {{ old('duration') == '1-3-years' ? 'selected' : '' }}>1-3 years</option>
                                <option value="3-5-years" {{ old('duration') == '3-5-years' ? 'selected' : '' }}>3-5 years</option>
                                <option value="5-10-years" {{ old('duration') == '5-10-years' ? 'selected' : '' }}>5-10 years</option>
                                <option value="over-10-years" {{ old('duration') == 'over-10-years' ? 'selected' : '' }}>Over 10 years</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="tags">Tags</label>
                            <input type="text" id="tags" name="tags" class="form-input" value="old('tags')" placeholder="e.g., satisfied, professional, helpful">
                            <p class="text-xs text-gray-500 mt-1">Separate tags with commas</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image & Settings -->
                <div class="space-y-6">
                    <!-- Member Photo -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Member Photo</h3>
                        
                        <div class="file-upload-area" id="photo-upload">
                            <div id="photo-preview" class="mb-4">
                                <div class="w-32 h-32 bg-gray-100 rounded-lg flex items-center justify-center mx-auto">
                                    <i class="fas fa-user text-gray-400 text-3xl"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <i class="fas fa-cloud-upload-alt text-gray-400 text-2xl mb-2"></i>
                                <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                                <p class="text-xs text-gray-500">PNG, JPG up to 5MB</p>
                            </div>
                            <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                        </div>
                        @error('photo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Publication Settings -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Publication Settings</h3>
                        
                        <div class="space-y-4">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <select id="status" name="status" class="form-select">
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending Review</option>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="featured">Featured</label>
                                <div class="flex items-center">
                                    <input type="checkbox" id="featured" name="featured" class="form-checkbox" {{ old('featured') ? 'checked' : '' }}>
                                    <label for="featured" class="ml-2 text-sm text-gray-700">Feature this testimonial on homepage</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="published_at">Publish Date</label>
                                <input type="datetime-local" id="published_at" name="published_at" class="form-input" value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}">
                            </div>
                        </div>
                    </div>

                    <!-- SEO Settings -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO Settings</h3>
                        
                        <div class="space-y-4">
                            <div class="form-group">
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-input" value="old('meta_title')" placeholder="SEO title (optional)">
                                <p class="text-xs text-gray-500 mt-1">Max 60 characters</p>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" rows="3" class="form-textarea" placeholder="SEO description (optional)">{{ old('meta_description') }}</textarea>
                                <p class="text-xs text-gray-500 mt-1">Max 160 characters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                <div class="flex items-center space-x-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Save Testimonial
                    </button>
                    <button type="button" onclick="saveDraft()" class="btn btn-outline-gray">
                        <i class="fas fa-save mr-2"></i>
                        Save Draft
                    </button>
                </div>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-gray">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
// Character counter
const contentTextarea = document.getElementById('content');
const charCount = document.getElementById('char-count');

contentTextarea.addEventListener('input', function() {
    const length = this.value.length;
    charCount.textContent = `${length} / 500`;
    
    if (length > 500) {
        charCount.classList.add('text-red-500');
        charCount.classList.remove('text-gray-500');
    } else {
        charCount.classList.remove('text-red-500');
        charCount.classList.add('text-gray-500');
    }
});

// Rating system
const ratingStars = document.querySelectorAll('.rating-star');
const ratingInput = document.getElementById('rating');
const ratingText = document.getElementById('rating-text');
const ratingTexts = ['', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];

ratingStars.forEach(star => {
    star.addEventListener('click', function() {
        const rating = parseInt(this.dataset.rating);
        setRating(rating);
    });
    
    star.addEventListener('mouseenter', function() {
        const rating = parseInt(this.dataset.rating);
        highlightStars(rating);
        ratingText.textContent = ratingTexts[rating];
    });
});

document.getElementById('rating-stars').addEventListener('mouseleave', function() {
    const currentRating = parseInt(ratingInput.value);
    highlightStars(currentRating);
    ratingText.textContent = currentRating > 0 ? ratingTexts[currentRating] : 'Select rating';
});

function setRating(rating) {
    ratingInput.value = rating;
    highlightStars(rating);
    ratingText.textContent = ratingTexts[rating];
}

function highlightStars(rating) {
    ratingStars.forEach((star, index) => {
        const icon = star.querySelector('i');
        if (index < rating) {
            icon.classList.remove('far');
            icon.classList.add('fas', 'text-yellow-400');
        } else {
            icon.classList.remove('fas', 'text-yellow-400');
            icon.classList.add('far');
        }
    });
}

// Photo upload
const photoUpload = document.getElementById('photo-upload');
const photoInput = document.getElementById('photo');
const photoPreview = document.getElementById('photo-preview');

photoUpload.addEventListener('click', function() {
    photoInput.click();
});

photoInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            photoPreview.innerHTML = `
                <img src="${e.target.result}" alt="Preview" class="w-32 h-32 rounded-lg object-cover mx-auto">
                <button type="button" onclick="removePhoto()" class="mt-2 text-xs text-red-600 hover:text-red-800">
                    <i class="fas fa-trash mr-1"></i>Remove
                </button>
            `;
        };
        reader.readAsDataURL(file);
    }
});

function removePhoto() {
    photoInput.value = '';
    photoPreview.innerHTML = `
        <div class="w-32 h-32 bg-gray-100 rounded-lg flex items-center justify-center mx-auto">
            <i class="fas fa-user text-gray-400 text-3xl"></i>
        </div>
    `;
}

// Drag and drop
photoUpload.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.classList.add('dragover');
});

photoUpload.addEventListener('dragleave', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
});

photoUpload.addEventListener('drop', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
    
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        photoInput.files = files;
        const event = new Event('change', { bubbles: true });
        photoInput.dispatchEvent(event);
    }
});

// Save draft
function saveDraft() {
    const form = document.getElementById('testimonial-form');
    const formData = new FormData(form);
    formData.append('save_as_draft', '1');
    
    AdminJS.ajaxRequest('/admin/testimonials/save-draft', 'POST', Object.fromEntries(formData))
        .then(response => {
            if (response.success) {
                AdminJS.showSuccess('Draft saved successfully', document.body);
            } else {
                AdminJS.showError('Failed to save draft', document.body);
            }
        })
        .catch(error => {
            AdminJS.showError('An error occurred', document.body);
        });
}

// Form validation
document.getElementById('testimonial-form').addEventListener('submit', function(e) {
    const rating = parseInt(ratingInput.value);
    if (rating === 0) {
        e.preventDefault();
        AdminJS.showError('Please select a rating', document.body);
        return false;
    }
    
    const content = contentTextarea.value.trim();
    if (content.length < 50) {
        e.preventDefault();
        AdminJS.showError('Testimonial content must be at least 50 characters', document.body);
        return false;
    }
});
</script>
