@extends('admin.layouts.app')

@section('title', 'Testimonials Management')

@section('breadcrumb')
    <li class="flex items-center">
        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
        <span class="text-gray-700 font-medium">Testimonials</span>
    </li>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Testimonials Management</h1>
            <p class="text-gray-500 mt-1">Manage member testimonials and reviews</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="btn btn-outline-gray" onclick="exportTestimonials()">
                <i class="fas fa-download mr-2"></i>
                Export
            </button>
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Add Testimonial
            </a>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="admin-card">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <!-- Search -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text" id="testimonial-search" placeholder="Search testimonials..." class="form-input pl-10 w-full sm:w-64">
                </div>
                
                <!-- Status Filter -->
                <select id="status-filter" class="form-select w-full sm:w-40">
                    <option value="">All Status</option>
                    <option value="published">Published</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Rejected</option>
                </select>
                
                <!-- Date Filter -->
                <input type="date" id="date-filter" class="form-input w-full sm:w-40">
            </div>
            
            <!-- View Toggle -->
            <div class="flex items-center space-x-2">
                <button onclick="setView('grid')" class="view-toggle px-3 py-2 rounded-lg bg-primary-100 text-primary-600" data-view="grid">
                    <i class="fas fa-th"></i>
                </button>
                <button onclick="setView('list')" class="view-toggle px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100" data-view="list">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="stats-card success">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-check"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Published</p>
                    <p class="text-2xl font-bold">124</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card warning">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Pending</p>
                    <p class="text-2xl font-bold">18</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card danger">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-times"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Rejected</p>
                    <p class="text-2xl font-bold">14</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card primary">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Avg Rating</p>
                    <p class="text-2xl font-bold">4.8</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Grid View -->
    <div id="testimonials-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Testimonial Card 1 -->
        <div class="admin-card testimonial-card" data-id="1">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/Wanachama/mama-kuku.png') }}" alt="Joyce K Mushi" class="w-12 h-12 rounded-full object-cover mr-3">
                    <div>
                        <h4 class="font-semibold text-gray-900">Joyce K Mushi</h4>
                        <p class="text-sm text-gray-500">MWANACHAMA</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="badge badge-success">Published</span>
                    <div class="relative">
                        <button class="text-gray-400 hover:text-gray-600" onclick="toggleDropdown(this)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10 hidden">
                            <a href="{{ route('admin.testimonials.edit', 1) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <button onclick="toggleStatus(1, 'pending')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-eye-slash mr-2"></i>Unpublish
                            </button>
                            <button onclick="deleteTestimonial(1)" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <i class="fas fa-trash mr-2"></i>Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Rating -->
            <div class="flex items-center mb-3">
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="ml-2 text-sm text-gray-500">5.0</span>
            </div>
            
            <!-- Testimonial Content -->
            <div class="mb-4">
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Ni ukweli hapa ndipo mahali ninapokimbilia. Nimepata mafanikio makubwa sana. Nawashauri watanzania wajiunge na ELCT ND SACCOS watapata mafanikio sana."
                </p>
            </div>
            
            <!-- Metadata -->
            <div class="flex items-center justify-between text-xs text-gray-500">
                <span>Created: 2 weeks ago</span>
                <span>Views: 234</span>
            </div>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="admin-card testimonial-card" data-id="2">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/Wanachama/MWANCHAM1.png') }}" alt="Joe N Nkya" class="w-12 h-12 rounded-full object-cover mr-3">
                    <div>
                        <h4 class="font-semibold text-gray-900">Joe N Nkya</h4>
                        <p class="text-sm text-gray-500">MWANACHAMA</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="badge badge-warning">Pending</span>
                    <div class="relative">
                        <button class="text-gray-400 hover:text-gray-600" onclick="toggleDropdown(this)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10 hidden">
                            <a href="{{ route('admin.testimonials.edit', 2) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <button onclick="toggleStatus(2, 'published')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-eye mr-2"></i>Publish
                            </button>
                            <button onclick="deleteTestimonial(2)" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <i class="fas fa-trash mr-2"></i>Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Rating -->
            <div class="flex items-center mb-3">
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="ml-2 text-sm text-gray-500">5.0</span>
            </div>
            
            <!-- Testimonial Content -->
            <div class="mb-4">
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Ninajua kwamba kumekuwa na SACCOS nyingi, na nyingi zimekufa. Lakini kwa kweli kwaajili ya ELCT ND SACCOS, NIMEIONA NURU NA MWANGA MKUBWA SANA WENYE MAFANIKIO."
                </p>
            </div>
            
            <!-- Metadata -->
            <div class="flex items-center justify-between text-xs text-gray-500">
                <span>Created: 1 week ago</span>
                <span>Views: 156</span>
            </div>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="admin-card testimonial-card" data-id="3">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/Wanachama/PROPSAR.png') }}" alt="Prospar Mlay" class="w-12 h-12 rounded-full object-cover mr-3">
                    <div>
                        <h4 class="font-semibold text-gray-900">Prospar Mlay</h4>
                        <p class="text-sm text-gray-500">MWANACHAMA</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="badge badge-success">Published</span>
                    <div class="relative">
                        <button class="text-gray-400 hover:text-gray-600" onclick="toggleDropdown(this)">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10 hidden">
                            <a href="{{ route('admin.testimonials.edit', 3) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <button onclick="toggleStatus(3, 'pending')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-eye-slash mr-2"></i>Unpublish
                            </button>
                            <button onclick="deleteTestimonial(3)" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <i class="fas fa-trash mr-2"></i>Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Rating -->
            <div class="flex items-center mb-3">
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <span class="ml-2 text-sm text-gray-500">4.0</span>
            </div>
            
            <!-- Testimonial Content -->
            <div class="mb-4">
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Kwa miaka ya nyuma nilikuwa nakopa Taasisi zingine. Lakini nilipojiunga ELCT ND SACCOS ndipo nikapata mafanikio makubwa sana."
                </p>
            </div>
            
            <!-- Metadata -->
            <div class="flex items-center justify-between text-xs text-gray-500">
                <span>Created: 3 days ago</span>
                <span>Views: 89</span>
            </div>
        </div>
    </div>

    <!-- Testimonials List View (Hidden by default) -->
    <div id="testimonials-list" class="hidden">
        <div class="admin-table">
            <table class="w-full">
                <thead>
                    <tr>
                        <th data-sortable>ID</th>
                        <th data-sortable>Member</th>
                        <th data-sortable>Rating</th>
                        <th data-sortable>Status</th>
                        <th data-sortable>Created</th>
                        <th data-sortable>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-medium">1</td>
                        <td>
                            <div class="flex items-center">
                                <img src="{{ asset('images/Wanachama/mama-kuku.png') }}" alt="Joyce K Mushi" class="w-8 h-8 rounded-full object-cover mr-2">
                                <div>
                                    <div class="font-medium">Joyce K Mushi</div>
                                    <div class="text-xs text-gray-500">MWANACHAMA</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-700">5.0</span>
                            </div>
                        </td>
                        <td><span class="badge badge-success">Published</span></td>
                        <td>2 weeks ago</td>
                        <td>234</td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.testimonials.edit', 1) }}" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="toggleStatus(1, 'pending')" class="text-yellow-600 hover:text-yellow-800">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                                <button onclick="deleteTestimonial(1)" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-medium">2</td>
                        <td>
                            <div class="flex items-center">
                                <img src="{{ asset('images/Wanachama/MWANCHAM1.png') }}" alt="Joe N Nkya" class="w-8 h-8 rounded-full object-cover mr-2">
                                <div>
                                    <div class="font-medium">Joe N Nkya</div>
                                    <div class="text-xs text-gray-500">MWANACHAMA</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <span class="ml-1 text-gray-700">5.0</span>
                            </div>
                        </td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>1 week ago</td>
                        <td>156</td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.testimonials.edit', 2) }}" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="toggleStatus(2, 'published')" class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button onclick="deleteTestimonial(2)" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between">
        <div class="text-sm text-gray-700">
            Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">156</span> results
        </div>
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-gray-50 disabled:opacity-50" disabled>
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-3 py-1 bg-primary-600 text-white rounded-lg text-sm">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-gray-50">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="delete-modal" class="modal-overlay hidden">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="text-lg font-semibold text-gray-900">Delete Testimonial</h3>
            <button onclick="closeModal('delete-modal')" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-gray-600">Are you sure you want to delete this testimonial? This action cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <button onclick="closeModal('delete-modal')" class="btn btn-outline-gray">Cancel</button>
            <button onclick="confirmDelete()" class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>
