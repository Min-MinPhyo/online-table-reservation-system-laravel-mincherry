<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Table Index</a>
            </div>
            <div class="p-2 m-2 rounded bg-slate-100">
                <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                    <form method="POST" action="{{ route('admin.tables.update',$table->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $table->name }}"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5" />
                            </div>
                         @error('name')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    value="{{ $table->guest_number }}"
                                    class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5 " />
                            </div>
                              @error('guest_number')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>



                        <div class="pt-5 sm:col-span-6">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="block w-full mt-1">
                                    @foreach(App\Enums\TableStatus::cases() as $status)
                                    <option value="{{ $status->value }}" @selected($table->status->value==$status->value)>
                                        {{ $status->name }}

                                    </option>
                                    @endforeach


                                </select>
                            </div>
                              @error('status')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="pt-5 sm:col-span-6">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="block w-full mt-1">
                                    @foreach(App\Enums\TableLocation::cases() as $location)
                                    <option value="{{ $location->value }}" @selected($table->location->value==$location->value)>
                                        {{ $location->name }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                              @error('location')
                          <div class="text-sm text-red-800">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="p-4 mt-6">
                            <button type="submit"
                                class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">Table
                                Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
