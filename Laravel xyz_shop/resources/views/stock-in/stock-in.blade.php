<x-app-layout>

    <h2 class="font-semibold  mt-5 translate-x-16 mx-auto text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Stock In
    </h2>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">Add New Product</p>
                    <br>
                    <form action="{{ route('productIn.store') }}" method="POST">
                        @csrf
                        <label for="productName">Product Name</label><br>
                        <input type="text" name="productName" placeholder="Product Name" required class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm"><br>
                        <label for="quantity">Quantity</label><br>
                        <input type="number" name="quantity" placeholder="Quantity" required class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm"><br>
                        <label for="unitPrice">Unit Price</label><br>
                        <input type="number" name="unitPrice" placeholder="Unit Price" required class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm"><br>
                        <label for="date">Date In</label><br>
                        <input type="date" name="date" required class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm"><br>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 w-full p-2 rounded-xl">Add Product</button>
                    </form>
                </div>
            </div><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">List of Product In</p>
                    <br>
                    <table class="w-full text-center">
                        <thead>
                            <tr class="text-lg">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>
                                <th>Total Price</th>
                                <th>Date In</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                <td>01</td>
                                <td>Product A</td>
                                <td>20.00</td>
                                <td>4000.00</td>
                                <td>16000.00</td>
                                <td>12-12-2024</td>
                                <td>
                                    <button class="bg-indigo-600 hover:bg-indigo-500 p-0.5 w-16 rounded-full text-base"
                                        type="button">Edit</button>
                                    <button class="bg-red-600    p-0.5 w-16 rounded-full text-base">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                <td>02</td>
                                <td>Product B</td>
                                <td>20.00</td>
                                <td>4000.00</td>
                                <td>16000.00</td>
                                <td>12-12-2024</td>

                                <td>
                                    <button
                                        class="bg-indigo-600 hover:bg-indigo-500 p-0.5 w-16 rounded-full text-base">Edit</button>
                                    <button class="bg-red-600  p-0.5 w-16 rounded-full text-base ">Delete</button>
                                </td>
                            </tr>
                            <tr class="text-lg hover:bg-slate-500/10">
                                <td>03</td>
                                <td>Product C</td>
                                <td>20.00</td>
                                <td>4000.00</td>
                                <td>16000.00</td>
                                <td>12-12-2024</td>

                                <td>
                                    <button
                                        class="bg-indigo-600 hover:bg-indigo-500 p-0.5 w-16 rounded-full text-base ">Edit</button>
                                    <button class="bg-red-600 p-0.5 w-16 rounded-full text-base ">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
