<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-3">
        <div class="container bg-blue-600 h-36 w-80 rounded-lg p-2 text-white">
            <h1 class="font-semibold text-xl">Total quantity</h1>
        </div>
        <div class="container bg-blue-600 h-36 w-80 rounded-lg p-2 text-white">
            <h1 class="font-semibold text-xl">Produk Termahal</h1>
        </div>
        <div class="container bg-blue-600 h-36 w-80 rounded-lg p-2 text-white">
            <h1 class="font-semibold text-xl">Produk dengan Quantity Terbanyak</h1>
        </div>
    </div>
</x-layout>
