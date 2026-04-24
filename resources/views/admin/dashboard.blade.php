@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('breadcrumb')
    <li class="flex items-center">
        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
        <span class="text-gray-700 font-medium">Dashboard</span>
    </li>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard Overview</h1>
            <p class="text-gray-500 mt-1">Welcome back! Here's what's happening with ELCT ND SACCOS today.</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="btn btn-outline-gray">
                <i class="fas fa-download mr-2"></i>
                Export Report
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Quick Action
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Members -->
        <div class="stats-card primary">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Members</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">10,247</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-arrow-up text-green-500 text-xs mr-1"></i>
                        <span class="text-sm text-green-600">12% from last month</span>
                    </div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>

        <!-- Total Loans -->
        <div class="stats-card secondary">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Loans</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">3,842</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-arrow-up text-green-500 text-xs mr-1"></i>
                        <span class="text-sm text-green-600">8% from last month</span>
                    </div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="stats-card success">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Testimonials</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">156</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-arrow-up text-green-500 text-xs mr-1"></i>
                        <span class="text-sm text-green-600">23% from last month</span>
                    </div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-comment-dots"></i>
                </div>
            </div>
        </div>

        <!-- Active Users -->
        <div class="stats-card warning">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Active Users</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">892</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-arrow-down text-red-500 text-xs mr-1"></i>
                        <span class="text-sm text-red-600">3% from last month</span>
                    </div>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Loan Applications Chart -->
        <div class="chart-container">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Loan Applications</h3>
                <select class="form-select text-sm py-1 px-2">
                    <option>Last 7 days</option>
                    <option>Last 30 days</option>
                    <option>Last 3 months</option>
                </select>
            </div>
            <canvas data-chart="line" data-chart-data='{"labels":["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],"datasets":[{"label":"Applications","data":[12,19,15,25,22,30,28],"borderColor":"rgb(18, 117, 185)","backgroundColor":"rgba(18, 117, 185, 0.1)","tension":0.4}]}' height="200"></canvas>
        </div>

        <!-- Member Growth Chart -->
        <div class="chart-container">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Member Growth</h3>
                <select class="form-select text-sm py-1 px-2">
                    <option>Last 6 months</option>
                    <option>Last year</option>
                    <option>All time</option>
                </select>
            </div>
            <canvas data-chart="bar" data-chart-data='{"labels":["Jan","Feb","Mar","Apr","May","Jun"],"datasets":[{"label":"New Members","data":[120,145,180,165,210,195],"backgroundColor":"rgba(170, 206, 62, 0.8)"}]}' height="200"></canvas>
        </div>
    </div>

    <!-- Recent Activities & Quick Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Activities -->
        <div class="lg:col-span-2">
            <div class="admin-card">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Recent Activities</h3>
                    <a href="#" class="text-sm text-primary-600 hover:text-primary-700">View all</a>
                </div>
                
                <div class="space-y-4">
                    <!-- Activity Item 1 -->
                    <div class="activity-item">
                        <div class="activity-icon bg-blue-100">
                            <i class="fas fa-user-plus text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">New member registered</p>
                            <p class="text-xs text-gray-500">John Doe joined as a new member</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                    </div>

                    <!-- Activity Item 2 -->
                    <div class="activity-item">
                        <div class="activity-icon bg-green-100">
                            <i class="fas fa-comment text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">New testimonial submitted</p>
                            <p class="text-xs text-gray-500">Joyce K Mushi submitted a testimonial</p>
                            <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                        </div>
                    </div>

                    <!-- Activity Item 3 -->
                    <div class="activity-item">
                        <div class="activity-icon bg-yellow-100">
                            <i class="fas fa-hand-holding-usd text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Loan application approved</p>
                            <p class="text-xs text-gray-500">Joe N Nkya's loan was approved</p>
                            <p class="text-xs text-gray-400 mt-1">8 hours ago</p>
                        </div>
                    </div>

                    <!-- Activity Item 4 -->
                    <div class="activity-item">
                        <div class="activity-icon bg-purple-100">
                            <i class="fas fa-file-alt text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Homepage content updated</p>
                            <p class="text-xs text-gray-500">Admin updated hero section</p>
                            <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div>
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Stats</h3>
                
                <div class="space-y-4">
                    <!-- Loan Status Distribution -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-600">Loan Status</span>
                            <span class="text-xs text-gray-500">This month</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Approved</span>
                                <span class="text-xs font-medium">45%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pending</span>
                                <span class="text-xs font-medium">30%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 30%"></div>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Rejected</span>
                                <span class="text-xs font-medium">25%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-red-500 h-2 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Member Categories -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-600">Member Categories</span>
                            <span class="text-xs text-gray-500">Total</span>
                        </div>
                        <canvas data-chart="doughnut" data-chart-data='{"labels":["Entrepreneurs","Businessmen","Employees"],"datasets":[{"data":[45,30,25],"backgroundColor":["rgba(170, 206, 62, 0.8)","rgba(18, 117, 185, 0.8)","rgba(245, 158, 11, 0.8)"}]}' height="150"></canvas>
                    </div>

                    <!-- System Health -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-600">System Health</span>
                            <span class="badge badge-success">Good</span>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Server Load</span>
                                <span class="text-xs font-medium text-green-600">23%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Database</span>
                                <span class="text-xs font-medium text-green-600">Optimal</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Storage</span>
                                <span class="text-xs font-medium text-yellow-600">67%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="admin-card">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.testimonials.create') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-plus text-primary-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">Add Testimonial</span>
            </a>
            
            <a href="{{ route('admin.users.create') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-user-plus text-secondary-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">Add User</span>
            </a>
            
            <a href="{{ route('admin.loans.create') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-hand-holding-usd text-green-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">New Loan</span>
            </a>
            
            <a href="{{ route('admin.messages.index') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-envelope text-yellow-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-900">Messages</span>
            </a>
        </div>
    </div>
</div>
@endsection
