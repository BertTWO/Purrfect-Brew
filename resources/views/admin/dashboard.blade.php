<x-admin-layout>
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold text-amber-800 font-poppins">Dashboard Overview</h2>
            <div class="text-sm text-amber-600 bg-amber-50 px-3 py-1.5 rounded-lg">
                <span class="font-medium">Last updated:</span> Today, 10:30 AM
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white p-5 rounded-xl border border-amber-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 font-medium text-sm">Customers</h3>
                    <div class="p-2 bg-amber-100 rounded-lg group-hover:bg-amber-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-amber-800">120</p>
                <div class="mt-2 flex items-center text-xs">
                    <span class="text-green-500 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        +5.2%
                    </span>
                    <span class="text-gray-400 ml-2">from last week</span>
                </div>
            </div>
            
            <div class="bg-white p-5 rounded-xl border border-amber-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 font-medium text-sm">Orders</h3>
                    <div class="p-2 bg-amber-100 rounded-lg group-hover:bg-amber-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-amber-800">45</p>
                <div class="mt-2 flex items-center text-xs">
                    <span class="text-green-500 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        +12.8%
                    </span>
                    <span class="text-gray-400 ml-2">from last week</span>
                </div>
            </div>
            
            <div class="bg-white p-5 rounded-xl border border-amber-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 font-medium text-sm">Products</h3>
                    <div class="p-2 bg-amber-100 rounded-lg group-hover:bg-amber-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-amber-800">{{ $totalProducts }}</p>
                <div class="mt-2 flex items-center text-xs">
                    <span class="text-green-500 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        +2.4%
                    </span>
                    <span class="text-gray-400 ml-2">from last week</span>
                </div>
            </div>
            
            <div class="bg-white p-5 rounded-xl border border-amber-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-gray-500 font-medium text-sm">Revenue</h3>
                    <div class="p-2 bg-amber-100 rounded-lg group-hover:bg-amber-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-bold text-amber-800">$1,250</p>
                <div class="mt-2 flex items-center text-xs">
                    <span class="text-green-500 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        +8.3%
                    </span>
                    <span class="text-gray-400 ml-2">from last week</span>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="bg-white p-6 rounded-xl border border-amber-100 shadow-sm">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-xl font-semibold text-amber-800">Recent Orders</h3>
                <a href="#" class="text-sm text-amber-600 hover:text-amber-800 font-medium flex items-center">
                    View all
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left border-b border-amber-100">
                            <th class="pb-3 font-medium text-amber-700 text-sm">Order ID</th>
                            <th class="pb-3 font-medium text-amber-700 text-sm">Customer</th>
                            <th class="pb-3 font-medium text-amber-700 text-sm">Amount</th>
                            <th class="pb-3 font-medium text-amber-700 text-sm">Status</th>
                            <th class="pb-3 font-medium text-amber-700 text-sm">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-amber-100">
                        <tr class="hover:bg-amber-50 transition-colors">
                            <td class="py-3 font-medium text-amber-900">#001</td>
                            <td class="py-3">Alice Johnson</td>
                            <td class="py-3 font-medium">$120.00</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="py-3 text-sm text-gray-500">Today, 09:45 AM</td>
                        </tr>
                        <tr class="hover:bg-amber-50 transition-colors">
                            <td class="py-3 font-medium text-amber-900">#002</td>
                            <td class="py-3">Bob Smith</td>
                            <td class="py-3 font-medium">$80.50</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            </td>
                            <td class="py-3 text-sm text-gray-500">Today, 10:15 AM</td>
                        </tr>
                        <tr class="hover:bg-amber-50 transition-colors">
                            <td class="py-3 font-medium text-amber-900">#003</td>
                            <td class="py-3">Charlie Brown</td>
                            <td class="py-3 font-medium">$150.75</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">Cancelled</span>
                            </td>
                            <td class="py-3 text-sm text-gray-500">Yesterday, 4:30 PM</td>
                        </tr>
                        <tr class="hover:bg-amber-50 transition-colors">
                            <td class="py-3 font-medium text-amber-900">#004</td>
                            <td class="py-3">Diana Miller</td>
                            <td class="py-3 font-medium">$95.25</td>
                            <td class="py-3">
                                <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="py-3 text-sm text-gray-500">Yesterday, 2:15 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>