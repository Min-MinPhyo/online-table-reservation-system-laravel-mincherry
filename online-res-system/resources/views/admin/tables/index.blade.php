
<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="flex justify-end p-2 m-2">

                <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">New Table</a>
            </div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Guest_Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($tables as $table)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">


            <td class="px-6 py-4 font-medium text-gray-900 test-sm whitespace-nowrap dark:text-white">
                {{ $table->name }}
            </td>



            <td class="px-6 py-4 font-medium text-gray-900 test-sm whitespace-nowrap dark:text-white">
                {{ $table->guest_number }}
            </td>





            <td class="px-6 py-4 font-medium text-gray-900 test-sm whitespace-nowrap dark:text-white">
                {{ $table->status->name}}
            </td>





            <td class="px-6 py-4 font-medium text-gray-900 test-sm whitespace-nowrap dark:text-white">
                {{ $table->location->name}}
            </td>


              <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.tables.edit', $table->id) }}"
                                                        class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700">Edit</a>
                                                    <form
                                                        class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-700"
                                                        method="POST"
                                                        action="{{ route('admin.tables.destroy', $table->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
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
    </div>
</x-admin-layout>
