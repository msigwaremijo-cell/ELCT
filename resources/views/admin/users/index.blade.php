@extends('admin.layouts.app')

@section('title', 'User Management')

@section('breadcrumb')
    <li class="flex items-center">
        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
        <span class="text-gray-700 font-medium">User Management</span>
    </li>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">User Management</h1>
            <p class="text-gray-500 mt-1">Manage administrators and system users</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="btn btn-outline-gray" onclick="exportUsers()">
                <i class="fas fa-download mr-2"></i>
                Export Users
            </button>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                <i class="fas fa-user-plus mr-2"></i>
                Add User
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
                    <input type="text" id="user-search" placeholder="Search users..." class="form-input pl-10 w-full sm:w-64">
                </div>
                
                <!-- Role Filter -->
                <select id="role-filter" class="form-select w-full sm:w-40">
                    <option value="">All Roles</option>
                    <option value="admin">Administrator</option>
                    <option value="editor">Editor</option>
                    <option value="viewer">Viewer</option>
                    <option value="member">Member</option>
                </select>
                
                <!-- Status Filter -->
                <select id="status-filter" class="form-select w-full sm:w-40">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>
            
            <!-- Bulk Actions -->
            <div class="flex items-center space-x-2">
                <select id="bulk-action" class="form-select text-sm py-1 px-2">
                    <option value="">Bulk Actions</option>
                    <option value="activate">Activate</option>
                    <option value="deactivate">Deactivate</option>
                    <option value="suspend">Suspend</option>
                    <option value="delete">Delete</option>
                </select>
                <button onclick="applyBulkAction()" class="btn btn-outline-gray text-sm py-1 px-3" disabled id="bulk-action-btn">
                    Apply
                </button>
            </div>
        </div>
    </div>

    <!-- User Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="stats-card primary">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Users</p>
                    <p class="text-2xl font-bold">1,247</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card success">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Active Users</p>
                    <p class="text-2xl font-bold">1,089</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card warning">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Administrators</p>
                    <p class="text-2xl font-bold">12</p>
                </div>
            </div>
        </div>
        
        <div class="stats-card secondary">
            <div class="flex items-center">
                <div class="stats-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">New This Month</p>
                    <p class="text-2xl font-bold">47</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="admin-table">
        <table class="w-full" id="users-table">
            <thead>
                <tr>
                    <th class="w-12">
                        <input type="checkbox" id="select-all" class="form-checkbox">
                    </th>
                    <th data-sortable>User</th>
                    <th data-sortable>Role</th>
                    <th data-sortable>Email</th>
                    <th data-sortable>Status</th>
                    <th data-sortable>Last Login</th>
                    <th data-sortable>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Admin User -->
                <tr data-user-id="1">
                    <td>
                        <input type="checkbox" class="user-checkbox form-checkbox" value="1">
                    </td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                A
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Admin User</div>
                                <div class="text-xs text-gray-500">ID: 001</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-primary">Administrator</span>
                    </td>
                    <td>
                        <div class="text-sm">
                            <div class="text-gray-900">admin@elctndsaccos.org</div>
                            <div class="text-xs text-gray-500">+255 123 456 789</div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td>
                        <div class="text-sm text-gray-900">2 hours ago</div>
                    </td>
                    <td>
                        <div class="text-sm text-gray-500">Jan 15, 2024</div>
                    </td>
                    <td>
                        <div class="flex items-center space-x-2">
                            <button onclick="editUser(1)" class="text-blue-600 hover:text-blue-800" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="resetPassword(1)" class="text-yellow-600 hover:text-yellow-800" title="Reset Password">
                                <i class="fas fa-key"></i>
                            </button>
                            <button onclick="toggleUserStatus(1, 'suspend')" class="text-orange-600 hover:text-orange-800" title="Suspend">
                                <i class="fas fa-user-slash"></i>
                            </button>
                            <button onclick="deleteUser(1)" class="text-red-600 hover:text-red-800" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Editor User -->
                <tr data-user-id="2">
                    <td>
                        <input type="checkbox" class="user-checkbox form-checkbox" value="2">
                    </td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                J
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">John Editor</div>
                                <div class="text-xs text-gray-500">ID: 002</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-secondary">Editor</span>
                    </td>
                    <td>
                        <div class="text-sm">
                            <div class="text-gray-900">john.editor@elctndsaccos.org</div>
                            <div class="text-xs text-gray-500">+255 234 567 890</div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td>
                        <div class="text-sm text-gray-900">1 day ago</div>
                    </td>
                    <td>
                        <div class="text-sm text-gray-500">Feb 20, 2024</div>
                    </td>
                    <td>
                        <div class="flex items-center space-x-2">
                            <button onclick="editUser(2)" class="text-blue-600 hover:text-blue-800" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="resetPassword(2)" class="text-yellow-600 hover:text-yellow-800" title="Reset Password">
                                <i class="fas fa-key"></i>
                            </button>
                            <button onclick="toggleUserStatus(2, 'suspend')" class="text-orange-600 hover:text-orange-800" title="Suspend">
                                <i class="fas fa-user-slash"></i>
                            </button>
                            <button onclick="deleteUser(2)" class="text-red-600 hover:text-red-800" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Viewer User -->
                <tr data-user-id="3">
                    <td>
                        <input type="checkbox" class="user-checkbox form-checkbox" value="3">
                    </td>
                    <td>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                S
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Sarah Viewer</div>
                                <div class="text-xs text-gray-500">ID: 003</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-gray">Viewer</span>
                    </td>
                    <td>
                        <div class="text-sm">
                            <div class="text-gray-900">sarah.viewer@elctndsaccos.org</div>
                            <div class="text-xs text-gray-500">+255 345 678 901</div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-warning">Suspended</span>
                    </td>
                    <td>
                        <div class="text-sm text-gray-900">3 days ago</div>
                    </td>
                    <td>
                        <div class="text-sm text-gray-500">Mar 10, 2024</div>
                    </td>
                    <td>
                        <div class="flex items-center space-x-2">
                            <button onclick="editUser(3)" class="text-blue-600 hover:text-blue-800" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="resetPassword(3)" class="text-yellow-600 hover:text-yellow-800" title="Reset Password">
                                <i class="fas fa-key"></i>
                            </button>
                            <button onclick="toggleUserStatus(3, 'activate')" class="text-green-600 hover:text-green-800" title="Activate">
                                <i class="fas fa-user-check"></i>
                            </button>
                            <button onclick="deleteUser(3)" class="text-red-600 hover:text-red-800" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Member User -->
                <tr data-user-id="4">
                    <td>
                        <input type="checkbox" class="user-checkbox form-checkbox" value="4">
                    </td>
                    <td>
                        <div class="flex items-center">
                            <img src="{{ asset('images/Wanachama/mama-kuku.png') }}" alt="Joyce K Mushi" class="w-10 h-10 rounded-full object-cover mr-3">
                            <div>
                                <div class="font-medium text-gray-900">Joyce K Mushi</div>
                                <div class="text-xs text-gray-500">ID: 004</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-gray">Member</span>
                    </td>
                    <td>
                        <div class="text-sm">
                            <div class="text-gray-900">joyce.mushi@elctndsaccos.org</div>
                            <div class="text-xs text-gray-500">+255 456 789 012</div>
                        </div>
                    </td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td>
                        <div class="text-sm text-gray-900">5 hours ago</div>
                    </td>
                    <td>
                        <div class="text-sm text-gray-500">Apr 1, 2024</div>
                    </td>
                    <td>
                        <div class="flex items-center space-x-2">
                            <button onclick="editUser(4)" class="text-blue-600 hover:text-blue-800" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="resetPassword(4)" class="text-yellow-600 hover:text-yellow-800" title="Reset Password">
                                <i class="fas fa-key"></i>
                            </button>
                            <button onclick="toggleUserStatus(4, 'suspend')" class="text-orange-600 hover:text-orange-800" title="Suspend">
                                <i class="fas fa-user-slash"></i>
                            </button>
                            <button onclick="deleteUser(4)" class="text-red-600 hover:text-red-800" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between">
        <div class="text-sm text-gray-700">
            Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">1,247</span> results
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

