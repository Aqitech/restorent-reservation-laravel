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
                        <th scope="col" class="py-3 px-6">ID</th>
                        <th scope="col" class="py-3 px-6">Customer Name</th>
                        <th scope="col" class="py-3 px-6">Email</th>
                        <th scope="col" class="py-3 px-6">Contact Number</th>
                        <th scope="col" class="py-3 px-6">Reservation Data</th>
                        <th scope="col" class="py-3 px-6">Table</th>
                        <th scope="col" class="py-3 px-6">Number of Guests</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $reservation->id }}</th>
                        <td class="py-4 px-6">{{ $reservation->first_name ?? null }} {{ $reservation->last_name ?? null }}</td>
                        <td class="py-4 px-6">{{ $reservation->email }}</td>
                        <td class="py-4 px-6">{{ $reservation->tel_number }}</td>
                        <td class="py-4 px-6">{{ $reservation->res_date }}</td>
                        <td class="py-4 px-6">{{ $reservation->table_id }}</td>
                        <td class="py-4 px-6">{{ $reservation->guest_number }}</td>
                        <td class="py-4 px-6">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.reservations.show', $reservation->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>