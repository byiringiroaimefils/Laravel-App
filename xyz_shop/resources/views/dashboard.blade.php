<x-app-layout>
        <h2 class="font-semibold text-xl ml-5 md:translate-x-14 mx-auto mt-5 dark:text-gray-200 leading-tight">
          Dashboard.
        </h2>

    <div class="py-12">
        <div class="flex flex-wrap gap-32 justify-center items-center px-5">
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl uppercase">Product</h2><br>
                    <p class="font-black text-5xl mt-5">05</p>
                </div>
            </div>
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl uppercase">Stock In</h2><br>
                    <p class="font-black text-5xl mt-5">05</p>
                </div>
            </div>
            <div class="dark:bg-gray-800 w-full sm:w-80 h-60 shadow-sm sm:rounded-lg border-indigo-600 border-2">
                <div class="p-6 text-gray-900 flex flex-col justify-center items-center dark:text-gray-100">
                    <h2 class="font-black text-2xl uppercase">Stock Out</h2><br>
                    <p class="font-black text-5xl mt-5">20</p>
                </div>
            </div>
        </div> <br><br><br>
        <div class="dark:bg-gray-800 dark:text-white shadow-sm sm:rounded-lg mx-4 sm:mx-16 p-10">
           <div class="">  
               <h2 class="font-black uppercase text-xl">Current Inventory</h2>
           </div> <br><br>

            <table class="w-full text-center">
                <thead>
                    <tr class="text-lg">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>QUANTITY</th>
                        <th>PRICE</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody class="">
                        <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                            <td>01</td>
                            <td>Product A</td>
                            <td>20.00</td>
                            <td>4000.00</td>
                            <td>4000.00</td>
                        </tr>
                        <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                            <td>02</td>
                            <td>Product B</td>
                            <td>20.00</td>
                            <td>4000.00</td>
                            <td>4000.00</td>
                        </tr>
                        <tr class="text-lg hover:bg-slate-500/10">
                            <td>03</td>
                            <td>Product C</td>
                            <td>20.00</td>
                            <td>4000.00</td>
                            <td>4000.00</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center text-white">
        <p> &#169;2024  xyz_Shop</p>
    </div>
</x-app-layout>