<!-- Edit User Modal -->
<div id="edit-user-modal" class="modal-overlay hidden">
    <div class="modal-content max-w-2xl">
        <div class="modal-header">
            <h3 class="text-lg font-semibold text-gray-900">Edit User</h3>
            <button onclick="closeModal('edit-user-modal')" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="edit-user-form">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label class="form-label" for="edit-name">Full Name</label>
                        <input type="text" id="edit-name" name="name" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edit-email">Email</label>
                        <input type="email" id="edit-email" name="email" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edit-phone">Phone</label>
                        <input type="tel" id="edit-phone" name="phone" class="form-input">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edit-role">Role</label>
                        <select id="edit-role" name="role" class="form-select">
                            <option value="admin">Administrator</option>
                            <option value="editor">Editor</option>
                            <option value="viewer">Viewer</option>
                            <option value="member">Member</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edit-status">Status</label>
                        <select id="edit-status" name="status" class="form-select">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="edit-password">New Password</label>
                        <input type="password" id="edit-password" name="password" class="form-input" placeholder="Leave blank to keep current">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="edit-notes">Notes</label>
                    <textarea id="edit-notes" name="notes" rows="3" class="form-textarea" placeholder="Admin notes..."></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button onclick="closeModal('edit-user-modal')" class="btn btn-outline-gray">Cancel</button>
            <button onclick="saveUser()" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</div>

