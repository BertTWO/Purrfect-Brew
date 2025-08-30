<aside class="w-64 bg-white shadow-md flex flex-col border-r border-amber-100">
    <div class="flex flex-col items-center py-6">
        <div class="relative w-16 h-16 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="w-full h-full rounded-full object-cover border-2 border-amber-200" alt="Logo">

        </div>
        <h2 class="font-bold text-amber-800 text-xl font-poppins tracking-wide">PurfectBrew</h2>
        <p class="text-xs text-amber-500 mt-1">Admin Dashboard</p>
    </div>
    
    <div class="flex-1 px-3 py-4">
        <div class="mb-6 px-3">
            <p class="text-xs font-semibold text-amber-500 uppercase tracking-wider mb-2 pl-1">Main Navigation</p>
            <div class="space-y-1">
                <a href="{{ route('dashboard') }}" class="{{request()->routeIs('dashboard') ? 'border bg-amber-150' : ''}}  flex items-center py-2.5 px-4 rounded-xl text-gray-600 font-medium hover:bg-amber-50 hover:text-amber-700 transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400 group-hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded-xl text-gray-600 font-medium hover:bg-amber-50 hover:text-amber-700 transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400 group-hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Customer
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded-xl text-gray-600 font-medium hover:bg-amber-50 hover:text-amber-700 transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400 group-hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Orders
                </a>
                <a href="{{ route('products.index') }}" class="{{request()->routeIs('products.index') ? 'border bg-amber-150' : ''}} flex items-center py-2.5 px-4 rounded-xl   text-amber-700 font-medium transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                    Products
                  
                </a>
            </div>
        </div>
        
        <div class="mb-6 px-3">
            <p class="text-xs font-semibold text-amber-500 uppercase tracking-wider mb-2 pl-1">Preferences</p>
            <a href="#" class="flex items-center py-2.5 px-4 rounded-xl text-gray-600 font-medium hover:bg-amber-50 hover:text-amber-700 transition-all group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400 group-hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
            </a>
        </div>
        
        <div class="px-3 mt-10">
            <div class="border-t border-amber-100 pt-4">
                <a href="#" class="flex items-center py-2.5 px-4 rounded-xl text-gray-500 font-medium hover:bg-amber-50 hover:text-amber-700 transition-all group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-400 group-hover:text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </a>
            </div>
        </div>
    </div>
    
    <div class="p-4 border-t border-amber-100 bg-amber-50">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Admin profile">
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-amber-900">Admin User</p>
                <p class="text-xs font-medium text-amber-500">Administrator</p>
            </div>
        </div>
    </div>
</aside>