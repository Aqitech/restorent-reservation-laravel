<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:col-span-2 md:mt-0">
              <form action="{{ route('admin.tables.update', $table->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="overflow-hidden shadow sm:rounded-md">
                  <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" autocomplete="name" value="{{ $table->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                        <input type="number" name="guest_number" id="guest_number" value="{{ $table->guest_number }}" autocomplete="guest_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                      <div class="col-span-6">
                        <label for="status" class="block text-sm font-medium text-gray-700">Select Status</label>
                        <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="">Select Status</option>
                          @foreach(App\Enums\TableStatus::cases() as $status)
                          <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-span-6">
                        <label for="location" class="block text-sm font-medium text-gray-700">Select Location</label>
                        <select name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="">Select Location</option>
                          @foreach(App\Enums\TableLocation::cases() as $location)
                          <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <a href="{{ route('admin.tables.index') }}" class="inline-flex justify-center rounded-md border border-transparent outline outline-indigo-500 py-2 px-4 text-sm font-medium text-indigo shadow-sm hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</a>
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</x-admin-layout>
