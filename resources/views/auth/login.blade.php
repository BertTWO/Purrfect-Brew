<x-layout title="Login" heading="Welcome Back">
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-amber-700 mb-1">Email Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required
                       class="w-full pl-10 pr-4 py-2.5 text-sm rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition placeholder-gray-400">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-amber-700 mb-1">Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <input type="password" name="password" placeholder="Enter your password" required
                       class="w-full pl-10 pr-4 py-2.5 text-sm rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition placeholder-gray-400">
            </div>
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-amber-300 text-amber-600 focus:ring-amber-200">
                <span class="ml-2 text-amber-700">Remember me</span>
            </label>
            <a href="#" class="text-amber-600 hover:text-amber-800 text-sm">Forgot password?</a>
        </div>

        @if($errors->any())
            <div class="bg-red-50 p-3 rounded-lg border border-red-200">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Login failed</h3>
                        <div class="mt-1 text-sm text-red-700">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <button type="submit" 
                class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg text-sm font-medium text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-colors mt-2">
            Sign in
        </button>
    </form>

    <div class="mt-5 pt-4 border-t border-amber-100 text-center">
        <p class="text-sm text-amber-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="font-semibold text-amber-700 hover:text-amber-800 transition-colors">
                Register here
            </a>
        </p>
    </div>
</x-layout>