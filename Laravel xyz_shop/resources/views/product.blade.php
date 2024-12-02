<x-app-layout>

    <h2 class="font-semibold  mt-5 translate-x-16 mx-auto text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Product
    </h2>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">Add New Prodact</p>
                    <br>
                    <form action="{{url('insertProduct') }}" method="POST">
                        @csrf
                        <label for="">Product Name</label><br>
                        <input type="text" name="productName" placeholder="Product Name"
                            class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"><br>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 w-full p-2 rounded-xl ">Add Prodcut</button>
                    </form>
                </div>
            </div><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-black">List of Product</p>
                    <br>
                    <table class="w-full text-center">
                        <thead>
                            <tr class="text-lg">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>DATE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($products as $product)
                                <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->productName }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>
                                        <button class="bg-indigo-600 hover:bg-indigo-500 p-0.5 w-16 rounded-full text-base" type="button">Edit</button>
                                        <a href="{{ url('/products/' . $product->id . '/delete') }}"> <button class="bg-red-600 hover:bg-red-500 p-0.5 w-16 rounded-full text-base" >Delete</button> </a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
