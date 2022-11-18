<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Add</a>
        </div>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Product name</th>
                        <th scope="col" class="py-3 px-6">Color</th>
                        <th scope="col" class="py-3 px-6">Category</th>
                        <th scope="col" class="py-3 px-6">Price</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple MacBook Pro 17"</th>
                        <td class="py-4 px-6">Sliver</td>
                        <td class="py-4 px-6">Laptop</td>
                        <td class="py-4 px-6">$2999</td>
                        <td class="py-4 px-6"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
