<div>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Add Product</h2>
            <form action="#" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="productName" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <input type="text" id="productName" name="productName" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="productDescription" class="block text-sm font-medium text-gray-700">Product Description</label>
                        <textarea id="productDescription" name="productDescription" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required></textarea>
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="price" name="price" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="stocks" class="block text-sm font-medium text-gray-700">Stocks</label>
                        <input type="number" id="stocks" name="stocks" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Add Product</button>
                </div>
            </form>
        </div>


        <div>
            <h2 class="text-2xl font-bold text-green-700 mb-4">Existing Products</h2>
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-green-100 text-green-700">
                    <tr>
                        <th class="border border-gray-300 p-2 text-left">Product Name</th>
                        <th class="border border-gray-300 p-2 text-left">Description</th>
                        <th class="border border-gray-300 p-2 text-left">Price</th>
                        <th class="border border-gray-300 p-2 text-left">Stocks</th>
                        <th class="border border-gray-300 p-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 p-2">Product 1</td>
                        <td class="border border-gray-300 p-2">Description of Product 1</td>
                        <td class="border border-gray-300 p-2">$10.00</td>
                        <td class="border border-gray-300 p-2">50</td>
                        <td class="border border-gray-300 p-2">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md shadow-sm hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md shadow-sm hover:bg-red-600">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
