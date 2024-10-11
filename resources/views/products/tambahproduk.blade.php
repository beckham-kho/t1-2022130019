<x-layout>
    <x-slot:title>Tambah Data Produk</x-slot:title>
    <div class="mx-12">
        <form action="{{ route('daftar-produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-1/5">
                <label for="product_id" class="mt-2 block text-sm font-medium leading-6 text-gray-900">ID Produk</label>
                <div class="mt-2">
                    <input required type="text" name="id" id="product_id" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="product_name" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                <div class="mt-2">
                    <input required type="text" name="product_name" id="product_name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/2">
                <label for="description" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <input required type="text" name="description" id="description" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="retail_price" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Retail Price</label>
                <div class="mt-2">
                    <input required type="number" name="retail_price" id="retail_price" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="wholesale_price" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Wholesale Price</label>
                <div class="mt-2">
                    <input required type="number" name="wholesale_price" id="wholesale_price" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="origin" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Origin</label>
                <div class="mt-2">
                    <input required type="text" name="origin" id="origin" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="quantity" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                <div class="mt-2">
                    <input required type="number" name="quantity" id="quantity" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                </div>
            </div>
            <div class="w-1/5">
                <label for="product_image" class="mt-2 block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input @error('product_image') @enderror accept="image/*" type="file" name="product_image" id="product_image" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                    @error('product_image')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="mt-4 rounded-md bg-blue-700 p-2 text-white">Save</button>
        </form>
    </div>
</x-layout>
