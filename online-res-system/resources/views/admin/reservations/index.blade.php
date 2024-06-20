<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end p-2 m-2">
                <a href="{{ route('admin.reservations.create') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">New Reservation</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Table
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Guests
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->first_name }} {{ $reservation->last_name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->email }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->res_date }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->table->name}}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->guest_number }}
                                            </td>


                                               <td scope="col" class="relative px-6 py-3">
                                            <span class="">Edit</span>
                                        </td>
                                           <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                                        class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700">Edit</a>
                                                    <form
                                                        class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-700"
                                                        method="POST"
                                                        action="{{ route('admin.reservations.destroy', $reservation->id) }}"
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
            </div>
        </div>
    </div>
</x-admin-layout>
