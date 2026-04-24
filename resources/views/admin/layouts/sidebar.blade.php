<!-- Sidebar -->
<aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex flex-col h-full">
        <!-- Logo Section -->
        <div class="flex items-center justify-between h-16 px-6 border-b border-gray-200 bg-gradient-to-r from-primary-500 to-secondary-500">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center mr-3">
                    <span class="text-primary-500 font-bold text-lg">E</span>
                </div>
                <div class="text-white">
                    <h1 class="text-lg font-bold">ELCT Admin</h1>
                    <p class="text-xs opacity-90">SACCOS Dashboard</p>
                </div>
            </div>
            <button id="close-sidebar" class="lg:hidden text-white hover:bg-white/10 p-2 rounded-lg transition-colors">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}" class="nav-item group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ request()->is('admin') || request()->is('admin/dashboard') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                <i class="fas fa-chart-line mr-3 text-lg {{ request()->is('admin') || request()->is('admin/dashboard') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                <span>Dashboard Overview</span>
            </a>
            
            <!-- Testimonials Management -->
            <div class="nav-group">
                <button class="nav-toggle w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-colors {{ request()->is('admin/testimonials*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : '' }}">
                    <div class="flex items-center">
                        <i class="fas fa-comment-dots mr-3 text-lg {{ request()->is('admin/testimonials*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                        <span>Testimonials</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform"></i>
                </button>
                <div class="nav-submenu ml-8 mt-1 space-y-1 hidden">
                    <a href="{{ route('admin.testimonials.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors {{ request()->is('admin/testimonials') ? 'text-primary-600 bg-primary-50' : '' }}">
                        <i class="fas fa-list mr-2"></i>All Testimonials
                    </a>
                    <a href="{{ route('admin.testimonials.create') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-plus mr-2"></i>Add New
                    </a>
                </div>
            </div>
            
            <!-- User Management -->
            <div class="nav-group">
                <button class="nav-toggle w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-colors {{ request()->is('admin/users*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : '' }}">
                    <div class="flex items-center">
                        <i class="fas fa-users mr-3 text-lg {{ request()->is('admin/users*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                        <span>User Management</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform"></i>
                </button>
                <div class="nav-submenu ml-8 mt-1 space-y-1 hidden">
                    <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors {{ request()->is('admin/users') ? 'text-primary-600 bg-primary-50' : '' }}">
                        <i class="fas fa-list mr-2"></i>All Users
                    </a>
                    <a href="{{ route('admin.users.create') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-user-plus mr-2"></i>Add User
                    </a>
                    <a href="{{ route('admin.roles.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-shield-alt mr-2"></i>Roles
                    </a>
                </div>
            </div>
            
            <!-- Content Management -->
            <div class="nav-group">
                <button class="nav-toggle w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-colors {{ request()->is('admin/content*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : '' }}">
                    <div class="flex items-center">
                        <i class="fas fa-file-alt mr-3 text-lg {{ request()->is('admin/content*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                        <span>Content Management</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform"></i>
                </button>
                <div class="nav-submenu ml-8 mt-1 space-y-1 hidden">
                    <a href="{{ route('admin.content.homepage') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors {{ request()->is('admin/content/homepage') ? 'text-primary-600 bg-primary-50' : '' }}">
                        <i class="fas fa-home mr-2"></i>Homepage
                    </a>
                    <a href="{{ route('admin.content.sections') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-th-large mr-2"></i>Sections
                    </a>
                    <a href="{{ route('admin.content.banners') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-images mr-2"></i>Banners
                    </a>
                </div>
            </div>
            
            <!-- Media Manager -->
            <a href="{{ route('admin.media.index') }}" class="nav-item group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ request()->is('admin/media*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                <i class="fas fa-photo-video mr-3 text-lg {{ request()->is('admin/media*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                <span>Media Manager</span>
            </a>
            
            <!-- Messages -->
            <a href="{{ route('admin.messages.index') }}" class="nav-item group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ request()->is('admin/messages*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                <i class="fas fa-envelope mr-3 text-lg {{ request()->is('admin/messages*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                <span>Messages</span>
                @if($unreadCount = 0) <!-- You can implement unread count logic -->
                <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">0</span>
                @endif
            </a>
            
            <!-- Loan Management (Optional for SACCOS) -->
            <div class="nav-group">
                <button class="nav-toggle w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 hover:text-gray-900 transition-colors {{ request()->is('admin/loans*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : '' }}">
                    <div class="flex items-center">
                        <i class="fas fa-hand-holding-usd mr-3 text-lg {{ request()->is('admin/loans*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                        <span>Loan Management</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform"></i>
                </button>
                <div class="nav-submenu ml-8 mt-1 space-y-1 hidden">
                    <a href="{{ route('admin.loans.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors {{ request()->is('admin/loans') ? 'text-primary-600 bg-primary-50' : '' }}">
                        <i class="fas fa-list mr-2"></i>All Loans
                    </a>
                    <a href="{{ route('admin.loans.pending') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-clock mr-2"></i>Pending
                    </a>
                    <a href="{{ route('admin.loans.history') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded transition-colors">
                        <i class="fas fa-history mr-2"></i>History
                    </a>
                </div>
            </div>
            
            <!-- Settings -->
            <a href="{{ route('admin.settings.index') }}" class="nav-item group flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ request()->is('admin/settings*') ? 'bg-primary-50 text-primary-600 border-l-4 border-primary-600' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}">
                <i class="fas fa-cog mr-3 text-lg {{ request()->is('admin/settings*') ? 'text-primary-600' : 'text-gray-400 group-hover:text-gray-500' }}"></i>
                <span>Settings</span>
            </a>
        </nav>
        
        <!-- User Profile Section -->
        <div class="border-t border-gray-200 p-4">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white font-semibold">
                    {{ auth()->user()->name[0] ?? 'A' }}
                </div>
                <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name ?? 'Admin User' }}</p>
                    <p class="text-xs text-gray-500">{{ auth()->user()->email ?? 'admin@elctndsaccos.org' }}</p>
                </div>
                <div class="relative">
                    <button class="text-gray-400 hover:text-gray-600 transition-colors">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</aside>
