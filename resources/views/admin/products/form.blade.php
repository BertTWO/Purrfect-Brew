<x-admin-layout>
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-amber-100">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-amber-900 font-poppins mb-2">{{ $product->id ? 'Edit Product' : 'Add New Product' }}</h2>
            <p class="text-amber-600">{{ $product->id ? 'Update your product details' : 'Fill in the details to add a new product' }}</p>
        </div>

        <form action="{{ $product->id ? route('products.update', $product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
           
            @if($product->id)
                @method('PUT')
            @endif
            
            @csrf
            
            <!-- Product Name -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                    Product Name
                </label>
                <input type="text" name="name" value="{{$product->id ? old('name', $product->name) : old('name')}}" placeholder="e.g. Espresso Blend" required
                    class="w-full px-4 py-3 rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition placeholder-gray-400">
            </div>

            <!-- Category -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Category
                </label>
                <select name="category" required class="w-full px-4 py-3 rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition">
                    <option value="">Select a category</option>
                    <option value="beverage" {{ ($product->id && old('category', $product->category) == 'beverage') || old('category') == 'beverage' ? 'selected' : '' }}>Beverage</option>
                    <option value="snacks" {{ ($product->id && old('category', $product->category) == 'snacks') || old('category') == 'snacks' ? 'selected' : '' }}>Snacks</option>
                    <option value="merchandise" {{ ($product->id && old('category', $product->category) == 'merchandise') || old('category') == 'merchandise' ? 'selected' : '' }}>Merchandise</option>
                    <option value="beans" {{ ($product->id && old('category', $product->category) == 'beans') || old('category') == 'beans' ? 'selected' : '' }}>Coffee Beans</option>
                </select>
            </div>

            <!-- Description -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                    Description
                </label>
                <textarea name="description" placeholder="Describe the product features, taste notes, etc." rows="4"
                    class="w-full px-4 py-3 rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition placeholder-gray-400">{{ $product->id ? old('description', $product->description) : old('description') }}</textarea>
            </div>

            <!-- Price & Stock -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block mb-2 font-medium text-gray-700 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Price ($)
                    </label>
                    <div class="relative">
                        <span class="absolute left-3 top-3 text-gray-500">$</span>
                        <input type="number" step="0.01" min="0" name="price" value="{{$product->id ? old('price', $product->price) : old('price')}}" placeholder="0.00" required
                            class="w-full pl-8 pr-4 py-3 rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition">
                    </div>
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        Stock
                    </label>
                    <input type="number" min="0" name="stock" value="{{$product->id ? old('stock', $product->stock) : old('stock')}}" placeholder="0" required
                        class="w-full px-4 py-3 rounded-lg border border-amber-200 focus:ring-2 focus:ring-amber-300 focus:border-amber-300 outline-none transition">
                </div>
            </div>

            <!-- Status -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Status
                </label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="status" value="active" {{ $product->id ? (old('status', $product->status) == 'active' ? 'checked' : '') : (old('status') == 'active' ? 'checked' : 'checked') }}
                            class="text-amber-600 focus:ring-amber-300">
                        <span class="ml-2">Active</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="status" value="inactive" {{ $product->id ? (old('status', $product->status) == 'inactive' ? 'checked' : '') : (old('status') == 'inactive' ? 'checked' : '') }}
                            class="text-amber-600 focus:ring-amber-300">
                        <span class="ml-2">Inactive</span>
                    </label>
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Product Image
                </label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-amber-300 border-dashed rounded-lg cursor-pointer hover:bg-amber-50 transition">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-3 h-8 w-8 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="mb-2 text-sm text-amber-600"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-amber-500">PNG, JPG, GIF (MAX. 5MB)</p>
                        </div>
                        <input type="file" name="image" accept="image/*" class="hidden" />
                    </label>
                </div>
                @if($product->id && $product->image_path)
                    <p class="mt-2 text-sm text-amber-600">Current image: {{ basename($product->image_path) }}</p>
                @endif
            </div>

            <!-- Form Actions -->
            <div class="flex flex-col-reverse sm:flex-row justify-between items-center gap-4 pt-4 border-t border-amber-100">
                <a href="{{ route('products.index') }}" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-gray-100 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-200 transition font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Cancel
                </a>
                <button type="submit"
                    class="w-full sm:w-auto flex items-center justify-center gap-2 bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition font-medium shadow-md hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    {{$product->id ? 'Update Product' : 'Add Product'}}
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>