@endsection

<script>
let currentView = 'grid';
let testimonialToDelete = null;

// View toggle
function setView(view) {
    currentView = view;
    document.querySelectorAll('.view-toggle').forEach(btn => {
        if (btn.dataset.view === view) {
            btn.classList.add('bg-primary-100', 'text-primary-600');
            btn.classList.remove('text-gray-600', 'hover:bg-gray-100');
        } else {
            btn.classList.remove('bg-primary-100', 'text-primary-600');
            btn.classList.add('text-gray-600', 'hover:bg-gray-100');
        }
    });
    
    if (view === 'grid') {
        document.getElementById('testimonials-grid').classList.remove('hidden');
        document.getElementById('testimonials-list').classList.add('hidden');
    } else {
        document.getElementById('testimonials-grid').classList.add('hidden');
        document.getElementById('testimonials-list').classList.remove('hidden');
    }
}

// Dropdown toggle
function toggleDropdown(button) {
    const dropdown = button.nextElementSibling;
    dropdown.classList.toggle('hidden');
    
    // Close other dropdowns
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu !== dropdown) {
            menu.classList.add('hidden');
        }
    });
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    }
});

// Toggle testimonial status
function toggleStatus(id, status) {
    AdminJS.ajaxRequest(`/admin/testimonials/${id}/status`, 'POST', { status })
        .then(response => {
            if (response.success) {
                location.reload();
            } else {
                AdminJS.showError('Failed to update status', document.body);
            }
        })
        .catch(error => {
            AdminJS.showError('An error occurred', document.body);
        });
}