<!-- Reset Password Modal -->
<div id="reset-password-modal" class="modal-overlay hidden">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="text-lg font-semibold text-gray-900">Reset Password</h3>
            <button onclick="closeModal('reset-password-modal')" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="reset-password-form">
                <div class="form-group">
                    <label class="form-label" for="new-password">New Password</label>
                    <input type="password" id="new-password" name="password" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="password_confirmation" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <div class="flex items-center">
                        <input type="checkbox" id="send-email" name="send_email" class="form-checkbox" checked>
                        <label for="send-email" class="ml-2 text-sm text-gray-700">Send password reset email to user</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button onclick="closeModal('reset-password-modal')" class="btn btn-outline-gray">Cancel</button>
            <button onclick="resetPasswordConfirm()" class="btn btn-primary">Reset Password</button>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="delete-user-modal" class="modal-overlay hidden">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="text-lg font-semibold text-gray-900">Delete User</h3>
            <button onclick="closeModal('delete-user-modal')" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-gray-600">Are you sure you want to delete this user? This action cannot be undone.</p>
            <div class="mt-4">
                <div class="flex items-center">
                    <input type="checkbox" id="confirm-delete" class="form-checkbox">
                    <label for="confirm-delete" class="ml-2 text-sm text-gray-700">I understand this action is permanent</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button onclick="closeModal('delete-user-modal')" class="btn btn-outline-gray">Cancel</button>
            <button onclick="confirmDeleteUser()" class="btn btn-danger" disabled id="confirm-delete-btn">Delete User</button>
        </div>
    </div>
</div>
@endsection

<script>
let currentUserId = null;

// Select all functionality
const selectAllCheckbox = document.getElementById('select-all');
const userCheckboxes = document.querySelectorAll('.user-checkbox');
const bulkActionBtn = document.getElementById('bulk-action-btn');

selectAllCheckbox.addEventListener('change', function() {
    userCheckboxes.forEach(checkbox => {
        checkbox.checked = this.checked;
    });
    updateBulkActionButton();
});

userCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', updateBulkActionButton);
});

function updateBulkActionButton() {
    const checkedBoxes = document.querySelectorAll('.user-checkbox:checked');
    bulkActionBtn.disabled = checkedBoxes.length === 0;
}

