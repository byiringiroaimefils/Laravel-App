<x-app-layout>
    {{-- <?php
    use App\Models\Products;

    $products = Products::all();
    
    ?> --}}
    <div class="container mx-16">
        <h2 class="font-semibold text-3xl  mt-5 dark:text-gray-200 leading-tight">
            Welcome to the Dashboard
        </h2>
        <p class=" text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quasi.</p>
    </div>

    <div class="py-20">
        <div class="flex flex-wrap gap-32 justify-center items-center px-5">
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl">Total Product</h2><br>
                    <p class="font-black text-5xl mt-5">20</p>
                </div>
            </div>
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl ">Stock In Product</h2><br>
                    <p class="font-black text-5xl mt-5">05</p>
                </div>
            </div>
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl ">Stock Out Product</h2><br>
                    <p class="font-black text-5xl mt-5">20</p>
                </div>
            </div>
        </div> <br><br><br>
    </div>
    <div class="text-center text-white bg-gray-900 py-5">
        {{-- <p> &#169;2024  xyz_Shop</p> --}}
    </div>
</x-app-layout>