// Delete testimonial
function deleteTestimonial(id) {
    testimonialToDelete = id;
    document.getElementById('delete-modal').classList.remove('hidden');
}

function confirmDelete() {
    if (testimonialToDelete) {
        AdminJS.ajaxRequest(`/admin/testimonials/${testimonialToDelete}`, 'DELETE')
            .then(response => {
                if (response.success) {
                    location.reload();
                } else {
                    AdminJS.showError('Failed to delete testimonial', document.body);
                }
            })
            .catch(error => {
                AdminJS.showError('An error occurred', document.body);
            });
    }
}

// Close modal
function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
    testimonialToDelete = null;
}

// Export testimonials
function exportTestimonials() {
    window.open('/admin/testimonials/export', '_blank');
}

// Search functionality
document.getElementById('testimonial-search').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('.testimonial-card').forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Status filter
document.getElementById('status-filter').addEventListener('change', function(e) {
    const status = e.target.value;
    document.querySelectorAll('.testimonial-card').forEach(card => {
        const badge = card.querySelector('.badge');
        if (status === '') {
            card.style.display = '';
        } else {
            const cardStatus = badge.textContent.toLowerCase();
            card.style.display = cardStatus === status ? '' : 'none';
        }
    });
});

// Date filter
document.getElementById('date-filter').addEventListener('change', function(e) {
    const date = e.target.value;
    // Implement date filtering logic
    console.log('Filter by date:', date);
});
</script>
