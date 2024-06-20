<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end p-2 m-2">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-700">New Category</a>
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
                                            Image
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Description
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $category->name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <img src="{{ Storage::url($category->image) }}"
                                                    class="w-16 h-16 rounded">
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $category->description }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                        class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700">Edit</a>
                                                    <form
                                                        class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-700"
                                                        method="POST"
                                                        action="{{ route('admin.categories.destroy', $category->id) }}"
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
