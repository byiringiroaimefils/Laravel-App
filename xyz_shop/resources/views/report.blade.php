<x-app-layout >
    <x-slot name="header" >
        <h2 id="print" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="print">
                    <p class="font-black text-base" id="printButton">Print Report</p><br>
                    <button id="print" class="bg-indigo-600 hover:bg-indigo-500 p-2 rounded-md font-extrabold " onclick="printReport()">Print
                        Report</button>
                </div>
            </div>
        </div> <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="dark:bg-gray-800 dark:text-white shadow-sm sm:rounded-lg p-2">
                    <div class="mt-2">
                        <h2 class="font-black text-base p-2">OverAll Inventory</h2>
                    </div> <br>
                    <table class="w-full text-center">
                        <thead>
                            <tr class="text-lg">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Product-In-Date </th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>Product-Out-Quantity </th>
                                <th>Product-Out-Date </th>

                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                <td>01</td>
                                <td>Product A</td>
                                <td>20.00</td>
                                <td>12-12-2024</td>
                                <td>4000.00</td>
                                <td>16.00</td>
                                <td>10</td>
                                <td>13-09-2024</td>
                            </tr>
                            <tr class="border-y-2 border-gray-600 text-lg hover:bg-slate-500/10">
                                <td>02</td>
                                <td>Product B</td>
                                <td>20.00</td>
                                <td>12-12-2024</td>
                                <td>4000.00</td>
                                <td>4000.00</td>
                                <td>13</td>
                                <td>13-09-2024</td>
                            </tr>
                            <tr class="text-lg hover:bg-slate-500/10">
                                <td>03</td>
                                <td>Product C</td>
                                <td>20.00</td>
                                <td>12-12-2024</td>
                                <td>4000.00</td>
                                <td>4000.00</td>
                                <td>4</td>
                                <td>13-09-2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printReport() {
            window.print();
        }
    </script>
</x-app-layout>