// Bulk actions
function applyBulkAction() {
    const action = document.getElementById('bulk-action').value;
    const checkedBoxes = document.querySelectorAll('.user-checkbox:checked');
    
    if (!action || checkedBoxes.length === 0) return;
    
    const userIds = Array.from(checkedBoxes).map(cb => cb.value);
    
    AdminJS.ajaxRequest('/admin/users/bulk-action', 'POST', {
        action: action,
        user_ids: userIds
    })
    .then(response => {
        if (response.success) {
            location.reload();
        } else {
            AdminJS.showError('Failed to apply bulk action', document.body);
        }
    })
    .catch(error => {
        AdminJS.showError('An error occurred', document.body);
    });
}

// User actions
function editUser(userId) {
    currentUserId = userId;
    // Load user data and show modal
    document.getElementById('edit-user-modal').classList.remove('hidden');
}

function saveUser() {
    const form = document.getElementById('edit-user-form');
    const formData = new FormData(form);
    
    AdminJS.ajaxRequest(`/admin/users/${currentUserId}`, 'POST', Object.fromEntries(formData))
        .then(response => {
            if (response.success) {
                location.reload();
            } else {
                AdminJS.showError('Failed to update user', document.body);
            }
        })
        .catch(error => {
            AdminJS.showError('An error occurred', document.body);
        });
}

function resetPassword(userId) {
    currentUserId = userId;
    document.getElementById('reset-password-modal').classList.remove('hidden');
}

function resetPasswordConfirm() {
    const password = document.getElementById('new-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    
    if (password !== confirmPassword) {
        AdminJS.showError('Passwords do not match', document.body);
        return;
    }
    
    AdminJS.ajaxRequest(`/admin/users/${currentUserId}/reset-password`, 'POST', {
        password: password,
        send_email: document.getElementById('send-email').checked
    })
    .then(response => {
        if (response.success) {
            closeModal('reset-password-modal');
            AdminJS.showSuccess('Password reset successfully', document.body);
        } else {
            AdminJS.showError('Failed to reset password', document.body);
        }
    })
    .catch(error => {
        AdminJS.showError('An error occurred', document.body);
    });
}

function toggleUserStatus(userId, action) {
    AdminJS.ajaxRequest(`/admin/users/${userId}/status`, 'POST', { action })
        .then(response => {
            if (response.success) {
                location.reload();
            } else {
                AdminJS.showError('Failed to update user status', document.body);
            }
        })
        .catch(error => {
            AdminJS.showError('An error occurred', document.body);
        });
}

function deleteUser(userId) {
    currentUserId = userId;
    document.getElementById('delete-user-modal').classList.remove('hidden');
}

function confirmDeleteUser() {
    if (!document.getElementById('confirm-delete').checked) return;
    
    AdminJS.ajaxRequest(`/admin/users/${currentUserId}`, 'DELETE')
        .then(response => {
            if (response.success) {
                location.reload();
            } else {
                AdminJS.showError('Failed to delete user', document.body);
            }
        })
        .catch(error => {
            AdminJS.showError('An error occurred', document.body);
        });
}

// Modal functions
function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
    currentUserId = null;
}

// Confirm delete checkbox
document.getElementById('confirm-delete').addEventListener('change', function() {
    document.getElementById('confirm-delete-btn').disabled = !this.checked;
});

// Export users
function exportUsers() {
    window.open('/admin/users/export', '_blank');
}

// Search functionality
document.getElementById('user-search').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('#users-table tbody tr');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});

// Filter functionality
document.getElementById('role-filter').addEventListener('change', function(e) {
    const role = e.target.value;
    filterTable('role', role);
});

document.getElementById('status-filter').addEventListener('change', function(e) {
    const status = e.target.value;
    filterTable('status', status);
});

function filterTable(column, value) {
    const rows = document.querySelectorAll('#users-table tbody tr');
    
    rows.forEach(row => {
        if (value === '') {
            row.style.display = '';
        } else {
            const cell = row.querySelector(`td:nth-child(${column === 'role' ? 3 : 5})`);
            const cellText = cell.textContent.toLowerCase();
            row.style.display = cellText.includes(value.toLowerCase()) ? '' : 'none';
        }
    });
}
</script>
