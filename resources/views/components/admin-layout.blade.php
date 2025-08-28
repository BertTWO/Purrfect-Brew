<div class="flex h-screen bg-gray-50">
        @vite('resources/css/app.css')
    <x-admin-sidebar />
    <div class="flex-1 flex flex-col">
        <x-admin-header />
        <main class="flex-1 overflow-y-auto p-6">
            {{ $slot }}
        </main>
        <x-admin-footer />
    </div>
</div>
