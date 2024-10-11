<x-layout>
    <x-slot:title>Daftar Produk</x-slot:title>

    @if (session()->has('success'))
        <div class="bg-lime-200 rounded-sm my-4 p-3">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="{{ route('daftar-produk.create') }}" class="rounded-md bg-blue-700 p-2 text-white">Add Product</a>
    <div class="container mx-auto mt-4 m-2">
        <table class="table-auto">
            <thead>
                <th class="px-4">ID</th>
                <th class="px-4">Product Name</th>
                <th class="px-4">Description</th>
                <th class="px-4">Retail Price</th>
                <th class="px-4">Wholesale Price</th>
                <th class="px-4">Origin</th>
                <th class="px-4">Quantity</th>
                <th class="px-4">Image</th>
                <th class="px-4">Created at</th>
                <th class="px-4">Updated at</th>
                <th class="px-4">Action</th>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->id }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->product_name }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->description }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->retail_price }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->wholesale_price }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->origin }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->quantity }}</td>
                    <td class="border-t-2 border-gray-300 p-4">
                        <img src="{{ $product->product_image ? Storage::url($product->product_image) : asset('img/no-image.jpg') }}" alt="No Product Image" class="w-20">
                    </td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->created_at }}</td>
                    <td class="border-t-2 border-gray-300 p-4">{{ $product->updated_at }}</td>
                    <td class="border-t-2 border-gray-300 p-4">
                        <a href="{{ route('daftar-produk.show', $product) }}" class="rounded-md bg-green-300 p-2 text-black">Detail</a>
                        <a href="{{ route('daftar-produk.edit', $product) }}" class="rounded-md bg-yellow-300 p-2 text-black">Edit</a>
                        <form action="{{ route('daftar-produk.destroy', $product) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="rounded-md bg-red-500 p-2 text-black" onclick="return confirm('Apakah anda yakin ingin menghapus produk {{ $product->product_name }}?')">Delete</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11">
                        <h1 class="mt-4 mx-auto text-3xl font-semibold">Tidak ada produk</h1>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="justify-center flex-auto">
            {!! $products->links() !!}
        </div>
    </div>
</x-layout>
