<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:col-span-2 md:mt-0">
              <form action="{{ route('admin.reservations.store') }}" method="POST">
                @csrf
                <div class="overflow-hidden shadow sm:rounded-md">
                  <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" name="first_name" id="first_name" autocomplete="first_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" name="last_name" id="last_name" autocomplete="last_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="number" name="tel_number" id="tel_number" autocomplete="tel_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                        <input type="datetime-local" name="res_date" id="res_date" autocomplete="res_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="geust_number" class="block text-sm font-medium text-gray-700">Number of Guest</label>
                        <input type="number" name="geust_number" id="geust_number" autocomplete="geust_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="table_id" class="block text-sm font-medium text-gray-700">Select Table</label>
                        <select name="table_id" id="table_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="">Select Table</option>
                          @foreach($tables as $table)
                          <option value="{{ $table->id }}">{{ $table->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <a href="{{ route('admin.reservations.index') }}" class="inline-flex justify-center rounded-md border border-transparent outline outline-indigo-500 py-2 px-4 text-sm font-medium text-indigo shadow-sm hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</a>
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</x-admin-layout>
