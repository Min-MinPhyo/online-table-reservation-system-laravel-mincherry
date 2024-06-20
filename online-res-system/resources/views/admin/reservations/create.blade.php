<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Reservation Index</a>
            </div>
            <div class="p-2 m-2 rounded bg-slate-100">
                <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                    <form method="POST" action="{{ route('admin.reservations.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('first_name')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name </label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('last_name')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                      @error('email')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone number
                            </label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                                @error('tel_number')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation Date
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('res_date')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                              @error('guest_number')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="pt-5 sm:col-span-6">
                            <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="block w-full mt-1 form-multiselect">
                                 @foreach ($tables as $table)
                                        <option value="{{ $table->id }}">
                                            {{ $table->name }} ({{ $table->guest_number }}-Guests)

                                        </option>
                                    @endforeach
                                </select>
                            </div>
                              @error('table_id')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror


                        </div>

                        <div class="p-4 mt-6">
                            <button type="submit"
                                class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Store</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
