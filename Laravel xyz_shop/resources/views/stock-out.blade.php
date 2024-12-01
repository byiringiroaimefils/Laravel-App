<x-app-layout>

    <h2 class="font-semibold  mt-5 translate-x-16 mx-auto text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Stock Out
    </h2>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">Add New Prodact</p>
                    <br>
                    <form action="">
                        <label for="">Product Name</label><br>
                        <select name="" id=""
                            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="">Select Product</option>
                            <option value="">Product A</option>
                            <option value="">Product B</option>
                            <option value="">Product C</option>
                        </select> <br>
                        <input type="date" name="date" placeholder="Enter date Out"
                        class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"><br>
                        <input type="text" name="product" placeholder="Quantity"
                            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"><br>
                        {{-- <input type="text" name="product" placeholder="Unit Price"
                            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"><br> --}}
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 w-full p-2 rounded-xl ">Add
                            Prodcut</button>
                    </form>
                </div>
            </div><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">List of Product Out</p>
                    <br>
                    <table class="w-full text-center">
                        <thead>
                            <tr class="text-lg">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                <td>01</td>
                                <td>Product A</td>
                                <td>20.00</td>
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
