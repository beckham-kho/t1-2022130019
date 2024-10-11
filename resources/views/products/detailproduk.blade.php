<x-layout>
    <x-slot:title>Detail Produk - </x-slot:title>
    @if ($product->product_image)
        <img src="{{ $product->product_image_url }}" class=""/>
    @endif
    <div class="container mx-auto">
        <table class="table-auto mx-auto">
            <tbody>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">ID</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->id }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Product Name</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->product_name }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Description</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->description }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Retail Price</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->retail_price }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Wholesale Price</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->wholesale_price }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Origin</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->origin }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Quantity</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->quantity }}</td>
                </tr>
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Created at</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->created_at }}</td>
                </tr>
                @if ($product->updated_at)
                <tr>
                    <th scope="row" class="border-2 border-gray-300 p-1">Updated at</th>
                    <td class="border-2 border-gray-300 p-1">{{ $product->updated_at }}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
